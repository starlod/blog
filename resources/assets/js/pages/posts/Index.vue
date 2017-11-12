<template>
    <div class="container posts">
        <div v-for="(item, index) in items" class="panel panel-info">
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
                items: []
            }
        },
        mounted() {
            console.log('pages.posts.index');
            var self = this;

            axios.get(this.url).then(function (response) {
                let json = response.request.responseText;
                let data = JSON.parse(json);
                self.items = data['posts'];
                console.log(data['posts']);
            }).catch(function (error) {
                console.error(error);
            });
        }
    }
</script>
