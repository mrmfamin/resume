<?php
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $i = count(glob("*.txt"));
    $file = fopen($i+1 . ".txt", 'w');
    fwrite($file, $name . " " . $lastname);
    fclose($file);
}
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تمرین شماره هشت کارگاه</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header id="header">
        <h1 id="titr">رزومه محمد فاضل سماواتی</h1>
        <div class="c-both"></div>
    </header>
    <nav>
        <ul class="nav-items">
            <li class="nav-item"><a href="index.html">معرفی</a></li>
            <li class="nav-item"><a href="maharat.html">مهارت ها و توانایی ها</a></li>
            <li class="nav-item"><a href="eftekharat.html">افتخارات و دستاوردها</a></li>
            <li class="nav-item"><a class="active" href="tamas.html">تماس با من</a></li>
        </ul>
    </nav>
    <div class="content">
        <h2>تماس با ما</h2>
        <form action="" method="post">
            <input type="text" name="name" placeholder="نام">
            <input type="text" name="lastname" placeholder="نام خانوادگی">
            <button onclick="return alertHandler()">ارسال</button>
        </form>
        <div class="c-both"></div>
    </div>
    <footer>
        <div class="right">
            <h3>دسترسی سریع</h3>
            <ul class="nav-items">
                <li class="nav-item"><a href="index.html">معرفی</a></li>
                <li class="nav-item"><a href="maharat.html">مهارت ها و توانایی ها</a></li>
                <li class="nav-item"><a href="eftekharat.html">افتخارات و دستاوردها</a></li>
                <li class="nav-item"><a class="active" href="tamas.html">تماس با من</a></li>
            </ul>
        </div>
        <div class="left">
            <h3>لینک شبکه های اجتماعی</h3>
            <ul class="nav-items">
                <li class="nav-item"><a href="http://t.me/mrmfamin" target="_blank">تلگرام</a></li>
                <li class="nav-item"><a href="https://githun.com/mrmfamin" target="_blank">گیت هاب</a></li>
            </ul>
        </div>
        <div class="c-both"></div>
        <p>تمامی حقوق محفوظ است</p>
    </footer>
    <script>
        function alertHandler(){
            if(confirm('آیا از اطلاعات وارد شده مطمئن هستید؟')){
                alert('اطلاعات با موفقیت ذخیره شد!');
                return true;
            }else{
                return false;
            }
        }
    </script>
</body>
</html>