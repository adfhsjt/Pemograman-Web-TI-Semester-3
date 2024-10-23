<!DOCTYPE html>
<html>

<head>
    <title>ABC Hotel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            background-color: #f7f7f7;
        }

        .header {
            text-align: left;
            background-color: darkorange;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .container {
            margin-top: 50px;
            max-width: 400px;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #hasil {
            margin-top: 10px;
            color: red;
        }


        #form-password {
            margin-top: 10px;
        }

        button[type="submit"]:hover {
            background-color: #ff6600;
        }

        button {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>ABC Hotel</h1>
    </div>
    <div class="container">
        <h3 class="text-center mb-4">Login</h3>
        <form action="validasi.php" method="post" id="myForm">
            <div class="form-group" id="form-username">
                <label for="username">Username:</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username">
            </div>
            <div class="form-group" id="form-password">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
            </div>
            <button type="submit" name="login" class="btn btn-secondary btn-block">LOGIN</button>
            <div id="hasil"></div>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(e) {
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: "proses_validasi.php",
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        if (response.includes('Login berhasil')) {
                            window.location.href = 'home.php'; 
                        } else {
                            $("#hasil").html(response);
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>
