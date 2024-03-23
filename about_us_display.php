<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Image</title>
    <style>

        .main-container-1 {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

      
        .container-1{
            justify-items:left;
            margin-right:55%;
        }

        .chart {
            display: flex;
            gap:10px;
            margin-left:20%;
            flex-grow: 1;
            
        }

        label {
            margin-bottom: 10px;
        }

        select, .chart_button {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            max-width: 300px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .chart_button {
            background-color: #2C6346;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0EAB38;
        }

        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
        }

        .image-container img {
            max-width: 80%;
            height: auto;
            border-radius:15px;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="container-1">
            <form action="" method="post" class="chart">
                <label for="image_label"></label>
                <select name="image_label" id="image_label" class="chart_select">
                    <?php
                    // Include database connection
                    // Database credentials
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "chart";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Prepare SQL statement to fetch image labels
                    $sql = "SELECT DISTINCT image_label FROM images";
                    $result = $conn->query($sql);

                    // Output options based on fetched image labels
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row['image_label'] . '">' . $row['image_label'] . '</option>';
                        }
                    } else {
                        echo '<option value="">No image labels found</option>';
                    }

                    // Close connection
                    $conn->close();
                    ?>
                </select>
                <button type="submit" name="submit" class="chart_button">Show</button>
            </form>
        </div>

        <div class="image-container">
            <?php
            // Check if form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
                // Include database connection
                // Database credentials (already included above)

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Get selected image label
                $selected_label = $_POST['image_label'];

                // Prepare SQL statement to fetch image based on the selected label
                $sql = "SELECT image FROM images WHERE image_label = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s", $selected_label);

                // Execute the statement
                $stmt->execute();
                $result = $stmt->get_result();

                // Check if any rows are returned
                if ($result->num_rows > 0) {
                    // Fetch the image data
                    $row = $result->fetch_assoc();
                    $image_data = $row['image'];

                    // Output the image with CSS styling
                    echo '<img src="data:image/jpeg;base64,'.base64_encode($image_data).'" />';
                } else {
                    echo "Image not found for the selected label.";
                }

                // Close statement and connection
                $stmt->close();
                $conn->close();
            }
            ?>
        </div>
    </div>

    
</body>
</html>
