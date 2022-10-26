<template>
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
            <label class="form-check-label"
                   :for="'answer_' + answer.id">{{ answer.text }}</label>
        </div>
    </div>
</template>

<script>
export default {
    name: "QuestionTypeCheckbox",
    props: {
        answer: {
            type: Object,
            required: true,
        },
        value: {
            type: [Array],
            default: () => [],
        },
    },
    watch: {
        value() {
            this.$emit('answer-changed', this.value);
        }
    }
}
</script>

<style scoped>

</style>
