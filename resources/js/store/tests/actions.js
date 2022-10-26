import requestServerAPI from '../../api/requestServerAPI.js';
import axios from "axios";

export default {
    getTests (context) {
        requestServerAPI('get', 'api/tests/all')
            .then((response) => {
                return response;
            })
            .then((data) => {
                data.data.data.forEach((test) => {
                    context.commit("addTest", test);
                    context.commit('addTestInCollection', test);
                });
            });
    },

    getQuestionsTest (context, id) {
        return requestServerAPI('get', `api/tests/${id}/questions`)
            .then((data) => {
                data.data.data.forEach((question) => {
                    context.commit("addTestQuestions", question);
                    context.commit("addTestQuestionInCollection", { question, testId: id });
                });
            });
    },

    postAnswerResult (context, data) {
        return requestServerAPI('post', 'api/tests/answer/user', data)
            .then(function (response) {
                return response;
            })
            .catch(function (error) {
                console.log(error);
            });
    }
};
