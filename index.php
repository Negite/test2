<!doctype html>
<html>
<head>
    <title>test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes"/>
    
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> 
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <script type="text/javascript" src="slick/slick.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

        <link rel="stylesheet" href="css/colorbox.css" />
        <script src="js/jquery.colorbox.js"></script>
        <script>
            $(document).ready(function(){
            //Examples of how to assign the Colorbox event to elements
            $(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
            $('.non-retina').colorbox({rel:'group5', transition:'none'})
            $('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
            //Example of preserving a JavaScript event for inline calls.
            $("#click").click(function(){ 
                $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
                return false;
            });
            });
        </script>
    <script src="ajax.js"></script>
</head>
<body>
    <header>
        <div class="content-box">
            <a href="?page=main" class="header_logo">Company Name</a>
            <ul class="menu">
                <li class="menu_item"><a href="?page=main">Home</a></li>
                <li class="menu_item"><a href="?page=about">About Us</a></li>
                <li class="menu_item"><a href="?page=info">Contact Us</a></li>
                <li class="menu_item"><a href="?page=videopage">Video</a></li>
                <li class="menu_item"><a href="#">Services</a></li>
                <li class="menu_item"><a class="show_popup" href="#">Jobs</a></li>
                
            </ul>
        </div>
    </header>
    <?
    $page = $_GET['page'];

    if ( $page == 'info' ) {
        include 'info.php';
    } else if ( $page == 'about') {
        include 'about.php';
    }
    else if ( $page == 'video') {
        include 'video.php';
    }
    else {
        include 'main.php';
    }
    ?>
    <div class="overlay_popup"></div>
    <div class="popup" id="popup1">
        <div class="object contact box-c">
        <div class="headline">Contact Us</div>
        <form action="form.php" method="post" class='ajax-form'>
                <label><input type="text" name="name" placeholder="Name" /><div class="error contact-form-error"></div></label>
                <label><input type="email" name="email" placeholder="E-mail" /><div class="error contact-form-error"></div></label>
                <label class="form-group"><input type="tel" class="form-control" id="phone" name="phone" placeholder="+7 (999) 99 99 999" /><div class="error contact-form-error"></div></label>
                <label>Message<textarea name="comment" cols="40" rows="3"></textarea><div class="error contact-form-error"></div></label>
                <button><div class="button">Contact Us</div></button>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        $('.show_popup').click(function() { // Вызываем функцию по нажатию на кнопку 
            var popup_id = $('#' + $(this).attr("rel")); // Связываем rel и popup_id 
            $(popup_id).show(); // Открываем окно
            $('.overlay_popup').show(); // Открываем блок заднего фона
            $('.popup').show();
               }) 
        $('.overlay_popup').click(function() { // Обрабатываем клик по заднему фону
            $('.overlay_popup, .popup').hide(); // Скрываем затемнённый задний фон и основное всплывающее окно
        })
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".lazy").slick({
                infinite: true,
                dots: true
             });
        });
    </script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <script>
        $(document).ready(function() {
              $("#phone").mask("+7 (999) 999 99 99");
         });
    </script>
</body>
</html>