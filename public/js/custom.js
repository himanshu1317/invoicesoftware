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



    document.addEventListener("DOMContentLoaded", function () {
        // Function to calculate the row total and update the amount field
        function calculateRowAmount(row) {
            const qty = parseFloat(row.querySelector('.product-qty').value) || 0;
            const rate = parseFloat(row.querySelector('.product-rate').value) || 0;
            const discount = parseFloat(row.querySelector('.row-discount').value) || 0;
            const discountType = row.querySelector('.row-discount-type').value;
            const amountField = row.querySelector('.product-amount');
    
            if (qty < 0 || rate < 0 || discount < 0) {
                Swal.fire({ icon: 'warning', title: 'Invalid Input', text: 'Values must be positive.' });
                row.querySelector('.product-qty').value = Math.max(0, qty);
                row.querySelector('.product-rate').value = Math.max(0, rate);
                row.querySelector('.row-discount').value = Math.max(0, discount);
                return;
            }
    
            let rowTotalOriginal = qty * rate; // Original total (without discount)
            let rowTotalWithDiscount = rowTotalOriginal;
    
            // Apply row discount
            if (discountType === 'percentage') {
                rowTotalWithDiscount -= (rowTotalOriginal * discount) / 100;
            } else if (discountType === 'rupees') {
                rowTotalWithDiscount -= discount;
            }
    
            amountField.value = rowTotalWithDiscount.toFixed(2); // Display the discounted amount
            calculateSubtotal(); // Update subtotal with discount applied
        }
    
        // Function to calculate the subtotal for all rows
        function calculateSubtotal() {
            let subtotal = 0;
            document.querySelectorAll('.product-amount').forEach(amountField => {
                const rowTotalWithDiscount = parseFloat(amountField.value) || 0;
                subtotal += rowTotalWithDiscount; // Add the discounted row total
            });
    
            // Update the total amount and subtotal fields
            document.getElementById('subtotal').textContent = subtotal.toFixed(2); // Show subtotal after row discounts
            document.getElementById('totalAmount').textContent = subtotal.toFixed(2); // Show total including discounts
            document.getElementById('totalAmountInput').value = subtotal.toFixed(2); // Hidden input for total
        }
    
        // Functionality to add new rows dynamically with discount
        document.getElementById('addRowButton').addEventListener('click', function () {
            const tableBody = document.querySelector('#dynamicTable tbody');
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td><input name="product_name[]" type="text" class="form-control" placeholder="Enter name"></td>
                <td><input name="quantity[]" type="number" class="form-control product-qty" placeholder="Enter quantity" min="0"></td>
                <td><input name="unit_price[]" type="number" class="form-control product-rate" placeholder="Enter rate" min="0"></td>
               
                <!-- Discount Field -->
                <td>
                    <div class="input-group">
                        <input type="number" name="row_discount[]" class="form-control row-discount w-75" placeholder="Discount" min="0">
                        <select class="form-select row-discount-type w-25">
                            <option value="percentage">%</option>
                            <option value="rupees">₹</option>
                        </select>
                    </div>
                </td>
     <td><input name="total[]" type="number" class="form-control product-amount" readonly></td>
    
                <td><button type="button" class="btn btn-danger btn-sm delete-row">Remove</button></td>
            `;
            tableBody.appendChild(newRow);
        });
    
        // Event listener for input changes in quantity, rate, and discount fields
        document.addEventListener('input', function (e) {
            if (
                e.target.classList.contains('product-qty') || 
                e.target.classList.contains('product-rate') || 
                e.target.classList.contains('row-discount')
            ) {
                calculateRowAmount(e.target.closest('tr'));
            }
        });
    
        // Event listener for select changes (discount type)
        document.addEventListener('change', function (e) {
            if (e.target.classList.contains('row-discount-type')) {
                calculateRowAmount(e.target.closest('tr'));
            }
        });
    
        // Event listener for deleting rows
        document.addEventListener('click', function (e) {
            if (e.target.classList.contains('delete-row')) {
                e.target.closest('tr').remove();
                calculateSubtotal();
            }
        });
    });
    





    // paymanet deitails


    // end paymanetr deilatids