<?php





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>
<body>
    <h1>Image Upload</h1>

    <form method="POST" action="uploads.php" enctype="multipart/form-data">
    <input type="file" name="file">

    <p> 
        <button type="submit" name="submit">UPLOAD</button>
    </p>
   


    </form>
    
</body>
</html>