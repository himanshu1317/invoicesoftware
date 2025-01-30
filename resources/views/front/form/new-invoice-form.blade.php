@extends('front.masterpage')
@section('content')


<div class="container p-3 ">

    <div class="row my-3">
        <div class="col-12">
            <div class="card card-body">
                <div class="d-md-flex align-items-center justify-content-between">
                    <div class="media align-sm-items-center">

                        <div class="media-body mg-l-15">
                            <div class="d-flex align-items-baseline">
                                <div class="dropdown ">
                                    <a class="btn  dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Active Customers
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">All Customers</a>
                                        <a class="dropdown-item" href="#">Active Customers </a>
                                        <a class="dropdown-item" href="#">Duplicate Customers</a>
                                        <a class="dropdown-item" href="#">Inactive Customers</a>
                                        <a class="dropdown-item" href="#">Customer Portal Enable</a>
                                        <a class="dropdown-item" href="#">Customer Portal Desable</a>
                                        <a class="dropdown-item" href="#">Overdue Customers</a>
                                        <a class="dropdown-item" href="#">Unpaid Customers</a>
                                        <a class="dropdown-item" href="#">New Customers View</a>


                                    </div>
                                </div>

                            </div>
                        </div><!-- media-body -->
                    </div><!-- media -->
                    <div class="d-flex flex-column flex-sm-row mg-t-20 mg-md-t-0">

                        <button class="btn btn-sm btn-white btn-uppercase pd-x-15 mg-t-5 mg-sm-t-0 mg-sm-l-5"> Share</button>
                        <button class="btn btn-sm btn-white btn-uppercase pd-x-15 mg-t-5 mg-sm-t-0  mg-sm-l-5"> Watch</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="{{ route('customer.invoices') }}" method="POST">
        @csrf

        <div class="row p-4 bg-light bg-gradient">
            <div class="col-sm-2 my-auto text-danger">
                Custome Name <span>*</span>
            </div>
            <div class="col-sm-5 my-auto">
                <div class="container">
                    <div class="ac-container">
                        <div class="ac-wrapper">
                            <div class="dropdown">
                                <div class="ac-box" id="dropdownToggle" data-bs-toggle="dropdown" aria-expanded="false" role="combobox" aria-haspopup="listbox">
                                    <span id="customer-name" class="placeholder-text">Select or add a customer</span>
                                    <span></span>
                                    <div class="ac-toggle-container">
                                        <i class="zf-ac-toggler"></i>
                                    </div>
                                </div>
                                <div class="dropdown-menu" aria-labelledby="dropdownToggle">
                                    <input
                                        value=""
                                        name="customer_name"
                                        type="text"
                                        id="searchInput"
                                        class="search-input"
                                        placeholder="Search customers...">

                                    <ul id="dropdownList" class="list-unstyled m-0 p-0">
                                        @foreach ($formdata as $cdata)
                                        <li class="dropdown-item" onclick="selectCustomer('{{ $cdata->name }}', '{{ $cdata->id }}')">
                                            {{ $cdata->name }}
                                            <input hidden name="customer_id" value="{{ $cdata->id }}" type="text">
                                        </li>
                                        @endforeach
                                        <li class="dropdown-item">
                                            <a href="#">Add New Customer</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @error('customer_name')
                    <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>




        <div class="row mt-2">
            <div class="primary-content" id="primary-content">
                <!-- Invoice Number Field -->
                <div class="form-group">
                    <div class="row ms-3">
                        <label class="col-form-label col-lg-2 required" for="invoice_number">Invoice#</label>
                        <div class="table-container col-lg-4 position-relative">
                            <input type="text" id="invoice_number" name="invoice_number" class="form-control" value="{{ $inv_data}}" readonly>
                            @error('invoice_number')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- Invoice Date Field -->
                <div class="form-group">
                    <div class="row ms-3 text-danger">
                        <label class="col-form-label col-lg-2 required" for="invoice_date">Invoice Date</label>
                        <div class="col-lg-4">
                            <input
                                name="invoice_date"
                                placeholder="dd/mm/yyyy"
                                id="invoice_date"
                                class="form-control"
                                type="date"
                                value="{{ old('invoice_date') }}">
                            @error('invoice_date')
                            <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Invoice Term Dropdown -->


                        <!-- Due Date Field -->
                        <div class="col-lg-1">
                            <p class="form-control-plaintext">Due Date</p>
                        </div>
                        <div class="col-lg-2">
                            <input
                                name="due_date"
                                placeholder="dd/mm/yyyy"
                                id="due_date"
                                class="form-control"
                                type="date"
                                value="{{ old('due_date') }}">
                            @error('due_date')
                            <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row p-5">
            <table class="table table-bordered" id="dynamicTable">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Item Details</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Rate</th>
                        <th scope="col">Amount</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input name="product_name[]" type="text" class="form-control" placeholder="Enter name"></td>
                        <td><input name="quantity[]" type="number" class="form-control product-qty" placeholder="Enter quantity"></td>
                        <td><input name="unit_price[]" type="number" class="form-control product-rate" placeholder="Enter rate"></td>
                        <td><input name="total[]" type="number" class="form-control product-amount" readonly></td>
                        <td><button type="button" class="btn btn-danger btn-sm delete-row">Delete</button></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-primary w-25" id="addRowButton">Add New Item</button>

            <div class="mt-4">
                <!-- <label>Subtotal: ₹<span id="subtotal">0.00</span></label> -->
            </div>

            <div class="mt-3">
                <!-- <label>Total after Discount: ₹<span id="totalAmount">0.00</span></label> -->
            </div>




            <div class="row">
                <div class="row p-4 ">
                    <div class="add-line-item col-lg-5 d-flex flex-column">
                        <div class="pt-7 ">
                            <div class="mb-2">Customer Notes <!----></div>
                            <div><textarea rows="2" aria-label="Customer Notes" name="customer_note" id="ember183" class="ember-text-area ember-view form-control"></textarea>
                                <div class="form-check form-check-inline pt-2 d-none"><input name="customer_notes" id="abbd92527" class="ember-checkbox ember-view form-check-input" type="checkbox"> <label for="abbd92527" class="form-check-label"><span class="hightlight">Use this in future for all invoices of all customers.</span></label></div> <small class="form-text fw-light font-xs ">Will be displayed on the invoice</small>
                            </div>
                        </div>

                    </div>
                    <div class="invoice-discount ms-auto col-lg-6 px-0  me-4">
                        <div class="total-section rounded-xlg px-4 py-3 " id="total-section">
                            <div id="ember185" class="ember-view">
                                <div id="ember186" class="ember-view">
                                    <div id="ember187" class="ember-view collapse show">
                                        <div class="total-row sub-total text-semibold ">
                                            <div class="total-label">Sub Total <!----> <br> <!----><!----></div>
                                            <div class="total-amount text-semibold">
                                                <label>₹<span id="subtotal">0.00</span></label>
                                            </div>
                                        </div>
                                        <div class="total-row">
                                            <div class="total-row">
                                                <div class="total-label">
                                                    <div class="row">
                                                        <div class="col-lg-5 col-sm-5 col-5">
                                                            <div class="form-control-plaintext">Discount <!----><!---->
                                                                <span class="d-none ms-1" data-annotation-id="discount">
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="input-group mt-3">
                                                            <input type="number" name="discount" id="discount" class="form-control" placeholder="Enter discount">
                                                            <div class="input-group-append">
                                                                <select class="form-select" id="unitSelect">
                                                                    <option value="percentage">%</option>
                                                                    <option value="rupees">₹</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <!---->
                                                    </div>
                                                </div>
                                                <div class="total-amount" style="line-height: 2;"></div>
                                            </div> <!---->
                                        </div><!---->
                                        <hr class="my-4 d-none"> <!----> <!----> <!----> <!----> <!---->
                                        <div id="ember190" class="ember-view"><!----></div> <!----> <!---->
                                        <div class="total-row">
                                            <div class="total-row">
                                                <div class="total-label">
                                                    <div class="row">
                                                        <div class="col-lg-5 col-sm-5 col-5">
                                                            <div class="form-control-plaintext">Tax <!----><!---->
                                                                <span class="d-none ms-1" data-annotation-id="discount">
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="input-group">
                                                            <input type="number" id="inputValue" class="form-control" placeholder="Enter value">
                                                            <div class="input-group-append">
                                                                <select class="form-select" id="unitSelect">
                                                                    <option value="percentage">%</option>
                                                                    <option value="rupees">₹</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <!---->
                                                    </div>
                                                </div>
                                                <div class="total-amount" style="line-height: 2;"></div>
                                            </div> <!---->
                                        </div>
                                    </div> <!---->
                                </div>
                                <div class="total-row gross-total mt-3  quick-total" style="border-top: 1px solid #eee;">
                                    <div class="total-label">Total ( ₹ ) <!----></div>
                                    <div class="total-amount">
                                        <span id="totalAmount">0.00</span>
                                        <input name="total_amount" hidden type="text" value="" id="totalAmount">

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div> <!----><!---->
                </div>
            </div>

        </div>

        <!-- 
<div class="btn btn-primary">Add New Row</div>


<div class="btn btn-primary">Add Item in Bulk   </div> -->


</div>

<div class="container">
    <div class="row p-4">
        <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">

            <div class="d-none d-md-block">
                <a href="#" class="btn btn-sm pd-x-15 btn-primary btn-uppercase">

                    Save as Droft</a>
                <button type="submit" class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5">

                    Save and Send</button>
                <button type="reset" class="btn btn-sm pd-x-15 btn-danger btn-uppercase mg-l-5">


                    Cancel</button>
            </div>
        </div>
    </div>
</div>




</div>


<script>
    function selectCustomer(name) {
        // Set the selected name into the input field
        document.getElementById('searchInput').value = name;
        document.getElementById('customer-name').textContent = name;

    }
</script>


<script>
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
</script>
<script>
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
            <td><button type="button" class="btn btn-danger btn-sm delete-row">Delete</button></td>
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
</script>





</form>
@endsection