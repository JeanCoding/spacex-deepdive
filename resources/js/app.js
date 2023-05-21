import './bootstrap';

// Haalt elementen op
const videoOverlay = document.querySelector('#video-overlay');
const playButton = document.querySelector('#play-button');
const video = document.querySelector('#video');

// Voeg een eventlistener toe aan de afspeelknop
if (playButton) {
    playButton.addEventListener('click', () => {
        videoOverlay.classList.toggle('hidden');
        video.classList.toggle('hidden'); 
    });
}

// Haalt elementen op voor het passenger information form

const hideContinueButton = document.querySelector('#hide-continue-button');
const buttonContinue = document.querySelector('#form-button-continue');
const buttonCertificate = document.querySelector('#form-button-certificate'); 
const hideCertificateButton = document.querySelector('#hide-certificate-button'); 

if (hideContinueButton) {
  // Voeg een eventlistener toe aan het element voor het verbergen van de doorgaanknop
  hideContinueButton.addEventListener('change', () => {
    const shouldHideCertificateButton = hideContinueButton.checked;
    buttonContinue.classList.toggle('hidden', shouldHideCertificateButton);
    buttonCertificate.classList.toggle('hidden', !shouldHideCertificateButton);
  });

  // Voeg een eventlistener toe aan het element voor het verbergen van de certificaatknop
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
  gradient.classList.remove('hidden'); // Verwijder de klasse 'hidden' van het gradient-element als er meer dan 4 elementen zijn geselecteerd
}
