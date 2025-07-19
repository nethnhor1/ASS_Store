<!DOCTYPE html>
<html lang="en , km">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About APP ACCOUNT SELLER</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="home/logo/logome.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="home/logo/logome.png">
    <style>
        .about-content {
            max-width: 900px;
            margin: 40px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            line-height: 1.6;
            color: #333;
        }

        .about-content h2 {
            color: #333;
            font-size: 32px;
            margin-bottom: 20px;
            text-align: center;
        }

        .about-content h3 {
            color: #15ff00;
            /* Matching your existing green color */
            font-size: 24px;
            margin-top: 30px;
            margin-bottom: 15px;
        }

        .about-content p {
            margin-bottom: 15px;
        }

        .about-content ul {
            list-style: disc inside;
            margin-left: 20px;
            margin-bottom: 15px;
        }

        .about-content ul li {
            margin-bottom: 8px;
        }

        .about-image {
            text-align: center;
            margin: 30px 0;
        }

        .about-image img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        /* Ensure header, footer, loader, and menu styles are also applied from `css/style.css` */
        /* Start of assumed content from your main page's <style> block, now in css/style.css */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 1000;
        }

        header img {
            height: 50px;
            margin-right: 15px;
        }

        header h1 {
            margin: 0;
            color: #fff;
            font-size: 28px;
            flex-grow: 1;
            text-align: left;
        }

        .header-right-icons {
            display: flex;
            align-items: center;
        }

        .menu-toggle {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            padding: 0;
            color: #fff;
            font-size: 30px;
        }

        .off-canvas-menu {
            position: fixed;
            top: 0;
            right: -250px;
            width: 250px;
            height: 100%;
            background-color: #222;
            box-shadow: -2px 0 5px rgba(0, 0, 0, 0.5);
            transition: right 0.3s ease-in-out;
            z-index: 999;
            padding-top: 70px;
            text-align: left;
            display: flex;
            flex-direction: column;
        }

        .off-canvas-menu.active {
            right: 0;
        }

        .off-canvas-menu nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            flex-grow: 1;
        }

        .off-canvas-menu nav ul li {
            border-bottom: 1px solid #444;
        }

        .off-canvas-menu nav ul li:last-child {
            border-bottom: none;
        }

        .off-canvas-menu nav ul li a {
            display: block;
            padding: 15px 20px;
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
        }

        .off-canvas-menu nav ul li a:hover {
            background-color: #444;
            color: #15ff00;
        }

        .off-canvas-icons {
            padding: 15px 20px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            border-top: 1px solid #444;
            margin-top: auto;
            background-color: #333;
        }

        .off-canvas-icons a {
            color: #fff;
            font-size: 28px;
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }

        .off-canvas-icons a:hover {
            color: #15ff00;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 998;
            display: none;
        }

        .overlay.active {
            display: block;
        }

        body.no-scroll {
            overflow: hidden;
        }

        @media (max-width: 768px) {
            header h1 {
                font-size: 24px;
            }

            .menu-toggle {
                display: block;
            }
        }

        @media (min-width: 769px) {
            .menu-toggle {
                display: none;
            }

            .off-canvas-menu {
                display: none;
            }
        }

        /* End of assumed content from your main page's <style> block */
    </style>
</head>

