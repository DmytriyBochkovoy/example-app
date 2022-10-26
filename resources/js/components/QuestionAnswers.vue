<template>
    <div>
        <div v-for="(answer, index) in question.answers" :key="index">
            <div v-if="question.question_type === 'multiple'">
                <QuestionTypeCheckbox
                    :answer="answer"
                    :value="value"
                    @answer-changed="value = $event"
                />
            </div>
            <div v-else-if="question.question_type === 'single'">
                <QuestionTypeRadio
                    :answer="answer"
                    :value="value"
                    @answer-changed="value = $event"
                />
            </div>
        </div>
    </div>
</template>

<script>

import QuestionTypeCheckbox from "./question/QuestionTypeCheckbox.vue";
import QuestionTypeRadio from "./question/QuestionTypeRadio.vue";

export default {
    name: "QuestionAnswers",
    components: {
        QuestionTypeCheckbox,
        QuestionTypeRadio,
    },
    props: {
        question: {
            type: Object,
            required: true,
        },
        value: {
            type: [Object, Number],
        }
    },
    watch: {
        value() {
            this.$emit('answer-value', this.value);
        }
    },
}
</script>

<style scoped>

</style>
