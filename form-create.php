<?php

include '../connect.php';

$query = "SELECT id_dosen, nama_dosen FROM dosen";
$result = mysqli_query($connect, $query);

?>

<!DOCTYPE html>
<html>
<head>
<H1>Tambah Data Matakuliah</H1>
</head>
<body>
    <form action="create.php" method="POST" >
    
    <p>Kode           : <input type="text" name="kode" > </p>
    <p>Matakuliah     : <input type="text" name="nama_matkul" ></p> 
    <p>SKS            : <input type="text" name="sks" > </p>
    <p>Semester       : <input type="text" name="semester" > </p>
    <p>Dosen Pengajar :
        <select name="id_dosen" id="nama_dosen">
        <option value="NULL">--Pilih salah satu--</option>
        <?php
            while ($data = mysqli_fetch_assoc($result)) {
                ?>
            <option value="<?php echo $data['id_dosen']; ?>">
                <?php echo $data['nama_dosen'];?>
            </option>

            <?php            
            }
        ?>
        </select>
     </p>
     <input type="submit" name="btnSimpan" value="Simpan" />
    </form>
</body>
</html>