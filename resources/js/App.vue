<template>
    <Header />
    <router-view />
    <Footer />
</template>

<script>

import Header from "./components/ThisHeader.vue"
import Footer from "./components/ThisFooter.vue"

export default {
    name: "App",
    components: {
        Header,
        Footer,
    }
}
</script>

<style scoped>

</style>
