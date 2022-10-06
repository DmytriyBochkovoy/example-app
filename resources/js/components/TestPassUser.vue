<template>
    <section class="container">
        <div>Go too!!!!!</div>
<!--        <form action="{{ route('answer-user') }}" method="POST">-->
<!--            <div class="row bg-light p-3 mt-3 mx-3 border border-bottom-0 border-info">-->
<!--                <div class="col-12">-->
<!--                    <span class="lead fw-bold ">{{$question->text}}</span>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row bg-light p-3 mb-3 mx-3 border border-top-0 border-info">-->
<!--                @if($question->question_type === \App\Enums\QuestionTypeEnum::MULTIPLE->value)-->
<!--                @foreach($question->answers as $answer)-->
<!--                <div class="col-12">-->
<!--                    <div class="form-check">-->
<!--                        <input type="checkbox"-->
<!--                               class="form-check-input"-->
<!--                               id="answer_{{$answer->id}}"-->
<!--                               name="answer_{{$answer->id}}"-->
<!--                               value="{{$answer->id}}">-->
<!--                        <label class="form-check-label" for="answer_{{$answer->id}}">{{$answer->text}}</label>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-12">-->
<!--                    <div class="form-check">-->
<!--                        <input type="radio"-->
<!--                               class="form-check-input"-->
<!--                               id="answer_{{$answer->id}}"-->
<!--                               name="answer_{{$answer->question_id}}"-->
<!--                               value="{{$answer->id}}">-->
<!--                        <label class="form-check-label" for="answer_{{$answer->id}}">{{$answer->text}}</label>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="text-center my-3">-->
<!--                <button type="submit" class="btn btn-success">Завершить тест</button>-->
<!--            </div>-->
<!--        </form>-->
    </section>
</template>

<script>
import {isEmpty} from "../domains/helpers";

export default {
    name: "TestPassUser",

    props: {
        id: {
            type: String,
            required: true,
        },
    },

    created() {
        if (isEmpty(this.testsArray)) {
            this.$store.dispatch("tests/getQuestionsTest", this.id);
        }
    },
}
</script>

<style scoped>

</style>
