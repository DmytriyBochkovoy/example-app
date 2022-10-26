export default {
    addTest(state, test) {
        state.tests.push(test);
    },
    addTestInCollection(state, test) {
        state.collection[test.id] = test;
        state.testQuestionsCollection[test.id] = Array;
    },
    addTestQuestions(state, question) {
        state.questions.push(question);
    },
    addTestQuestionInCollection (state, { question, testId }) {
        if (!_.isArray(state.testQuestionsCollection[testId])) {
            state.testQuestionsCollection[testId] = [];
        }

        state.testQuestionsCollection[testId].push(question);
    }
    // resetQuestionsCollection(state, question) {
    //     state.questions = [];
    // },
}
