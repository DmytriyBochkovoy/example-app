<template>
    <div class="col-12">
        <div class="form-check">
            <input
                v-model="checkedAnswers"
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
    data () {
        return {
            value1: this.value,
        }
    },
    watch: {
        value1: {
            handle () {
                this.$emit('answer-changed', this._value);
            },
            deep: true,
        }
    }
}
</script>

<style scoped>

</style>
