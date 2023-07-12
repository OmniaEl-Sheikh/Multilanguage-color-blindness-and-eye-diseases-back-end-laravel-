<!DOCTYPE html>
<html >

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/img/logo.png" rel="icon">
    <title>Learn about colors by entering a picture</title>
    <link rel="stylesheet" href="assets/css/radiology-upload.css">
    <link rel="stylesheet" href="/assets/css/enter_img.css">
    <link rel="stylesheet" href="/assets/css/bar.css"> 
    <link rel="stylesheet" href="/assets/css/enter_img.css">
    <script src="/assets/js/bar.js"></script>
    <script src="/assets/js/colornames.js"></script>
    <script src="/assets/js/nearestColor.js"></script>
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>

<body>

    <!-- start header -->
    <header>
        <div class="container">
        <div class="logo">
            <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
            
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>
            
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
                    <span data-i18n="service1">Learn about colors by entering a picture</span>
                </div>
            </div>
        </div>
    </div>
    <!-- End second-section -->


    <!-- Start third-section -->
    <div class="third-section">
      <div id="cursor"></div>
      <div class="container">
          <div class="row">
              <div class="col s6">
                  <div class="file-field input-field">
                      <div class="btn indigo">
                          <span>Choose an image</span>
                          <input type="file" id="chooseBtn">
                      </div>
                      <div class="file-path-wrapper">
                          <input class="file-path validate" placeholder="default.jpg" type="text">
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col s10">
                  <canvas id="canvas"></canvas>
              </div>
              <div class="col s2">
                  <div class="card">
                      <div class="card-image">
                          <div id="colorView"></div>
                          <span class="card-title">Click on the image</span>
                      </div>
                      <div class="card-content">
                          <table>
                              <tbody>
                              <tr>
                                  <td>#</td>
                                  <td id="Hex"></td>
                              </tr>
                              <tr>
                                  <td></td>
                              </tr>
                              <tr>
                                  <td>R</td>
                                  <td id="R"></td>
                              </tr>
                              <tr>
                                  <td>G</td>
                                  <td id="G"></td>
                              </tr>
                              <tr>
                                  <td>B</td>
                                  <td id="B"></td>
                              </tr>
                              <tr>
                                  <td></td>
                              </tr>
                              <tr>
                                  <td>H</td>
                                  <td id="H"></td>
                              </tr>
                              <tr>
                                  <td>S</td>
                                  <td id="S"></td>
                              </tr>
                              <tr>
                                  <td>V</td>
                                  <td id="V"></td>
                              </tr>
                              <tr>
                                  <td></td>
                              </tr>
                              <tr>
                                  <td>C</td>
                                  <td id="C"></td>
                              </tr>
                              <tr>
                                  <td>M</td>
                                  <td id="M"></td>
                              </tr>
                              <tr>
                                  <td>Y</td>
                                  <td id="Y"></td>
                              </tr>
                              <tr>
                                  <td>K</td>
                                  <td id="K"></td>
                              </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
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

    <script type="module" src="/assets/js/enter_img.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
 <script src="/assets/js/script.js" type="module"></script> 
</body>
</html>