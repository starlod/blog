<template>
    <textarea :v-model="value" :rows="rows"></textarea>
</template>

<script>
    export default {
        props: {
            value: String
        },
        data: function() {
            return {};
        },
        computed: {
            rows: function() {
                var num = this.value.split('\n').length;
                return (num > 3) ? num : 3;
            }
        },
    }
</script>
