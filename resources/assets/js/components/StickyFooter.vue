<template>
    <footer class="footer">
        Blog
    </footer>
</template>

<style lang="scss">
    // スティッキーフッター
    body {
        display: flex;
        margin: 0;
    }

    #app {
        flex: 1 1 auto;
        display: flex;
        flex-flow: column nowrap;
        min-height: 100vh;
    }

    main {
        flex: 1 1 auto;
    }

    // footer layout
    footer {
        background-color: #80273f;
        height: 180px;
        text-align: center;
        line-height: 50px;
        color : #fff;
        margin-top:30px;
    }
</style>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
