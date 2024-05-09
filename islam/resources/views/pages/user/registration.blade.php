@extends('dashboard_template.layout')

@section('main_content')
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="#" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">Online <span class="text-success">Madrasah</span></span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <!-- End Logo -->

    <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div>
    <!-- End Search Bar -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li>
            <!-- End Search Icon-->

            <li class="nav-item dropdown">
                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-bell"></i>
                    <span class="badge bg-primary badge-number">4</span>
                </a>
                <!-- End Notification Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                    <li class="dropdown-header">
                        You have 4 new notifications
                        <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="bi bi-exclamation-circle text-warning"></i>
                        <div>
                            <h4>Lorem Ipsum</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>30 min. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="bi bi-x-circle text-danger"></i>
                        <div>
                            <h4>Atque rerum nesciunt</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>1 hr. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="bi bi-check-circle text-success"></i>
                        <div>
                            <h4>Sit rerum fuga</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>2 hrs. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="bi bi-info-circle text-primary"></i>
                        <div>
                            <h4>Dicta reprehenderit</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>4 hrs. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="dropdown-footer">
                        <a href="#">Show all notifications</a>
                    </li>

                </ul>
                <!-- End Notification Dropdown Items -->

            </li>
            <!-- End Notification Nav -->

            <li class="nav-item dropdown">
                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-chat-left-text"></i>
                    <span class="badge bg-success badge-number">3</span>
                </a>
                <!-- End Messages Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                    <li class="dropdown-header">
                        You have 3 new messages
                        <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="message-item">
                        <a href="#">
                            <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                            <div>
                                <h4>Maria Hudson</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="message-item">
                        <a href="#">
                            <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                            <div>
                                <h4>Anna Nelson</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>6 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="message-item">
                        <a href="#">
                            <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                            <div>
                                <h4>David Muldon</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>8 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="dropdown-footer">
                        <a href="#">Show all messages</a>
                    </li>

                </ul>
                <!-- End Messages Dropdown Items -->

            </li>
            <!-- End Messages Nav -->

            <li class="nav-item dropdown pe-3">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="https://picsum.photos/200" alt="Profile" class="rounded-circle">
                </a>
            </li>
            <!-- End Profile Nav -->

        </ul>
    </nav>
    <!-- End Icons Navigation -->

</header>
<!-- End Header -->

