<?php 
    require('sys/sessions.php');
    require('sys/sql.php')
?>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rafly Maulana | Gallery - Upload</title>
    <link rel='stylesheet' href='assets/css/main.css'>
    <link rel='icon' href='assets/img/logo.png'>
</head>

<body>
    <?php include('assets/sections/header.php') ?>
    
    <main>
        <h1>UPLOAD NEW IMAGE</h1>
		<form class="img-upload" method="post" action="sys/upload_img.php" enctype='multipart/form-data'>
            <div class="input">
                <input class="img-input" name="file" id="filer_input2" multiple="multiple" type="file">
                <div class="input-text">
                    <h3>Drag & Drop Image Here</h3>
                    <span style="display:inline-block; margin: 15px 0">or</span>
                </div>
                <button class="choose-btn">Browse Image</button>
            </div>
            <br>
            <button class="upload-btn">Upload Image</button>
        </form>
    </main>

    <?php include('assets/sections/footer.php') ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('.img-input').change(function() {
                $('.input-text h3').text(this.files[0].name);
                $('.input-text span').text('');
                $('.choose-btn').text('Change Image');
                $('.choose-btn').css('border', 'none');
                console.log(this.files);
            });
        });
    </script>
</body>

</html>