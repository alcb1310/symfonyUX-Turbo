import { Controller } from 'stimulus';
import { visit, renderStreamMessage } from '@hotwired/turbo';
// import * as Turbo from '@hotwired/turbo';

export default class extends Controller {
    count = 0;
    static targets = ['count'];

    increment() {
        this.count++;
        this.countTarget.innerText = this.count;

        const streamMessage = `
      <turbo-stream action="update" target="flash-container">
        <template>
          <div class="alert alert-success">
            Thanks form clicking ${this.count} times!
          </div>
        </template>
      </turbo>
    `;

        renderStreamMessage(streamMessage);

        if (this.count == 10) {
            visit('/you-won');
        }
    }
}
