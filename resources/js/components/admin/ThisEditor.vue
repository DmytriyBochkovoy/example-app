<template>
    <div class="container-xxl">
        <div class="row">
            <div class="col-3 border border-1">
                <p>Меню</p>
                <ul>
                    <li>
                        <span>Редактироование тестов</span>
                    </li>
                    <li>
                        <span>Создать тест</span>
                    </li>
                </ul>
            </div>
            <div class="col-9 border border-1 border-start-0">
<!--                <div class="row text-center">-->
<!--                    <div-->
<!--                        @click=""-->
<!--                        class="col-4 border border-start-0 border-end-0 border-top-0"-->
<!--                    >-->
<!--                        Тесты-->
<!--                    </div>-->
<!--                    <div-->
<!--                        @click=""-->
<!--                        class="col-4 border border-top-0"-->
<!--                    >-->
<!--                        Вопросы-->
<!--                    </div>-->
<!--                    <div-->
<!--                        @click=""-->
<!--                        class="col-4 border border-start-0 border-end-0 border-top-0"-->
<!--                    >-->
<!--                        Ответы-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row">-->
<!--                    <div v-if="">-->
<!--                        <CreateTest></CreateTest>-->
<!--                    </div>-->
<!--                    <div v-if="">-->
<!--                        <CreateQuestion></CreateQuestion>-->
<!--                    </div>-->
<!--                    <div v-if="">-->
<!--                        <CreateAnswer></CreateAnswer>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
    </div>

</template>

<script>

import CreateTest from "./CreateTest.vue";
import CreateQuestion from "./CreateQuestion.vue";
import CreateAnswer from "./CreateAnswer.vue";
export default {
    name: "TestEditing",

    components: {
        CreateTest,
        CreateQuestion,
        CreateAnswer,
    },

    data() {
        return {
            isTestVisible: false,
            isQuestionVisible: false,
            isAnswerVisible: false,
        }
    },

    methods: {
        showCreateTest () {
            this.isTestVisible = true;
            return this.isTestVisible;
        }
    }
}
</script>

<style scoped>

</style>
