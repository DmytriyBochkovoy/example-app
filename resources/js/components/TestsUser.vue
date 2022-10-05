<template>
    <section class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <TestCard v-for="(test, index) in testsArray" :key="index" :test="test"/>
        </div>
    </section>
</template>

<script>

import {isEmpty} from '../domains/helpers.js'
import TestCard from "./TestCard.vue";

export default {
    name: "TestsUser",

    components: {
        TestCard
    },

    computed: {
        testsArray () {
            return this.$store.getters['tests/getTests'];
        }
    },

    created() {
        if (isEmpty(this.testsArray)) {
            this.$store.dispatch("tests/getTests");
        }
    },
}
</script>

<style scoped>

</style>
