<template>
    <div>
        <button
            @click="logout"
            class="btn btn-danger"
            type="submit"
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
