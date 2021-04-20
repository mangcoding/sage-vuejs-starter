<template>
    <section>
        <div class="row">
            <div v-for="(item, index) in items" :key="index" class="col-md-4 my-3">
                <div class="item-blog">
                    <img :src="item.image" class="img-fluid" />
                    <a :href="item.link" class="h4">{{item.title}}</a>
                    <div v-html="item.excerpt"></div>
                </div>
            </div>
        </div>
        <div class="py-2 text-center">
            <b-button
                v-if="moreBtn"
                @click="moreData"
                variant="light"
                size="lg"
                class="btn-shadow btn-aqua btn-more mt-5"
                >View More
            </b-button>
        </div>
    </section>
</template>

<script>
import { BButton } from "bootstrap-vue";
import { mapGetters } from "vuex";
export default {
    data() {
        return {
            pageNo:1,
        }
    },
    components: {
        BButton,
    },
    computed: {
        ...mapGetters({
            items: "homepage/getData",
            moreBtn: "homepage/getMoreBtn",
        }),
    },
    methods: {
        moreData:function() {
            this.fetchData(++this.pageNo);
        },
        fetchData:function(page) {
            let formData = new FormData();
            formData.append("page",page);
            this.$store.dispatch("homepage/fetchData", formData);
        }
    },
    created() {
        let formData = new FormData();
        this.$store.dispatch("homepage/fetchData", formData);
    }, 
}
</script>