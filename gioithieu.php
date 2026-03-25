<?php
$name = "Nguyễn Công Tuấn";
$msv = "20223673";
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Giới thiệu bản thân</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            height: 100vh;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            width: 320px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            animation: fadeIn 1s ease-in-out;
        }
        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 15px;
            border: 4px solid #4facfe;
        }
        h1 {
            font-size: 22px;
            margin-bottom: 10px;
            color: #333;
        }
        p {
            font-size: 16px;
            color: #555;
            margin: 5px 0;
        }
        .badge {
            margin-top: 15px;
            display: inline-block;
            padding: 8px 15px;
            background: #4facfe;
            color: white;
            border-radius: 20px;
            font-size: 14px;
        }
        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(20px);}
            to {opacity: 1; transform: translateY(0);}
        }
    </style>
</head>
<body>

<div class="card">
    <img src="https://i.pravatar.cc/100" alt="avatar" class="avatar">
    <h1><?php echo $name; ?></h1>
    <p><strong>Mã sinh viên:</strong> <?php echo $msv; ?></p>
    <div class="badge">Sinh viên IT 💻</div>
</div>

</body>
</html>