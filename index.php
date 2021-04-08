<?php 
    require('sys/sessions.php');
    require('sys/sql.php')
?>

<html>

<head>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <title>Rafly Maulana | Gallery - Home</title>
    <link rel='stylesheet' href='assets/css/main.css'>
    <link rel='icon' href='assets/img/logo.png' type="image/png" sizes="16x16">
</head>

<body>
    <?php include( 'assets/sections/header.php' ) ?>

    <main>
        <div class="search-container">
            <input id="search" type='text' placeholder='Search Other User Pictures (User ID)'>
            <button onclick="searchuser()">&#x1F50D;</button>
        </div>

        <h1><?php include('sys/index.php') ?> PHOTOS</h1>

        <ul class='img-gallery'>
            <?php include('sys/gallery.php') ?>
            <li class='empty'></li>
        </ul>
    </main>

    <?php include('assets/sections/footer.php' ) ?>
    <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js'
        integrity='sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=' crossorigin='anonymous'></script>
    <script>
        var input = document.getElementById("search");
        input.addEventListener("keyup", function(event) {
            if (event.keyCode === 13) {
                event.preventDefault();
                searchuser();
            }
        });

        function searchuser() {
            var x, text;
            x = document.getElementById("search").value;
            if (x == '') {
                alert('Please Specify User ID');
                return
            }
            console.log(x);
            window.location.href = `?user=` + x
        }
    </script>
</body>

</html>