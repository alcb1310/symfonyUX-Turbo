import { Controller } from 'stimulus';

export default class extends Controller {
    connect() {
        //    console.log('cloud');
        if (typeof __weatherwidget_init === 'function') {
            __weatherwidget_init();
        } else {
            this.initializeScriptTag(document, 'script', 'weatherwidget-io-js');
        }
    }

    initializeScriptTag(d, s, id) {
        var js,
            fjs = d.getElementsByTagName(s)[0];
        if (!d.getElementById(id)) {
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://weatherwidget.io/js/widget.min.js';
            fjs.parentNode.insertBefore(js, fjs);
        }
    }
}
