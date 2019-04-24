<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image upload</title>
</head>
<body>
<h1>Image upload</h1>
<form method="post" action="process_upload.php" enctype="multipart/form-data">
    <label><input type="file" name="uploaded_image"/></label>
    <label>Title<input name="title"/></label>
    <label>Description<input name="description"/></label>
    <input type="submit" name="submit_image" value="GO!"/>
</form>

</body>
</html>