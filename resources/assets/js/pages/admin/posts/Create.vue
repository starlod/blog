<template>
    <div class="container">
        <div class="form-group">
            <input class="form-control" v-model.trim="title" placeholder="title...">
        </div>
        <div class="form-group">
            <autosize-textarea class="form-control" v-model="body" placeholder="body..." :rows="10"></autosize-textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-create" @click="store">投稿</button>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                title: '',
                body: ''
            }
        },
        methods: {
            store: function() {
                console.log(this.title);
                console.log(this.body);

                var post = {
                    'title': this.title,
                    'content': this.body
                };

                axios.post('/api/posts', this.post).then(res => {

                    // テストのため返り値をコンソールに表示
                    console.log(res.data.title);
                    console.log(res.data.content);
                });
            }
        }
    }
</script>
