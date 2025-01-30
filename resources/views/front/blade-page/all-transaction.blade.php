@extends('front.masterpage')
@section('content')


<div class="container p-3 ">

    <div class="row my-3">
        <div class="col-12">
            <div class="card card-body ">
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
                        <a href="/addclient" class="btn btn-sm btn-primary btn-uppercase pd-x-15">
                            New</a>
                        <button class="btn btn-sm btn-white btn-uppercase pd-x-15 mg-t-5 mg-sm-t-0 mg-sm-l-5"> Share</button>
                        <button class="btn btn-sm btn-white btn-uppercase pd-x-15 mg-t-5 mg-sm-t-0  mg-sm-l-5"> Watch</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                                <span class="placeholder-text">Select or add a customer</span>
                                <div class="ac-toggle-container">
                                    <i class="zf-ac-toggler">

                                    </i>
                                </div>
                            </div>
                            <div class="dropdown-menu" aria-labelledby="dropdownToggle">
                                <input type="text" id="searchInput" class="search-input" placeholder="Search customers...">
                                <ul id="dropdownList" class="list-unstyled m-0 p-0">
                                    <li class="dropdown-item">Customer 1</li>
                                    <li class="dropdown-item">Customer 2</li>
                                    <li class="dropdown-item">Customer 3</li>
                                    <li class="dropdown-item">
                                        <a href="#">Add New Customer</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="row mt-2">
        <div class="primary-content" id="primary-content"><!----> <!----> <!---->
            <div class="form-group">
                <div class="row text-danger ms-3"><label class="col-form-label col-lg-2 required" for="ad989cf0e">Invoice#</label> <!---->
                    <div class="table-container col-lg-4 position-relative"> <!----><input tabindex="-1" id="ad989cf0e" class="ember-text-field ember-view form-control " data-integrity="invoice_number" type="text">
                        <div class="d-none">

                        </div> <!----> <!---->
                    </div> <!----> <!----><!---->
                </div>
            </div> <!---->
            <div class="form-group">
                <div class="form-group row ms-3 text-danger"><label id="a683a962b" class="col-form-label col-lg-2 required">Invoice Date</label>
                    <div class="col-lg-4"><!----><!----> <input placeholder="dd/mm/yyyy" id="ember153" class="ember-text-field zf-date-picker date-picker ember-view form-control" data-integrity="date" type="text"></div>
                    <div class="col-lg-1">
                        <p class="form-control-plaintext">Terms</p>
                    </div>
                    <div class="col-lg-2 payment-terms-selection">
                        <div class="container">
                            <div class="ac-container">
                                <div class="ac-wrapper">
                                    <div class="dropdown">
                                        <div class="ac-box" id="dropdownToggle" data-bs-toggle="dropdown" aria-expanded="false" role="combobox" aria-haspopup="listbox">
                                            <span class="placeholder-text">Select</span>
                                            <div class="ac-toggle-container">
                                                <i class="zf-ac-toggler">

                                                </i>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" aria-labelledby="dropdownToggle">
                                            <input type="text" id="searchInput" class="search-input" placeholder="Search customers...">
                                            <ul id="dropdownList" class="list-unstyled m-0 p-0">
                                                <li class="dropdown-item">Customer 1</li>
                                                <li class="dropdown-item">Customer 2</li>
                                                <li class="dropdown-item">Customer 3</li>
                                                <li class="dropdown-item">
                                                    <a href="#">Add New Customer</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <p class="form-control-plaintext">Due Date</p>
                    </div>
                    <div class="col-lg-2 badge-editable"><input placeholder="dd/MM/yyyy" id="ember155" class="ember-text-field zf-date-picker date-picker ember-view form-control editable" type="text">
                        <div class="text-danger cb d-none">Choose a due date on or after the invoice date.</div>
                    </div>
                </div>
            </div> <!----><!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----><!----> <!----> <!----> <!---->
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

                    <td scope="col"><input type="text" class="form-control" placeholder="Enter name"></td>
                    <td scope="col"><input type="text" class="form-control" placeholder="Enter name"></td>
                    <td scope="col"><input type="text" class="form-control" placeholder="Enter name"></td>
                    <td scope="col"><input type="text" class="form-control" placeholder="Enter name"></td>
                    <td scope="col"><button class="btn btn-danger btn-sm delete-row">Delete</button></td>
                </tr>


            </tbody>
        </table>


        <button class="btn btn-primary" id="addRowButton" style="width: 150px;">Add New Row</button>



    </div>
    <!-- 
