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
    <style>
        td {
            padding : 1em;
        }
    </style>
</head>
<body>
    <form action="proses.php" method="POST">
        <table border=1 style="border-collapse : collapse; width : 50%; ">
            <tr>
                <td>NISN </td>
                <td>:</td>
                <td>
                    <input type="text" name="NISN" id=""  />
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td> <input type="text" name="nama" id="">  </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>: </td>
                <td>
                <select name="kelas" class="form-select" aria-label="Default select example">
                        <option value="">--Pilih Kelas--</option>
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <option value="XII">XII</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <select name="jurusan" class="form-select" aria-label="Default select example">
                        <option value="">-- Pilih Jurusan --</option>
                        <option value="AKL">Akuntansi dan Keuangan Lembaga</option>
                        <option value="MPLB">Manajemen Perkantoran dan Layanan Bisnis </option>
                        <option value="PM">Pemasaran</option>
                        <option value="PPLG">Pengembangan Perangkat Lunak dan Gim</option>
                        <option value="TJKT">Teknik Jaringan Komputer dan Telekomunikasi</option>
                        <option value="DKV">Desain Komunikasi Visual</option>
                        <option value="SP">Seni Pertunjukan</option>
                        <option value="BCF">BroadCasting dan perFilman </option>
                        <option value="PH">Perhotelan</option>
                        <option value="KL">Kuliner</option>
                    </select>
                </td>

            </tr>
            <tr>
                <td>Saran</td>
                <td>:</td>
                <td>
                    <textarea name="saran" id="" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td>
                    <input type="radio" name="gender" id="" value="L" > Laki - Laki 
                    <input type="radio" name="gender" id="" value="P" > Perempuan 
                </td>
            </tr>
            <tr>
            <td>Ekskul</td>
            <td>:</td>
                <td>
                    <input type="checkbox" name="ekskul[]" id="" value="PA"> Pencinta Alam <br/>
                    <input type="checkbox" name="ekskul[]" id="" value="EC"> Englsh Club <br/>
                    <input type="checkbox" name="ekskul[]" id="" value="PMR"> Palang Merah Remaja <br/>
                    <input type="checkbox" name="ekskul[]" id="" value="Futsal"> Futsal<br/>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="text-align : center;" >
                    <input type="submit" value="Inputkan Data" name="btnDataSiswa">
                    <!-- <button type=submit></button> -->
                </td>
                
            </tr> 
        </table>




    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>