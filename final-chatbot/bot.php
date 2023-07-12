<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Eye diseases Chatbot </title>
    <link href="img/logo.png" rel="icon">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://kit.fontawesome.com/f5887f9b2d.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <!-- start header -->
    <header>
        <div class="container">
            <div class="logo">
                <a href=""><img src="img/logo.png" alt="" class="img-fluid"></a>
                <h1><a href="">BFCAI</a></h1>
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
    <div class="chat">
        <div class="wrapper">
            <div class="title" data-i18n="bot">Eye diseases Chatbot</div>
            <div class="form">
                <div class="bot-inbox inbox">
                    <div class="icon">
                        <i class="fa-solid fa-eye"></i>
                    </div>
                    <div class="msg-header">

                        <p data-i18n="bot2">welcome in our eye diseases chatbot, please choose between the language,"Arabic or English" </p>
                    </div>
                </div>
            </div>
            <div class="typing-field">
                <div class="input-data">
                    <input id="data" type="text" placeholder=". . . . . . . . . . . . . . . . . . . . . . . ." required>

                </div>
                <button id="send-btn" data-i18n="Send">Send</button>
            </div>
        </div>
    </div>
    <!-- ======= Footer ======= -->

    <footer id="footer">
        <div class="container">
            <h3 data-i18n="name">color blindness and eye diseases website</h3>
            <p data-i18n="Welcome2">Helping you and your health is our priority.</p>
            <div class="social-links">
                <a href="tel://013-3229371" class="phone"><i class="fa-solid fa-mobile-screen-button"></i></a>
                <a href="mailto:info@fci.bu.edu.eg" class="email"><i class="fa-solid fa-envelope"></i></a>

            </div>
            <div class="copyright">
                &copy; <strong><span data-i18n="name">color blindness and eye diseases website</span></strong>.
            </div>

        </div>
    </footer><!-- End Footer -->

    <script>
        $(document).ready(function() {
            $("#send-btn").on("click", function() {
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');

                
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fa-solid fa-eye"></i></div><div class="msg-header"><p>' + result + '</p></div></div>';
                        $(".form").append($replay);
                        
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>
    <script src="js/script.js" type="module"></script>

</body>

</html>