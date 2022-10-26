export default {
    getTests (state) {
        return state.tests;
    },
    testQuestions (state) {
        return testId => state.testQuestionsCollection[testId];
    }

}
