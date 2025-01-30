@extends('front.masterpage')
@section('content')

<style>
    fieldset {
        border: 1px solid #ccc;
        padding: 1rem;
        margin-bottom: 1rem;
        border-radius: 0.5rem;
    }

    legend {
        font-size: 1.2rem;
        color: #dc3545;
        /* Matches the text-danger Bootstrap class */
        padding: 0 0.5rem;
    }
</style>
<div class="container mt-3">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Website Analytics</li>
                </ol>
            </nav>
            <h4 class="mg-b-0 tx-spacing--1">Create Invoice</h4>
        </div>
        <div class="d-none d-md-block">
            <a href="{{route('customer.form')}}" class="btn btn-sm pd-x-15 btn-white btn-uppercase">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus wd-10 mg-r-5">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                    <circle cx="8.5" cy="7" r="4"></circle>
                    <line x1="20" y1="8" x2="20" y2="14"></line>
                    <line x1="17" y1="11" x2="23" y2="11"></line>
                </svg>
                Add Customer
            </a>

            <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload wd-10 mg-r-5">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                    <polyline points="17 8 12 3 7 8"></polyline>
                    <line x1="12" y1="3" x2="12" y2="15"></line>
                </svg> Export</button>
            <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 wd-10 mg-r-5">
                    <circle cx="18" cy="5" r="3"></circle>
                    <circle cx="6" cy="12" r="3"></circle>
                    <circle cx="18" cy="19" r="3"></circle>
                    <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                    <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                </svg> Share</button>
            <button  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#settingsModal" class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sliders wd-10 mg-r-5">
                    <line x1="4" y1="21" x2="4" y2="14"></line>
                    <line x1="4" y1="10" x2="4" y2="3"></line>
                    <line x1="12" y1="21" x2="12" y2="12"></line>
                    <line x1="12" y1="8" x2="12" y2="3"></line>
                    <line x1="20" y1="21" x2="20" y2="16"></line>
                    <line x1="20" y1="12" x2="20" y2="3"></line>
                    <line x1="1" y1="14" x2="7" y2="14"></line>
                    <line x1="9" y1="8" x2="15" y2="8"></line>
                    <line x1="17" y1="16" x2="23" y2="16"></line>
                </svg> Settings
            
         
            
            </button>
        </div>
    </div>
</div>





<div class="container-fluid border-dark ">



    <form action="{{ route('invstore') }}" method="POST">
        @csrf



        <fieldset class="p-4 bg-light bg-gradient border rounded">
            <legend class="text-danger">Customer Details</legend>



            <div class="row mt-2">
                <div class="primary-content" id="primary-content">
                    <!-- Invoice Number and Invoice Date Fields -->
                    <div class="form-group">
                        <div class="row ms-3">
                            <!-- Invoice Number -->
                            <label class="col-form-label col-lg-2 col-12" for="invoice_number">Invoice#</label>
                            <div class="col-lg-4 col-12">
                                <input
                                    name="invoice_number"
                                    placeholder="INV000001"
                                    id="invoice_number"
                                    class="form-control"
                                    type="text"
                                    value="">
                            </div>

                            <!-- Invoice Date -->
                            <label class="col-form-label col-lg-2 col-12" for="invoice_date">Invoice Date</label>
<div class="col-lg-4 col-12">
    <input 
        type="date" 
        name="invoice_date" 
        class="form-control" 
        id="invoice_date" 
        value="{{ date('Y-m-d') }}"> <!-- Default value set as today -->
    @error('invoice_date')
    <div class="text-danger mt-1">{{ $message }}</div>
    @enderror
