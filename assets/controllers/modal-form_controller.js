import { Controller } from 'stimulus';
import { Modal } from 'bootstrap';
import * as Turbo from '@hotwired/turbo';

export default class extends Controller {
    static targets = ['modal'];
    modal = null;

    connect() {
        this.boundBeforeFetchResponse = this.beforeFecthResponse.bind(this);
        document.addEventListener(
            'turbo:before-fetch-response',
            this.boundBeforeFetchResponse
        );
    }

    disconnect() {
        document.removeEventListener(
            'turbo:before-fetch-response',
            this.boundBeforeFetchResponse
        );
    }

    async openModal(event) {
        this.modal = new Modal(this.modalTarget);
        this.modal.show();
    }

    beforeFecthResponse(event) {
        if (!this.modal || !this.modal._isShown) {
            return;
        }

        const fetchResponse = event.detail.fetchResponse;

        if (fetchResponse.succeeded && fetchResponse.redirected) {
            event.preventDefault();
            Turbo.visit(fetchResponse.location);
        }
    }
}
