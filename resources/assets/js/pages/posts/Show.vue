<template>
    <div class="container">
        <div class="post">
            <h1>{{ post.title }}</h1>
            <div>作成日: {{ post.created_at }}</div>
            <div>{{ post.body }}</div>
        </div>
        <comments></comments>
    </div>
</template>

<script>
    export default {
        props: {
        },
        data() {
            return {
                json: '',
                post: {},
                tags: {}
            }
        },
        mounted() {
            console.log('pages.posts.show');
            var self = this;

            axios.get('/api' + this.$route.path).then(function (response) {
                self.json = response.request.responseText;
                self.post = JSON.parse(self.json);
                console.log(self.post);
            }).catch(function (error) {
                console.error(error);
            });
        }
    }
</script>
