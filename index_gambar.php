<?php
include('koneksi.php');
$query = mysqli_query($koneksi,"SELECT * FROM tb_gambar");
?>
<html>
    <head>
        <title>Upload Gambar</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
        .a, .a:visited {
            margin :10px 10px 10px 10px;
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius : 10px;
}

.a:hover, .a:active {
  background-color: red;
}
.b, .b:visited {
            margin :10px 10px 10px 10px;
  background-color: green;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius : 10px;
}

.b:hover, .b:active {
  background-color: blue;
}
        </style>
    </head>
    <body>
    <a class="b" href = "upload_file.php">Upload Gambar</a>

    <br>
    <br>
        <table class = "table">
            <thead class ="thead-dark">
                <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Keterangan</th>
                <th>Tipe</th>
                <th>Ukuran</th>
                <th>Action</th>
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
                    <td><a href="delete_gambar.php?id_gambar=<?php echo $row['id_gambar']; ?>">Delete</a></td>
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