<body>
    <header>
        <a href="#" target="_blank" rel="noopener noreferrer">
            <img src="../home/logo/icon.png" alt="net Icon">
        </a>
        <h1>APP ACCOUNT SELLER</h1>

        <div class="header-right-icons">
            <button class="menu-toggle" id="menuToggle">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </header>

    <div class="off-canvas-menu" id="offCanvasMenu">
        <nav>
            <ul>
                <li><a href="index.php">ទំព័រដើម</a></li>
                <li><a href="#footer">ទាក់ទងមកយើង</a></li>
            </ul>
        </nav>
        <div class="off-canvas-icons">
            <a href="customer-service/index.php" title="Customer Service"><i class="fas fa-headset"></i></a>
            <a href="login-app/index.php" title="Login / Account"><i class="fas fa-user"></i></a>
        </div>
    </div>
    <div class="overlay" id="overlay"></div>

    <div id="loader-wrapper">
        <div id="loader"></div>
    </div>

    <script>
        window.addEventListener("load", function() {
            const loader = document.getElementById("loader-wrapper");
            loader.style.opacity = "0";
            loader.style.visibility = "hidden";
        });

        const menuToggle = document.getElementById('menuToggle');
        const offCanvasMenu = document.getElementById('offCanvasMenu');
        const overlay = document.getElementById('overlay');
        const menuIcon = menuToggle.querySelector('i');

        menuToggle.addEventListener('click', () => {
            offCanvasMenu.classList.toggle('active');
            overlay.classList.toggle('active');
            document.body.classList.toggle('no-scroll');

            if (offCanvasMenu.classList.contains('active')) {
                menuIcon.classList.remove('fa-bars');
                menuIcon.classList.add('fa-times');
            } else {
                menuIcon.classList.remove('fa-times');
                menuIcon.classList.add('fa-bars');
            }
        });

        overlay.addEventListener('click', () => {
            offCanvasMenu.classList.remove('active');
            overlay.classList.remove('active');
            document.body.classList.remove('no-scroll');

            menuIcon.classList.remove('fa-times');
            menuIcon.classList.add('fa-bars');
        });

        offCanvasMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', (event) => {
                const isNavLink = link.closest('nav');

                if (isNavLink) {
                    offCanvasMenu.classList.remove('active');
                    overlay.classList.remove('active');
                    document.body.classList.remove('no-scroll');
                    menuIcon.classList.remove('fa-times');
                    menuIcon.classList.add('fa-bars');
                }
            });
        });

        document.querySelector('.off-canvas-icons').addEventListener('click', (event) => {
            event.stopPropagation();
        });
    </script>

    <main class="about-content">
        <h2>អំពី APP ACCOUNT SELLER</h2>

        <div class="about-image">
            <img src="../home/logo/logome.png" alt="APP ACCOUNT SELLER Logo" title="Your App Account Seller Logo">
        </div>

        <h3>Our Mission</h3>
        <p>
            At **APP ACCOUNT SELLER**, our mission is to provide a reliable, secure, and user-friendly platform for
            purchasing premium application accounts. We understand the need for affordable access to popular digital
            services, and we strive to bridge that gap with integrity and efficiency. Our commitment is to deliver
            authentic accounts quickly, ensuring a seamless experience for all our customers.
        </p>

        <h3>Who We Are</h3>
        <p>
            We are a dedicated team passionate about digital services and customer satisfaction. Founded in
            <?php echo date('Y') - 2; ?>, APP ACCOUNT SELLER has quickly grown to become a trusted name in the market,
            serving thousands of satisfied customers across Cambodia and beyond. We pride ourselves on our transparent
            practices, competitive pricing, and exceptional customer support.
        </p>

        <h3>Why Choose Us?</h3>
        <ul>
            <li><strong>Reliability:</strong> We ensure all accounts are legitimate and fully functional.</li>
            <li><strong>Security:</strong> Your privacy and data security are our top priorities. All transactions are secure.</li>
            <li><strong>Affordability:</strong> We offer premium accounts at competitive prices, making digital services accessible.</li>
            <li><strong>Speed:</strong> Receive your purchased accounts swiftly, often within minutes of successful payment.</li>
            <li><strong>Customer Support:</strong> Our dedicated support team is ready to assist you with any inquiries or issues.</li>
            <li><strong>100% Satisfaction Guarantee:</strong> We stand by the quality of our service.</li>
        </ul>

        <h3>Our Vision</h3>
        <p>
            To be the leading platform for digital account sales in Cambodia, continuously expanding our range of
            services and innovating to meet the evolving needs of our customers. We aim to build a community based on
            trust, convenience, and unparalleled service.
        </p>

        <p>
            Thank you for choosing APP ACCOUNT SELLER. We look forward to serving you!
        </p>

    </main>

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
        <div style="margin-top:18px;font-size:14px;color:#bbb;">
            &copy; <?php echo date('Y'); ?> APP ACCOUNT SELLER | All rights reserved.
        </div>
    </footer>
</body>

</html>