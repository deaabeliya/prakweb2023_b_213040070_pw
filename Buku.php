<?php
$conn = mysqli_connect("localhost", "root", "", "prakweb2023x_213040070");

$result = mysqli_query($conn, "SELECT * FROM buku");

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <div class="card-body row justify-content-start ms-4 mt-4">

        <?php while ($row = mysqli_fetch_assoc($result)): ?>
      <div class="card mb-4 me-4" style="width: 18rem;">
        <img src="img/<?php echo $row["gambar_buku"]; ?>" class="card-img-top mt-2" height="400" >
        <div class="card-body">
          <h4 class="card-title text-primary-emphasis"><?php echo $row["judul_buku"]; ?></h4>
        
          <p>Nama Penerbit : <?php echo $row["nama_penerbit"]; ?></p>
          
        </div>
      </div>
          <?php endwhile;?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>