<template>
    <div class="container posts">
        <div class="row">
            <div class="col-sm-4" v-for="(item, index) in data" :key="item.id">
                <div class="panel panel-info" style="height: 200px;">
                    <div class="panel-heading">
                        <router-link :to="{ name: 'posts.show', params: { id: item.id }}">No.{{ item.id }} {{ item.title }}</router-link>
                    </div>
                    <div class="panel-body">
                        {{ item.body }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
        },
        data() {
            return {
                url: '/api/posts',
                json: '',
                pagination: {},
                data: []
            }
        },
        mounted() {
            console.log('pages.posts.index');
            var self = this;

            axios.get(this.url).then(function (response) {
                self.json = response.request.responseText;
                self.paginate = JSON.parse(self.json);
                log(self.paginate);
                self.data = self.paginate['data'];
            }).catch(function (error) {
                console.error(error);
            });
        }
    }
</script>
