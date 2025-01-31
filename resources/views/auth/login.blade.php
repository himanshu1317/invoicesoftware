@include('front.common.links')


<div class="container ">
    <div class="media align-items-stretch justify-content-center ht-100p pos-relative">

        <div class="sign-wrapper mg-lg-l-50 mg-xl-l-60 ">
            <div class="wd-100p p-5 shadow">
                <h3 class="tx-color-01 mg-b-5">Sign In</h3>
                <p class="tx-color-03 tx-16 mg-b-40">Welcome back! Please signin to continue.</p>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="admin@gmail.com" value="{{ old('email') }}">
                        @error('email')
                        <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="d-flex justify-content-between mg-b-5">
                            <label class="mg-b-0-f">Password</label>
                            <a href="" class="tx-13">Forgot password?</a>
                        </div>
                        <input type="password" name="password" class="form-control" placeholder="Admin@1234">
                        @error('password')
                        <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-brand-02 w-100">Sign In</button>
                </form>


            </div><!-- sign-wrapper -->
        </div><!-- media -->
    </div>
    </div>
    