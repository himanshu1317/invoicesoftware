@include('front.common.links')


<div class="container ">
    <div class="media align-items-stretch justify-content-center ht-100p mt-5 pos-relative">

        <div class="sign-wrapper mg-lg-l-70 mg-xl-l-60 ">
            <div class="wd-100p p-5 shadow">
                <h3 class="tx-color-01 mg-b-5">Create Password</h3>
                <p class="tx-color-03 tx-16 mg-b-40">Set a strong password to secure your account.</p>
                <form action="{{ route('login') }}" method="post">
                    @csrf

<div class="row">
    <div class="col-sm-6">
    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter user name" value="{{ old('name') }}">
                        @error('name')
                        <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

    </div>
    <div class="col-sm-6">
    <div class="form-group">
                        <label>Email </label>
                        <input type="email" name="email" class="form-control" placeholder="Enter user email " value="{{ old('email') }}">
                        @error('email')
                        <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

    </div>
</div>


<div class="row">
    <div class="col-sm-6">
    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Create Password" value="{{ old('password') }}">
                        @error('password')
                        <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

    </div>
    <div class="col-sm-6">
    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="text" name="" class="form-control" placeholder="Confirm your password" value="{{ old('email') }}">
                        @error('email')
                        <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

    </div>
</div>


                    <button type="submit" class="btn btn-brand-02 w-100">Next</button>
                </form>


            </div><!-- sign-wrapper -->
        </div><!-- media -->
    </div>
    </div>
    