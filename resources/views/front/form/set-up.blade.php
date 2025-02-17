@include('front.common.links')


<div class="container ">
    <div class="media align-items-stretch justify-content-center  mt-5 pos-relative">

    <div class="container w-75 p-5 shadow">
    <h1 class="text-center">About Company</h1>
    
    <form action="{{route('setupstore')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- @method('PUT') -->
        <div class="row">
            <!-- First Column -->
            <div class="col-sm-4">
                <div class="mb-3">
                    <label for="name" class="form-label text-danger">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="" required>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <!-- Second Column -->
            <div class="col-sm-4">
                <div class="mb-3">
                    <label for="email" class="form-label text-danger">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <!-- Third Column -->
            <div class="col-sm-4">
                <div class="mb-3">
                    <label for="phone" class="form-label text-danger">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="">
                    @error('phone')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <!-- First Column -->
            <div class="col-sm-4">
            <div class="mb-3">
                    <label for="financial_session" class="form-label text-danger">Financial Year</label>
                    <input type="text" name="financial_year" id="financial_session" class="form-control" value="">
                    @error('financial_session')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <!-- Second Column -->
            <div class="col-sm-4">
                <div class="mb-3">
                    <label for="website" class="form-label text-danger">Website</label>
                    <input type="url" name="website" id="website" class="form-control" value="">
                    @error('website')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Third Column -->
            <div class="col-sm-4">
                <div class="mb-3">
                    <label for="alternate_phone" class="form-label text-danger">Alternate Phone No</label>
                    <input type="text" name="alt_number" id="alternate_phone" class="form-control" value="">
                    @error('alternate_phone')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <!-- First Column -->
            <div class="col-sm-4">
                <div class="mb-3">
                    <label for="registration_number" class="form-label text-danger">Registration No</label>
                    <input type="text" name="registration_no" id="registration_number" class="form-control" value="">
                    @error('registration_number')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Second Column -->
            <div class="col-sm-4">
                <div class="mb-3">
                    <label for="gst_number" class="form-label text-danger">GST Number</label>
                    <input type="text" name="gst_number" id="gst_number" class="form-control" value="">
                    @error('gst_number')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Third Column -->
            <div class="col-sm-4">
                <div class="mb-3">
                    <label for="logo" class="form-label text-danger">Logo</label>
                    <input type="file" name="logo" id="logo" class="form-control">
                    @error('logo')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Financial Session Field -->
        <div class="row">
            <!-- Single Column for Financial Session -->
            <!-- <div class="col-sm-12">
                <div class="mb-3">
                    <label for="financial_session" class="form-label text-danger">Financial Year</label>
                    <input type="text" name="financial_year" id="financial_session" class="form-control" value="">
                    @error('financial_session')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div> -->
        </div>

        <div class="mb-3">
            <label for="address" class="form-label text-danger">Address</label>
            <textarea name="address" id="address" class="form-control"></textarea>
            @error('address')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-warning">Next</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </form>
</div>
    </div>
    </div>
    
