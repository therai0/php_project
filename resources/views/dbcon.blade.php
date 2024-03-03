<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database connection</title>
</head>

<body>
    <?php if(DB::connection()->getPdo()){
        echo "Database is connected:";
        }else {
            echo "Something went wrong";
        }
        ?>
</body>

</html>