</div>

                        </div>
                    </div>

                    <!-- Customer Name, Email, and Phone Fields -->
                    <div class="form-group">
                        <div class="row ms-3">
                            <!-- Customer Name -->
                            <label class="col-form-label col-lg-2 col-12 required" for="customer_name">Customer Name</label>
                            <div class="col-lg-4 col-12">
                                <select name="customer_id" class="form-control">
                                    @foreach ($formdata as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                                @error('customer_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Email -->
                            <label class="col-form-label col-lg-2 col-12 required" for="email">Email</label>
                            <div class="col-lg-4 col-12">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" value="{{ old('email') }}">
                                @error('email')
                                <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Mobile No. -->
                    <div class="form-group">
                        <div class="row ms-3">
                            <label class="col-form-label col-lg-2 col-12 required" for="phone">Mobile No.</label>
                            <div class="col-lg-4 col-12">
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Mobile Number">
                                @error('phone')
                                <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Address Field -->
                    <div class="row mb-4">
                        <div class="col-sm-2 ms-4 my-auto text-danger">
                           Billing Address<span>*</span>
                        </div>
                        <div class="col-sm-4 my-auto">
                            <div class="container m-0 p-0">
                                <div class="ac-container">
                                    <div class="ac-wrapper">
                                        <textarea name="address" class="form-control" id="address" placeholder="Enter customer address..."></textarea>
                                    </div>
                                </div>
                                @error('address')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                </div>
            </div>








            <div class="row">
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
                            <td><button type="button" class="btn btn-danger btn-sm delete-row">Remove</button></td>
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
                            <!-- <div class="pt-7 ">
                            <div class="mb-2"> Address </div>
                            <div><textarea rows="2" aria-label="Customer Notes" name="customer_note" id="ember183" class="ember-text-area ember-view form-control"></textarea>
                                <div class="form-check form-check-inline pt-2 d-none"><input name="customer_notes" id="abbd92527" class="ember-checkbox ember-view form-check-input" type="checkbox"> <label for="abbd92527" class="form-check-label"><span class="hightlight">Use this in future for all invoices of all customers.</span></label></div>
                            </div>
                        </div> -->
                            <div class="pt-7 mt-4 ">
                                <div class="mb-2">Customer Notes <!----></div>
                                <div><textarea rows="8" aria-label="Customer Notes" name="customer_note" id="ember183" class="ember-text-area ember-view form-control"></textarea>
                                    <div class="form-check form-check-inline pt-2 d-none"><input name="customer_notes" id="abbd92527" class="ember-checkbox ember-view form-check-input" type="checkbox"> <label for="abbd92527" class="form-check-label"><span class="hightlight">Use this in future for all invoices of all customers.</span></label></div> <small class="form-text fw-light font-xs ">Will be displayed on the invoice</small>
                                </div>
                            </div>

                        </div>
                        <div class="invoice-discount ms-auto col-lg-6 px-0  me-4">
                            <div class="total-section rounded-xlg px-4 py-3 " id="total-section">
                                <div id="ember185" class="ember-view">
                                    <div id="ember186" class="ember-view">
                                        <div id="ember187" class="ember-view collapse show">
                                          
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

<div class="container ">
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


</fieldset>



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





<!-- Modal -->
<div class="modal fade" id="settingsModal" tabindex="-1" aria-labelledby="settingsModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="settingsModalLabel">Settings</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <!-- Setting 1: Change Theme -->
          <div class="mb-3">
            <label for="themeSelect" class="form-label">Select Theme</label>
            <select class="form-select" id="themeSelect">
              <option selected>Light</option>
              <option>Dark</option>
              <option>Auto</option>
            </select>
          </div>

          <!-- Setting 2: Language Preferences -->
          <div class="mb-3">
            <label for="languageSelect" class="form-label">Select Language</label>
            <select class="form-select" id="languageSelect">
              <option selected>English</option>
              <option>Spanish</option>
              <option>French</option>
              <option>German</option>
            </select>
          </div>

          <!-- Setting 3: Notifications -->
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="notificationsCheck" checked>
            <label class="form-check-label" for="notificationsCheck">Enable Notifications</label>
          </div>

          <!-- Setting 4: Auto Save -->
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="autoSaveCheck" checked>
            <label class="form-check-label" for="autoSaveCheck">Enable Auto Save</label>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save Changes</button>
      </div>
    </div>
  </div>
</div>


@push('scripts')
<script>
  // Optionally, you can add some JS to handle form actions or settings updates
  document.querySelector('.btn-primary').addEventListener('click', function() {
    // Example: Get the selected values
    var theme = document.getElementById('themeSelect').value;
    var language = document.getElementById('languageSelect').value;
    var notifications = document.getElementById('notificationsCheck').checked;
    var autoSave = document.getElementById('autoSaveCheck').checked;
    
    console.log("Theme: " + theme);
    console.log("Language: " + language);
    console.log("Notifications: " + notifications);
    console.log("Auto Save: " + autoSave);
    
    // You can send these values to your server to save the settings (AJAX, for example)
  });
</script>
@endpush





</form>








@endsection