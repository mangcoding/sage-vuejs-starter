<template>
    <nav aria-label="page navigation font-secondary">
        <ul class="pagination justify-content-center">
            <li class="page-item" :class="{'disabled': currentPage == 1}">
                <a class="page-link d-flex btn-link font-secondary" @click="prev" tabindex="-1">
                    <svg-vue
                        icon="arrow-left-alt"
                        alt="Previous"
                        width="6px"
                        class="mr-2"
                    ></svg-vue> {{ $settings.previous_string }}
                </a>
            </li>
            <li class="page-item" v-for="page in totalPage" :key="page" :class="{active: page == currentPage}">
                <a class="page-link btn-link font-secondary" v-if="page == currentPage">{{page}} <span class="sr-only">(current)</span></a>
                <a class="page-link btn-link font-secondary" v-else @click="selectPage(page)">{{page}}</a>
            </li>
            <li class="page-item" :class="{'disabled': currentPage == totalPage}"> 
                <a class="page-link d-flex btn-link font-secondary" @click="next">
                    {{ $settings.next_string }} <svg-vue
                        icon="common-icons.arrow-right-alt"
                        alt="Next"
                        width="6px"
                        class="ml-2"
                    ></svg-vue>
                </a> 
            </li>
        </ul>
    </nav>
</template>

<script>
export default {
    props: {
        "next": { type: Function },
        "prev": { type: Function },
        "selectPage": { type: Function },
        "currentPage": Number,
        "totalPage": Number
    }
}
</script>