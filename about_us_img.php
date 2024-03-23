<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Add Font Awesome CSS -->
    <title>Upload Org Chart</title>
    <style>
      body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 30px;
    width: 400px;
    position: relative; /* Added for positioning the close icon */
}

.close-icon {

    position: absolute;
    top: 10px;
    right: 10px;
    color: #555;
    text-decoration: none;
}

h2 {
    margin-top: 0;
    margin-bottom: 20px;
    color: #333;
}

label {
    font-weight: bold;
    margin-bottom: 5px;
    display: block;
}

.file-label,
.display-button {
            background-color: #2C6346;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
            display: inline-block;
            margin-right: 10px;
        }

.file-label i {
    margin-right: 5px;
}

.file-input {
    display: none;
}

.image-label {
    margin-top: 10px; /* Added margin for spacing */
}

.image-input {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
}

button[type="submit"] {
    background-color: #2C6346;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button[type="submit"]:hover {
    background-color: #235033;
}

    </style>
</head>
<body>
<div class="container">
        <a href="admin_page.php" class="close-icon"><i class="fas fa-times"></i></a> <!-- Close Icon -->
        <h2>Upload Org Chart</h2>
        <form action="about_us_upload.php" method="post" enctype="multipart/form-data">
            <label for="image" class="file-label">
                <i class="fas fa-plus-circle"></i> Choose File
            </label>
            <input type="file" name="image" id="image" class="file-input">
            <label for="image_label" class="image-label">Image Label:</label>
            <input type="text" name="image_label" id="image_label" class="image-input">
            <button type="submit" name="submit">Upload</button>
            <a href="about_us_display.php" class="display-button">Display Images</a>
        </form>
    </div>
</body>
</html>
