<x-guest-layout>
<div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active">Login</li>
                </ul>
            </div>
        </div>
        <div class="login">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">    
                        <div class="login-form">
                        <x-jet-validation-errors class="mb-4" />
                        <form name="frm-login" method="post" action="{{ route('login') }}">
                                    @csrf
                            <div class="row">
                                
                                
                                <div class="col-md-6">
                                    <label>E-mail / Username</label>
                                    <input id="frm-login-uname" name="email" class="form-control" type="email" placeholder="E-mail / Username" :value="old('email')" required autofocus>
                                </div>
                                <div class="col-md-6">
                                    <label>Password</label>
                                    <input name="password" id="frm-login-pass" class="form-control" type="password" placeholder="*****" required autocomplete="current-password">
                                </div>
                               
                                <div class="col-md-12">
                                    <button class="btn">Submit</button>
                                </div>
                                
                            </div>
                            </form> 
                            </div>  
                            <div class="col-lg-6">   
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-guest-layout>