<!DOCTYPE html>
<html lang="en , km">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APP ACCOUNT SELLER</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../home/logo/logome.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="../home/logo/logome.png">
    <style>
        h3 {
            color: #15ff00;
            font-size: 24px;
            margin: 20px 0;
        }

        .game-card img {
            width: 250px;
            height: 250px;
            object-fit: contain;
            display: block;
            margin: 0 auto 10px auto;
            border-radius: 10px;
        }

        .buy-btn {
            background: rgb(235, 174, 7);
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 12px 28px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
        }

        .buy-btn:hover,
        .buy-btn:focus {
            background: #27ae60;
            color: #fff;
        }

        footer {
            background: #222;
            color: #fff;
            padding: 32px 0 24px 0;
            text-align: center;
            margin-top: 40px;
        }

        footer .social-icons a {
            color: #fff;
            font-size: 28px;
            margin: 0 10px;
        }

        footer .payment img {
            width: 120px;
            height: auto;
            border-radius: 8px;
        }

        footer .copyright {
            margin-top: 18px;
            font-size: 14px;
            color: #bbb;
        }

        .game-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 24px;
            padding: 20px 0;
            width: 100%;
            margin: 0 auto;
        }

        .banner {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 24px;
            padding: 20px 0;
            width: 100%;
            margin: 0 auto;
        }

        #loader-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #111;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 1.0s ease, visibility 1.5s ease;
        }

        #loader {
            border: 8px solid #0c1be9ff;
            border-top: 8px solid #00ff99;
            border-radius: 50%;
            width: 70px;
            height: 70px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            text-align: center;
        }

        h1 {
            margin-top: 20px;
            color: #333;
        }

        .slider {
            position: relative;
            width: 90%;
            max-width: 800px;
            height: 400px;
            margin: 40px auto;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .slides {
            display: flex;
            width: 100%;
            height: 100%;
            transition: transform 1s ease-in-out;
        }

        .slides img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            flex-shrink: 0;
        }

        .greeting {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <header>
        <a href="../admin-login/index.php" target="_blank" rel="noopener noreferrer"><img src="../home/logo/logome.png"
                alt="net Icon"></a>

        <h1>APP ACCOUNT SELLER</h1>
        <div class="icons">
            <a href="../customer-service/index.php"><i class="fas fa-headset"></i></a>
            <a href="../login-app/index.php"><i class="fas fa-user"></i></a>
        </div>
    </header>

    <div id="loader-wrapper">
        <div id="loader"></div>
    </div>

    <script>
        window.addEventListener("load", function() {
            const loader = document.getElementById("loader-wrapper");
            loader.style.opacity = "0";
            loader.style.visibility = "hidden";
        });
    </script>

    <div class="banner">
        <div class="slider">
            <div class="slides" id="slide-track">
                <img src="../home/logo/banner.png" alt="Slide 1">
                <img src="../home/logo/logome.png" alt="Slide 3">
            </div>
        </div>
        <script>
            const slides = document.getElementById('slide-track');
            const totalSlides = slides.children.length;
            let index = 0;

            setInterval(() => {
                index = (index + 1) % totalSlides;
                slides.style.transform = `translateX(-${index * 100}%)`;
            }, 5000);
        </script>
    </div>

    <div class="section-title">
        <?php
        date_default_timezone_set('Asia/Phnom_Penh');
        $hour = date('H');
        if ($hour < 12) {
            $greeting = "អរុណសួស្តីពេលព្រឹក!";
        } elseif ($hour < 18) {
            $greeting = "អរុណសួស្តីពេលរសៀល!";
        } else {
            $greeting = "រាត្រីសួស្តី!";
        }
        echo "<div class='greeting' style='text-align:center; margin:10px 0; font-weight:bold;'>$greeting 🥳</div>";
        ?>
        <hr>
        <h3>មានទំនុកចិត្តខ្ពស់ និងសុវត្តិភាព 100%</h3>
        <p style="text-decoration: underline;">សូមជ្រើសរើសកម្មវិធីដែលអ្នកចង់ទិញ</p>
    </div>

    <div class="game-grid">
        <div class="game-card"><img src="../img/yt.png" alt="yt">
            <p>YOUTUBE PREMIUM</p>
            <form method="post" action="buy.php">
                <input type="hidden" name="item" value="yt">
                <button type="submit" class="buy-btn">12.85$/ខែ</button>
            </form>
        </div>

        <div class="game-card"><img src="../img/mt.png" alt="mt">
            <p>META VERIFIED</p>
            <form method="post" action="buy.php">
                <input type="hidden" name="item" value="mt">
                <button type="submit" class="buy-btn">13.50$/ខែ</button>
            </form>
        </div>

        <div class="game-card"><img src="../img/tl.png" alt="tl">
            <p>TELEGRAM PREMIUM</p>
            <form method="post" action="buy.php">
                <input type="hidden" name="item" value="tl">
                <button type="submit" class="buy-btn">3.75$/ខែ</button>
            </form>
        </div>

        <div class="game-card"><img src="../img/cv.png" alt="cv">
            <p>CANVA PRO</p>
            <form method="post" action="buy.php">
                <input type="hidden" name="item" value="cv">
                <button type="submit" class="buy-btn">29.85$/ខែ</button>
            </form>
        </div>

        <div class="game-card"><img src="../img/ct.png" alt="ct">
            <p>CAPCUT PRO</p>
            <form method="post" action="buy.php">
                <input type="hidden" name="item" value="ct">
                <button type="submit" class="buy-btn">6.75$/ខែ</button>
            </form>
        </div>

        <div class="game-card"><img src="../img/gn.png" alt="gn">
            <p>GEMINI PRO</p>
            <form method="post" action="buy.php">
                <input type="hidden" name="item" value="gn">
                <button type="submit" class="buy-btn">18.85$/ខែ</button>
            </form>
        </div>
        <?php
        include '../api/db.php';
        $result = $conn->query("SELECT * FROM products ORDER BY id DESC");
        ?>
        <div class="game-grid">
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="game-card">
                    <img src="../<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>">
                    <p><?php echo htmlspecialchars($row['name']); ?></p>
                    <form method="post" action="buy.php">
                        <input type="hidden" name="item" value="<?php echo $row['id']; ?>">
                        <button type="submit" class="buy-btn"><?php echo htmlspecialchars($row['price']); ?>$/ខែ</button>
                    </form>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <hr>
    <footer style="
        background: #222;
        color: #fff;
        padding: 32px 0 24px 0;
        text-align: center;
        margin-top: 40px;
    ">
        <div style="font-size:20px;margin-bottom:10px;">ទំនាក់ទំនងតាមរយៈ</div>
        <hr style="width:60px;border:1px solid #fff;margin:10px auto;">
        <div class="social-icons" style="margin-bottom:18px;">
            <a href="https://www.facebook.com/nhonet1234/" target="_blank" rel="noopener noreferrer"
                style="color:#fff;font-size:28px;margin:0 10px;">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://t.me/nho_net" target="_blank" rel="noopener noreferrer"
                style="color:#fff;font-size:28px;margin:0 10px;">
                <i class="fab fa-telegram"></i>
            </a>
            <a href="https://www.instagram.com/nhonet1234/" target="_blank" rel="noopener noreferrer"
                style="color:#fff;font-size:28px;margin:0 10px;">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
        <div class="payment" style="margin-bottom:10px;">
            <p style="margin-bottom:8px;">ទទួលស្គាល់ការទូទាត់ប្រាក់តាមរយៈ</p>
            <img src="../img/khqr.png" alt="Khal Payment"
                style="width:105px;height:auto;border-radius:8px;">
            <img src="../img/aba.png" alt="Khal Payment"
                style="width:60px;height:auto;border-radius:8px;">
            <img src="../img/canadia.png" alt="Khal Payment"
                style="width:60px;height:auto;border-radius:8px;">
            <img src="../img/wink.png" alt="Khal Payment"
                style="width:60px;height:auto;border-radius:8px;">
            <img src="../img/aceleda.png" alt="Khal Payment"
                style="width:60px;height:auto;border-radius:8px;">
        </div>
        <div style="margin-top:18px;font-size:14px;color:#bbb;">
            &copy; <?php echo date('Y'); ?> APP ACCOUNT SELLER | All rights reserved.
        </div>
    </footer>
    <script src="./js/script.js"></script>
</body>

</html>