<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style>
        .array_2 {
            border: 1px solid black;
            padding: 10px;
            margin: 10px;
            width: 300px;
            height: 300px;
            background-color: lightgreen;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            font-family: 'Times New Roman', Times, serif;
            font-weight: 600;
        }

    </style>
</head>

<body>
    <div class="array_2">
    <?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis kelamin' => 'Perempuan'
    ];
    echo "Nama : {$Dosen['nama']} <br>";
    echo "Domisili : {$Dosen['domisili']} <br>";
    echo "Jenis Kelamin : {$Dosen['jenis kelamin']} <br>";
    ?>
    </div>
    
</body>

</html>