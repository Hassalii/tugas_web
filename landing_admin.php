<?php
include('koneksi.php');
$query = mysqli_query($koneksi,"SELECT * FROM tb_gambar");
?>
<html>
    <head>
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
        .a, .a:visited {
margin: 10px 10px 10px 10px;
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  border-radius : 10px;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}


        </style>
    </head>
    <body>

    <br>
    <br>
        <table class = "table">
            <thead class ="thead-light">
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Keterangan</th>
                    <th>Tipe</th>
                    <th>Ukuran</th>
                </tr>
                    <?php 
                    $no = 1;
                    while($row = mysqli_fetch_array($query))
                    {
                    ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><img src="image_view.php?id_gambar=<?php echo $row['id_gambar']; ?>" width="100"/></td>
                    <td><?php echo $row['keterangan']; ?></td>
                    <td><?php echo $row['tipe_gambar']; ?></td>
                    <td><?php echo $row['ukuran_gambar']; ?></td>
                </tr>
                <?php
                    }
                ?>
            </thead>
        </table>
        <br>
        <br>
        <a class="a" href = "user.php">Log Out</a>
 

    </body>
</html>