import './bootstrap';

const videoOverlay = document.querySelector('#video-overlay');
const playButton = document.querySelector('#play-button');
const video = document.querySelector('#video');

if (playButton) {
    playButton.addEventListener('click', () => {
        videoOverlay.classList.toggle('hidden');
        video.classList.toggle('hidden');
    });
}

const hideContinueButton = document.querySelector('#hide-continue-button');
const buttonContinue = document.querySelector('#form-button-continue');
const buttonCertificate = document.querySelector('#form-button-certificate');
const hideCertificateButton = document.querySelector('#hide-certificate-button');

if (hideContinueButton) {
  hideContinueButton.addEventListener('change', () => {
    const shouldHideCertificateButton = hideContinueButton.checked;
    buttonContinue.classList.toggle('hidden', shouldHideCertificateButton);
    buttonCertificate.classList.toggle('hidden', !shouldHideCertificateButton);
  });

  hideCertificateButton.addEventListener('change', () => {
    const shouldHideContinueButton = hideCertificateButton.checked;
    buttonCertificate.classList.toggle('hidden', shouldHideContinueButton);
    buttonContinue.classList.toggle('hidden', !shouldHideContinueButton);
  });
}

const cardsCount = document.querySelectorAll('.card');
const gradient = document.querySelector('.blue-gradient');
console.log(cardsCount.length);

if (cardsCount.length > 4) {
  gradient.classList.remove('hidden');
}