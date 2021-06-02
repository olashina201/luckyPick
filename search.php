<?php
     $db = mysqli_connect('localhost', 'root', '', 'lucky') or die("Connect failed: %s\n". $conn -> error);
     $output = '';

       if (isset($_GET['search'])) {
         $searchValue = $_GET['search'];
         $query = "SELECT * FROM luckyNumber WHERE numbers OR multiplier LIKE '%{$searchValue}%'";
         $result = mysqli_query($db, $query);
         if (mysqli_num_rows($result) < 1) {
            echo "Nothing found.";
        }

           while ($row = mysqli_fetch_assoc($result)) {
             $lucky_id = $row['id'];
             $lucky_num = $row['numbers'];
             $lucky_mul = $row['multiplier'];
             $lucky_date = $row['date'];
             
             echo '<div> '.$lucky_num.' '.' '.$lucky_mul.' </div>';
         }
       };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="search" action="search.php" method="get">
        <fieldset>
        <input type="number" name="search" class="email" placeholder="Search Number..." autocomplete="on" required>
        </fieldset>
        <fieldset>
        <button type="submit" class="main-button">Search</button>
        </fieldset>
    </form>

    <?php print("$output"); ?>
</body>
</html>