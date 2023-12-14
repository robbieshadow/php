<!DOCTYPE html>
<html>
<head>
    <title>بارگذاری عکس</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 500px;
            margin: 100px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn-primary {
            width: 100%;
        }

        .alert {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>بارگذاری عکس</h2>
        <form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="file">انتخاب عکس:</label>
                <input type="file" class="form-control-file" id="file" name="file" accept=".jpg">
            </div>
            <button type="submit" class="btn btn-primary">بارگذاری</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $file = $_FILES['file'];
            $allowedExtensions = array('jpg'); 
            $maxFileSize = 300 * 1024; 

            if ($file['error'] === UPLOAD_ERR_OK) {
                $fileName = $file['name'];
                $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

                if (in_array($fileExtension, $allowedExtensions) && $file['size'] <= $maxFileSize) {
                    echo '<div class="alert alert-success">عکس با موفقیت بارگذاری شد!</div>';
                } else {
                    echo '<div class="alert alert-danger">نوع فایل یا حجم فایل مجاز نیست!</div>';
                }
            } else {
                echo '<div class="alert alert-danger">خطا در بارگذاری فایل!</div>';
            }
            
        }
        ?>
    </div>
