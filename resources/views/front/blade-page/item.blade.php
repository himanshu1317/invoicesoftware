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

    <form action="{{route('invoice.store')}}" method="POST">
        @csrf

        <div class="row  p-4 bg-light bg-gradient">

            <div class="col-sm-2 my-auto text-danger">
                Customer Name <span>*</span>
            </div>
            <div class="col-sm-5 my-auto">
                <div class="container">
                    <div class="ac-container">
                        <div class="ac-wrapper">
                            <div class="dropdown">
                                <div class="ac-box" id="dropdownToggle" data-bs-toggle="dropdown" aria-expanded="false" role="combobox" aria-haspopup="listbox">
                                    <span id="customer-name" class="placeholder-text">Select or add a customer</span>
                                    <div class="ac-toggle-container">
                                        <i class="zf-ac-toggler">

                                        </i>
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
                                        <li class="dropdown-item" onclick="selectCustomer('{{ $cdata->name }}')">
                                            {{ $cdata->name }}
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
            <div class="row text-danger ms-3">
                <label class="col-form-label col-lg-2 required" for="inv_no">Invoice#</label>
                <div class="table-container col-lg-4 position-relative">
                    <input
                        tabindex="-1"
                        name="inv_no"
                        id="inv_no"
                        class="ember-text-field ember-view form-control"
                        type="text"
                        value="{{ old('inv_no') }}"
                    >
                    @error('inv_no')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Invoice Date Field -->
        <div class="form-group">
            <div class="row ms-3 text-danger">
                <label class="col-form-label col-lg-2 required" for="inv_date">Invoice Date</label>
                <div class="col-lg-4">
                    <input
                        name="inv_date"
                        placeholder="dd/mm/yyyy"
                        id="inv_date"
                        class="form-control"
                        type="date"
                        value="{{ old('inv_date') }}"
                    >
                    @error('inv_date')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Invoice Term Dropdown -->
                <div class="col-lg-1">
                    <p class="form-control-plaintext">Terms</p>
                </div>
                <div class="col-lg-2 payment-terms-selection">
                    <div class="dropdown">
                        <div class="ac-box" id="dropdownToggle" data-bs-toggle="dropdown">
                            <span id="term" class="placeholder-text">{{ old('inv_term') ?? 'Select term' }}</span>
                        </div>
                        <div class="dropdown-menu">
                            <input
                                name="inv_term"
                                type="text"
                                id="searchInput"
                                class="search-input"
                                value="{{ old('inv_term') }}"
                                placeholder="Search term..."
                            >
                            <ul id="dropdownList" class="list-unstyled">
                                <li class="dropdown-item" onclick="selectTerm('20')">20</li>
                                <li class="dropdown-item" onclick="selectTerm('25')">25</li>
                                <li class="dropdown-item" onclick="selectTerm('30')">30</li>
                                <li class="dropdown-item" onclick="selectTerm('35')">35</li>
                                <li class="dropdown-item" onclick="selectTerm('40')">40</li>
                                <li class="dropdown-item" onclick="selectTerm('45')">45</li>
                                <li class="dropdown-item">
                                    <a href="#">Add New Term</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @error('inv_term')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

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
                        value="{{ old('due_date') }}"
                    >
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
                        <th scope="col">Rate </th>
                        <th scope="col">Amount</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>

                        <td scope="col"><input name="product_name[]" type="text" class="form-control" placeholder="Enter name"></td>
                        <td scope="col"><input name="product_qty[]" type="text" class="form-control" placeholder="Enter name"></td>
                        <td scope="col"><input name="product_rate[]" type="text" class="form-control" placeholder="Enter name"></td>
                        <td scope="col"><input name="product_amount[]" type="text" class="form-control" placeholder="Enter name"></td>
                        <td scope="col"><button class="btn btn-danger btn-sm delete-row">Delete</button></td>
                    </tr>


                </tbody>
            </table>


            <button type="button" class="btn btn-primary" id="addRowButton" style="width: 150px;">Add New Item</button>



        </div>
        <!-- 
<div class="btn btn-primary">Add New Row</div>


