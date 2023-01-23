<template>
    <div>
        <button
            @click="logout"
            class="nav-link text-color" type="submit"
        >
            Выйти
        </button>
    </div>
</template>

<script>
export default {
    name: "Logout",

    methods: {
        logout() {
            this.$store.dispatch("users/logout");
        }
    }
}
</script>

<style scoped>

</style>
