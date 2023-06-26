<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Data Siswa</title>
    </head>
    <body>
        <h2>Data Siswa</h2>
        <table border="1">
            <tr>
                <td>No</td>
                <td>NIS</td>
                <td>Kelas</td>
                <td>Jurusan</td>
                <td>opsi</td>
            </tr>
            <?php
            include 'koneksi.php';
            $No = 1;
            $select = mysqli_query($conn, "SELECT * FROM `siswa smk`");
            while($hasil = mysqli_fetch_array($select)){
            ?>
            <tr>
                <td><?php echo $No++ ?></td>
                <td><?php echo $hasil['Nama']?></td>
                <td><?php echo $hasil['Nis']?></td>
                <td><?php echo $hasil['Kelas']?></td>
                <td><?php echo $hasil['Jurusan']?></td>
                <td>
                    <a href="">Edit</a>
                    <a href="">Hapus</a>
                </td>
            </tr>
            <?php } ?> 
        </table>
    </body>
</html>
