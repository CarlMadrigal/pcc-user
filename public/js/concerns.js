const popupConcern = document.getElementById('popupConcerns');
const popupConcernButton = document.getElementById('showPopupConcerns');
const popupConcernCloseButton = document.getElementById('closePopupConcerns');

function openConcernPopup() {
    popupConcern.classList.remove('hidden');
    popupConcern.classList.add('flex');
}

function closeConcernPopup() {
    popupConcern.classList.remove('flex');
    popupConcern.classList.add('hidden');
}

popupConcernButton.addEventListener('click', openConcernPopup);
popupConcernCloseButton.addEventListener('click', closeConcernPopup);