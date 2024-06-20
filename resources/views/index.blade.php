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
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css')}}">

    <link rel="stylesheet" type="text/css" href="assets/css/colors/switch.css">
    <!-- Color Alternatives -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    {{-- <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" /> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

</head>

<body>

    <header class="sticky-top">
        <div class="py-3 top-header">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="d-flex justify-content-center justify-content-sm-start  flex-sm-row">
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
                            <span class="me-4" id="facebook">
                                <a href="https://www.facebook.com/people/Ezcatch-Pvt-Ltd/61560141517826/"
                                    aria-label="Facebook" class="facebook"><i class="bi bi-facebook"></i></a>
                            </span>
                            <span class="me-4" id="twitter-x">
                                <a href="https://x.com/EzcatchLtd" aria-label="Twitter" class="twitter"><i
                                        class="bi bi-twitter-x"></i></a>
                            </span>
                            <span class="me-4" id="youtube">
                                <a href="https://www.youtube.com/@ezcatchltd" aria-label="Youtube" class="youtube"><i
                                        class="bi bi-youtube"></i></a>
                            </span>
                            <span class="me-4" id="linkedin">
                                <a href="https://www.linkedin.com/company/ezcatch-ltd/" aria-label="LinkedIn"
                                    class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </span>
                            <span class="me-4" id="instagram">
                                <a href="https://www.instagram.com/ezcatchltd/" aria-label="Instagram"
                                    class="instagram"><i class="bi bi-instagram"></i></a>
                            </span>
                            <span class="me-4" id="pinterest">
                                <a href="https://www.pinterest.com/drs0408/" aria-label="pinterest" class="pinterest"><i
                                        class="bi bi-pinterest"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-body-tertiary" style="height: 80px;">
                <div class="container-fluid px-0 d-flex justify-content-between">
                    <img width="220" height="70"
                        src="https://ezcatch.co.in/wp-content/uploads/2024/05/ez-logo.png" alt="">
                    <div class="d-grid justify-content-end justify-content-lg-center">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="bi bi-list"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent"
                            style="background-color: white;z-index:10000;">
                            <span>
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="color:#273272;">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="https://ezcatch.co.in/"
                                            >Home</a>
                                    </li>
                                    <li class="nav-item dropdown" style="position: initial;">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"

                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Services
                                        </a>
                                        <div class="dropdown-menu p-5"
                                            style="width: 100%;z-index:10000; background-color:white">
                                            <div class="row">
                                                <div class="col-12 col-md-4">
                                                    <div class="h5">
                                                        <span><i class="bi bi-phone-fill"></i></span> Mobile App
                                                        Development
                                                    </div>
                                                    <div class="mb-1"><a
                                                            href="https://ezcatch.co.in/wp/ios-app-development/">iOS
                                                            App
                                                            Development</a></div>
                                                    <div class="mb-1"><a
                                                            href="https://ezcatch.co.in/wp/android-app-development/">Android
                                                            App Development</a></div>
                                                    <div class="mb-1"><a
                                                            href="https://ezcatch.co.in/wp/swift-app-development-company/">Swift
                                                            App Development</a></div>
                                                    <div class="mb-1"><a
                                                            href="https://ezcatch.co.in/wp/ipad-app-development-company/">iPad
                                                            App Developemnt</a></div>
                                                    <div class="mb-1"><a
                                                            href="https://ezcatch.co.in/wp/smart-watch-development-company/">Smart
                                                            Watch App Development</a></div>
                                                    <div class="mb-1"><a
                                                            href="https://ezcatch.co.in/wp/iot-app-development/">IOT
                                                            App
                                                            Development</a></div>
                                                    <div class="mb-1"><a
                                                            href="https://ezcatch.co.in/wp/flutter-app-development/">Flutter
                                                            App Development</a></div>
                                                    <div class="mb-1"><a
                                                            href="https://ezcatch.co.in/wp/ar-vr-development/">AR & VR
                                                            Development</a></div>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <div class="h5">
                                                        <span><i class="bi bi-basket2-fill"></i></span> WEB/CMS &
                                                        ECOMMERCE
                                                    </div>
                                                    <div class="mb-1"><a
                                                            href="https://ezcatch.co.in/wp/php-development/">PHP
                                                            Development</a></div>
                                                    <div class="mb-1"><a
                                                            href="https://ezcatch.co.in/wp/laravel-development">Laravel
                                                            Development</a></div>
                                                    <div class="mb-1"><a
                                                            href="https://ezcatch.co.in/wp/angularjs-development">Angularjs
                                                            Development</a></div>
                                                    <div class="mb-1"><a
                                                            href="https://ezcatch.co.in/wp/wordpress-development">WordPress
                                                            Developemnt</a></div>
                                                    <div class="mb-1"><a
                                                            href="https://ezcatch.co.in/wp/woocommerce-development">WooCommerce
                                                            Development</a></div>
                                                    <div class="mb-1"><a
                                                            href="https://ezcatch.co.in/wp/magento-development">Magento
                                                            Development</a></div>
                                                    <div class="mb-1"><a
                                                            href="https://ezcatch.co.in/wp/shopify-development">Shopify
                                                            App Development</a></div>
                                                    <div class="mb-1"><a
                                                            href="https://ezcatch.co.in/wp/python-development">Python
                                                            Development</a></div>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <div class="h5">
                                                        <span><i class="bi bi-graph-up-arrow"></i></span> DIGITAL
                                                        MARKETING
                                                    </div>
                                                    <div class="mb-1"><a
                                                            href="https://ezcatch.co.in/wp/search-engine-optimization">SEO
                                                            (Search Engine Optimization)</a></div>
                                                    <div class="mb-1"><a
                                                            href="https://ezcatch.co.in/wp/social-media-marketing">SMM
                                                            (Social Media Marketing)</a></div>
                                                    <div class="mb-1"><a
                                                            href="https://ezcatch.co.in/wp/search-engine-marketing/">SEM
                                                            (Social Engine Marketing)</a></div>
                                                    <div class="mb-1"><a
                                                            href="https://ezcatch.co.in/wp/app-store-optimization">App
                                                            Store Optimization</a></div>

                                                    <div class="h5 mt-3">
                                                        <span><i class="bi bi-plus-circle-fill"></i></span> OTHER
                                                        SERVICES
                                                    </div>
                                                    <div class="mb-1"><a
                                                            href="https://ezcatch.co.in/wp/ui-ux-design-development">UI/UX
                                                            Design & Development</a></div>
                                                    <div class="mb-1"><a
                                                            href="https://ezcatch.co.in/wp/testing-and-quality-assurance">Testing
                                                            and Quality Assurance</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown " style="position: initial;">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"

                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Industries
                                        </a>
                                        <div class="dropdown-menu p-5"
                                            style="width: 100%;z-index:10000; background-color:white">
                                            <div class="row">
                                                <div class="col-12 col-md-4 col-sm-6">
                                                    <div class="mb-3"><a
                                                            href="https://ezcatch.co.in/wp/travel-app-development-company/"><i
                                                                class="bi bi-building"></i> Travel &amp;
                                                            Hospitality</a></div>
                                                    <div class="mb-3"><a
                                                            href="https://ezcatch.co.in/wp/education-service-development-company/"><i
                                                                class="bi bi-book-fill"></i> Education
                                                            &amp; Learning</a></div>
                                                    <div class="mb-3"><a
                                                            href="https://ezcatch.co.in/wp/social-networking-app-development-company/"><i
                                                                class="bi bi-people-fill"></i> Social
                                                            Networking</a></div>
                                                    <div><a
                                                            href="https://ezcatch.co.in/wp/energy-utilities-service-company/"><i
                                                                class="bi bi-lightbulb"></i> Energy
                                                            Utilities</a></div>
                                                </div>
                                                <div class="col-12 col-md-4 col-sm-6">
                                                    <div class="mb-3"><a
                                                            href="https://ezcatch.co.in/wp/real-estate-development-service/"><i
                                                                class="bi bi-house-door"></i> Real Estate</a></div>
                                                    <div class="mb-3"><a
                                                            href="https://ezcatch.co.in/wp/fitness-wellness-service-company/"><i
                                                                class="bi bi-person-walking"></i> Fitness &
                                                            Wellness</a>
                                                    </div>
                                                    <div class="mb-3"><a
                                                            href="https://ezcatch.co.in/wp/ecommerce-development-company/"><i
                                                                class="bi bi-cart-fill"></i> E Commerce</a></div>
                                                    <div><a href="https://ezcatch.co.in/wp/sports-service-company/"><i
                                                                class="bi bi-bicycle"></i> Sport & Games</a></div>
                                                </div>

                                                <div class="col-12 col-md-4 col-sm-6">
                                                    <div class="mb-3"><a
                                                            href="https://ezcatch.co.in/wp/healthcare-and-medical-development-services/"><i
                                                                class="bi bi-bag-plus"></i> Medical & Healthcare</a>
                                                    </div>
                                                    <div class="mb-3"><a
                                                            href="https://ezcatch.co.in/wp/fintech-company/"><i
                                                                class="bi bi-bank"></i> Banking & Finance</a></div>
                                                    <div class="mb-3"><a
                                                            href="https://ezcatch.co.in/wp/logistic-development/"><i
                                                                class="bi bi-train-freight-front"></i> Logistics &
                                                            Distributions</a></div>
                                                    <div><a
                                                            href="https://ezcatch.co.in/wp/media-entertainment-app-development-services/"><i
                                                                class="bi bi-film"></i> Media & Entertainment</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"

                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Resources
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://ezcatch.co.in/case-studies/">Case Studies</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"

                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Company
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://ezcatch.co.in/portfolio">Portfolio</a></li>
                                            <li><a class="dropdown-item"
                                                    href="https://ezcatch.co.in/contact-us/">Contact Us</a></li>
                                            <li><a class="dropdown-item" href="https://ezcatch.co.in/about-us/">About
                                                    Us</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center d-none d-md-inline">
                        <a class="btn btn-primary contact-us" href="https://ezcatch.co.in/contact-us/">Contact Us</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
    <div class="clearfix"></div>

    <main class="wrapper">
        <div class="row">
            <div class="col-12 col-lg-4" style="background-image: url('assets/img/side-img.jpg');">
                <div class="steps-area h-100">
                    <div class="steps clearfix"
                        style="position:relative;float:right;">
                        <ul class="tablist multisteps-form__progress">
                            <li class="multisteps-form__progress-btn js-active current" data-id="1">
                                <span>1</span>
                            </li>
                            <li class="multisteps-form__progress-btn" data-id="2">
                                <span>2</span>
                            </li>
                            <li class="multisteps-form__progress-btn last" data-id="3">
                                <span>3</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8 fomr-area">

                <form class="multisteps-form__form form-field-start mb-6" action="javascript:;"
                    data-action="{{ route('formRequestSubmit') }}" id="form" method="POST">@csrf
                    <div class="form-area position-relative">
                        <!-- div 1 -->
                        <div class="multisteps-form__panel mb-3 js-active" data-animation="slideHorz" data-id="1">
                            <div class="wizard-forms">
                                <div class="inner clearfix">
                                    <div class="form-content pera-content">
                                        <div class="step-inner-content pb-0">
                                            <span class="step-no">Step 1</span>
                                            <h3 class="pt-2 fw-bold">Tell Us About Your Business</h3>
                                            <p style="margin-bottom: 18px;">Tell us about your company! Share your
                                                details,
                                                so
                                                we can better serve you. We
                                                look forward to working together!
                                            </p>
                                            <div class="step-box pt-3">
                                                <div class="row">
                                                    <div class="col-md-12 form-inner-area mb-3">
                                                        <label for="full_name" class="mb-1">
                                                            <h5>Full name<span class="required">*</span></h5>
                                                        </label>
                                                        <input type="text" id="full_name" name="full_name"
                                                            style="height: 45px;" class="form-control mb-0 px-3"
                                                            placeholder="Enter Full name">
                                                    </div>
                                                    <div class="col-md-12 form-inner-area mb-3">
                                                        <label for="mail" class="mb-1">
                                                            <h5>Mail<span class="required">*</span></h5>
                                                        </label>
                                                        <input type="email" id="mail" name="mail"
                                                            style="height: 45px;" class="form-control mb-0 px-3"
                                                            placeholder="Enter mail">
                                                    </div>
                                                    <div class="col-md-12 form-inner-area mb-3">
                                                        <label for="country" class="mb-1">
                                                            <h5>Country<span class="required">*</span></h5>
                                                        </label>
                                                        <input type="text" id="country" name="country"
                                                            style="height: 45px;" class="form-control mb-0 px-3"
                                                            placeholder="Entry Country">
                                                    </div>
                                                    <div class="col-md-12 form-inner-area mb-3">
                                                        <label for="phone_number" class="mb-1">
                                                            <h5>
                                                                Phone Number<span class="required">*</span></h5>
                                                        </label>
                                                        <input type="text" id="phone_number" name="phone_number"
                                                            style="height: 45px;" class="form-control mb-0 px-3"
                                                            placeholder="Write Phone number with country code">
                                                    </div>
                                                    <div class="col-md-12 form-inner-area mb-3">
                                                        <label for="company_name" class="mb-1">
                                                            <h5>Company name<span class="required">*</span></h5>
                                                        </label>
                                                        <input type="text" id="company_name" name="company_name"
                                                            style="height: 45px;" class="form-control mb-0 px-3"
                                                            placeholder="Enter Company name">
                                                    </div>
                                                    <div class="col-md-12 form-inner-area mb-3">
                                                        <label for="website_url" class="mb-1">
                                                            <h5>Website URL</h5>
                                                        </label>
                                                        <input type="text" id="website_url" name="website_url"
                                                            style="height: 45px;" class="form-control mb-0 px-3"
                                                            placeholder="Enter Website URL">
                                                    </div>
                                                    <div class="col-12 my-3">
                                                        <button type="button" class="float-end btn py-1 next-btn-1"
                                                            title="NEXT"
                                                            style="width: 147px;height:53px;line-height:49px;background-color:black;color:white;font-size:20px;">
                                                            NEXT <i class="fa fa-arrow-right"></i>
                                                        </button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.inner -->

                                <ul class="float-end me-5 me-md-auto">
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- div 2 -->
                    <div class="multisteps-form__panel mb-3" data-animation="slideHorz" data-id="2">
                        <div class="wizard-forms">
                            <div class="inner clearfix">
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

                                        <h3 class="pt-2 fw-bold">Define Your Vision</h3>
                                        <p style="margin-bottom: 18px;">
                                            Help us bring your project to life! Briefly describe your project goals and
                                            expectations. You can upload any supporting files. Sharing your budget is
                                            optional but helps tailor our proposal. Please provide details to help us
                                            understand your vision.
                                        </p>

                                        <div class="row">
                                            <div class="col-md-12 form-inner-area mb-3">
                                                <label for="budget" class="mb-1">
                                                    <h5>Budget<span class="required">*</span></h5>
                                                </label>

                                                <select name="budget" id="budget" class="form-control mb-0 px-3"
                                                    style="height: 45px;background-position-y: 9px;">
                                                    <option value="">Select Budget</option>
                                                    <option> Under 1000 &#163;</option>
                                                    <option> 1000 to 4000 &#163;</option>
                                                    <option> 5000 to 8000 &#163;</option>
                                                    <option> 9000 to 12000 &#163;</option>
                                                    <option> More than 12000 &#163;</option>
                                                </select>
                                            </div>

                                            <div class="col-md-12 form-inner-area mb-3">
                                                <div class="comment-box pt-0">
                                                    <label for="project_brief">
                                                        <h5>About Project<span class="required">*</span></h5>
                                                    </label>
                                                    <textarea name="project_brief" id="project_brief" class="form-control mb-0 px-3" rows="5"
                                                        placeholder="Describe your project briefly"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="upload-documents mb-1">
                                            <label>
                                                <h5>Upload Documents:</h5>
                                            </label>
                                            <div class="upload-araa bg-white">
                                                <input type="hidden" value="" name="fileContent"
                                                    id="fileContent">
                                                <input type="hidden" value="" name="filename" id="filename">
                                                <div class="row">

                                                    <div class="col-12 col-md-6">
                                                        <div class="d-flex flex-column">
                                                            <div class="upload-option text-center">
                                                                <label for="attach">Upload The Documents</label>
                                                                <input id="attach" style="visibility:hidden;"
                                                                    name="file" type="file" onchange="UploadFile()"
                                                                    id="file">
                                                                <input type="hidden" name="File Url" id="fileUrl">
                                                            </div>
                                                            <div id="showFileName">Filename</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="upload-icon float-end me-0">
                                                            <i class="fas fa-cloud-upload-alt"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="upload-text w-100">
                                                            <span>( File accepted: pdf. doc/ docx img(jpg & png) -
                                                                Max file size: 2MB)</span>
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>
                                        <div class="my-4">
                                            <button type="button" class="float-end btn py-1 next-btn-2"
                                                title="NEXT"
                                                style="width: 147px;height:53px;line-height:49px;background-color:black;color:white;font-size:20px;">
                                                NEXT <i class="fa fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- div 3 -->
                    <div class="multisteps-form__panel mb-3" data-animation="slideHorz" data-id="3">
                        <div class="wizard-forms">
                            <div class="inner clearfix">
                                <div class="form-content pera-content pt-2">
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
                                        <h3 class="pt-2 fw-bold">Book a Discovery Call</h3>
                                        <p style="margin-bottom: 18px;">Let’s discuss your project! Schedule a call
                                            with us
                                            by picking a date and time
                                            that suits you. Choose your preferred meeting platform – Zoom or Google
                                            Meet.
                                            We’ll match our schedules to your time zone for a seamless conversation. We
                                            look
                                            forward to planning with you!</p>
                                        <div class="language-select form-inner-area  mb-3">
                                            <label for="time_zone" class="mb-1">
                                                <h5 for="time_zone">Time zome<span class="required">*</span></h5>
                                            </label>
                                            <select name="time_zone" id="time_zone" class="form-control mb-0 px-3"
                                                style="height: 45px;background-position-y: 9px;">
                                                <option value="">Select time zone</option>
                                                <option value='(GMT+00:00) Default (GMT+00:00) Default'>(GMT+00:00)
                                                    Default
                                                    (GMT+00:00) Default</option>
                                                <option value='(GMT-12:00) International Date Line West'>(GMT-12:00)
                                                    International Date Line West</option>
                                                <option value='(GMT-11:00) Coordinated Universal Time-11'>(GMT-11:00)
                                                    Coordinated Universal Time-11</option>
                                                <option value='(GMT-11:00) Samoa (GMT-11:00) Samoa'>(GMT-11:00) Samoa
                                                    (GMT-11:00) Samoa</option>
                                                <option value='(GMT-10:00) Hawaii (GMT-10:00) Hawaii'>(GMT-10:00)
                                                    Hawaii
                                                    (GMT-10:00) Hawaii</option>
                                                <option value='(GMT-09:30) Marquesas Islands'>(GMT-09:30) Marquesas
                                                    Islands
                                                </option>
                                                <option value='(GMT-09:00) Alaska (GMT-09:00) Alaska'>(GMT-09:00)
                                                    Alaska
                                                    (GMT-09:00) Alaska</option>
                                                <option value='(GMT-08:00) Baja California'>(GMT-08:00) Baja California
                                                </option>
                                                <option value='(GMT-08:00) Pacific Time (US &amp; Canada)'>(GMT-08:00)
                                                    Pacific Time (US &amp; Canada)</option>
                                                <option value='(GMT-07:00) Chihuahua,Mazatlan'>(GMT-07:00)
                                                    Chihuahua,Mazatlan</option>
                                                <option value='(GMT-07:00) Arizona (GMT-07:00) Arizona'>(GMT-07:00)
                                                    Arizona
                                                    (GMT-07:00) Arizona</option>
                                                <option value='(GMT-07:00) Mountain Time (US &amp; Canada)'>(GMT-07:00)
                                                    Mountain Time (US &amp; Canada)</option>
                                                <option value='(GMT-06:00) Central Time (US &amp; Canada)'>(GMT-06:00)
                                                    Central Time (US &amp; Canada)</option>
                                                <option value='(GMT-06:00) Central America'>(GMT-06:00) Central America
                                                </option>
                                                <option value='(GMT-06:00) Guadalajara,Mexico City, Monterrey'>
                                                    (GMT-06:00)
                                                    Guadalajara,Mexico City, Monterrey</option>
                                                <option value='(GMT-06:00) Saskatchewan (GMT-06:00) Saskatchewan'>
                                                    (GMT-06:00) Saskatchewan (GMT-06:00) Saskatchewan</option>
                                                <option value='(GMT-05:00) Bogota, Lima, Quito'>(GMT-05:00) Bogota,
                                                    Lima,
                                                    Quito</option>
                                                <option value='(GMT-05:00) Eastern Time (US &amp; Canada)'>(GMT-05:00)
                                                    Eastern Time (US &amp; Canada)</option>
                                                <option value='(GMT-05:00) Indiana (East) (GMT-05:00) Indiana (East)'>
                                                    (GMT-05:00) Indiana (East) (GMT-05:00) Indiana (East)</option>
                                                <option value='(GMT-04:30) Caracas (GMT-04:30) Caracas'>(GMT-04:30)
                                                    Caracas
                                                    (GMT-04:30) Caracas</option>
                                                <option value='(GMT-04:00) Atlantic Time (Canada)'>(GMT-04:00) Atlantic
                                                    Time (Canada)</option>
                                                <option value='(GMT-04:00) Asuncion (GMT-04:00) Asuncion'>(GMT-04:00)
                                                    Asuncion (GMT-04:00) Asuncion</option>
                                                <option value='(GMT-04:00) Cuiaba (GMT-04:00) Cuiaba'>(GMT-04:00)
                                                    Cuiaba
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
                                                <option value='(GMT-03:00) Montevideo (GMT-03:00) Montevideo'>
                                                    (GMT-03:00)
                                                    Montevideo (GMT-03:00) Montevideo</option>
                                                <option value='(GMT-03:00) Greenland (GMT-03:00) Greenland'>(GMT-03:00)
                                                    Greenland (GMT-03:00) Greenland</option>
                                                <option value='(GMT-02:00) Coordinated Universal Time-02'>(GMT-02:00)
                                                    Coordinated Universal Time-02</option>
                                                <option value='(GMT-02:00) Mid-Atlantic (GMT-02:00) Mid-Atlantic'>
                                                    (GMT-02:00) Mid-Atlantic (GMT-02:00) Mid-Atlantic</option>
                                                <option value='(GMT-01:00) Azores (GMT-01:00) Azores'>(GMT-01:00)
                                                    Azores
                                                    (GMT-01:00) Azores</option>
                                                <option value='(GMT-01:00) Cape Verde Is. (GMT-01:00) Cape Verde Is.'>
                                                    (GMT-01:00) Cape Verde Is. (GMT-01:00) Cape Verde Is.</option>
                                                <option value='(GMT+00:00) Casablanca (GMT+00:00) Casablanca'>
                                                    (GMT+00:00)
                                                    Casablanca (GMT+00:00) Casablanca</option>
                                                <option value='(GMT+00:00) Monrovia,Reykjavik'>(GMT+00:00)
                                                    Monrovia,Reykjavik</option>
                                                <option
                                                    value='(GMT+00:00) Greenwich Mean Time : Dublin,Edinburgh,Lisbon, London'>
                                                    (GMT+00:00) Greenwich Mean Time : Dublin,Edinburgh,Lisbon, London
                                                </option>
                                                <option value='(GMT+01:00) Sarajevo,Skopje, Warsaw, Zagreb'>(GMT+01:00)
                                                    Sarajevo,Skopje, Warsaw, Zagreb</option>
                                                <option value='(GMT+01:00) West Central Africa'>(GMT+01:00) West
                                                    Central
                                                    Africa</option>
                                                <option
                                                    value='(GMT+01:00) Belgrade,Bratislava, Budapest, Ljubljana, Prague'>
                                                    (GMT+01:00) Belgrade,Bratislava, Budapest, Ljubljana, Prague
                                                </option>
                                                <option value='(GMT+01:00) Brussels, Copenhagen,Madrid, Paris'>
                                                    (GMT+01:00)
                                                    Brussels, Copenhagen,Madrid, Paris</option>
                                                <option
                                                    value='(GMT+01:00) Amsterdam,Berlin, Bern, Rome,Stockholm, Vienna'>
                                                    (GMT+01:00) Amsterdam,Berlin, Bern, Rome,Stockholm, Vienna</option>
                                                <option value='(GMT+02:00) Harare, Pretoria'>(GMT+02:00) Harare,
                                                    Pretoria
                                                </option>
                                                <option value='(GMT+02:00) Damascus (GMT+02:00) Damascus'>(GMT+02:00)
                                                    Damascus (GMT+02:00) Damascus</option>
                                                <option
                                                    value='(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius'>
                                                    (GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
                                                <option value='(GMT+02:00) Windhoek (GMT+02:00) Windhoek'>(GMT+02:00)
                                                    Windhoek (GMT+02:00) Windhoek</option>
                                                <option value='(GMT+02:00) Minsk (GMT+02:00) Minsk'>(GMT+02:00) Minsk
                                                    (GMT+02:00) Minsk</option>
                                                <option value='(GMT+02:00) Athens,Bucharest, Istanbul'>(GMT+02:00)
                                                    Athens,Bucharest, Istanbul</option>
                                                <option value='(GMT+02:00) Amman (GMT+02:00) Amman'>(GMT+02:00) Amman
                                                    (GMT+02:00) Amman</option>
                                                <option value='(GMT+02:00) Beirut (GMT+02:00) Beirut'>(GMT+02:00)
                                                    Beirut
                                                    (GMT+02:00) Beirut</option>
                                                <option value='(GMT+02:00) Jerusalem (GMT+02:00) Jerusalem'>(GMT+02:00)
                                                    Jerusalem (GMT+02:00) Jerusalem</option>
                                                <option value='(GMT+02:00) Cairo (GMT+02:00) Cairo'>(GMT+02:00) Cairo
                                                    (GMT+02:00) Cairo</option>
                                                <option value='(GMT+03:00) Kuwait, Riyadh (GMT+03:00) Kuwait, Riyadh'>
                                                    (GMT+03:00) Kuwait, Riyadh (GMT+03:00) Kuwait, Riyadh</option>
                                                <option value='(GMT+03:00) Moscow, St. Petersburg, Volgograd'>
                                                    (GMT+03:00)
                                                    Moscow, St. Petersburg, Volgograd</option>
                                                <option value='(GMT+03:00) Baghdad (GMT+03:00) Baghdad'>(GMT+03:00)
                                                    Baghdad
                                                    (GMT+03:00) Baghdad</option>
                                                <option value='(GMT+03:00) Nairobi (GMT+03:00) Nairobi'>(GMT+03:00)
                                                    Nairobi
                                                    (GMT+03:00) Nairobi</option>
                                                <option value='(GMT+03:30) Tehran (GMT+03:30) Tehran'>(GMT+03:30)
                                                    Tehran
                                                    (GMT+03:30) Tehran</option>
                                                <option value='(GMT+04:00) Port Louis (GMT+04:00) Port Louis'>
                                                    (GMT+04:00)
                                                    Port Louis (GMT+04:00) Port Louis</option>
                                                <option value='(GMT+04:00) Tbilisi (GMT+04:00) Tbilisi'>(GMT+04:00)
                                                    Tbilisi
                                                    (GMT+04:00) Tbilisi</option>
                                                <option value='(GMT+04:00) Baku (GMT+04:00) Baku'>(GMT+04:00) Baku
                                                    (GMT+04:00) Baku</option>
                                                <option value='(GMT+04:00) Yerevan (GMT+04:00) Yerevan'>(GMT+04:00)
                                                    Yerevan
                                                    (GMT+04:00) Yerevan</option>
                                                <option value='(GMT+04:00) Abu Dhabi, Muscat'>(GMT+04:00) Abu Dhabi,
                                                    Muscat
                                                </option>
                                                <option value='(GMT+04:30) Kabul (GMT+04:30) Kabul'>(GMT+04:30) Kabul
                                                    (GMT+04:30) Kabul</option>
                                                <option value='(GMT+05:00) Yekaterinburg (GMT+05:00) Yekaterinburg'>
                                                    (GMT+05:00) Yekaterinburg (GMT+05:00) Yekaterinburg</option>
                                                <option value='(GMT+05:00) Islamabad,Karachi'>(GMT+05:00)
                                                    Islamabad,Karachi
                                                </option>
                                                <option value='(GMT+05:00) Tashkent (GMT+05:00) Tashkent'>(GMT+05:00)
                                                    Tashkent (GMT+05:00) Tashkent</option>
                                                <option value='(GMT+05:30) Chennai, Kolkata, Mumbai,New Delhi'>
                                                    (GMT+05:30)
                                                    Chennai, Kolkata, Mumbai,New Delhi</option>
                                                <option value='(GMT+05:30) Sri Jayawardenepura'>(GMT+05:30) Sri
                                                    Jayawardenepura</option>
                                                <option value='(GMT+05:45) Kathmandu (GMT+05:45) Kathmandu'>(GMT+05:45)
                                                    Kathmandu (GMT+05:45) Kathmandu</option>
                                                <option value='(GMT+06:00) Dhaka (GMT+06:00) Dhaka'>(GMT+06:00) Dhaka
                                                    (GMT+06:00) Dhaka</option>
                                                <option value='(GMT+06:00) Novosibirsk (GMT+06:00) Novosibirsk'>
                                                    (GMT+06:00)
                                                    Novosibirsk (GMT+06:00) Novosibirsk</option>
                                                <option value='(GMT+06:00) Astana (GMT+06:00) Astana'>(GMT+06:00)
                                                    Astana
                                                    (GMT+06:00) Astana</option>
                                                <option value='(GMT+06:30) Yangon (Rangoon)'>(GMT+06:30) Yangon
                                                    (Rangoon)
                                                </option>
                                                <option value='(GMT+07:00) Krasnoyarsk (GMT+07:00) Krasnoyarsk'>
                                                    (GMT+07:00)
                                                    Krasnoyarsk (GMT+07:00) Krasnoyarsk</option>
                                                <option value='(GMT+07:00) Bangkok, Hanoi,Jakarta'>(GMT+07:00) Bangkok,
                                                    Hanoi,Jakarta</option>
                                                <option value='(GMT+08:00) Ulaanbaatar (GMT+08:00) Ulaanbaatar'>
                                                    (GMT+08:00)
                                                    Ulaanbaatar (GMT+08:00) Ulaanbaatar</option>
                                                <option value='(GMT+08:00) Perth (GMT+08:00) Perth'>(GMT+08:00) Perth
                                                    (GMT+08:00) Perth</option>
                                                <option value='(GMT+08:00) Taipei (GMT+08:00) Taipei'>(GMT+08:00)
                                                    Taipei
                                                    (GMT+08:00) Taipei</option>
                                                <option value='(GMT+08:00) Kuala Lumpur,Singapore'>(GMT+08:00) Kuala
                                                    Lumpur,Singapore</option>
                                                <option value='(GMT+08:00) Beijing,Chongqing,Hong Kong, Urumqi'>
                                                    (GMT+08:00)
                                                    Beijing,Chongqing,Hong Kong, Urumqi</option>
                                                <option value='(GMT+08:00) Irkutsk (GMT+08:00) Irkutsk'>(GMT+08:00)
                                                    Irkutsk
                                                    (GMT+08:00) Irkutsk</option>
                                                <option value='(GMT+08:30) Pyongyang (GMT+08:30) Pyongyang'>(GMT+08:30)
                                                    Pyongyang (GMT+08:30) Pyongyang</option>
                                                <option value='(GMT+08:30) Eucla (GMT+08:30) Eucla'>(GMT+08:30) Eucla
                                                    (GMT+08:30) Eucla</option>
                                                <option value='(GMT+09:00) Seoul (GMT+09:00) Seoul'>(GMT+09:00) Seoul
                                                    (GMT+09:00) Seoul</option>
                                                <option value='(GMT+09:00) Osaka,Sapporo, Tokyo'>(GMT+09:00)
                                                    Osaka,Sapporo,
                                                    Tokyo</option>
                                                <option value='(GMT+09:00) Yakutsk (GMT+09:00) Yakutsk'>(GMT+09:00)
                                                    Yakutsk
                                                    (GMT+09:00) Yakutsk</option>
                                                <option value='(GMT+09:30) Darwin (GMT+09:30) Darwin'>(GMT+09:30)
                                                    Darwin
                                                    (GMT+09:30) Darwin</option>
                                                <option value='(GMT+09:30) Adelaide (GMT+09:30) Adelaide'>(GMT+09:30)
                                                    Adelaide (GMT+09:30) Adelaide</option>
                                                <option value='(GMT+10:00) Hobart (GMT+10:00) Hobart'>(GMT+10:00)
                                                    Hobart
                                                    (GMT+10:00) Hobart</option>
                                                <option value='(GMT+10:00) Vladivostok (GMT+10:00) Vladivostok'>
                                                    (GMT+10:00)
                                                    Vladivostok (GMT+10:00) Vladivostok</option>
                                                <option value='(GMT+10:00) Guam, Port Moresby'>(GMT+10:00) Guam, Port
                                                    Moresby</option>
                                                <option value='(GMT+10:00) Brisbane (GMT+10:00) Brisbane'>(GMT+10:00)
                                                    Brisbane (GMT+10:00) Brisbane</option>
                                                <option value='(GMT+10:00) Canberra,Melbourne, Sydney'>(GMT+10:00)
                                                    Canberra,Melbourne, Sydney</option>
                                                <option value='(GMT+10:30) Lord Howe Island'>(GMT+10:30) Lord Howe
                                                    Island
                                                </option>
                                                <option value='(GMT+11:00) Magadan, Solomon Is.,New Caledonia'>
                                                    (GMT+11:00)
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
                                                <option value='(GMT+14:00) Line Islands'>(GMT+14:00) Line Islands
                                                </option>

                                            </select>
                                        </div>


                                        <div class="step-content-field">
                                            <div class="form-inner-area mb-3">
                                                <label for="time_zone" class="mb-1">
                                                    <h5 for="date">Date<span class="required">*</span></h5>
                                                </label>
                                                <input type="text" name="date" id="date" readonly
                                                    placeholder="Enter date" style="height: 45px;background-color: white;"
                                                    class="form-control date datepicker  mb-0 px-3">
                                            </div>


                                            <div class="form-inner-area mb-1">
                                                <label for="meeting" class="mb-1">
                                                    <h5 for="meeting">Meeting<span class="required">*</span></h5>
                                                </label>
                                            </div>
                                            <div class="plan-area pt-0">
                                                <div class="plan-icon-text text-center active">
                                                    <div class="plan-icon">

                                                        <img src="assets/img/zoom_logo.svg"
                                                            alt="Zoom" height="50px" width="70px"
                                                            srcset="">
                                                    </div>
                                                    <div class="plan-text">
                                                        <h3>Zoom</h3>
                                                        <p class="mb-0">Zoom is a proprietary videotelephony software that free plan allows upto 100
                                                            participants, with a 40-minute time restriction.
                                                        </p>
                                                        <input type="radio" name="meeting" id="meeting"
                                                            value="Zoom meeting" checked="">
                                                    </div>
                                                </div>
                                                <div class="plan-icon-text text-center">
                                                    <div class="plan-icon">

                                                        <img src="assets/img/google_meet.png"
                                                            alt="Zoom" height="50px" width="50px"
                                                            srcset="">
                                                    </div>
                                                    <div class="plan-text">
                                                        <h3>Google Meet</h3>
                                                        <p class="mb-0">Google Meet is a video communication service developed by
                                                            Google.
                                                        </p>
                                                        <input type="radio" name="meeting" id="meeting"
                                                            value="Google Meet">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-12">
                                                <button type="submit" class="btn float-end btn py-1"
                                                    style="width: 147px;height:53px;line-height:49px;font-size:20px;background-color:#273272;color:white;">
                                                    SUBMIT <i class="fa fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./inner -->

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer class="footer-section pt-3">
        <div class="container">
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="https://ezcatch.co.in/"><img src="assets/img/ezcatch.png" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text col1">
                                <p>Ezcatch delivers affordable, high-quality IT solutions to streamline processes and boost productivity</p>
                            </div>
                            <div class="footer-social-icon">
                                <a href="https://www.facebook.com/people/Ezcatch-Pvt-Ltd/61560141517826/"><i class="bi bi-facebook"></i></a>
                                <a href="https://x.com/EzcatchLtd"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.youtube.com/@ezcatchltd"><i class="bi bi-youtube"></i></a>
                                <a href="https://www.linkedin.com/company/ezcatch-ltd/"><i class="bi bi-linkedin"></i></a>
                                <a href="https://www.instagram.com/ezcatchltd?igsh=MWNqNGNhaHk0a3pqNQ=="><i class="bi bi-instagram"></i></a>
                                <a href="https://pin.it/5GF5wKoXV"><i class="bi bi-pinterest"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30 col-space">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h4>Quick Links</h4>
                            </div>
                            <ul>
                                <li><a href="https://ezcatch.co.in/">Home</a></li>
                                <li><a href="https://ezcatch.co.in/about-us/">About Us</a></li>
                                <li><a href="https://ezcatch.co.in/contact-us/">Contact Us</a></li>
                                <li><a href="https://ezcatch.co.in/portfolio/">Portfolio</a></li>
                                <li><a href="https://ezcatch.co.in/case-studies/">Case Studies</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50 col-space">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h4>Get in Touch
                                </h4>
                            </div>
                            <div class="footer-text mb-25">
                                <h3>United Kingdom</h3>
                                <div class="footer-address">
                                   <i class="bi bi-geo-alt-fill"></i>
                                    <a href="https://maps.app.goo.gl/5QaVE9sdw6cTdiSv9">307, Green Lane, Seven Kings, IG39TL, United Kingdom</a>
                                </div>

                                <h3>India</h3>
                                <div class="footer-address">
                                   <i class="bi bi-geo-alt-fill"></i>
                                    <a href="https://maps.app.goo.gl/3odijdUCprsiCjqP6">23 Tulsi Villa Society, Near ambisan modan school, Laskana Surat, Gujarat India 394185</a>
                                </div>

                                <div class="footer-address">
                                    <i class="fa fa-envelope"></i>
                                    <a href="mailto:drs@ezcatch.co.in">drs@ezcatch.co.in</a>
                                </div>

                                <div class="footer-address">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <a href="tel:+44 7423 506520">+44 7423 506520</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center ">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2024,  All rights reserved by <a href="https://ezcatch.co.in/">EZCATCH</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>

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
                $('#showFileName').html(file.name);
                document.getElementById('filename').value = file.name;
                // document.getElementById('wizard').submit();
            }
            reader.readAsDataURL(file);
        }

        $(document).ready(function() {
            $('.next-btn-1').on('click', function(e) {
                e.preventDefault();
                let form = $('#form');
                form.validate({
                    rules: {
                        'full_name': 'required',
                        'mail': 'required',
                        'country': 'required',
                        'phone_number': 'required',
                        'company_name': 'required',
                    },
                    messages: {
                        'full_name': 'Full name is required',
                        'mail': 'Email is required',
                        'country': ' Country is required',
                        'phone_number': 'Phone number is required',
                        'company_name': 'Country is required',
                    },
                    errorElement: 'span',
                    errorLabelContainer: '.errorTxt',
                    errorPlacement: function(error, element) {
                        error.appendTo(element.parent("div"));
                    }
                });
                if (form.valid()) {
                    form.validate().destroy();
                    $('.multisteps-form__panel').removeClass('js-active');
                    $('.multisteps-form__panel').filter('[data-id="2"]').addClass('js-active');

                    $('.multisteps-form__progress-btn').filter('[data-id="2"]').addClass('js-active');
                    $('.multisteps-form__progress-btn').filter('[data-id="2"]').addClass('current');
                }
            });

            $('.next-btn-2').on('click', function(e) {
                e.preventDefault();
                let form1 = $('#form');
                console.log(form1);
                form1.validate({
                    rules: {
                        'budget': 'required',
                        'project_brief': 'required',
                    },
                    messages: {
                        'budget': 'Budget is required',
                        'project_brief': 'Project Brief is required',
                    },
                    errorElement: 'span',
                    errorLabelContainer: '.errorTxt',
                    errorPlacement: function(error, element) {
                        error.appendTo(element.parent("div"));
                    }
                });
                if (form1.valid()) {
                    form1.validate().destroy();
                    $('.multisteps-form__panel').removeClass('js-active');
                    $('.multisteps-form__panel').filter('[data-id="3"]').addClass('js-active');

                    $('.multisteps-form__progress-btn').filter('[data-id="3"]').addClass('js-active');
                    $('.multisteps-form__progress-btn').filter('[data-id="3"]').addClass('current');
                }
            });

            $('#form').submit(function(e) {
                e.preventDefault();
                let form = $(this);
                console.log(form.find('[name="date"]').val());
                form.validate({
                    rules: {
                        'full_name': 'required',
                        'mail': 'required',
                        'country': 'required',
                        'phone_number': 'required',
                        'company_name': 'required',
                        'budget': 'required',
                        'project_brief': 'required',
                        'date': 'required',
                        'time_zone': 'required',
                        'meeting': 'required',

                    },
                    messages: {
                        'full_name': 'Full name is required',
                        'mail': 'Email is required',
                        'country': ' Country is required',
                        'phone_number': 'Phone number is required',
                        'company_name': 'Country is required',
                        'budget': 'Budget is required',
                        'project_brief': 'Project brief is required',
                        'date': 'Date is required',
                        'time_zone': 'Time zone is required',
                        'meeting': 'Meeting is required',
                    },
                    errorElement: 'span',
                    errorLabelContainer: '.errorTxt',
                    errorPlacement: function(error, element) {
                        error.appendTo(element.parent("div"));

                    }
                });
                if (form.valid()) {
                    Swal.fire({
                        title: "Please wait",
                        html: "This form is being submitted. This may take a few moments.",
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

                            let fileUrl = response.fileUrl ?? '';
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
                console.log(dataSubmit);
                $.ajax({
                    type: "POST",
                    url: "https://script.google.com/macros/s/AKfycbxL7QRnGwkxVBM-C-E3bW4y3vHW5VC6ExJpRIhwwrr7Kx0nND20iBuJ5YKfKO9yN5zp-A/exec",
                    data: dataSubmit,
                    dataType: "JSON",
                    success: function(response) {
                        Swal.hideLoading();
                        Swal.fire({
                            title: "Thank you for your input",
                            text: "Your form has been submitted successfully!",
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
                            text: "Failed to save data"
                        });
                    }
                });
            }
        });
    </script>

</body>

</html>
