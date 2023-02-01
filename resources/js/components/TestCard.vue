<template>
    <div class="col my-3">
        <div class="card card-background-color text-white">
            <p class=" text-center fs-4 py-5 text-white">{{test.name}}</p>
            <div class="card-body">
                <p class="card-text">Описание теста: {{test.description}}</p>
                <div class="my-3">Количество вопросов в тесте: {{test.questions_count}}</div>
            </div>
            <div class="text-center">
                <div>
                    <router-link
                        :to="{name: 'tests-user-id', params: {id: test.id}}"
                        class="fs-5 my-2 btn btn-sm btn-outline-light"
                    >
                        Пройти тест
                    </router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
// import BaseModal from "./ui/BaseModal.vue";
export default {
    name: "TestCard",

    props: {
        test: {
            type: Object,
            required: true,
        },
    },

    data () {
        return {
            isModalVisible: false,
        };
    },

    methods: {
        auth() {
            return this.$store.getters['users/authenticated'];
        },
        showModal() {
            this.isModalVisible = true;
        },
        closeModal() {
            this.isModalVisible = false;
        }
    },
}
</script>

<style scoped>
.card-background-color {
    background: rgb(26,154,127);
    background: linear-gradient(90deg, rgba(26,154,127,1) 0%, rgba(39,125,139,1) 100%);
}
.card {
    border-radius: 10px;
}
</style>
