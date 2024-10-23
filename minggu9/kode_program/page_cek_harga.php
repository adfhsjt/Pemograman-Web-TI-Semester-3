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

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-weight: bold;
            color: #555;
        }

        input[type="number"],
        select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #f9a825;
            color: white;
            border: none;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #f57f20;
        }

        #hasil {
            margin-top: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            color: #333;
            text-align: left;
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
            <a href="home.php">Home</a>
            <a href="page_cek_harga.php"><b>Cek Harga</b></a>
            <a href="page_login.php">LogOut</a>
        </nav>
    </header>
    <div class="container">
        <h2>Cek Harga Kamar</h2>
        <form method="post" action="page_cek_harga.php" id="myForm">
            <label for="lantai">Lantai:</label>
            <input type="number" id="lantai" name="lantai" value="1">
            <br>
            <label for="tipe">Tipe Kamar:</label>
            <select id="tipe" name="tipe">
                <option value="standard">Standard (Rp 300.000)</option>
                <option value="superior">Superior (Rp 400.000)</option>
                <option value="deluxe">Deluxe (Rp 500.000)</option>
            </select>
            <br>
            <label for="jumlah_hari">Jumlah Hari:</label>
            <input type="number" id="jumlah_hari" name="jumlah_hari" value="1">
            <br>
            <label for="diskon">Diskon:</label>
            <select id="diskon" name="diskon">
                <option value="tidak_ada">Tidak Ada</option>
                <option value="member">Member (10%)</option>
                <option value="ulang_tahun">Promo HUT (Rp 100.000)</option>
            </select>
            <br>
            <input type="submit" value="CHECK">
            <div id="hasil"></div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(e) {
                e.preventDefault(); 
                var formData = $(this).serialize(); 
                $.ajax({
                    url: "cek_harga.php", 
                    type: "POST", 
                    data: formData, 
                    success: function(response) {
                        $("#hasil").html(response); 
                    }
                });
            });
        });
    </script>

    <footer>
        <p>&copy; 2023 ABC Hotel</p>
    </footer>
</body>

</html>
