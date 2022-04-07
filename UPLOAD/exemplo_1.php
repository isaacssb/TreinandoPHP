<form action="" method="POST" enctype="multipart/form-data">

  <input type="file" name="fileUpload">

  <button type="submit">Send</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $file = $_FILES["fileUpload"];

  if ($file["error"]) {
    throw new Exception("Error: " .$file["error"]);
  }

  $dirUploads = 'uploads';

  if (!is_dir($dirUploads)) {
    mkdir($dirUploads);
  }
  if (move_uploaded_file($file['tmp_name'], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])) {
    echo 'upload realizado com sucesso';

  } else {
    throw new Exception("N�o foi poss�vel realizar o upload.");
  }
}

?>