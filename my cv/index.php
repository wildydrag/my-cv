<?php
$firstName = null;
$email = null;
$lastName = null;
$message = null;
$submit = null;


if (isset($_POST['firstName']) && $_POST['email'] && $_POST['lastName'] && $_POST['message'] && $_POST['submit'] ){
 $firstName = $_POST['firstName'];
 $lastName = $_POST['lastName'];
 $email = $_POST['email'];
 $message = $_POST['message'];
 $submit = $_POST['submit'];
}
 
$counter=count(glob("*.txt")) + "1";



if(isset($submit)) {
$myfile = fopen($counter.".txt","w");
fwrite($myfile,$firstName."\n");
fwrite($myfile,$lastName."\n");
fwrite($myfile,$email."\n");
fwrite($myfile,$message."\n");
fclose('$myfile');
}

 ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>emad cv</title>
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,700&family=Merriweather&family=Montserrat:wght@700;900&family=Sacramento&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;900&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,700&family=Merriweather&family=Montserrat:wght@900&family=Sacramento&display=swap" rel="stylesheet">
    <!-- styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <!-- scripts -->
    <script src="https://kit.fontawesome.com/114b34787c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

  </head>
  <body>
    <?php if ($firstName) { ?>
    <label>اسم</label><p><?php echo $firstName ?></p>
  <?php } ?>
  <?php if ($lastName) { ?>
    <label>نام خانواگی</label><p><?php echo $lastName ?></p>
  <?php } ?>
  <?php if ($email) { ?>
    <label>ایمیل</label><p><?php echo $email ?></p>
  <?php } ?>
  <?php if ($message) { ?>
    <label>پیام</label><p><?php echo $message ?></p>
  <?php } ?>

    <section id="title">
      <div class="container-fluid">


          <!-- Nav Bar -->
          <nav class="navbar navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link" href="#footer">تماس بامن</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#skills">مهارت ها و توامندی ها</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#honors">افتخارات و دستاورد ها</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#introduce">معرفی</a>
                </li>
              </ul>
            </div>
          </nav>

          <!-- Title -->
          <div class="row">
            <div class="col-lg-12">
              <h1>رزومه تحصیلی</h1>
            </div>
            <div class=col-lg-12>
              <img class="title-image" src="photo.jpg" alt="تصویر من">
            </div>
          </div>
        </div>
     </section>

     <!-- معرفی -->
      <section  id="introduce">
        <div class="row" id="row">
          <div class="col-lg-12">
            <h2>معرفی</h2>
<p>محمد عماد چنگیزی آشتیانی هستم ساکن تهران و دانشجوی رشته مهندسی کامپیوتر دانشگاه صنعتی شریف<br/>. 😀علاقهمند به هنر های رزمی،کارهای هنری و از دوستداران محیط زیست هستم</p>
    </div>
        </div>



      </section>

      <section id="honors">
        <div class="row">
          <div class="col-lg-12">
            <h1>دستاورد ها🔥🔥</h1>
            <ul>
              <li>برنده جایزه کدرز🔥🔥</li>
              <li>کسب مقام کشوری در هنرهای رزمی🔥🔥</li>
              <li>دیپلم افتخار بهترین طراح مجسمه سال🔥🔥</li>
            </ul>


          </div>

          </div>


      </section>

      <section id="skills">
        <div class="row">
          <div class="col-lg-12">
            <h1>مهارت ها</h1>
            <ol>
              <li>
                تابپ ده انگشتی 💥💥💥💥💥

              </li>
              <li>زبان انگلیسی 💥💥💥💥💥</li>
              <li>هنر های رزمی 💥💥💥💥💥</li>
              <li>توسعه وب💥💥💥</li>
            </ol>

          </div>

        </div>

      </section>

      <!-- footer -->
      <footer id="footer">
        <h2>تماس با ما</h2>
        <p>برای تماس با ما لطفا فرم زیر را پر کنید.</p>
        <form class="" action="" method="post">
          <label  class="col-lg-1">نام</label>
         <input   class="col-lg-5" name="firstName" type="text"> <br><br>
         <label   class="col-lg-1">نام خانوادگی</label>
           <input class="col-lg-5" name="lastName" type="text"> <br><br>
           <label class="col-lg-1">ایمیل</label>
          <input  class="col-lg-5" name="email" type="email"> <br><br>
          <label></label>
          <textarea name="message">پیام</textarea><br><br>
          <!-- <input type="submit" class="button"> -->
          <!-- <button onclick="myFunction()">ارسال اطلاعات</button> -->
          <input name="submit" type="submit">
          <!-- <button>ارسال اطلاعات</button> -->
          <!-- <p id="demo"></p> -->
        </form>



      <!-- <p class="footer-p">© Copyright 2022 Emad</p> -->
      </footer>
      <!-- <script>
      function myFunction() {
        var txt;
        if (confirm("آیا از صحت اطلاعات خود اطمینان دارید؟")) {
          txt = "عملیات با موفقیت انجام شد";
        }
        } else {
          txt = "عملیات انجام نشد";
        document.getElementById("demo").innerHTML = txt;
      }
      </script> -->
  </body>
</html>

