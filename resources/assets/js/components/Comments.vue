<template>
    <div class="comments">
        <h2>Comments</h2>

        <div class="comment" v-for="comment in comments" :key="comment.id">
            <div class="comment-author">
                <i class="fa fa-user" aria-hidden="true"></i>
                <b>{{ comment.author_name }}</b>
                <span>{{ comment.created_at }}</span>
            </div>
            <div class="comment-body">{{ comment.body }}</div>
        </div>
    </div>
</template>

<style lang="scss">
.comments {
    margin: 20px 0;
    padding: 20px 20px 20px 20px;
    background-color: #eee;
}
.comment {
    margin-bottom: 20px;
}
</style>

<script>
    export default {
        props: {
            postId: Number
        },
        data() {
            return {
                json: '',
                comments: {}
            }
        },
        mounted() {
            console.log('components.comments');
            var self = this;
            let url = '/api' + this.$route.path + '/comments';

            console.log('axios.get ' + url);

            axios.get(url).then(function (response) {
                self.json = response.request.responseText;
                self.comments = JSON.parse(self.json);
            }).catch(function (error) {
                console.error(error);
            });
        }
    }
</script>
