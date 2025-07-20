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
    <link rel="stylesheet" href="./page.css">
</head>

<body>
    <header>
        <img src="../home/logo/icon.png" alt="net Icon">
        <h1>APP ACCOUNT SELLER</h1>

        <div class="header-right-icons">
            <button class="menu-toggle" id="menuToggle">
                <i class="fas fa-bars"></i> </button>
        </div>
    </header>

    <div class="off-canvas-menu" id="offCanvasMenu">
        <nav>
            <ul>
                <li><a href="index.php">ទំព័រដើម</a></li>
                <li><a href="../admin-login/index.php">អេដមីន</a></li>
                <li><a href="about.php">អំពីយើង</a></li>
                <li><a href="#game-grid">កម្មវិធី</a></li>
                <li><a href="#footer">ទាក់ទងមកយើង</a></li>
                <li><a href="../customer-service/index.php">ជំនួយបន្ថែម</a></li>
            </ul>
        </nav>
        <div class="off-canvas-icons">
            <a href="../customer-service/index.php" title="Customer Service"><i class="fas fa-headset"></i></a>
            <a href="../login-app/index.php" title="Login / Account"><i class="fas fa-user"></i></a>
        </div>
    </div>
    <div class="overlay" id="overlay"></div>

    <div id="loader-wrapper">
        <div id="loader"></div>
    </div>

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

    <div class="game-grid" id="game-grid">
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
    <footer id="footer" style="
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

    <button id="scrollUpBtn" title="Scroll to top"><i class="fas fa-arrow-up"></i></button>

    <script src="./js/script.js"></script>
    <script src="./page.js"></script>
</body>

</html>
