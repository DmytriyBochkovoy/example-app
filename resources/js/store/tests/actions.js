import requestServerAPI from '../../api/requestServerAPI.js';

export default {
    getTests(context) {
        requestServerAPI('get', 'api/tests/all')
            .then((response) => {
                return response;
            })
            .then((data) => {
                console.log(data);
                data.data.data.forEach((test) => {
                    context.commit("addTest", test);
                });
            });
    },

    getTest: function (context, id) {
        return requestServerAPI('get', `test/showApi/${id}`)
            .then((response) => {
                return response.data;
            })
            .then((data) => {
                context.commit("getTestsInCollection", data.data);
            });
    },
};
