<template>
    <div>
        <div v-for="(answer, index) in question.answers" :key="index">
            <div v-if="question.question_type === 'multiple'">
                <div class="col-12">
                    <div class="form-check">
                        <input
                            v-model="value"
                            type="checkbox"
                            class="form-check-input"
                            :id="'answer_' + answer.id"
                            :name="'answer_' + answer.question_id"
                            :value="answer.id"
                        />
                        <label class="form-check-label fs-5"
                               :for="'answer_' + answer.id">{{index + 1}}. {{ answer.text }}</label>
                    </div>
                </div>
            </div>
            <div v-else-if="question.question_type === 'single'">
                <div class="col-12">
                    <div class="form-check">
                        <input
                            v-model="value"
                            type="radio"
                            class="form-check-input"
                            :id="'answer_' + answer.id"
                            :name="'answer_' + answer.question_id"
                            :value="answer.id"
                        />
                        <label class="form-check-label fs-5"
                               :for="'answer_' + answer.id">{{index + 1}}. {{ answer.text }}</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    name: "QuestionAnswers",

    props: {
        question: {
            type: Object,
            required: true,
        },
        value: {
            type: [Array, Number],
            default: [],
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
