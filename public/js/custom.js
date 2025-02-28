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


// make invoice poge javascript



    function selectCustomer(name) {
        // Set the selected name into the input field
        document.getElementById('searchInput').value = name;
        document.getElementById('customer-name').textContent = name;

    }

