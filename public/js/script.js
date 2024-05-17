// edit carabao popup
document.getElementById("editCarabao").addEventListener("click", function(){
    document.querySelector(".popupEditmyCarabao").style.display = "flex";
})

document.getElementById("closeEditCarabao").addEventListener("click", function(){
    document.querySelector(".popupEditmyCarabao").style.display = "none";
})

// edit feeds popup

document.getElementById("editfeeds").addEventListener("click", function(){
    document.querySelector(".popupEditfeeds").style.display = "flex";
})

document.getElementById("closeEditfeeds").addEventListener("click", function(){
    document.querySelector(".popupEditfeeds").style.display = "none";
})

const feedAmountInput = document.getElementById("feedAmount");
const feedAmountValue = document.getElementById("feedAmountValue");

feedAmountInput.addEventListener("input", function() {
    feedAmountValue.textContent = this.value + " lbs";
    feedAmountInput.setAttribute('value', this.value);
});

// edit water popup

document.getElementById("editwater").addEventListener("click", function(){
    document.querySelector(".popupEditwater").style.display = "flex";
})

document.getElementById("closeEditwater").addEventListener("click", function(){
    document.querySelector(".popupEditwater").style.display = "none";
})

const waterAmountInput = document.getElementById("waterAmount");
const waterAmountValue = document.getElementById("waterAmountValue");

waterAmountInput.addEventListener("input", function() {
    waterAmountValue.textContent = this.value + " gal";
    waterAmountInput.setAttribute('value', this.value);
});

// edit milk popup

document.getElementById("editmilk").addEventListener("click", function(){
    document.querySelector(".popupEditmilk").style.display = "flex";
})

document.getElementById("closeEditmilk").addEventListener("click", function(){
    document.querySelector(".popupEditmilk").style.display = "none";
})

const milkAmountInput = document.getElementById("milkAmount");
const milkAmountValue = document.getElementById("milkAmountValue");

milkAmountInput.addEventListener("input", function() {
    milkAmountValue.textContent = this.value + " liters";
    milkAmountInput.setAttribute('value', this.value);
});

// edit vitamin popup

document.getElementById("editvitamin").addEventListener("click", function(){
    document.querySelector(".popupEditvitamin").style.display = "flex";
})

document.getElementById("closeEditvitamin").addEventListener("click", function(){
    document.querySelector(".popupEditvitamin").style.display = "none";
})

const vitaminAmountInput = document.getElementById("vitaminAmount");
const vitaminAmountValue = document.getElementById("vitaminAmountValue");

vitaminAmountInput.addEventListener("input", function() {
    vitaminAmountValue.textContent = this.value + " ml";
    vitaminAmountInput.setAttribute('value', this.value);
});


// ---------

// Add event listeners to toggle checkboxes
// document.querySelectorAll('.checkbox').forEach(function(checkbox) {
//     checkbox.addEventListener('click', function() {
//         this.classList.toggle('checked');
//     });
// });
// document.querySelectorAll('.checkbox1').forEach(function(checkbox) {
//     checkbox.addEventListener('click', function() {
//         this.classList.toggle('checked');
//     });
// });
// document.querySelectorAll('.checkbox2').forEach(function(checkbox) {
//     checkbox.addEventListener('click', function() {
//         this.classList.toggle('checked');
//     });
// });
// document.querySelectorAll('.checkbox3').forEach(function(checkbox) {
//     checkbox.addEventListener('click', function() {
//         this.classList.toggle('checked');
//     });
// });
