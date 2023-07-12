<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/img/logo.png" rel="icon">
    <title>Color recognition using a video camera</title>
    <link rel="stylesheet" href="assets/css/radiology-upload.css">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <style>body{
        background-color: rgb(247, 246, 246);
        color: #fff;
        margin: auto;
        text-align: center;
      }
      .all{
        position: relative;
        margin: 10px 430px;
        width: 50%;
        height: 50%;
        line-height: 1.5;
      }
      video{
        width: 100%;
        height: 85%;
        box-shadow: 2px 1px 7px blue;
        color: #dcdcdc;
        border-bottom: solid 1px lightskyblue;
        background-color: black;
        
        background-position: center left;
        background-repeat: no-repeat;
        background-size: cover;
        background-size: 100% 100%;
      }
      .camSection{
        cursor: pointer;
        width: 75%;
        height: auto;
        padding: 10px 5px;
        padding-bottom: 7px;
        margin: 5px 0px;
        font-size: 19px;
        display: table-cell;
        vertical-align: middle;
        background-color: black;
        box-shadow: 2px 1px 7px blue;
        color: #d6dcfd;
        border-radius: .4em;
        border-color: lightskyblue;
        line-height: 1.4;
        text-align: center;
      }
      .controles{
        width: 99%;
        bottom: 0;
        margin: auto;
        margin-bottom: 50px;
    
      }
      .infoCor{
        position: absolute;
        top: 5%;
        left: 51%;
        transform: translate(-49%, -50%);
        z-index: 1;
        font-size: 22px;
        margin: 0;
        width: 100%;
        padding: 2px 10px;
        padding-right: 0px;
      }</style>
    
</head>

