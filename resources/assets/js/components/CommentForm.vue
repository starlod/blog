<template>
    <div class="comment-form">
        <h3>Comment Form</h3>
        <form class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-2 control-label" for="author_name">Name</label>
                <div class="col-sm-10">
                    <input id="author_name" type="text" v-model="comment.author_name" class="form-control" placeholder="Your name">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="author_url">URL</label>
                <div class="col-sm-10">
                    <input id="author_url" type="text" v-model="comment.author_url" class="form-control" placeholder="Your website URL">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="comment-body">Comment</label>
                <div class="col-sm-10">
                    <textarea id="comment-body" v-model="comment.body" class="form-control" placeholder="Your comment here"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button @click="store" class="btn btn-primary">コメントする</button>
                </div>
            </div>
        </form>
    </div>
</template>

<style lang="scss">
</style>

<script>
    export default {
        props: {
        },
        data() {
            return {
                comment: {
                    author_name: '',
                    author_url: '',
                    body: ''
                }
            }
        },
        mounted() {
        },
        methods: {
            store () {
                let url = '/api' + this.$route.path + '/comments';

                axios.post(url, this.comment).then(res => {
                    console.log('comment.success');
                });
            }
        }
    }
</script>
