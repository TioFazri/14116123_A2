<table id="tbUser">
    <tr>
        <th>No</th>
        <th>Nim</th>
        <th>nama</th>
        <th>prodi</th>
        <th>angkatan</th>
    </tr>
    
    <?php
        include "koneksi.php";
        $hasil = mysqli_query($kon, "select * from mahasiswa order by nim asc");
        $no = 0;
        while ($data = mysqli_fetch_array($hasil)):
        $no++;
    ?>

    <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $data['nim']?></td>
        <td><?php echo $data['nama']?></td>
        <td><?php echo $data['prodi']?></td>
        <td><?php echo $data['angkatan']?></td>
        <td><a href="delete.php?nim=<?php echo $data['nim']; ?>">Delete</a> </td>
    </tr>
<?php endwhile; ?>
</table>

<script>
    $(document).ready(function() {
            $('#tampil_data').load("tampil.php");
            $('#btn_tampil').click(function(){
                $.ajax({
                    type : 'POST',
                    url : 'delete.php',
                    data : data,
                    cache : false,
                    success : function(data){
                    }
                });
            });
        });
</script>