<html>
    <head>
        <title>Form Multiupload</title>
    </head>
    <body>
        <h2>Unggah dokumen</h2>
        <form action="proses_upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="files[]" multiple="multiple">
            <input type="submit" value="Unggah">

        </form>
    </body>
</html>