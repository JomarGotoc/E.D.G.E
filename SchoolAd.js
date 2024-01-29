function showPopup() {
    var popup = document.getElementById("myPopup");
    popup.style.display = "block";
}

// Function to close the popup
function closePopup() {
    var popup = document.getElementById("myPopup");
    popup.style.display = "none";
}

// Attach a click event listener to the add-btn
document.getElementById("add-btn").addEventListener("click", function (event) {
    event.preventDefault(); // Prevent the form from submitting (if it's inside a form)
    showPopup();
});

// Attach a click event listener to the OK button inside the popup
document.getElementById("myPopup").addEventListener("click", function (event) {
    if (event.target.tagName === "BUTTON") {
        closePopup();
    }
});