<body>

    <!-- start header -->
    <header>
        <div class="container">
            <div class="logo">
                <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
                <h1><a href="index.html">BFCAI</a></h1>
                
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
                    <a href="/index.html" data-i18n="home2"> Home ></a>
                    <span data-i18n="service2">Color recognition using a video camera</span>
                </div>
            </div>
        </div>
    </div>
    <!-- End second-section -->
    

    <!-- Start third-section -->
    <div class="third-section">
   
        <div class="all">
            <p class="infoCor">color: <b id="corDetect">...</b></p>
            <video id="video" autoplay></video>
            <canvas id="canvas" width="360" height="480" hidden></canvas>
      
            <div class="controles">
              <select class="camSection" id="cameraSelector"></select><br>
              <button class="camSection" id="startButton" onclick="startCamera()"data-i18n="OpenCamera">open camera</button>
            </div>
          </div>



    </div>


    
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

    <script>
                let xCromo = "indefinido";
        let goCromo = "indefinido";
        let corDetectada = false;

        
        var video;
        var canvas;
        var context;
        var currentStream;
        var cameras = [];


        
        document.addEventListener('DOMContentLoaded', function (event) {
            video = document.getElementById('video');
            canvas = document.getElementById('canvas');
            context = canvas.getContext('2d');
            listCameras();
            startCamera();
        });





        function listCameras() {
        navigator.mediaDevices.enumerateDevices().then(function (devices) {
            cameras = devices.filter(function (device) {
            return device.kind === 'videoinput';
            });

            var cameraSelector = document.getElementById('cameraSelector');
            cameraSelector.innerHTML = '';

            cameras.forEach(function (camera, index) {
            var option = document.createElement('option');
            option.value = index;
            option.text = getCameraLabel(camera.label, index);
            cameraSelector.appendChild(option);
            });

            
            var options = Array.from(cameraSelector.options);
            options.reverse();
            options.forEach(function (option) {
            cameraSelector.appendChild(option);
            });
        });
        }

        function getCameraLabel(label, index) {
        if (label.toLowerCase().includes('front')) {
            return 'Camera Frontal';
        } else if (label.toLowerCase().includes('back')) {
            return 'Camera Traseira';
        } else {
            return 'Camera ' + (index + 1);
        }
        }



        function startCamera() {
        
        if (!navigator.mediaDevices || !navigator.mediaDevices.getUserMedia) {
            alert('error.');
            return;
        }

        var cameraSelector = document.getElementById('cameraSelector');

        var selectedCameraIndex = cameraSelector.value;
        var selectedCamera = cameras[selectedCameraIndex];

        var constraints = {
            video: {
            deviceId: { exact: selectedCamera.deviceId },
            facingMode: 'environment' 
            }
        };

        
        if (currentStream) {
            currentStream.getTracks().forEach(function (track) {
            track.stop();
            });
        }

        
        try {
            navigator.mediaDevices.getUserMedia(constraints)
            .then(function (stream) {
                video.srcObject = stream;
                video.play();

                currentStream = stream;

                
                processVideo();
            })
            .catch(function (error) {
                console.error('Error ', error);
                
            });
        } catch (error) {
            console.error('Error', error);
            
        }
        }






        
        function isColorInRange(r, g, b, minR, maxR, minG, maxG, minB, maxB) {
            return r >= minR && r <= maxR &&
                g >= minG && g <= maxG &&
                b >= minB && b <= maxB;
        }

        
        function isRainbowColor(r, g, b) {
            
            if (isColorInRange(r, g, b, 75, 255, 0, 70, 0, 70)) { 
            return 'Red';
            } else if (isColorInRange(r, g, b, 0, 160, 145, 255, 0, 160)) { 
            return 'Green';
            } else if (isColorInRange(r, g, b, 0, 70, 0, 70, 60, 255)) { 
            return 'Blue';
            } else if (isColorInRange(r, g, b, 70, 120, 70, 120, 60, 235)) { 
            return 'Purple';
            } else if (isColorInRange(r, g, b, 220, 235, 70, 170, 0, 120)) { 
            return 'Orange';
            } else if (isColorInRange(r, g, b, 90, 220, 80, 200, 0, 90)) { 
            return 'Yellow';
            } else if (isColorInRange(r, g, b, 150, 225, 50, 160, 100, 230)) { 
            return 'Pink';
            } else if (isColorInRange(r, g, b, 100, 180, 90, 140, 60, 120)) { 
            return 'Brown';
            } else if (isColorInRange(r, g, b, 20, 90, 20, 90, 20, 90)) { 
            return 'Gray';
            } else if (isColorInRange(r, g, b, 0, 20, 0, 20, 0, 20)) { 
            return 'Black';
            } else if (isColorInRange(r, g, b, 145, 255, 145, 255, 145, 255)) { 
            return 'White';
            }

            return false;
        }

        
        function processVideo() {
            
            context.drawImage(video, 0, 0, canvas.width, canvas.height);

            
            var imageData = context.getImageData(0, 0, canvas.width, canvas.height);
            var data = imageData.data;

            
            for (var i = 0; i < data.length; i += 4) {
            var r = data[i];
            var g = data[i + 1];
            var b = data[i + 2];

            
            var color = isRainbowColor(r, g, b);
            if (color) {

            
                let corAlert = document.getElementById('corDetect');
                let arrayColors = ["red", "red", "#ff2a2d", "green", "green", "#60e651", "blue", "blue", "#5f99f5", "purple", "purple", "#9c70de", "orange", "orange", "#fe9046", "yellow", "yellow", "#eac53d", "pink", "pink", "#ea54f4", "brown", "brown", "#b67a62", "gray", "gray", "#818181", "black", "black", "#090909", "white", "white", "#fff"]

                let corSelect = arrayColors.indexOf(color.toLowerCase())

                if (corSelect > -1) {
                let colorx = arrayColors[corSelect+1]
                let colory = arrayColors[corSelect+2]
                corAlert.innerHTML = '<i style="color:' + colory + '">' + colorx + '</i>';
                }else{
                colorx = "Escuridão";
                colory = "#090909";
                corAlert.innerHTML = '<i style="color:' + colory + '">' + colorx + '</i>';
                }
                
                setTimeout(function () {
                corAlert.innerHTML = '...';
                }, 500);
                break; 
            }
            }

            
            requestAnimationFrame(processVideo);
        } 
    </script>
    <script src="assets/js/script.js" type="module"></script>

</body>

</html>