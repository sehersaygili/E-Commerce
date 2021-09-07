<x-guest-layout>
<div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active">Register</li>
                </ul>
            </div>
        </div>
        <div class="login">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">    
                        <div class="register-form">
                        <x-jet-validation-errors class="mb-4" />
                        <form class="form-stl" name="frm-register" method="post" action="{{ route('register') }}">
                                    @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                    <input id="frm-reg-name" name="name" class="form-control" type="text" placeholder="Name" required autofocus autocomplete="name">
                                </div>
                                <div class="col-md-6">
                                    <label>E-mail</label>
                                    <input class="form-control" type="email" id="frm-reg-email" name="email" placeholder="E-mail":value="email">
                                </div>
                                <div class="col-md-6">
                                    <label>Password</label>
                                    <input id="frm-reg-pass" class="form-control" name="password" type="password" placeholder="Password" required autocomplete="new-password">
                                </div>
                                <div class="col-md-6">
                                    <label>Confirm Password</label>
                                    <input class="form-control" name="password_confirmation" type="password" placeholder="Password" required autocomplete="new-password">
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-sign" name="register" value="register">Submit</button>
                                </div>
                            </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-guest-layout>