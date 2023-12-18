
<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <h1>Upload a File</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select a file to upload:
        <input type="file" name="file" id="file">
        <input type="submit" value="Upload File" name="submit">
    </form>
</body>
</html>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['file'])) {
        $file = $_FILES['file'];

        // Validate file type (e.g., allow only image files)
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($file['type'], $allowedTypes)) {
            echo "Invalid file type. Allowed file types are: JPEG, PNG, GIF.";
            exit();
        }

        // Define the upload directory and filename
        $uploadDir = 'uploads/';
        $uploadPath = $uploadDir . basename($file['name']);

        // Check if the file already exists
        if (file_exists($uploadPath)) {
            echo "File already exists. Please choose a different name.";
            exit();
        }

        // Move the uploaded file to the upload directory
        if (move_uploaded_file($file['tmp_name'], $uploadPath)) {
            echo "File uploaded successfully.";
            // Implement further actions like storing the file path in a database, etc.
        } else {
            echo "File upload failed. Please try again.";
        }
    } else {
        echo "No file selected for upload.";
    }
} else {
   // header("Location: index.html");
}
?>