<div class="btn btn-primary">Add Item in Bulk   </div> -->

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
                                        <div class="total-amount text-semibold">0.00</div>
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
                                                    <div class="col-lg-5 col-sm-5 col-5">
                                                        <div id="ember188" class="input-group ember-view"><input name="discount" id="ember189" class="ember-text-field text-end ember-view form-control text-end " type="text">
                                                            <div class="input-group-append"><span class="input-group-text">%</span></div> <!---->
                                                        </div>
                                                    </div> <!---->
                                                </div>
                                            </div>
                                            <div class="total-amount" style="line-height: 2;"><span>0.00</span></div>
                                        </div> <!---->
                                    </div><!---->
                                    <hr class="my-4 d-none"> <!----> <!----> <!----> <!----> <!---->
                                    <div id="ember190" class="ember-view"><!----></div> <!----> <!---->
                                    <div class="table-row" id="tcs-field">
                                        <div class="total-row">
                                            <div class="total-label">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-6 col-6 py-2">
                                                        <fieldset role="radiogroup" aria-labelledby="" class="form-check-inline">
                                                            <input role="radio" name="tds" id="" tabindex="-1" class="form-check-input" type="radio" value="tds">
                                                            <label for="" class="form-check-label ms-0">TDS</label>
                                                            <input role="radio" name="tcs" id="" tabindex="0" class="form-check-input ms-4" type="radio" value="tcs">
                                                            <label for="" class="form-check-label ">TCS</label> <!---->
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6 col-6 tds-select">
                                                        <div id="ember307" class="ember-view">
                                                            <div class="ac-container">
                                                                <div class="ac-wrapper">
                                                                    <div ac-toggler="" id="ac-ember307" class="ac-box " tabindex="0" role="combobox" aria-haspopup="listbox" aria-disabled="false" aria-label="Select a Tax" aria-expanded="false" aria-controls="acDropdownListBox" aria-invalid="false" aria-describedby="error-msg-ember307">
                                                                        <div class="ac-selected form-control  "> <span class="placeholder-text me-0 ac-selected-label">Select a Tax</span>
                                                                            <div class="ac-toggle-container"><i class="zf-ac-toggler">


                                                                                </i></div>
                                                                        </div>
                                                                    </div> <!---->
                                                                </div> <!---->
                                                                <div role="status" aria-live="assertive" class="visually-hidden"><!----></div>
                                                            </div> <!---->
                                                        </div> <!---->
                                                    </div> <i class="popover-help-trigger col-1 p-0 mt-2" id="" tabindex="0" aria-labelledby="">
                                                    </i> <!---->
                                                </div>
                                            </div>



                                            <!---->
                                        </div>
                                    </div>
                                </div> <!---->
                            </div>
                            <div class="total-row gross-total mt-3  quick-total" style="border-top: 1px solid #eee;">
                                <div class="total-label">Total ( ₹ ) <!----></div>
                                <div class="total-amount">0.00</div>
                            </div>


                        </div>
                    </div>
                </div> <!----><!---->
            </div>
        </div>
</div>

<div class="container">
    <div class="row p-4">
        <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">

            <div class="d-none d-md-block">
                <a href="{{route('invoice-page')}}" class="btn btn-sm pd-x-15 btn-primary btn-uppercase">

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
    const table = document.getElementById('dynamicTable').getElementsByTagName('tbody')[0];
    const addRowButton = document.getElementById('addRowButton');

    let rowCount = table.rows.length;

    // Function to initialize delete functionality
    function initializeDeleteButtons() {
        document.querySelectorAll('.delete-row').forEach(button => {
            button.removeEventListener('click', deleteRow); // Prevent duplicate listeners
            button.addEventListener('click', deleteRow);
        });
    }

    // Function to delete a row
    function deleteRow(event) {
        const row = event.target.closest('tr');
        if (table.rows.length > 1) {
            table.deleteRow(row.rowIndex - 1);
        } else {
            alert('At least one row is mandatory!');
        }
    }

    // Function to add a new row
    addRowButton.addEventListener('click', function() {
        rowCount++;
        const newRow = table.insertRow();
        newRow.innerHTML = `
      <td><input type="text" class="form-control" name="product_name[]" placeholder="Enter product name"></td>
      <td><input type="number" class="form-control" name="product_qty[]" placeholder="Enter quantity"></td>
      <td><input type="number" class="form-control" name="product_rate[]" placeholder="Enter rate"></td>
      <td><input type="number" class="form-control" name="product_amount[]" placeholder="Enter amount"></td>
      <td><button class="btn btn-danger btn-sm delete-row">Delete</button></td>
    `;

        initializeDeleteButtons(); // Re-initialize delete buttons
    });

    // Initialize delete buttons for existing rows on page load
    initializeDeleteButtons();
</script>


</form>
@endsection