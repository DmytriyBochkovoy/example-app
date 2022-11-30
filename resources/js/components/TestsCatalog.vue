<template>
    <section class="container">
        <div class="row mb-3">
            <div class="col-12">
                <p class="fs-5 text-dark">КАТАЛОГ ТЕСТОВ</p>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 underline by-5">
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
     .underline {
         border-bottom: 3px solid #000000;
         border-top: 3px solid #000000;
     }
</style>
