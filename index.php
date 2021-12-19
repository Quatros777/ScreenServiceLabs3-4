<?php
include "db.php";
?>

<!DOCTYPE html>
<html lang="ru">
<link href="styles.css" rel="stylesheet" type="text/css">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<header class = "header">
    <div class="headertext">
        Сервис скриншотов
    </div>
    <span class = textforheader3>
<button onclick="document.getElementById('id03').style.display='block'">Добавить скриншот</button>
    </span>
    <span class = textforheader1>
<button onclick="document.getElementById('id01').style.display='block'">Регистрация</button>
<div id="id01" class="modal">
    <form class="modal-content" action="/action_page.php">
        <div class="container">
            <span style="font-family: Courier New;"></span>
            <h1>Регистрация</h1>
            <p>Заполните информацию для нового аккуанта</p>
            <hr>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Введите Email" name="email" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Введите пароль" name="psw" required>
            <label for="psw-repeat"><b>Repeat password</b></label>
            <input type="password" placeholder="Повторите пароль" name="psw-repeat" required>
            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>
            <div class="clearfix">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <button type="submit" class="signup">Sign Up</button>
            </div>
        </div>
    </form>
</div>
    </span>
    <span class = textforheader2>
<button onclick="document.getElementById('id02').style.display='block'">Вход</button>
<div id="id02" class="modal">
    <form class="modal-content" action="/action_page.php">
        <div class="container">
            <span style="font-family: Courier New;"></span>
            <h1>Вход</h1>
            <p>Заполните информацию для входа в аккуант</p>
            <hr>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Введите Email" name="email" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Введите пароль" name="psw" required>
            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>
            <div class="clearfix">
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                <button type="submit" class="login">Log In</button>
            </div>
        </div>
    </form>
</div>
    </span>
</header>
<div class="screens">
    <?php
    foreach ($mydb->query("SELECT * FROM screen ORDER BY id DESC LIMIT $limit")as $row):
    ?>
    <div class="screens_item">
    <ul class="screens_items">
        <li>
        <div><img class="img" src="<?=$row['image']?>"></div>
        </li>
        <li>
        <a href="/screen.php/?id=<?=$row['id']?>"> <?=$row['screen_name']?> </a>
         <div class="client"><?=$row['client_id'], ($row['date_add']) ?></div> 
        </li>
        </ul>
    
    </div>
     <?php endforeach; ?>
    </div>
<div class = "main">
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <h1>Дата добавления: 02.11.2021</h1>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>
<img id="Img1" src="cut_images_5f9eOIuSnhfjzXb/image_part_001.jpg" width="22.7%" height="49.8%">
    <img id="Img2" src="cut_images_5f9eOIuSnhfjzXb/image_part_002.jpg" width="22.7%" height="49.8%">
    <img id="Img3" src="cut_images_5f9eOIuSnhfjzXb/image_part_003.jpg" width="22.7%" height="49.8%">
    <img id="Img4" src="cut_images_5f9eOIuSnhfjzXb/image_part_004.jpg" width="22.7%" height="49.8%">
    <img id="Img5" src="cut_images_5f9eOIuSnhfjzXb/image_part_005.jpg" width="22.7%" height="49.8%">
    <img id="Img6" src="cut_images_5f9eOIuSnhfjzXb/image_part_006.jpg" width="22.7%" height="49.8%">
    <img id="Img7" src="cut_images_5f9eOIuSnhfjzXb/image_part_007.jpg" width="22.7%" height="49.8%">
    <img id="Img8" src="cut_images_5f9eOIuSnhfjzXb/image_part_008.jpg" width="22.7%" height="49.8%">
    <script>
        var modal = document.getElementById('myModal');
        var img = document.getElementById('Img1');
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
    <script>
        var modal = document.getElementById('myModal');
        var img = document.getElementById('Img2');
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
    <script>
        var modal = document.getElementById('myModal');
        var img = document.getElementById('Img3');
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
    <script>
        var modal = document.getElementById('myModal');
        var img = document.getElementById('Img4');
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
    <script>
        var modal = document.getElementById('myModal');
        var img = document.getElementById('Img5');
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
    <script>
        var modal = document.getElementById('myModal');
        var img = document.getElementById('Img6');
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
    <script>
        var modal = document.getElementById('myModal');
        var img = document.getElementById('Img7');
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
    <script>
        var modal = document.getElementById('myModal');
        var img = document.getElementById('Img8');
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
</div>
<header class = "fooder">
    <div class="foodertext">
        © Разработал студент ЛГТУ <a href="https://t.me/aylivokyudruk" style="color: #0e0909">Курдюков Илья</a>, 2021
    </div>
    <p><a href="mailto:ilya.kurduykoff@yandex.ru">Задайте свои вопросы</a></p>
</header>
</body>
</html>