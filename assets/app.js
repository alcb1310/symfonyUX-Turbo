/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';

import { Modal } from 'bootstrap';

document.addEventListener('turbo:before-cache', () => {
  if (document.body.classList.contains('modal-open')) {
    const modal = Modal.getInstance(document.querySelector('.modal'));

    modal.hide();
  }
});
