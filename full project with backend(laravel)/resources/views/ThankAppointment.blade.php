<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/img/logo.png" rel="icon">
    <link href='/https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
    <script src="/https://kit.fontawesome.com/f5887f9b2d.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/css/ThankAppointment.css">
    <title>complete appointment</title>
</head>

<body>
    <div class="wrap" >

    <h2>Congratulations</h2>
    <h3>You have successfully appointment.</h3>
        <div class="detail">
            <br>Here are your details<br><br>
            
            Name: {{ $name }}<br>
            Gender: {{ $gender }}<br>
            Service: {{ $service }}<br>
            Date:{{ $appointmentDate }}<br>
            Payment: {{ $paymentMethod }}<br>
            Card Number: {{$cardNum}} <br>

        </div>
        <br>
        <div id="pri">
            <i class="fa-solid fa-print"></i>
            <button class="Print"  name="Print" type="submit" value="Print" onclick="printInfo(this)">Print</button>
        </div>
    </div>
    
    <script>
        function printInfo(ele) {

                document.getElementById("pri").style.visibility="hidden";
                window.print();
            }
    </script>
    </head>

    <body>
