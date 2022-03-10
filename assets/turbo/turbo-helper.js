import { Modal } from 'bootstrap';

const TurboHelper = class {
  constructor() {
    document.addEventListener('turbo:before-cache', () => {
      this.closeModal();
      this.closeSweetAlert();
    });

    document.addEventListener('turbo:before-render', () => {
      this.initializeWeatherWidget();
    });

    document.addEventListener('turbo:visit', () => {
      // fade out the old body
      document.body.classList.add('turbo-loading');
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

  initializeWeatherWidget() {
    document.querySelector('#weatherwidget-io-js').remove();
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
};

export default new TurboHelper();
