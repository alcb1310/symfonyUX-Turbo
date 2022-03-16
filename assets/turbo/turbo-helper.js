import { Modal } from 'bootstrap';

const TurboHelper = class {
    constructor() {
        document.addEventListener('turbo:before-cache', () => {
            this.closeModal();
            this.closeSweetAlert();
            this.reenableSubmitButtons();
        });

        document.addEventListener('turbo:visit', () => {
            // fade out the old body
            document.body.classList.add('turbo-loading');
        });

        document.addEventListener('turbo:submit-start', (event) => {
            const submitter = event.detail.formSubmission.submitter;
            submitter.toggleAttribute('disabled', true);
            submitter.classList.add('turbo-submit-disabled');
        });

        document.addEventListener('turbo:before-fetch-response', (event) => {
            this.beforeFecthResponse(event);
        });

        document.addEventListener('turbo:before-fetch-request', (event) => {
            this.beforeFetchRequest(event);
        });

        this.initializeTransitions();
    }

    closeSweetAlert() {
        // internal way to see if sweetalert2 has been imported yet
        if (__webpack_modules__[require.resolveWeak('sweetalert2')]) {
            import(/* webpackMode: 'weak' */ 'sweetalert2').then((Swall) => {
                if (Swall.default.isVisible()) {
                    Swall.default.getPopup().style.animationDuration = '0ms';
                    Swall.default.close();
                }
            });
        }
    }

    closeModal() {
        if (document.body.classList.contains('modal-open')) {
            const modalEl = document.querySelector('.modal');
            const modal = Modal.getInstance(modalEl);
            modalEl.classList.remove('fade');
            modal._backdrop._config.isAnimated = false;
            modal.hide();
            modal.dispose();
        }
    }

    reenableSubmitButtons() {
        document
            .querySelectorAll('.turbo-submit-disabled')
            .forEach((button) => {
                button.toggleAttribute('disabled', false);
                button.classList.remove('turbo-submit-disabled');
            });
    }

    isPreviewRendered() {
        return document.documentElement.hasAttribute('data-turbo-preview');
    }

    initializeTransitions() {
        document.addEventListener('turbo:before-render', (event) => {
            if (this.isPreviewRendered()) {
                // this is a preview that has been instantly swapped
                // remove .turbo-loading so the preview starts fully opaque
                event.detail.newBody.classList.remove('turbo-loading');
                // start fading out 1 frame later opacity starts full
                requestAnimationFrame(() => {
                    document.body.classList.add('turbo-loading');
                });
            } else {
                const isRestoration =
                    event.detail.newBody.classList.contains('turbo-loading');

                if (isRestoration) {
                    // this is a restoraion (back button).  Remove the class
                    // so it simply starts with full opacity
                    event.detail.newBody.classList.remove('turbo-loading');

                    return;
                }
                // when we are *about* to render, start us faded out
                document.body.classList.add('turbo-loading');
            }
        });

        document.addEventListener('turbo:render', () => {
            if (!this.isPreviewRendered) {
                // after rendering, we first allow the turbo-loadin class to set the low opacity
                // THEN, one frame later, we remove the turbo-loading class, which allows the fade in
                requestAnimationFrame(() => {
                    document.body.classList.remove('turbo-loading');
                });
            }
        });
    }

    beforeFecthResponse(event) {
        const fetchResponse = event.detail.fetchResponse;

        if (!fetchResponse.succeeded || !fetchResponse.redirected) {
            return;
        }

        if (
            !this.getCurrentFrame() ||
            !this.getCurrentFrame().dataset.turboFormRedirect
        ) {
            return;
        }

        event.preventDefault();
        Turbo.clearCache();
        Turbo.visit(fetchResponse.location);
    }

    getCurrentFrame() {
        return document.querySelector('turbo-frame[busy]');
    }

    beforeFetchRequest(event) {
        const frameId = event.detail.fetchOptions.headers['Turbo-Frame'];
        if (!frameId){
            return
        }

        const frame = document.querySelector(`#${frameId}`);

        if (!frame || !frame.dataset.turboFormRedirect) {
            return;
        }

        event.detail.fetchOptions.headers['Turbo-Frame-Redirect'] = 1;
    }
};

export default new TurboHelper();
