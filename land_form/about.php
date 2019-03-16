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
<script type="text/javascript" src=" https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="slick/slick.css">
<script type="text/javascript" src="slick/slick.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>

<link rel="stylesheet" href="css/colorbox.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
</head>
<body>
<header>
    <div class="content-box">
        <a href="index.php" class="header_logo">Company Name</a>
        <ul class="menu">
            <li class="menu_item"><a href="index.php">Home</a></li>
            <li class="menu_item"><a href="about.php">About Us</a></li>
            <li class="menu_item"><a href="#">Services</a></li>
            <li class="menu_item"><a href="#">Jobs</a></li>
            <li class="menu_item"><a href="Contakt.php">Contact Us</a></li>
        </ul>
    </div>
</header>
<div class="about">
    <div class="hiring-box">
        <div class="box-c">
            <div class="headline">About Us</div>
            <p>A posuere scelerisque gravida facilisi parturient magna urna donec parturient per augue a amet quam nullam a ad a. Parturient velit imperdiet in suspendisse eget a parturient adipiscing penatibus convallis himenaeos felis torquent facilisi elementum a penatibus suscipit aliquam.</p>
            <p>Porta at at suspendisse dolor fames ullamcorper cum id per suspendisse a dignissim eu dapibus platea turpis augue mi proin lorem morbi sapien facilisis lectus.</p>
       </div>
    </div>
    <div class="hiring-box">
        <div class="gallery">
            <a class="group3" href="img/about.png"><img src="img/about.png" alt=""></a>
            <a class="group3" href="img/about.png"><img src="img/about.png" alt=""></a>
            <a class="group3" href="img/about.png"><img src="img/about.png" alt=""></a>
            <a class="group3" href="img/about.png"><img src="img/about.png" alt=""></a>
            <a class="group3" href="img/about.png"><img src="img/about.png" alt=""></a>
            <a class="group3" href="img/about.png"><img src="img/about.png" alt=""></a>
            <a class="group3" href="img/about.png"><img src="img/about.png" alt=""></a>
        </div>
    </div>
</div>
    <footer>
    <script type="text/javascript"></script>
    </footer>
</body>
</html>