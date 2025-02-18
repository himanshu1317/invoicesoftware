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
                    <li class="breadcrumb-item"><a href="#">Invvoice Management</a></li>
                </ol>
            </nav>
            <h4 class="mg-b-0 tx-spacing--1 ">Generate Invoice</h4>
        </div>
        <div class="d-none d-md-block">
            <button type="button" class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5" data-bs-toggle="modal" data-bs-target="#addcustomerModal" class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus wd-10 mg-r-5">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                    <circle cx="8.5" cy="7" r="4"></circle>
                    <line x1="20" y1="8" x2="20" y2="14"></line>
                    <line x1="17" y1="11" x2="23" y2="11"></line>
                </svg>
                Add Customer
            </button>

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
            <button type="button" class="btn btn-primary btn-sm pd-x-15 btn-uppercase mg-l-5" data-bs-toggle="modal" data-bs-target="#settingsModal" class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sliders wd-10 mg-r-5">
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


<form id="customerForm" action="{{ route('invstore', ['customer_id' => old('customer_id')]) }}" method="POST">
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
                                    value="{{ $inv_data }}">
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
                                
                                <select name="customer_id" id="customerSelect" class="form-control">
                                    <option selected value="">Search Customer...</option>
                                    @foreach ($formdata as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option> 
                                    @endforeach
                                </select>
                                @error('customer_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                         


                            <!-- Email -->
                            <label class="col-form-label col-lg-2 col-12 required" for="email">Due Date</label>
                            <div class="col-lg-4 col-12">
                                <input type="date" name="Due" id="Due" class="form-control" placeholder="Enter Email" value="{{ old('email') }}">
                                @error('email')
                                <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="row ms-3">
                            <!-- Contact Number -->
                            <label class="col-form-label col-lg-2 col-12 required" for="customer_id">Email</label>
                            <div class="col-lg-4 col-12">
                                <input type="email" name="email" id="customerEmail" class="form-control" placeholder="Enter Email" value="{{ old('email') }}">
                                @error('customer_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- School/Company Name -->
                            <label class="col-form-label col-lg-2 col-12 required" for="email">School/Company Name</label>
                            <div class="col-lg-4 col-12">
                                <input type="text" name="company_school_name" id="company_school_name" class="form-control" placeholder="Enter School/Company Name" value="{{ old('email') }}">

                                @error('email')
                                <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Address Field -->
                    <div class="form-group">
                        <div class="row ms-3">
                            <!-- Contact Number -->
                            <label class="col-form-label col-lg-2 col-12 required" for="customer_id">Contact Number</label>
                            <div class="col-lg-4 col-12">
                                <input type="text" name="phone" id="phone" class="form-control">
                                @error('customer_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- School/Company Name -->
                            <label class="col-form-label col-lg-2 col-12 required" for="email">Address</label>
                            <div class="col-lg-4 col-12">
                                <input type="text" name="address" id="address" class="form-control" placeholder="Enter Address " value="{{ old('address') }}">
                                @error('address')
                                <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </fieldset>
        <fieldset class="p-3 rounded bg-light bg-gradient">
    <legend class="fw-bold">Product Details</legend>
    <div class="row p-4">
        <table class="table table-bordered" id="dynamicTable">
            <thead class="thead-light">
                <tr>
                    <th>Item Details</th>
                    <th>Quantity</th>
                    <th>Rate</th>
                    <th>Discount/Item</th>
                    <th>Amount</th>
                   
                    <!-- <th>Tax</th> -->
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input name="product_name[]" type="text" class="form-control" placeholder="Enter name"></td>
                    <td><input name="quantity[]" type="number" class="form-control product-qty" placeholder="Enter quantity" min="0"></td>
                    <td><input name="unit_price[]" type="number" class="form-control product-rate" placeholder="Enter rate" min="0"></td>
                   
                    <td>
                        <div class="input-group">
                            <input type="number" name="discount[]" class="form-control row-discount w-75" placeholder="Discount" min="0">
                            <select class="form-select row-discount-type w-25">
                                <option value="percentage">%</option>
                                <option value="rupees">₹</option>
                            </select>
                        </div>
                    </td>
                    <td><input name="total[]" type="number" class="form-control product-amount" readonly></td>
                    <!-- <td>
                        <div class="input-group">
                            <input type="number" name="tax[]" class="form-control row-tax w-75" placeholder="Tax" min="0">
                            <select class="form-select row-tax-type w-25">
                                <option value="gst">GST</option>
                                <option value="vat">VAT</option>
                            </select>
                        </div>
                    </td> -->
                    <td><button type="button" class="btn btn-danger btn-sm delete-row">Remove</button></td>
                </tr>
            </tbody>
        </table>
        <button type="button" class="btn btn-primary w-25" id="addRowButton">Add New Item</button>
        <label class="fw-bold" style="display: none;">Subtotal: ₹<span id="subtotal">0.00</span></label>
    </div>
    <div class="row my-3">
        <div class="col-lg-3 ms-auto text-end">
            <div class="border-top pt-3 mt-3 text-danger">
                <strong>Total ( ₹ ) :</strong>
                <strong id="totalAmount">0.00</strong>
                <input name="total_amount" type="hidden" id="totalAmountInput" value="">
            </div>
        </div>
    </div>
</fieldset>

        <!-- end discount and tax  -->
        <!-- Payment Details Section -->
        <fieldset class="border p-3 rounded bg-light bg-gradient">
    <legend class="fw-bold">Payment Details</legend>

    <div class="row my-3 align-items-center">
        <div class="col-lg-3">
            <label for="paymentStatus" class="form-label">Payment Status</label>
            <select class="form-select" id="paymentStatus">
                <option value="">-- Select Status --</option>
                <option value="paid">Paid</option>
                <option value="unpaid">Unpaid</option>
                <option value="partial">Partially Paid</option>
            </select>
        </div>

        <div class="col-lg-3 d-none" id="paymentMethodContainer">
            <label for="paymentMethod" class="form-label">Payment Method</label>
            <select class="form-select" id="paymentMethod">
                <option value="">-- Select Method --</option>
                <option value="cash">Cash</option>
                <option value="bank_transfer">Bank Transfer</option>
                <option value="credit_card">Credit Card</option>
                <option value="paypal">PayPal</option>
                <option value="upi">UPI</option>
            </select>
        </div>

        <div class="col-lg-3 d-none" id="paymentReferenceContainer">
            <label for="paymentReference" class="form-label">Payment Reference</label>
            <input type="text" id="paymentReference" class="form-control" placeholder="Enter reference (if paid)">
        </div>
    </div>

    <!-- Fields that will always show (discount, paid amount, total amount, etc.) -->
    <div class="row my-3 align-items-center">
        <div class="col-lg-3">
            <label for="totalAmount" class="form-label">Total Amount</label>
            <input type="number" id="totalAmount" class="form-control" placeholder="Enter total amount">
        </div>

        <div class="col-lg-3">
            <label for="discount" class="form-label">Discount</label>
            <input type="number" id="discount" class="form-control" placeholder="Enter discount amount">
        </div>

        <div class="col-lg-3">
            <label for="paidBalance" class="form-label">Paid Amount</label>
            <input type="number" id="paidBalance" class="form-control" placeholder="Enter paid amount">
        </div>

        <div class="col-lg-3">
            <label for="dueBalance" class="form-label">Due Balance</label>
            <input type="text" id="dueBalance" class="form-control" readonly>
        </div>
    </div>

    <!-- Fields for partial payments -->
    
</fieldset>

<script>
    document.getElementById('paymentStatus').addEventListener('change', function () {
        let paymentMethodContainer = document.getElementById('paymentMethodContainer');
        let paymentReferenceContainer = document.getElementById('paymentReferenceContainer');
        let partialPaymentFields = document.getElementById('partialPaymentFields');

        // Show payment method and reference containers if paid or partial
        if (this.value === 'paid' || this.value === 'partial') {
            paymentMethodContainer.classList.remove('d-none');
            paymentReferenceContainer.classList.remove('d-none');
        } else {
            paymentMethodContainer.classList.add('d-none');
            paymentReferenceContainer.classList.add('d-none');
        }

        // Show partial payment fields only if status is partial
        if (this.value === 'partial') {
            partialPaymentFields.classList.remove('d-none');
        } else {
            partialPaymentFields.classList.add('d-none');
        }
    });

    document.getElementById('paymentMethod').addEventListener('change', function () {
        let paymentReferenceContainer = document.getElementById('paymentReferenceContainer');

        if (this.value === 'cash') {
            paymentReferenceContainer.classList.add('d-none');
        } else {
            paymentReferenceContainer.classList.remove('d-none');
        }
    });

    function calculateDueBalance() {
        let totalAmount = parseFloat(document.getElementById('totalAmount').value) || 0;
        let discount = parseFloat(document.getElementById('discount').value) || 0;
        let paidAmount = parseFloat(document.getElementById('paidBalance').value) || 0;
        
        let discountedTotal = totalAmount - discount; // Apply the discount to the total amount
        let dueAmount = discountedTotal - paidAmount;

        document.getElementById('dueBalance').value = dueAmount.toFixed(2);
    }

    // Event listeners for discount and paid balance fields to recalculate due balance
    document.getElementById('discount').addEventListener('input', calculateDueBalance);
    document.getElementById('paidBalance').addEventListener('input', calculateDueBalance);
</script>


        <!-- Customer Notes & Terms Section -->
        <fieldset class="border p-3 rounded mt-4 bg-light bg-gradient">
            <legend class="fw-bold">Additional Information</legend>

            <div class="row my-3">
                <div class="col-lg-6">
                    <label for="customerNotes" class="form-label">Customer Notes</label>
                    <textarea name="customerNotes" id="customerNotes" class="form-control" placeholder="Enter any special instructions"></textarea>
                </div>

                <div class="col-lg-6">
                    <label for="termsConditions" class="form-label">Terms & Conditions</label>
                    <textarea name="termsConditions" id="termsConditions" class="form-control" placeholder="Enter applicable terms and conditions"></textarea>
                </div>
            </div>
        </fieldset>


        <div class="container-fluid">
            <div class="row mt-3 py-4">
                <div class="d-flex align-items-center justify-content-end gap-2">
                    <!-- <a href="#" class="btn btn-outline-secondary btn-lg">
                        Save as Draft
                    </a> -->
                    <button type="submit" class="btn btn-primary btn-lg">
                        Generate Invoice
                    </button>
                    <button type="reset" class="btn btn-danger btn-lg">
                        Cancel
                    </button>
                </div>
            </div>
        </div>



</form>



        <!-- Modal -->
        <div class="modal modal-lg fade" id="settingsModal" tabindex="-1" aria-labelledby="settingsModalLabel" aria-hidden="true">
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


        <!-- add cutomer  Modal -->
        <div class="modal modal-lg fade" id="addcustomerModal" tabindex="-1" aria-labelledby="addcustomerModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addcustomerModalLabel">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus wd-20 ">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="8.5" cy="7" r="4"></circle>
                                <line x1="20" y1="8" x2="20" y2="14"></line>
                                <line x1="17" y1="11" x2="23" y2="11"></line>
                            </svg>

                            New Customer
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container w-100 mt-4 flex-grow-1">
                            <form action="{{ route('customers.store') }}" method="POST" class="mb-4">
                                @csrf

                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="name" class="form-label">First Name:</label>
                                        <input type="text" id="name" name="name" placeholder="Enter First Name" class="form-control" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="lastname" class="form-label">Last Name:</label>
                                        <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Enter Last Name" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="name" class="form-label">Contact Number:</label>
                                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter Contact Number" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-8">
                                    <label for="organization" class="form-label">Select Organization Type</label>
<select name="organization" class="form-select" id="organization">
    <option value="">-- Select Organization --</option>
    <option value="school">School</option>
    <option value="company">Company</option>
    <option value="business">Business</option>
    <option value="other">Other</option>
</select>
</div>
                                    <div class="col-md-4">
                                        <label for="name" class="form-label">Email :</label>
                                        <input type="text" id="email" name="email" class="form-control" placeholder="Enter Email Address" required>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="address" class="form-label">Address:</label>
                                        <textarea id="address" name="address" class="form-control"></textarea>
                                    </div>
                                </div>




                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>

    </form>
</div>
</div>
</div>
</div>

<!-- end add cutomer modal -->



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

<script>
    // This runs when a customer is selected from the dropdown
    $('#customerSelect').on('change', function() {
        var customerId = $(this).val(); // Get the selected customer's ID
       
        var route="{{route('get-data',':id')}}".replace('id',customerId);
        // Alert the selected customerId (optional, for testing)
     

        // If a customer is selected (ID is not empty)
        if (customerId) {
            // Make a request to get customer details
            $.ajax({
                url: '/get-customer-details/' + customerId, // Replace with your route
                method: 'GET',
                success: function(data) {
                    console.log('Customer Details fetched Succesfully');
                    console.log(data);
                    console.log(data.school_company_name);
                    // When the data comes back, fill in the fields
                    if (data.email) {
                        $('#customerEmail').val(data.email); // Fill email field
                    }
                    if (data.phone) {
                        $('#phone').val(data.phone); // Fill phone field
                    }
                    if (data.address) {
                        $('#address').val(data.address); // Fill address field
                    }
                    if(data.school_company_name)
                    {
                       
                        $('#company_school_name').val(data.school_company_name);
                    }
                },
                error: function() {
                    alert('Error fetching customer details');
                }
            });
        }
    });
</script>
<!-- customer id send url code -->
<script>
    document.getElementById('customerSelect').addEventListener('change', function () {
        let customerId = this.value;
        let form = document.getElementById('customerForm');

        if (customerId) {
            form.action = "{{ route('invstore') }}/" + customerId;
        }
    });
</script>

<!-- end customer id send url code -->



@endsection