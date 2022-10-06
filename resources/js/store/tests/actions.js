import requestServerAPI from '../../api/requestServerAPI.js';

export default {
    getTests(context) {
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

    getQuestionsTest: function (context, id) {
        return requestServerAPI('get', `api/tests/test-question/${id}`)
            .then((response) => {
                return response.data;
            })
            .then((data) => {
                console.log(data.data);
                context.commit("addTestQuestionsInCollection", data.data);
            });
    },
};