<main id="main" class="main">
    <div class="pagetitle">
        <h1>User Registration Form</h1>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <form action="" method="post" enctype="multipart/form-data">
                <!-- UserName and Nick Name -->
                <div class="row">
                    <div class="col-sm-6" id="form">
                        <label>First Name</label>
                        <input type="text" class="form-control @error('firstname') is-invalid @enderror"
                            autocomplete="on" required name="firstname" placeholder="Enter your first name"
                            value="{{ old('username', $user->username ?? '') }}">
                        @error('firstname')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-sm-6" id="form">
                        <label>Nick Name</label>
                        <input type="text" class="form-control @error('nickname') is-invalid @enderror"
                            autocomplete="on" required name="nickname" placeholder="Enter your nick name">
                        @error('nickname')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!-- Father and Mother Name -->
                <div class="row mt-2">
                    <div class="col-sm-6" id="form">
                        <label>Father Name</label>
                        <input type="text" class="form-control @error('fathername') is-invalid @enderror"
                            autocomplete="on" required name="fathername" placeholder="Enter your father's name">
                        @error('fathername')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-sm-6" id="form">
                        <label>Mother Name</label>
                        <input type="text" class="form-control @error('mothername') is-invalid @enderror"
                            autocomplete="on" name="mothername" placeholder="Enter your mother's name">
                        @error('mothername')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!-- CNIC and Email -->
                <div class="row mt-2">
                    <div class="col-sm-6" id="form">
                        <label>C.N.I.C Number</label>
                        <input type="text" class="form-control @error('idcard') is-invalid @enderror" autocomplete="on"
                            placeholder="00000-0000000-0" required name="idcard" placeholder="Enter your CNIC number">
                        @error('idcard')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6" id="form">
                        <label>E-mail ID</label><br>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" autocomplete="on"
                            required name="email" placeholder="Enter your email"
                            value="{{ old('email', $user->email ?? '') }}">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!-- Whatsapp and Phone Number -->
                <div class="row mt-2">
                    <div class="col-sm-6" id="form">
                        <label>Whatsapp Number</label>
                        <input type="text" class="form-control @error('whatsappnumber') is-invalid @enderror"
                            autocomplete="on" required name="whatsappnumber" placeholder="Enter your Whatsapp number">
                        @error('whatsappnumber')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6" id="form">
                        <label>Phone Number</label>
                        <input type="text" class="form-control @error('phone_number') is-invalid @enderror"
                            autocomplete="on" required name="phone_number" placeholder="Enter your phone number"
                            value="{{ old('phone_number', $user->phone_number ?? '') }}">
                        @error('phone_number')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!-- Skype Id and Emo Id -->
                <div class="row mt-2">
                    <div class="col-sm-6" id="form">
                        <label>Skype ID</label>
                        <input type="text" class="form-control @error('skypeid') is-invalid @enderror" autocomplete="on"
                            required name="skypeid" placeholder="Enter your Skype ID">
                        @error('skypeid')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6" id="form">
                        <label>Emo ID</label>
                        <input type="text" class="form-control @error('emoid') is-invalid @enderror" autocomplete="on"
                            required name="emoid" placeholder="Enter your Emo ID">
                        @error('emoid')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!-- Country and state -->
                <div class="row mt-2">
                    <div class="col-sm-6" id="form">
                        <div class="select">
                            <label>Country</label><br>
                            <input type="text" class="form-control @error('country') is-invalid @enderror"
                                autocomplete="on" required name="country" placeholder="Enter your country">
                            @error('country')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6" id="form">
                        <div class="select1">
                            <label>State/Province</label><br>
                            <input type="text" class="form-control @error('state') is-invalid @enderror"
                                autocomplete="on" required name="state" placeholder="Enter your state/province">
                            @error('state')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- Date of Birth and Address -->
                <div class="row mt-2">
                    <div class="col-sm-6" id="form">
                        <label>Date Of Birth</label>
                        <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror"
                            autocomplete="on" name="date_of_birth" placeholder="Select your date of birth">
                        @error('date_of_birth')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6" id="form">
                        <label>Address</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" autocomplete="on"
                            required name="address" placeholder="Enter your Current Address">
                        @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!-- Reffered By and Gender -->
                <div class="row mt-2">
                    <div class="col-sm-6" id="form">
                        <div class="select1">
                            <label>Reffered By</label><br>
                            <select name="gender" class="form-control @error('gender') is-invalid @enderror">
                                <option disabled selected>Please Tell Us</option>
                            </select>
                            @error('gender')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6" id="form">
                        <div class="select1">
                            <label>Gender</label><br>
                            <select name="gender" class="form-control @error('gender') is-invalid @enderror">
                                <option disabled selected>Select Your Gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                            @error('gender')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- All Cources and Language -->
                <div class="row mt-2">
                    <div class="col-sm-6" id="form">
                        <div class="select">
                            <label>All Courses</label><br>
                            <select name="tradename" class="form-control @error('tradename') is-invalid @enderror">
                                <option value="" selected disabled>Select Your Trade</option>
                                <!-- Course options -->
                            </select>
                            @error('tradename')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6" id="form">
                        <div class="select1">
                            <label>Language</label><br>
                            <select name="language" class="form-control @error('language') is-invalid @enderror">
                                <option disabled selected>Select Your Language</option>
                                <!-- Language options -->
                            </select>
                            @error('language')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- Classes Timetable -->
                <div class="row mt-2">
                    <div class="col-sm-6" id="form">
                        <label>Class Timetable</label>
                        <input type="text" class="form-control @error('class_timetable') is-invalid @enderror"
                            autocomplete="on" required name="class_timetable" placeholder="Enter your class timetable">
                        @error('class_timetable')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6" id="form">
                        <label>Classes Per Week</label>
                        <input type="text" class="form-control @error('classes_per_week') is-invalid @enderror"
                            autocomplete="on" required name="classes_per_week"
                            placeholder="Enter number of classes per week">
                        @error('classes_per_week')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!-- All Images -->
                <div class="row mt-2">
                    <div class="col-sm-3" id="form">
                        <label>Browse your Passport Size Image</label>
                        <input type="file" class="form-control @error('passport_image') is-invalid @enderror"
                            onchange="previewImage(this, 'image');" required name="passport_image" multiple
                            style="border:none; border-top:none">
                        <img src="" alt="" id="imagePreview" width="100" height="120"
                            style="border:none; margin-top: 10px; margin-left: 70px;">
                        @error('passport_image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-3" id="form">
                        <label>Browse your Front Side of ID Card</label>
                        <input type="file" class="form-control pic @error('idcard_front') is-invalid @enderror"
                            onchange="previewImage(this, 'front');" required name="idcard_front" multiple
                            style="border:none; border-top:none">
                        <img src="" alt="" id="frontPreview" width="100" height="120"
                            style="border:none; margin-top: 10px; margin-left: 70px;">
                        @error('idcard_front')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-3" id="form">
                        <label>Browse your Back Side of ID Card</label>
                        <input type="file" class="form-control pic @error('idcard_back') is-invalid @enderror"
                            onchange="previewImage(this, 'back');" required name="idcard_back" multiple
                            style="border:none; border-top:none">
                        <img src="" alt="" id="backPreview" width="100" height="120"
                            style="border:none; margin-top: 10px; margin-left: 70px;">
                        @error('idcard_back')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-3" id="form">
                        <label>Browse your Matric Degree</label>
                        <input type="file" class="form-control pic @error('matric_degree') is-invalid @enderror"
                            onchange="previewImage(this, 'doc');" required name="matric_degree"
                            style="border:none; border-top:none">
                        <img src="" alt="" id="docPreview" width="100" height="120"
                            style="border:none; margin-top: 10px; margin-left: 70px;">
                        @error('matric_degree')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!-- Agree Terms and Conditions -->
                <div class="row mt-2">
                    <div class="col-sm-12" id="terms">
                        <label>Agree to terms and conditions</label>
                        <input type="checkbox" class="input @error('agree_terms') is-invalid @enderror"
                            autocomplete="on" required>
                        <div class="invalid-feedback">You must agree to the terms and conditions.</div>
                        @error('agree_terms')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!-- Submit and Reset Buttons -->
                <div class="row mt-2">
                    <div class="col-sm-12" id="terms">
                        <input type="Submit" class="btn btn-success" value="Submit" name="submit">
                        <input type="Reset" class="btn btn-danger" value="Reset">
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- this script is for perview images -->
    <script>
    function previewImage(input, previewId) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#' + previewId + 'Preview').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>
</main><!-- End #main -->

@endsection