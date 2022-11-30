<template>
    <section class="container">
        <form
            @submit.prevent="postAnswerResult"
        >
            <div v-for="(question, index) in questions" :key="index">
                <div class="row bg-light p-3 mt-3 mx-3 border border-bottom-0 border-info">
                    <div class="col-12">
                        <span class="lead fw-bold ">{{ question.text }}</span>
                    </div>
                </div>
                <div class="row bg-light p-3 mb-3 mx-3 border border-top-0 border-info">
                    <QuestionAnswers
                        :question="question"
                        :value="formData[question.id]"
                        @answer-value="formData[question.id] = $event"
                    />
                </div>
            </div>
            <div class="text-center my-3">
                <button type="submit" class="btn btn-success">Завершить тест</button>
            </div>
        </form>
    </section>
</template>

<script>
import {isEmpty} from "../domains/helpers";
import QuestionAnswers from './QuestionAnswers.vue'

export default {
    name: "TestPassUser",

    components: {
        QuestionAnswers,
    },

    props: {
        id: {
            type: String,
            required: true,
        },
    },

    data() {
        return {
            formData: {},
        }
    },

    computed: {
        questions() {
            return this.$store.getters['tests/testQuestions'](this.id);
        }
    },

    methods: {
        postAnswerResult () {
            this.$store.dispatch("tests/postAnswerResult", this.formData);
            this.$router.push({name: 'testResult'});
        }
    },

    created() {
        this.$store.dispatch("tests/getQuestionsTest", this.id);
    },
}
</script>

<style scoped>

</style>
