<template>
    <div class="col my-3">
        <div class="card shadow-sm">
            <p class="btn btn-sm  bg-secondary fs-4 py-5">{{test.name}}</p>
            <div class="card-body">
                <p class="card-text">Описание теста: {{test.description}}</p>
                <div class="my-3">Количество вопросов в тесте: {{test.questions_count}}</div>
            </div>
            <div class="text-center">
                <div
                    v-if="auth() === true"
                >
                    <router-link
                        :to="{name: 'tests-user-id', params: {id: test.id}}"
                        class="fs-5 my-2 btn btn-sm btn-outline-success"
                    >
                        Пройти тест
                    </router-link>
                </div>
                <div
                    v-else
                >
                    <button
                        type="button"
                        class="fs-5 my-2 btn btn-sm btn-outline-success"
                        @click="showModal"
                    >
                        Пройти тест
                    </button>
                    <BaseModal
                        v-show="isModalVisible"
                        @close="closeModal"
                    >
                        <template
                            v-slot:body
                        >
                            <p
                                class="text-center fs-5 text-color-Success"
                            >
                                Для прохождение теста необходимо зарегистрироваться.
                            </p>
                        </template>
                        <template
                            v-slot:footer
                        >
                            <div class="text-center fs-5 mt-2">
                                <router-link
                                    class="w-100 btn btn-success"
                                    to="/registration"
                                >
                                    Зарегистрироваться
                                </router-link>
                            </div>
                        </template>
                    </BaseModal>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import BaseModal from "./ui/BaseModal.vue";
export default {
    name: "TestCard",

    components: {
        BaseModal,
    },

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

</style>
