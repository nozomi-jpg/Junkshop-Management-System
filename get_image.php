<?php

$conn = mysqli_connect("localhost", "root","","upload_image");
    if(mysqli_connect_error()){
    echo "Failed to connect to MySQL: ". mysqli_connect_error();
}

  $result = mysqli_query($conn, "SELECT * FROM image WHERE id = 1");
  $row = mysqli_fetch_assoc($result);

?>

<body>
<img src="./image/<?php echo $data['filename']; ?>" width="175" height="200" />
</body>

