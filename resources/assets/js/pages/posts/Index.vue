<template>
    <div class="container posts">
        <div v-for="(item, index) in data" :key="item.id" class="panel panel-info">
            <div class="panel-heading">
                No.{{ index+1 }} {{ item.title }}
            </div>
            <div class="panel-body">
                {{ item.body }}
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
