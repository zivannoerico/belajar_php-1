<?php 
    include "data.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        td {
            padding : 1em;
        }
    </style>
</head>
<body>
    <?php 
        if(isset($_POST['btnDataSiswa']))
        {
    ?>
       
        <table border=1 style="border-collapse : collapse; width : 50%; ">
            <tr>
                <td>NIS </td>
                <td>:</td>
                <td>
                    <?= $_POST['nis'] ?>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td> <?= $_POST['nama'] ?> </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>: </td>
                <td>
                    <?= $_POST['kelas'] ?>
                </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <?php echo $_POST['jurusan']; ?>
                </td>

            </tr>
            <tr>
                <td>Saran</td>
                <td>:</td>
                <td>
                    <?= $_POST['saran'] ?>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td>
                    <?= $_POST['gender'] ?>
                </td>
            </tr>
            <tr>
                <td>Ekskul</td>
                <td>:</td>
                <td>
                    <?php echo implode(",",$_POST['ekskul']); ?>
                    
                </td>
            </tr>
           
        </table>

<?php 
        }
        else { 
                echo "Tidak ada data untuk di proses";
        }
?>



    
</body>
</html>