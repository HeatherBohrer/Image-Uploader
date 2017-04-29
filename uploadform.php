<!DOCTYPE html>
<html>
<head>
    <title>Image Uploader</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <header>
        <h1>Image Uploader Demo</h1>
    </header>
    <main>
        <h2>Please choose images to upload</h2>
        <form id="upload_form"
              action="." method="POST"
              enctype="multipart/form-data">
            <input type="hidden" name="action" value="upload">
            <input type="file" name="file1"><br>
            <input type="file" name="file2"><br>
            <input type="file" name="file3"><br>
            <input id="upload_button" type="submit" value="Upload">
        </form>
        <h2>Images currently in the directory</h2>
        <?php if (count($files) == 0) : ?>
            <p>No images uploaded.</p>
        <?php else: ?>
            <ul>
            <?php foreach($files as $filename) :
                $file_url = $image_dir . '/' .
                            $filename;
                $delete_url = '.?action=delete&amp;filename=' .
                              urlencode($filename);
            ?>
                <li>
                    <a href="<?php echo $delete_url;?>">
                        <img src="delete.png" alt="Delete" width="30px" height="30px"></a>
                    <a href="<?php echo $file_url; ?>">
                        <?php echo $filename; ?></a>
                </li>
            <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </main>
</body>
</html>