<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/img/logo.png" rel="icon">
    <title>Make an appointment</title>
    <link rel="stylesheet" href="assets/css/radiology-upload.css">
    <link rel="stylesheet" href="assets/css/appointment.css">
    <!-- Google fonts -->
    <link rel="preconnect" href="/https://fonts.googleapis.com">
    <link rel="preconnect" href="/https://fonts.gstatic.com" crossorigin>
    <link href="/https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>

<body>

    <!-- start header -->
    <header>
        <div class="container">
            <div class="logo">
                <a href="/"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
                <h1><a href="/">BFCAI</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>
            <nav>
                <select>
                    <option value="hide" data-i18n="selectlanguage">--Select language--</option>
                    <option value="en" data-i18n="english">English</option>
                    <option value="ar" data-i18n="arabic">Arabic</option>
                </select>
            </nav>
        </div>
    </header>
    <!-- end header -->



    <!-- Start second-section -->
    <div class="second-section">
        <div class="overlay">
            <div class="text">
                <div class="content">
                    <h1 data-i18n="services"> services </h1>
                    <a href="/" data-i18n="home2"> Home ></a>
                    <span data-i18n="service5">Make an appointment</span>
                </div>
            </div>
        </div>
    </div>
    <!-- End second-section -->

<!-- Start third-section -->
<div class="third-section">
    <div class="container2">
        <form method="POST" action="/appointment">
            @csrf
            <div class="row">
                <h4  data-i18n="uname">Full Name</h4>
                <div class="input-group input-group-icon">
                    <input required type="text" name="name" id="name" >
                    <!-- <input required type="text" name="name" id="name" placeholder="full name" value="{{ old('name') }}"> -->
                    <!-- @error('name') <p class="error">{{ $message }}</p> @enderror -->
                    <div class="input-icon">
                        <i class="bi bi-person-fill"></i>
                    </div>
                </div>
                <div class="col-half">

                    <h4 data-i18n="SelectYourServices">Select Your Services</h4>
                    <div class="input-group">
                        <div class="col-third">
                            <select class="select2" id="o" class="form-control" name="service" required>
                                <option value="Optometry examination" data-i18n="Select1">Color Blindness</option>
                                <option value="Cardiology" data-i18n="Select2">Retinopathy</option>
                                <option value="Dental" data-i18n="Select3">Vision acuity</option>
                                <option value="Ophthalmology" data-i18n="Select4">Keratitis</option>
                                <option value="Other Services" data-i18n="Select5">Other Services</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-half">
                    <h4 data-i18n="Gender">Gender</h4>
                    <div class="input-group">
                        <input id="gender-male" type="radio" name="gender" value="male">
                        <label for="gender-male" data-i18n="Male">Male</label>
                        <input id="gender-female" type="radio" name="gender" value="female">
                        <label for="gender-female" data-i18n="Female">Female</label>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-half">
                    <h4 data-i18n="Date">Date</h4>
                    <div class="input-group">
                        <input type="date" id="" name="date" required>
                        <!-- @error('date') <p class="error">{{ $message }}</p> @enderror -->
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li style="color: red">{{ $error }}</li>
                                @endforeach
                            </ul>
                            <br><br>
                        </div>
                    </div>
                </div>
                <div class="col-half">
                    <h4 data-i18n="Time">Time</h4>
                    <div class="input-group">
                        <input type="time" placeholder="Time" name="time" required>
                    </div>
                </div>
            </div>


            <div class="row">
                <h4 data-i18n="PaymentDetails">Payment Details</h4>
                <div class="input-group">
                    <input id="payment-method-card" type="radio" name="payment" value="card" checked="true">
                    <label for="payment-method-card">
                        <span >
                            <i class="bi bi-credit-card"></i>
                            Credit Card</span>
                    </label>
                    <input id="payment-method-paypal" type="radio" name="payment" value="paypal">
                    <label for="payment-method-paypal">
                        <span >
                            <i class="bi bi-paypal"></i>
                            Paypal</span>
                    </label>
                </div>
                <h4 data-i18n="cardNumber">card Number</h4>
                <div class="input-group input-group-icon">
                    <input type="password" placeholder="*****" name="cardNumber" required>
                    <div class="input-icon">
                        <i class="bi bi-credit-card-fill"></i>
                    </div>
                </div>
            </div>
            <input type="submit" value=Appointment class="btn" data-i18n="Appointment">
            {{-- <a href="ThankAppointment.html" class="btn" data-i18n="Appointment"> Appointment</a> --}}


        </form>
    </div>
</div>
<!-- End third-section -->


    <!-- ======= Footer ======= -->

    <footer id="footer">
        <div class="container">
            <h3 data-i18n="name">color blindness and eye diseases website</h3>
            <p data-i18n="Welcome2">Helping you and your health is our priority.</p>
            <div class="social-links">
                <a href="tel://013-3229371" class="phone"><i class="bi bi-phone"></i></a>
                <a href="mailto:info@fci.bu.edu.eg" class="email"><i class="bi bi-envelope"></i></a>

            </div>
            <div class="copyright">
                &copy; <strong><span data-i18n="name">color blindness and eye diseases website</span></strong>.
            </div>

        </div>
    </footer><!-- End Footer -->

    <script src="assets/js/script.js" type="module"></script>
</body>

</html>
