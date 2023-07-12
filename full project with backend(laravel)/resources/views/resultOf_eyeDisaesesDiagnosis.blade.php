<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result of color recognition uploaded image</title>
    <link rel="stylesheet" href="assets/css/sty.css">
</head>
<body>
    <div class="container">

        <h2>Diagnosis Result</h2>

        @if(session('RadiologyResult'))
        <div class="results">
            <h3 class="text-center fs-4">The result is:</h3>
            <p class="text-center text-danger">Diabetic Result : <span>{{ session('class_name1') }}</span></p>
            <p class="text-center text-danger">Cataract Result : <span>{{ session('class_name2') }}</span></p>
            <p class="text-center text-success">Prediction Probability : <span>{{ session('y_pred') }}</span></p>
            
        </div>
    <?php session()->forget('RadiologyResult'); ?>

        @else
        <h5 class="text-center">no Images yet!</h5>
        @endif
        <a href="/eyeDisaesesDiagnosis">Diagnosis Page</a>
    </div>
</body>
</html>