<template>
    <nav>
        <ul class="pagination justify-content-center" v-if="pagination.last_page > 1">
            <li @click="showFirst" :class="isStartPage ? 'disabled' : ''"><a>&laquo;</a></li>
            <li @click="showPrev" :class="isStartPage ? 'disabled' : ''"><a>&lt;</a></li>
            <li @click="showPage($index)" :class="page == $index ? 'active': ''" v-for="count in pageCount"><a>{{ $index + 1 }}</a></li>
            <li @click="showNext" :class="isEndPage ? 'disabled' : ''"><a>&gt;</a></li>
            <li @click="showLast" :class="isEndPage ? 'disabled' : ''"><a>&raquo;</a></li>
        </ul>
    </nav>
</template>

<script>

    export default {
        props: {
            pagination: {
                type: Object,
                required: true,
            }
        },
        data() {
            return {

            }
        },
        mounted() {
            console.log('pagination mounted.');
            console.log(this.pagination);
            console.log('pagination mounted.');
            // log(this.pagination);
        },
        computed: {
            dipsItems: function() {
                var startPage = this.page * this.dispItemSize;
                return this.data.slice(startPage, startPage + this.dispItemSize);
            },
            isStartPage: function() {
                return (this.page == 0);
            },
            isEndPage: function() {
                return ((this.page + 1) * this.dispItemSize >= this.data.length);
            },
            pageCount: function() {
                return Math.ceil(this.data.length / this.dispItemSize);
            }
        },
        methods: {
            showFirst: function() {
                this.page = 0;
            },
            showPrev: function() {
                if (this.isStartPage) return;
                this.page--;
            },
            showNext: function() {
                if (this.isEndPage) return;
                this.page++;
            },
            showLast: function() {
                this.page = Math.floor((this.data.length - 1) / this.dispItemSize);
            },
            showPage: function(index) {
                this.page = index;
            }
        }
    }
</script>
