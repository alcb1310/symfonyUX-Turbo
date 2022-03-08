import { Controller } from 'stimulus';

export default class extends Controller {
    static targets = ['input'];

    fillInField(event) {
        event.preventDefault();
        this.inputTarget.value = event.currentTarget.textContent;
    }
}
