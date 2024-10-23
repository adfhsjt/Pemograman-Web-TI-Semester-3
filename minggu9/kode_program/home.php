<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC Hotel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #f9a825;
            color: #fff;
            padding: 15px 0;
            text-align: center;
            /* position: fixed; */
            top: 0;
            left: 0;
            width: 100%;
        }

        .container {
            width: 90%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .banner-container {
            position: relative;
            width: 100%;
            height: 300px;
            overflow: hidden;
        }

        .banner-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .hotel-profile {
            padding: 20px 0;
        }

        footer {
            background-color: #f9a825;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            position: relative;
            bottom: 0;
            left: 0;
            width: 100%;
            
        }

        .nav-links {
            display: inline-block;
            margin: 0 10px;
            color: #fff;
            text-decoration: none;
        }

        .banner-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .banner-nav button {
            background-color: #333;
            border: none;
            font-size: 3em;
            color: #fff;
            cursor: pointer;
            padding: 10px;
            border-radius: 5px;
            opacity: 0.5;

        }

        .banner-nav button:hover {
            opacity: 1;
        }

        .banner-nav button:active {
            transform: scale(0.9);
        }

        nav {
            color: #fff;
            padding: 10px;
            text-align: right;
        }

        nav a {
            background-color: darkgoldenrod;
            padding: 8px 16px;
            color: #fff;
            text-decoration: none;
            margin: 0 12px;
            border-radius: 5px;
        }

        nav a:hover {
            color: #ff6600;
        }

        nav a:active {
            transform: scale(0.9);
        }
    </style>
    </>
</head>

<body>
    <header style="text-align: left;">
        <div style="margin: 16px;">
            <h1>ABC Hotel</h1>
        </div>
        <nav>
            <a href="home.php"><b>Home</b></a>
            <a href="page_cek_harga.php">Cek Harga</a>
            <a href="page_login.php">LogOut</a>
        </nav>
    </header>
    <div class="container">
        <div class="banner-container">
            <img src="banner1.png" class="banner-image" alt="Banner 1">
            <img src="banner2.png" class="banner-image" alt="Banner 2">
            <img src="banner3.png" class="banner-image" alt="Banner 3">
            <div class="banner-nav">
                <button id="prev">‹</button>
                <button id="next">›</button>
            </div>
        </div>
        <div class="hotel-profile">
            <h2>Profile Hotel</h2>
            <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, rem sequi excepturi asperiores fugiat fugit deleniti harum quia maiores labore quisquam optio porro eum iste, et quo necessitatibus in recusandae.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta quibusdam provident rerum pariatur nemo laborum molestiae vero impedit culpa quia aut reprehenderit, placeat laboriosam ipsa, tenetur dolor ratione. Similique, eaque!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos amet iure repellat perspiciatis, veritatis culpa facilis? Voluptatibus sunt libero, possimus repellendus ea dolorem a explicabo dicta incidunt dolorum modi quasi.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut fugiat fuga veniam laborum magnam cupiditate cumque quia! Dolore, totam earum? Molestiae id quisquam ipsa nulla ullam aspernatur eligendi asperiores possimus!
            </p>
        </div>
    </div>
    <footer>
        <p>&copy; 2023 ABC Hotel</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var bannerImages = $(".banner-image");
            var currentImage = 0;

            function changeImage() {
                bannerImages.hide();
                bannerImages.eq(currentImage).fadeIn();
            }

            changeImage();

            $("#prev").click(function() {
                currentImage = (currentImage - 1 + bannerImages.length) % bannerImages.length;
                changeImage();
            });

            $("#next").click(function() {
                currentImage = (currentImage + 1) % bannerImages.length;
                changeImage();
            });
        });
    </script>

</body>

</html>