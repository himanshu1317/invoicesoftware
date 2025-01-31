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




    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.getElementById("searchInput");
        const dropdownList = document.getElementById("dropdownList");
        const selectedCustomer = document.getElementById("selectedCustomer");
        const items = dropdownList.querySelectorAll(".dropdown-item:not(a)"); // Exclude "Add New Customer" link
        const addCustomerLink = document.getElementById("addCustomerLink");

        let selectedValue = ""; // Variable to store the selected value

        // Filter customer list on input
        searchInput.addEventListener("input", function() {
            const filter = this.value.toLowerCase();
            items.forEach(item => {
                if (item.textContent.toLowerCase().includes(filter)) {
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }
            });
        });

        // Select a customer
        items.forEach(item => {
            item.addEventListener("click", function() {
                selectedValue = this.textContent.trim(); // Capture the selected value
                selectedCustomer.textContent = selectedValue; // Update displayed text
                searchInput.value = ""; // Clear search input
                dropdownList.parentElement.classList.remove("show"); // Close dropdown
                console.log("Selected Customer:", selectedValue); // Log the selected value for debugging
            });
        });

        // Add New Customer functionality
        addCustomerLink.addEventListener("click", function(e) {
            e.preventDefault();
            alert("Redirect to 'Add New Customer' modal or page.");
        });

        // Example: Access the selected value elsewhere
        document.getElementById("dropdownToggle").addEventListener("click", function() {
            console.log("Currently Selected Customer:", selectedValue);
        });
    });


    // Function to calculate the row total and update the amount field
    function calculateRowAmount(row) {
        const qty = parseFloat(row.querySelector('.product-qty').value) || 0;
        const rate = parseFloat(row.querySelector('.product-rate').value) || 0;
        const amountField = row.querySelector('.product-amount');
        amountField.value = (qty * rate).toFixed(2); // Set row total
        calculateSubtotal(); // Recalculate the subtotal for all rows
    }

    // Function to calculate the subtotal for all rows
    function calculateSubtotal() {
        let subtotal = 0;
        const amountFields = document.querySelectorAll('.product-amount');
        amountFields.forEach(amountField => {
            subtotal += parseFloat(amountField.value) || 0; // Add each row's amount
        });
        document.getElementById('subtotal').textContent = subtotal.toFixed(2); // Update subtotal
        calculateTotal(); // Calculate the total after discount
    }

    // Function to calculate the total after discount
    function calculateTotal() {
        const subtotal = parseFloat(document.getElementById('subtotal').textContent) || 0;
        const discount = parseFloat(document.getElementById('discount').value) || 0;
        const unit = document.getElementById('unitSelect').value;

        let total = subtotal;

        // Apply discount logic
        if (unit === 'percentage') {
            const discountAmount = (subtotal * discount) / 100;
            total = subtotal - discountAmount;
        } else if (unit === 'rupees') {
            total = subtotal - discount;
        }

        // Update the total amount in the DOM
        document.getElementById('totalAmount').textContent = total.toFixed(2);

        const totalAmountInput = document.getElementById('totalAmountInput');
        totalAmountInput.value = total.toFixed(2);

    }

    // Event listener for input changes on quantity or rate fields
    document.addEventListener('input', function(e) {
        if (e.target.classList.contains('product-qty') || e.target.classList.contains('product-rate')) {
            const row = e.target.closest('tr');
            calculateRowAmount(row);
        }
    });

    // Add new row functionality
    document.getElementById('addRowButton').addEventListener('click', function() {
        const tableBody = document.querySelector('#dynamicTable tbody');
        const newRow = document.createElement('tr');
        newRow.innerHTML = `
            <td><input name="product_name[]" type="text" class="form-control" placeholder="Enter name"></td>
            <td><input name="quantity[]" type="number" class="form-control product-qty" placeholder="Enter quantity"></td>
            <td><input name="unit_price[]" type="number" class="form-control product-rate" placeholder="Enter rate"></td>
            <td><input name="total[]" type="number" class="form-control product-amount" readonly></td>
            <td><button type="button" class="btn btn-danger btn-sm delete-row">Remove</button></td>
        `;
        tableBody.appendChild(newRow);
    });

    // Delete row functionality
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('delete-row')) {
            const row = e.target.closest('tr');
            row.remove();
            calculateSubtotal(); // Recalculate the subtotal after row deletion
        }
    });

    // Event listeners for discount inputs
    document.getElementById('discount').addEventListener('input', calculateTotal);
    document.getElementById('unitSelect').addEventListener('change', calculateTotal);



