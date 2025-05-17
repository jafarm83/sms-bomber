<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180">
    <link href="assets/img/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
    <link href="assets/img/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>اس ام اس بمبر</title>
</head>
<body>
<!-- حذف لاگ از فرم -->
<form action="sms.php" class="bomber-form" method="POST">
    <?php
    if (isset($_GET['number']) && $_GET['number'] == 0) { ?>
        <div id="error" class="error">!فرمت شماره وارد شده اشتباه می باشد</div>
    <?php } elseif (isset($_GET['ok']) && $_GET['ok'] == true) { ?>
        <div id="done" class="done">ارسال پیامک ها با موفقیت به اتمام رسید</div>
    <?php } ?>

    <div id="pending" class="pending">در حال ارسال پیامک ها</div>

    <h3>اس ام اس بمبر 💣</h3>
    <label for="phone">شماره تلفن(با صفر)</label>
    <input id="phone" name="phone" placeholder="09XXXXXXXXX" type="text">
    <button onclick="sending()" name="submit">ارسال</button>
    <a href="https://github.com/jafarm83" target="_blank">
        <img alt="AmirMalek-Github" class="git" src="assets/img/github.png">
    </a>
</form>

<!-- اسکریپت بدون لاگ -->
<script>
    function sending() {
        const error = document.getElementById('error');
        if (error && window.getComputedStyle(error).display === 'block') {
            error.style.display = 'none';
        }

        const done = document.getElementById('done');
        if (done && window.getComputedStyle(done).display === 'block') {
            done.style.display = 'none';
        }

        document.getElementById("pending").style.display = "block";
    }
</script>