<div class="btn btn-primary">Add New Row</div>


<div class="btn btn-primary">Add Item in Bulk   </div> -->

    <div class="row">
        <div class="row p-4 ">
            <div class="add-line-item col-lg-5 d-flex flex-column">
                <div class="pt-7 ">
                    <div class="mb-2">Customer Notes <!----></div>
                    <div><textarea rows="2" aria-label="Customer Notes" id="ember183" class="ember-text-area ember-view form-control"></textarea>
                        <div class="form-check form-check-inline pt-2 d-none"><input id="abbd92527" class="ember-checkbox ember-view form-check-input" type="checkbox"> <label for="abbd92527" class="form-check-label"><span class="hightlight">Use this in future for all invoices of all customers.</span></label></div> <small class="form-text fw-light font-xs ">Will be displayed on the invoice</small>
                    </div>
                </div>

            </div>
            <div class="invoice-discount ms-auto col-lg-6 px-0  me-4">
                <div class="total-section rounded-xlg px-4 py-3 " id="total-section">
                    <div id="ember185" class="ember-view">
                        <div id="ember186" class="ember-view">
                            <div id="ember187" class="ember-view collapse show" style="">
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
                                                    <div id="ember188" class="input-group ember-view"><input id="ember189" class="ember-text-field text-end ember-view form-control text-end " type="text">
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
                                                        <input role="radio" name="" id="" tabindex="-1" class="form-check-input" type="radio" value="tds">
                                                         <label for="" class="form-check-label ms-0">TDS</label>
                                                          <input role="radio" name="" id="" tabindex="0" class="form-check-input ms-4" type="radio" value="tcs">
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
                <button class="btn btn-sm pd-x-15 btn-primary btn-uppercase">

                    Save as Droft</button>
                <button class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5">

                    Save and Send</button>
                <button class="btn btn-sm pd-x-15 btn-danger btn-uppercase mg-l-5">


                    Cancel</button>
            </div>
        </div>
    </div>
</div>




</div>




<script>
    const searchInput = document.getElementById('searchInput');
    const dropdownList = document.getElementById('dropdownList');
    const items = dropdownList.querySelectorAll('.dropdown-item');

    searchInput.addEventListener('input', function() {
        const filter = this.value.toLowerCase();
        items.forEach(item => {
            if (item.textContent.toLowerCase().includes(filter)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });
</script>

<script>
    const table = document.getElementById('dynamicTable').getElementsByTagName('tbody')[0];
    const addRowButton = document.getElementById('addRowButton');

    let rowCount = table.rows.length;

    // Function to add a new row
    addRowButton.addEventListener('click', function() {
        rowCount++;
        const newRow = table.insertRow();
        newRow.innerHTML = `
      <td><input type="text" class="form-control" placeholder="Enter name"></td>
      <td><input type="text" class="form-control" placeholder="Enter name"></td>
      <td><input type="text" class="form-control" placeholder="Enter email"></td>
      <td><input type="text" class="form-control" placeholder="Enter email"></td>
      <td><button class="btn btn-danger btn-sm delete-row">Delete</button></td>
    `;

        // Add delete functionality to the new row
        const deleteButton = newRow.querySelector('.delete-row');
        deleteButton.addEventListener('click', function() {
            if (table.rows.length > 1) {
                table.deleteRow(newRow.rowIndex - 1);
                updateRowNumbers();
            } else {
                alert('At least one row is mandatory!');
            }
        });
    });

    // Function to update row numbers after deleting a row (if needed for numbering rows)
    function updateRowNumbers() {
        Array.from(table.rows).forEach((row, index) => {
            row.cells[0].textContent = index + 1; // Update row number
        });
        rowCount = table.rows.length;
    }

    // Add delete functionality to the initial row
    document.querySelectorAll('.delete-row').forEach(button => {
        button.addEventListener('click', function() {
            const row = button.closest('tr');
            if (table.rows.length > 1) {
                table.deleteRow(row.rowIndex - 1);
                updateRowNumbers();
            } else {
                alert('At least one row is mandatory!');
            }
        });
    });
</script>

@endsection