<div>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-primary bg-soft">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary">Free Register</h5>
                                        <p>Get your free account now.</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="{{ asset('assets/images/profile-img.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0"> 
                            <div>
                                <a href="index.html">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="{{ asset('assets/images/logo.svg')}}" alt="" class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">
                                @if(Session::has('message'))
                                   <div class="alert alert-danger" role="alert">{{Session::get('message')}}</div>
                                @endif
                                <form class="needs-validation" novalidate wire:submit.prevent="storeUser">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="fname" class="form-label">First Name</label>
                                                <input id="fname" placeholder="Enter First Name" type="text" class="form-control @error('fname') is-invalid @enderror" wire:model="fname" value="{{ old('fname') }}" required autocomplete="fname">
                                                <div class="invalid-feedback">
                                                    Please Enter First Name
                                                </div>
                                                @error('fname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="year_of_study" class="form-label">Last Name</label>
                                                <input id="lname" placeholder="Enter Last Name" type="text" class="form-control @error('lname') is-invalid @enderror" wire:model="lname" value="{{ old('lname') }}" required autocomplete="lname">
                                                <div class="invalid-feedback">
                                                    Please Enter Last Name
                                                </div>
                                                @error('lname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Username</label>
                                                <input type="text" placeholder="Enter username" id="name" class="form-control @error('username') is-invalid @enderror" wire:model="username" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                @error('username')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Phone Number</label>
                                                <input type="text" placeholder="Enter Phone Number" id="phone" class="form-control @error('phone') is-invalid @enderror" wire:model="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="mb-3">
                                        <label for="useremail" class="form-label">Email</label>
                                        <input id="useremail" placeholder="Enter email" type="email" class="form-control @error('email') is-invalid @enderror" wire:model="email" value="{{ old('email') }}" required autocomplete="email">
                                        <div class="invalid-feedback">
                                            Please Enter Email
                                        </div>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>  
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="gender" class="form-label">Gender</label>
                                                <select class="form-control" wire:model="gender">
                                                    <option value="">Select Your Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>                                                
                                                <div class="invalid-feedback">
                                                    Please Enter Gender
                                                </div>
                                                @error('gender')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="year_of_study" class="form-label">Year of Study</label>
                                                <input id="year_of_study" placeholder="Enter Year of Study" type="text" class="form-control @error('year_of_study') is-invalid @enderror" wire:model="year_of_study" value="{{ old('year_of_study') }}" required autocomplete="year_of_study">
                                                <div class="invalid-feedback">
                                                    Please Enter Year of Study
                                                </div>
                                                @error('year_of_study')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>      
                                    <div class="mb-3">
                                        <label for="course_of_study" class="form-label">Course of Study</label>                                        
                                        <select class="form-control" wire:model="course_of_study">
                                            <option value="">Select Your Course</option>
                                            <option value="Information Technology (IT)">Information Technology (IT)</option>
                                            <option value="Computer Science">Computer Science</option>
                                            <option value="Computer Technology">Computer Technology</option>
                                            <option value="Computer Information Systems">Computer Information Systems</option>
                                            <option value="Business Information Technology (BIT)">Business Information Technology (BIT)</option>
                                            <option value="Software Engineering">Software Engineering</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please Select Course
                                        </div>  
                                        @error('course_of_study')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>  
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="userpassword" class="form-label">Password</label>
                                                <input id="userpassword" placeholder="Enter password" type="password" class="form-control @error('password') is-invalid @enderror" wire:model="password" required autocomplete="new-password">
                                                <div class="invalid-feedback">
                                                    Please Enter Password
                                                </div>  
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="password-confirm" class="form-label">Confirm Password</label>
                                                <input id="password-confirm" type="password" class="form-control" wire:model="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>
                                    </div> 
                                    
                
                                    <div class="mt-4 d-grid">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">Register</button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <h5 class="font-size-14 mb-3">Sign up using</h5>
        
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="javascript::void()" class="social-list-item bg-primary text-white border-primary">
                                                    <i class="mdi mdi-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript::void()" class="social-list-item bg-info text-white border-info">
                                                    <i class="mdi mdi-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript::void()" class="social-list-item bg-danger text-white border-danger">
                                                    <i class="mdi mdi-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
            
                                    <div class="mt-4 text-center">
                                        <p class="mb-0">By registering you agree to the Studentsapp <a href="#" class="text-primary">Terms of Use</a></p>
                                    </div>
                                </form>
                            </div>
        
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        
                        <div>
                            <p>Already have an account ? <a href="{{ route('signin') }}" class="fw-medium text-primary"> Login</a> </p>
                            <p>© <script>document.write(new Date().getFullYear())</script> Skote. Crafted with <i class="mdi mdi-heart text-danger"></i> by Patrick Mwangi</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
