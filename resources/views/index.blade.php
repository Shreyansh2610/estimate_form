<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="assets/css/colors/switch.css">
    <!-- Color Alternatives -->
    <link href="{{ asset('assets/css/colors/color-2.css') }}" rel="alternate stylesheet" type="text/css"
        title="color-2">
    <link href="{{ asset('assets/css/colors/color-3.css') }}" rel="alternate stylesheet" type="text/css"
        title="color-3">
    <link href="{{ asset('assets/css/colors/color-4.css') }}" rel="alternate stylesheet" type="text/css"
        title="color-4">
    <link href="{{ asset('assets/css/colors/color-5.css') }}" rel="alternate stylesheet" type="text/css"
        title="color-5">
    {{-- <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" /> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <style>
        /* // <uniquifier>: Use a unique and descriptive class name
        // <weight>: Use a value from 100 to 900 */
        .fa,
        .fas {
            font-family: 'Font Awesome 5 Free' !important;
        }

        * {
            font-family: "Exo", sans-serif !important;
            font-optical-sizing: auto !important;
            font-weight: 400;
            font-style: normal;
        }

        span.error {
            color: red;
        }
    </style>

</head>

<body>

    {{-- <section>@include('header')</section> --}}

    <header>
        <div class="" style="background-color: #273272;color:white">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="d-flex justify-content-center justify-content-sm-start flex-column flex-sm-row">
                            <span
                                class="d-flex justify-content-center justify-content-sm-start align-content-center me-sm-3"><i
                                    class="fa fa-phone me-1" style="line-height: 1.5" aria-hidden="true"></i> +(44) 7423
                                506520</span>
                            <span class="d-flex justify-content-center justify-content-sm-start align-content-center"><i
                                    class="fa fa-envelope me-1" style="line-height: 1.5" aria-hidden="true"></i>
                                drs@ezcatch.co.in</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="d-flex justify-content-center justify-content-sm-end flex-row">
                            <span class="me-3" id="facebook">
                                <a href="https://www.facebook.com/people/Ezcatch-Pvt-Ltd/61560141517826/"
                                    aria-label="Facebook" class="facebook"><i class="bi bi-facebook"></i></a>
                            </span>
                            <span class="me-3" id="twitter-x">
                                <a href="https://x.com/EzcatchLtd" aria-label="Twitter" class="twitter"><i
                                        class="bi bi-twitter-x"></i></a>
                            </span>
                            <span class="me-3" id="youtube">
                                <a href="https://www.youtube.com/@ezcatchltd" aria-label="Youtube" class="youtube"><i
                                        class="bi bi-youtube"></i></a>
                            </span>
                            <span class="me-3" id="linkedin">
                                <a href="https://www.linkedin.com/company/ezcatch-ltd/" aria-label="LinkedIn"
                                    class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </span>
                            <span class="me-3" id="instagram">
                                <a href="https://www.instagram.com/ezcatchltd/" aria-label="Instagram"
                                    class="instagram"><i class="bi bi-instagram"></i></a>
                            </span>
                            <span class="me-3" id="pinterest">
                                <a href="https://www.pinterest.com/drs0408/" aria-label="pinterest" class="pinterest"><i
                                        class="bi bi-pinterest"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-body-tertiary" style="height: 60px;">
                <div class="container-fluid px-0 d-flex justify-content-between">
                    <img width="150" height="50"
                        src="https://ezcatch.co.in/wp-content/uploads/2024/05/ez-logo.png" alt="">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="bi bi-list"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-color: white;z-index:10000;">
                        <span>
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="color:#273272;">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item dropdown" style="position: initial;">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Services
                                    </a>
                                    <ul class="dropdown-menu p-5" style="width: 100%;z-index:10000; background-color:white">
                                        <div class="row">
                                            <div class="col-12 col-md-4 col-sm-6">
                                                <div class="h5">
                                                    <span><i class="bi bi-phone-fill"></i></span> Mobile App
                                                    Development
                                                </div>
                                                <div><a href="https://ezcatch.co.in/wp/ios-app-development/">iOS App Development</a></div>
                                                <div><a href="https://ezcatch.co.in/wp/android-app-development/">Android App Development</a></div>
                                                <div><a href="https://ezcatch.co.in/wp/swift-app-development-company/">Swift App Development</a></div>
                                                <div><a href="https://ezcatch.co.in/wp/ipad-app-development-company/">iPad App Developemnt</a></div>
                                                <div><a href="">Smart Watch App Development</a></div>
                                                <div><a href="">IOT App Development</a></div>
                                                <div><a href="">Flutter App Development</a></div>
                                                <div><a href="">AR & VR Development</a></div>
                                            </div>
                                            <div class="col-12 col-md-4 col-sm-6">

                                            </div>
                                            <div class="col-12 col-md-4 col-sm-6">

                                            </div>
                                        </div>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Industries
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Resources
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Case Studies</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Company
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Protfolio</a></li>
                                        <li><a class="dropdown-item" href="#">Contact Us</a></li>
                                        <li><a class="dropdown-item" href="#">About Us</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </span>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-primary">Contact Us</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="clearfix"></div>
    <div class="wrapper">
        <div class="steps-area steps-area-fixed">
            <div class="image-holder">
                <img src="assets/img/side-img.jpg" alt="">
            </div>
            <div class="steps clearfix">
                <ul class="tablist multisteps-form__progress">
                    <li class="multisteps-form__progress-btn js-active current">
                        <span>1</span>
                    </li>
                    <li class="multisteps-form__progress-btn">
                        <span>2</span>
                    </li>
                    <li class="multisteps-form__progress-btn last">
                        <span>3</span>
                    </li>
                </ul>
            </div>
        </div>
        <form class="multisteps-form__form" action="javascript:;" data-action="{{ route('formRequestSubmit') }}"
            id="form" method="POST">@csrf
            <div class="form-area position-relative">
                <!-- div 1 -->
                <div class="multisteps-form__panel js-active" data-animation="slideHorz">
                    <div class="wizard-forms">
                        <div class="inner pb-100 clearfix">
                            <div class="form-content pera-content">
                                <div class="step-inner-content">
                                    <span class="step-no">Step 1</span>
                                    <h2 class="pt-2">Tell Us About Your Business</h2>
                                    <p>Help us get to know you better! Share your company's essential details so we can
                                        tailor our services to your needs. Please fill in the form with your full name,
                                        email, phone number, and company information. Your website URL will give us more
                                        insight into your online presence. We look forward to collaborating with you!
                                    </p>
                                    <div class="step-box">
                                        <div class="row">
                                            <div class="col-md-12 form-inner-area">
                                                <label for="full_name">
                                                    <h3>Full name</h3>
                                                </label>
                                                <input type="text" id="full_name" name="full_name"
                                                    class="form-control" placeholder="Enter Full name">
                                            </div>
                                            <div class="col-md-12 form-inner-area">
                                                <label for="mail">
                                                    <h3>Mail</h3>
                                                </label>
                                                <input type="email" id="mail" name="mail"
                                                    class="form-control" placeholder="Enter mail">
                                            </div>
                                            <div class="col-md-12 form-inner-area">
                                                <label for="country">
                                                    <h3>Country</h3>
                                                </label>
                                                <input type="text" id="country" name="country"
                                                    class="form-control" placeholder="Entry Country">
                                            </div>
                                            <div class="col-md-12 form-inner-area">
                                                <label for="phone_number">
                                                    <h3>
                                                        Phone Number</h3>
                                                </label>
                                                <input type="text" id="phone_number" name="phone_number"
                                                    class="form-control" placeholder="Write Phone number">
                                            </div>
                                            <div class="col-md-12 form-inner-area">
                                                <label for="company_name">
                                                    <h3>Company name</h3>
                                                </label>
                                                <input type="text" id="company_name" name="company_name"
                                                    class="form-control" placeholder="Enter Company name">
                                            </div>
                                            <div class="col-md-12 form-inner-area">
                                                <label for="website_url">
                                                    <h3>Website URL</h3>
                                                </label>
                                                <input type="text" id="website_url" name="website_url"
                                                    class="form-control" placeholder="Enter Website URL">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.inner -->
                        <div class="actions">
                            <ul>
                                <li class="disable" aria-disabled="true"><span class="js-btn-next"
                                        title="NEXT">Backward <i class="fa fa-arrow-right"></i></span></li>
                                <li><span class="js-btn-next" title="NEXT">NEXT <i
                                            class="fa fa-arrow-right"></i></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- div 2 -->
                <div class="multisteps-form__panel" data-animation="slideHorz">
                    <div class="wizard-forms">
                        <div class="inner pb-100 clearfix">
                            <div class="form-content pera-content">
                                <div class="step-inner-content">
                                    <span class="step-no bottom-line">Step 2</span>
                                    <div class="step-progress float-end">
                                        <span>1 of 3 completed</span>
                                        <div class="step-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" style="width:34%"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <h2>Define Your Vision</h2>
                                    <p>
                                        Let's bring your project to life! Tell us what you're looking to achieve. Please
                                        provide a brief description of your project, including your goals and
                                        expectations. You can also upload any supporting documents or files. While your
                                        budget is optional, giving us an idea can help in tailoring our proposal to suit
                                        your needs. Select your preferences and describe your project thoroughly to help
                                        us understand your vision better
                                    </p>

                                    <div class="row">
                                        <div class="col-md-12 form-inner-area language-select mb-2">
                                            <label for="budget">
                                                <h3>Budget</h3>
                                            </label>
                                            {{-- <input type="text" id="full_name" name="full_name" class="form-control" placeholder="Enter Full name"> --}}
                                            <select name="budget" id="budget" class="form-control">
                                                <option value="">Select Budget</option>
                                                <option> 0 - 100 $</option>
                                                <option> 101 - 500 $</option>
                                                <option> 501 - 1000 $</option>
                                                <option> More than 1000 $</option>
                                            </select>
                                        </div>

                                        <div class="col-md-12 form-inner-area mb-1">
                                            <div class="comment-box">
                                                <label for="project_brief">
                                                    <h3>About Project</h3>
                                                </label>
                                                <textarea name="project_brief" id="project_brief" class="form-control" rows="5"
                                                    placeholder="Describe your project briefly"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="upload-documents mb-1">
                                        <label>Upload Documents:</label>
                                        <div class="upload-araa bg-white">
                                            <input type="hidden" value="" name="fileContent"
                                                id="fileContent">
                                            <input type="hidden" value="" name="filename" id="filename">
                                            <div class="upload-icon float-end">
                                                <i class="fas fa-cloud-upload-alt"></i>
                                            </div>
                                            <div class="upload-text">
                                                <span>( File accepted: pdf. doc/ docx -
                                                    Max file size : 150kb for demo limit )</span>
                                            </div>
                                            <div class="upload-option text-center">
                                                <label for="attach">Upload The Documents</label>
                                                <input id="attach" style="visibility:hidden;" name="file"
                                                    type="file" onchange="UploadFile()" id="file">
                                                <input type="hidden" name="File Url" id="fileUrl">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /.inner -->
                        <div class="actions">
                            <ul>
                                <li><span class="js-btn-prev" title="BACK"><i class="fa fa-arrow-left"></i> BACK
                                    </span></li>
                                <li><span class="js-btn-next" title="NEXT">NEXT <i
                                            class="fa fa-arrow-right"></i></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- div 3 -->
                <div class="multisteps-form__panel" data-animation="slideHorz">
                    <div class="wizard-forms">
                        <div class="inner pb-100 clearfix">
                            <div class="form-content pera-content">
                                <div class="step-inner-content">
                                    <span class="step-no bottom-line">Step 3</span>
                                    <div class="step-progress float-end">
                                        <span>2 of 3 completed</span>
                                        <div class="step-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" style="width:67%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <h2>Book a Discovery Call</h2>
                                    <p>Ready to dive into the details? Schedule a call with our team to discuss your
                                        project further. Choose your preferred date and time from the calendar and
                                        select your desired meeting platform – Zoom or Google Meet. We'll align our
                                        schedules based on your time zone to ensure a smooth and convenient
                                        conversation. Let’s connect and start planning your project!</p>
                                    <div class="language-select form-inner-area">
                                        <h3 for="time_zone">Time zome </h3>
                                        <select name="time_zone">
                                            <option value="">Select time zone</option>
                                            <option value='(GMT+00:00) Default (GMT+00:00) Default'>(GMT+00:00) Default
                                                (GMT+00:00) Default</option>
                                            <option value='(GMT-12:00) International Date Line West'>(GMT-12:00)
                                                International Date Line West</option>
                                            <option value='(GMT-11:00) Coordinated Universal Time-11'>(GMT-11:00)
                                                Coordinated Universal Time-11</option>
                                            <option value='(GMT-11:00) Samoa (GMT-11:00) Samoa'>(GMT-11:00) Samoa
                                                (GMT-11:00) Samoa</option>
                                            <option value='(GMT-10:00) Hawaii (GMT-10:00) Hawaii'>(GMT-10:00) Hawaii
                                                (GMT-10:00) Hawaii</option>
                                            <option value='(GMT-09:30) Marquesas Islands'>(GMT-09:30) Marquesas Islands
                                            </option>
                                            <option value='(GMT-09:00) Alaska (GMT-09:00) Alaska'>(GMT-09:00) Alaska
                                                (GMT-09:00) Alaska</option>
                                            <option value='(GMT-08:00) Baja California'>(GMT-08:00) Baja California
                                            </option>
                                            <option value='(GMT-08:00) Pacific Time (US &amp; Canada)'>(GMT-08:00)
                                                Pacific Time (US &amp; Canada)</option>
                                            <option value='(GMT-07:00) Chihuahua,Mazatlan'>(GMT-07:00)
                                                Chihuahua,Mazatlan</option>
                                            <option value='(GMT-07:00) Arizona (GMT-07:00) Arizona'>(GMT-07:00) Arizona
                                                (GMT-07:00) Arizona</option>
                                            <option value='(GMT-07:00) Mountain Time (US &amp; Canada)'>(GMT-07:00)
                                                Mountain Time (US &amp; Canada)</option>
                                            <option value='(GMT-06:00) Central Time (US &amp; Canada)'>(GMT-06:00)
                                                Central Time (US &amp; Canada)</option>
                                            <option value='(GMT-06:00) Central America'>(GMT-06:00) Central America
                                            </option>
                                            <option value='(GMT-06:00) Guadalajara,Mexico City, Monterrey'>(GMT-06:00)
                                                Guadalajara,Mexico City, Monterrey</option>
                                            <option value='(GMT-06:00) Saskatchewan (GMT-06:00) Saskatchewan'>
                                                (GMT-06:00) Saskatchewan (GMT-06:00) Saskatchewan</option>
                                            <option value='(GMT-05:00) Bogota, Lima, Quito'>(GMT-05:00) Bogota, Lima,
                                                Quito</option>
                                            <option value='(GMT-05:00) Eastern Time (US &amp; Canada)'>(GMT-05:00)
                                                Eastern Time (US &amp; Canada)</option>
                                            <option value='(GMT-05:00) Indiana (East) (GMT-05:00) Indiana (East)'>
                                                (GMT-05:00) Indiana (East) (GMT-05:00) Indiana (East)</option>
                                            <option value='(GMT-04:30) Caracas (GMT-04:30) Caracas'>(GMT-04:30) Caracas
                                                (GMT-04:30) Caracas</option>
                                            <option value='(GMT-04:00) Atlantic Time (Canada)'>(GMT-04:00) Atlantic
                                                Time (Canada)</option>
                                            <option value='(GMT-04:00) Asuncion (GMT-04:00) Asuncion'>(GMT-04:00)
                                                Asuncion (GMT-04:00) Asuncion</option>
                                            <option value='(GMT-04:00) Cuiaba (GMT-04:00) Cuiaba'>(GMT-04:00) Cuiaba
                                                (GMT-04:00) Cuiaba</option>
                                            <option value='(GMT-04:00) Santiago (GMT-04:00) Santiago'>(GMT-04:00)
                                                Santiago (GMT-04:00) Santiago</option>
                                            <option value='(GMT-04:00) Georgetown, La Paz, Manaus, San Juan'>
                                                (GMT-04:00) Georgetown, La Paz, Manaus, San Juan</option>
                                            <option value='(GMT-03:30) Newfoundland (GMT-03:30) Newfoundland'>
                                                (GMT-03:30) Newfoundland (GMT-03:30) Newfoundland</option>
                                            <option value='(GMT-03:00) Buenos Aires (GMT-03:00) Buenos Aires'>
                                                (GMT-03:00) Buenos Aires (GMT-03:00) Buenos Aires</option>
                                            <option value='(GMT-03:00) Brasilia (GMT-03:00) Brasilia'>(GMT-03:00)
                                                Brasilia (GMT-03:00) Brasilia</option>
                                            <option value='(GMT-03:00) Cayenne, Fortaleza'>(GMT-03:00) Cayenne,
                                                Fortaleza</option>
                                            <option value='(GMT-03:00) Montevideo (GMT-03:00) Montevideo'>(GMT-03:00)
                                                Montevideo (GMT-03:00) Montevideo</option>
                                            <option value='(GMT-03:00) Greenland (GMT-03:00) Greenland'>(GMT-03:00)
                                                Greenland (GMT-03:00) Greenland</option>
                                            <option value='(GMT-02:00) Coordinated Universal Time-02'>(GMT-02:00)
                                                Coordinated Universal Time-02</option>
                                            <option value='(GMT-02:00) Mid-Atlantic (GMT-02:00) Mid-Atlantic'>
                                                (GMT-02:00) Mid-Atlantic (GMT-02:00) Mid-Atlantic</option>
                                            <option value='(GMT-01:00) Azores (GMT-01:00) Azores'>(GMT-01:00) Azores
                                                (GMT-01:00) Azores</option>
                                            <option value='(GMT-01:00) Cape Verde Is. (GMT-01:00) Cape Verde Is.'>
                                                (GMT-01:00) Cape Verde Is. (GMT-01:00) Cape Verde Is.</option>
                                            <option value='(GMT+00:00) Casablanca (GMT+00:00) Casablanca'>(GMT+00:00)
                                                Casablanca (GMT+00:00) Casablanca</option>
                                            <option value='(GMT+00:00) Monrovia,Reykjavik'>(GMT+00:00)
                                                Monrovia,Reykjavik</option>
                                            <option
                                                value='(GMT+00:00) Greenwich Mean Time : Dublin,Edinburgh,Lisbon, London'>
                                                (GMT+00:00) Greenwich Mean Time : Dublin,Edinburgh,Lisbon, London
                                            </option>
                                            <option value='(GMT+01:00) Sarajevo,Skopje, Warsaw, Zagreb'>(GMT+01:00)
                                                Sarajevo,Skopje, Warsaw, Zagreb</option>
                                            <option value='(GMT+01:00) West Central Africa'>(GMT+01:00) West Central
                                                Africa</option>
                                            <option
                                                value='(GMT+01:00) Belgrade,Bratislava, Budapest, Ljubljana, Prague'>
                                                (GMT+01:00) Belgrade,Bratislava, Budapest, Ljubljana, Prague</option>
                                            <option value='(GMT+01:00) Brussels, Copenhagen,Madrid, Paris'>(GMT+01:00)
                                                Brussels, Copenhagen,Madrid, Paris</option>
                                            <option value='(GMT+01:00) Amsterdam,Berlin, Bern, Rome,Stockholm, Vienna'>
                                                (GMT+01:00) Amsterdam,Berlin, Bern, Rome,Stockholm, Vienna</option>
                                            <option value='(GMT+02:00) Harare, Pretoria'>(GMT+02:00) Harare, Pretoria
                                            </option>
                                            <option value='(GMT+02:00) Damascus (GMT+02:00) Damascus'>(GMT+02:00)
                                                Damascus (GMT+02:00) Damascus</option>
                                            <option value='(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius'>
                                                (GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
                                            <option value='(GMT+02:00) Windhoek (GMT+02:00) Windhoek'>(GMT+02:00)
                                                Windhoek (GMT+02:00) Windhoek</option>
                                            <option value='(GMT+02:00) Minsk (GMT+02:00) Minsk'>(GMT+02:00) Minsk
                                                (GMT+02:00) Minsk</option>
                                            <option value='(GMT+02:00) Athens,Bucharest, Istanbul'>(GMT+02:00)
                                                Athens,Bucharest, Istanbul</option>
                                            <option value='(GMT+02:00) Amman (GMT+02:00) Amman'>(GMT+02:00) Amman
                                                (GMT+02:00) Amman</option>
                                            <option value='(GMT+02:00) Beirut (GMT+02:00) Beirut'>(GMT+02:00) Beirut
                                                (GMT+02:00) Beirut</option>
                                            <option value='(GMT+02:00) Jerusalem (GMT+02:00) Jerusalem'>(GMT+02:00)
                                                Jerusalem (GMT+02:00) Jerusalem</option>
                                            <option value='(GMT+02:00) Cairo (GMT+02:00) Cairo'>(GMT+02:00) Cairo
                                                (GMT+02:00) Cairo</option>
                                            <option value='(GMT+03:00) Kuwait, Riyadh (GMT+03:00) Kuwait, Riyadh'>
                                                (GMT+03:00) Kuwait, Riyadh (GMT+03:00) Kuwait, Riyadh</option>
                                            <option value='(GMT+03:00) Moscow, St. Petersburg, Volgograd'>(GMT+03:00)
                                                Moscow, St. Petersburg, Volgograd</option>
                                            <option value='(GMT+03:00) Baghdad (GMT+03:00) Baghdad'>(GMT+03:00) Baghdad
                                                (GMT+03:00) Baghdad</option>
                                            <option value='(GMT+03:00) Nairobi (GMT+03:00) Nairobi'>(GMT+03:00) Nairobi
                                                (GMT+03:00) Nairobi</option>
                                            <option value='(GMT+03:30) Tehran (GMT+03:30) Tehran'>(GMT+03:30) Tehran
                                                (GMT+03:30) Tehran</option>
                                            <option value='(GMT+04:00) Port Louis (GMT+04:00) Port Louis'>(GMT+04:00)
                                                Port Louis (GMT+04:00) Port Louis</option>
                                            <option value='(GMT+04:00) Tbilisi (GMT+04:00) Tbilisi'>(GMT+04:00) Tbilisi
                                                (GMT+04:00) Tbilisi</option>
                                            <option value='(GMT+04:00) Baku (GMT+04:00) Baku'>(GMT+04:00) Baku
                                                (GMT+04:00) Baku</option>
                                            <option value='(GMT+04:00) Yerevan (GMT+04:00) Yerevan'>(GMT+04:00) Yerevan
                                                (GMT+04:00) Yerevan</option>
                                            <option value='(GMT+04:00) Abu Dhabi, Muscat'>(GMT+04:00) Abu Dhabi, Muscat
                                            </option>
                                            <option value='(GMT+04:30) Kabul (GMT+04:30) Kabul'>(GMT+04:30) Kabul
                                                (GMT+04:30) Kabul</option>
                                            <option value='(GMT+05:00) Yekaterinburg (GMT+05:00) Yekaterinburg'>
                                                (GMT+05:00) Yekaterinburg (GMT+05:00) Yekaterinburg</option>
                                            <option value='(GMT+05:00) Islamabad,Karachi'>(GMT+05:00) Islamabad,Karachi
                                            </option>
                                            <option value='(GMT+05:00) Tashkent (GMT+05:00) Tashkent'>(GMT+05:00)
                                                Tashkent (GMT+05:00) Tashkent</option>
                                            <option value='(GMT+05:30) Chennai, Kolkata, Mumbai,New Delhi'>(GMT+05:30)
                                                Chennai, Kolkata, Mumbai,New Delhi</option>
                                            <option value='(GMT+05:30) Sri Jayawardenepura'>(GMT+05:30) Sri
                                                Jayawardenepura</option>
                                            <option value='(GMT+05:45) Kathmandu (GMT+05:45) Kathmandu'>(GMT+05:45)
                                                Kathmandu (GMT+05:45) Kathmandu</option>
                                            <option value='(GMT+06:00) Dhaka (GMT+06:00) Dhaka'>(GMT+06:00) Dhaka
                                                (GMT+06:00) Dhaka</option>
                                            <option value='(GMT+06:00) Novosibirsk (GMT+06:00) Novosibirsk'>(GMT+06:00)
                                                Novosibirsk (GMT+06:00) Novosibirsk</option>
                                            <option value='(GMT+06:00) Astana (GMT+06:00) Astana'>(GMT+06:00) Astana
                                                (GMT+06:00) Astana</option>
                                            <option value='(GMT+06:30) Yangon (Rangoon)'>(GMT+06:30) Yangon (Rangoon)
                                            </option>
                                            <option value='(GMT+07:00) Krasnoyarsk (GMT+07:00) Krasnoyarsk'>(GMT+07:00)
                                                Krasnoyarsk (GMT+07:00) Krasnoyarsk</option>
                                            <option value='(GMT+07:00) Bangkok, Hanoi,Jakarta'>(GMT+07:00) Bangkok,
                                                Hanoi,Jakarta</option>
                                            <option value='(GMT+08:00) Ulaanbaatar (GMT+08:00) Ulaanbaatar'>(GMT+08:00)
                                                Ulaanbaatar (GMT+08:00) Ulaanbaatar</option>
                                            <option value='(GMT+08:00) Perth (GMT+08:00) Perth'>(GMT+08:00) Perth
                                                (GMT+08:00) Perth</option>
                                            <option value='(GMT+08:00) Taipei (GMT+08:00) Taipei'>(GMT+08:00) Taipei
                                                (GMT+08:00) Taipei</option>
                                            <option value='(GMT+08:00) Kuala Lumpur,Singapore'>(GMT+08:00) Kuala
                                                Lumpur,Singapore</option>
                                            <option value='(GMT+08:00) Beijing,Chongqing,Hong Kong, Urumqi'>(GMT+08:00)
                                                Beijing,Chongqing,Hong Kong, Urumqi</option>
                                            <option value='(GMT+08:00) Irkutsk (GMT+08:00) Irkutsk'>(GMT+08:00) Irkutsk
                                                (GMT+08:00) Irkutsk</option>
                                            <option value='(GMT+08:30) Pyongyang (GMT+08:30) Pyongyang'>(GMT+08:30)
                                                Pyongyang (GMT+08:30) Pyongyang</option>
                                            <option value='(GMT+08:30) Eucla (GMT+08:30) Eucla'>(GMT+08:30) Eucla
                                                (GMT+08:30) Eucla</option>
                                            <option value='(GMT+09:00) Seoul (GMT+09:00) Seoul'>(GMT+09:00) Seoul
                                                (GMT+09:00) Seoul</option>
                                            <option value='(GMT+09:00) Osaka,Sapporo, Tokyo'>(GMT+09:00) Osaka,Sapporo,
                                                Tokyo</option>
                                            <option value='(GMT+09:00) Yakutsk (GMT+09:00) Yakutsk'>(GMT+09:00) Yakutsk
                                                (GMT+09:00) Yakutsk</option>
                                            <option value='(GMT+09:30) Darwin (GMT+09:30) Darwin'>(GMT+09:30) Darwin
                                                (GMT+09:30) Darwin</option>
                                            <option value='(GMT+09:30) Adelaide (GMT+09:30) Adelaide'>(GMT+09:30)
                                                Adelaide (GMT+09:30) Adelaide</option>
                                            <option value='(GMT+10:00) Hobart (GMT+10:00) Hobart'>(GMT+10:00) Hobart
                                                (GMT+10:00) Hobart</option>
                                            <option value='(GMT+10:00) Vladivostok (GMT+10:00) Vladivostok'>(GMT+10:00)
                                                Vladivostok (GMT+10:00) Vladivostok</option>
                                            <option value='(GMT+10:00) Guam, Port Moresby'>(GMT+10:00) Guam, Port
                                                Moresby</option>
                                            <option value='(GMT+10:00) Brisbane (GMT+10:00) Brisbane'>(GMT+10:00)
                                                Brisbane (GMT+10:00) Brisbane</option>
                                            <option value='(GMT+10:00) Canberra,Melbourne, Sydney'>(GMT+10:00)
                                                Canberra,Melbourne, Sydney</option>
                                            <option value='(GMT+10:30) Lord Howe Island'>(GMT+10:30) Lord Howe Island
                                            </option>
                                            <option value='(GMT+11:00) Magadan, Solomon Is.,New Caledonia'>(GMT+11:00)
                                                Magadan, Solomon Is.,New Caledonia</option>
                                            <option value='(GMT+12:00) Fiji (GMT+12:00) Fiji'>(GMT+12:00) Fiji
                                                (GMT+12:00) Fiji</option>
                                            <option value='(GMT+12:00) Petropavlovsk-Kamchatsky'>(GMT+12:00)
                                                Petropavlovsk-Kamchatsky</option>
                                            <option value='(GMT+12:00) Auckland, Wellington'>(GMT+12:00) Auckland,
                                                Wellington</option>
                                            <option value='(GMT+12:00) Coordinated Universal Time+12'>(GMT+12:00)
                                                Coordinated Universal Time+12</option>
                                            <option value='(GMT+12:45) Chatham Islands'>(GMT+12:45) Chatham Islands
                                            </option>
                                            <option value='(GMT+13:00) Phoenix Islands, Tokelau, Tonga'>(GMT+13:00)
                                                Phoenix Islands, Tokelau, Tonga</option>
                                            <option value='(GMT+14:00) Line Islands'>(GMT+14:00) Line Islands</option>

                                        </select>
                                    </div>


                                    <div class="step-content-field">
                                        <div class="form-inner-area">
                                            <h3 for="meeting">Date</h3>
                                        </div>
                                        <div class="date-picker date datepicker">
                                            <input type="text" name="date" id="date"
                                                class="form-control">
                                            <div class="input-group-append"><span>ADD TIME</span></div>
                                        </div>
                                        <div class="form-inner-area">
                                            <h3 for="meeting">Meeting</h3>
                                        </div>
                                        <div class="plan-area">
                                            <div class="plan-icon-text text-center active">
                                                <div class="plan-icon">
                                                    {{-- <i class="fas fa-chess-queen"></i> --}}
                                                    <img src="{{ asset('assets/img/zoom_logo.svg') }}" alt="Zoom"
                                                        height="50px" width="70px" srcset="">
                                                </div>
                                                <div class="plan-text">
                                                    <h3>Zoom</h3>
                                                    <p>Zoom is a proprietary videotelephony software program developed
                                                        by Zoom Video Communications. The free plan allows up to 100
                                                        concurrent participants, with a 40-minute time restriction.</p>
                                                    <input type="radio" name="meeting" id="meeting"
                                                        value="Zoom meeting" checked="">
                                                </div>
                                            </div>
                                            <div class="plan-icon-text text-center">
                                                <div class="plan-icon">
                                                    {{-- <i class="fas fa-cubes"></i> --}}
                                                    <img src="{{ asset('assets/img/google_meet.png') }}"
                                                        alt="Zoom" height="50px" width="50px" srcset="">
                                                </div>
                                                <div class="plan-text">
                                                    <h3>Google Meet</h3>
                                                    <p>Google Meet is a video communication service developed by Google.
                                                        It is one of two apps that constitute the replacement for Google
                                                        Hangouts, the other being Google Chat.</p>
                                                    <input type="radio" name="meeting" id="meeting"
                                                        value="Google Meet">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ./inner -->
                        <div class="actions">
                            <ul>
                                <li><span class="js-btn-prev" title="BACK"><i class="fa fa-arrow-left"></i> BACK
                                    </span></li>
                                <li><button type="submit" title="NEXT">SUBMIT <i
                                            class="fa fa-arrow-right"></i></button></li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    {{-- <section>@include('footer')</section> --}}

    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/conditionize.flexible.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/switch.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $("#files").change(function() {
            filename = this.files[0].name
            // console.log(filename);
        });

        function UploadFile() {
            var reader = new FileReader();
            var file = document.getElementById('attach').files[0];
            reader.onload = function() {
                document.getElementById('fileContent').value = reader.result;
                document.getElementById('filename').value = file.name;
                // document.getElementById('wizard').submit();
            }
            reader.readAsDataURL(file);
        }

        $(document).ready(function() {
            // $('.conditional').conditionize();

            $('#form').submit(function(e) {
                e.preventDefault();
                let form = $(this);
                form.validate({
                    rules: {
                        'full_name': 'required',
                        'mail': 'required',
                        'country': 'required',
                        'phone_number': 'required',
                        'company_name': 'required',
                        'website_url': 'required',
                        'project_brief': 'required',
                        'date': 'required',
                        'time_zone': 'required',
                        'meeting': 'required',
                        'file': 'required',

                    },
                    messages: {
                        'full_name': 'Full name is required',
                        'mail': 'Emsil is required',
                        'country': ' Country is required',
                        'phone_number': 'Phone number is required',
                        'company_name': 'Country is required',
                        'website_url': 'Website URL is required',
                        'project_brief': 'Project brief is required',
                        'date': 'Date is required',
                        'time_zone': 'Time zone is required',
                        'meeting': 'Meeting is required',
                        'file': 'File is required',
                    },
                    errorElement: 'span',
                    errorLabelContainer: '.errorTxt',
                    errorPlacement: function(error, element) {
                        error.appendTo(element.parent("div"));
                    }
                });
                if (form.valid()) {
                    Swal.fire({
                        title: "Loading",
                        html: "Please while adding file.",
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading();
                        },
                    })
                    $.ajax({
                        type: "POST",
                        url: form.data('action'),
                        data: form.serialize(),
                        dataType: "JSON",
                        success: function(response) {
                            Swal.hideLoading();
                            let fileUrl = response.fileUrl;
                            $('#fileUrl').val(fileUrl);
                            formSubmit(form);
                        },
                        error: function(response) {
                            console.log('failed to save file and sending mail');
                            Swal.hideLoading();
                            Swal.fire({
                                icon: "error",
                                title: "Oops...",
                                text: "Failed to save file"
                            });
                        }
                    });
                }
            });

            function formSubmit(form) {
                let dataSubmit = {
                    "Full Name": form.find('#full_name').val(),
                    "Email": form.find('#mail').val(),
                    "Country": form.find('#country').val(),
                    "Phone Number": form.find('#phone_number').val(),
                    "Company Name": form.find('#company_name').val(),
                    "Website Url": form.find('#website_url').val(),
                    "Budget": form.find('#budget').val(),
                    "Project Brief": form.find('#project_brief').val(),
                    "File": form.find('#fileUrl').val(),
                    "Date": form.find('#date').val(),
                    "Time Zone": form.find('#time_zone').val(),
                    "Meeting": form.find('[name="meeting"]:checked').val(),
                }
                Swal.fire({
                    title: "Loading",
                    html: "Please while data google sheet.",
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading();
                    },
                })
                $.ajax({
                    type: "POST",
                    url: "https://script.google.com/macros/s/AKfycbwxJkjreAxmdhSNYfqwuInnFtPI9ofiWTsRO5DXom-Q59FMI86WuiaTUl0UYKasf6-lVQ/exec",
                    data: dataSubmit,
                    dataType: "JSON",
                    success: function(response) {
                        Swal.hideLoading();
                        Swal.fire({
                            title: "Data Saved",
                            text: "Data is saved in google sheet.",
                            icon: "success"
                        }).then((result) => {
                            window.location.reload();
                        });
                    },
                    error: function(response) {
                        console.log('failed to enter data into sheet');
                        Swal.hideLoading();
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Failed to save file"
                        });
                    }
                });
            }
        });
    </script>
</body>

</html>
