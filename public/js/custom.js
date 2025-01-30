document.addEventListener("DOMContentLoaded", function() {
    showLoader(); // Show loader immediately when the page starts loading

    window.onload = function() {
        hideLoader(); // Hide loader when the page fully loads
    };
});

function showLoader() {
    document.getElementById("loaderContainer").style.display = "flex";
}

function hideLoader() {
    document.getElementById("loaderContainer").style.display = "none";
}
