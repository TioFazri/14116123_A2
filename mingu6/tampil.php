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
        <td><button class="btn_delete">delete</button></td>
    </tr>
<?php endwhile; ?>
</table>

<script>
$(document).ready(function(){

 $("#tbUser").on('click','.btn_delete',function(){
       $(this).closest('tr').remove();
     });

});

</script>