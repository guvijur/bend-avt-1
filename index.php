<?php
// Тестовая страница сайта bend-avt-1.local
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>bend-avt-1.local</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f5f7;
            color: #222;
            padding: 40px;
        }

        .box {
            max-width: 700px;
            margin: 0 auto;
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 18px rgba(0,0,0,0.08);
        }

        h1 {
            color: #1f5fa8;
        }

        code {
            background: #eef2f5;
            padding: 3px 6px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>Сайт bend-avt-1.local работает!</h1>

        <p>Apache успешно настроен.</p>
        <p>PHP успешно работает.</p>

        <hr>

        <p><strong>Версия PHP:</strong> <?php echo phpversion(); ?></p>
        <p><strong>Путь к сайту:</strong> <code><?php echo __DIR__; ?></code></p>
        <p><strong>Серверное время:</strong> <?php echo date('d.m.Y H:i:s'); ?></p>
    </div>
</body>
</html>
