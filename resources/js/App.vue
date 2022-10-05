<template>
    <Header />
    <router-view />
</template>

<script>

import Header from "./components/ThisHeader.vue"

export default {
    name: "App",
    components: {
        Header
    }
}
</script>

<style scoped>

</style>
