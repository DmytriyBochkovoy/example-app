import axios from "axios";

const SERVER_PROTOCOL = 'http:';
const SERVER_HOST = 'localhost';

export default function requestServerAPI(method, route, data = null)
{
    const url = `${SERVER_PROTOCOL}//${SERVER_HOST}/${route}`;

    const _options = {
        method,
        url,
        // headers,
    };

    _options.data = data;

    return new Promise((resolve, reject) => {
        request(
            _options,
            {
                resolve,
                reject,
            },
        );
    });
}

function request(options, {resolve}) {
    return axios(options).then((response) => {
        return resolve(response);
    });
}
