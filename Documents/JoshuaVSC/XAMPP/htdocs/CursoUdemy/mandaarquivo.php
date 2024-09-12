<method="POST" enctype="multipart/form-data">

    <input type="file" name="fileUpload">

    <button type="submit">Enviar</button>
</form>
<?php

    if ($_SERVER['REQUEST_METHOD'] === "POST") {

        $file= $_FILES["fileUpload"];

        if ($file["error"]) {
            throw new Exception("Error:  ".$file["error"]);  
        }

        $dirUploads = "uploads";

        if (!is_dir($dirUploads)) {
            mkdir($dirUploads);
        }
    }

?>