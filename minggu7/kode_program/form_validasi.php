<!DOCTYPE html>
<html>
    <head>
        <title>Form Input Dengan Validasi</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <h1>Form Input Dengan Validasi</h1>
        <form action="proses_validasi.php" method="post" id="myForm">
            <label for="nama">Nama : </label>
            <input type="text" id="nama" name="nama">
            <span id="nama_error" style="color:red;"></span>

            <br>
            <label for="email"> Email : </label>
            <input type="email" id="email" name="email">
            <span id="email_error" style="color:red;"></span>
            
            <br>
            <label for="password"> Password : </label>
            <input type="password" id="password" name="password">
            <span id="password_error" style="color:red;"></span>
            
            <br>
            <input type="submit" value="Submit">
        </form>
        <div id="hasil"></div>
        <script>
            $(document).ready(function() {
                $("#myForm").submit(function(e) {
                    e.preventDefault(); 
                    
                    var nama = $("#nama").val();
                    var email = $("#email").val();
                    
                    if (nama === "") {
                        $("#nama_error").text("Nama harus diisi.");
                    } else {
                        $("#nama_error").text("");
                    }

                    if (email === "") {
                        $("#email_error").text("Email harus diisi.");
                    } else {
                        $("#email_error").text("");
                    }

                    var password = $("#password").val();
                    if (password === "") {
                        $("#password_error").text("Password harus diisi.");
                    } else if (password.length < 8) {
                        $("#password_error").text("Password harus berisi minimal 8 karakter.");
                    } else {
                        $("#password_error").text("");
                    }

                    if ($("#nama_error").text() === "" && $("#email_error").text() === "" && $("#password_error").text() === "") {
                        $.ajax({
                            url: 'proses_validasi.php',
                            type: 'POST',
                            data: {
                                nama: nama,
                                email: email,
                                password: password
                            },
                            success: function(response) {
                                $("#hasil").html(response);
                            },
                            error: function() {
                                $("#hasil").html("Terjadi kesalahan saat memproses data.");
                            }
                        });
                    }
                });
            });
        </script>
    </body>
</html>
