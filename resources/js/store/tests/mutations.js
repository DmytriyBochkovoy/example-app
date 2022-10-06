export default {
    addTest(state, test) {
        state.tests.push(test);
    },
    addTestInCollection(state, test) {
        state.collection[test.id] = test;
    },
    addTestQuestionsInCollection(state, questions) {
        state.questions = questions;
        console.log(questions);
    },
}
