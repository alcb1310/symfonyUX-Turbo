import { Controller } from 'stimulus';
import { Modal } from 'bootstrap';
import $ from 'jquery';
import { useDispatch } from 'stimulus-use';

export default class extends Controller {
    static targets = ['modal'];
    static values = {
        formUrl: String,
    };
    modal = null;

    connect() {
        useDispatch(this);
    }

    async openModal(event) {
        this.modal = new Modal(this.modalTarget);
        this.modal.show();
    }
}
