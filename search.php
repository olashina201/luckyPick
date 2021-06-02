<?php
     $db = mysqli_connect('localhost', 'root', '', 'lucky') or die("Connect failed: %s\n". $conn -> error);
     $output = '';

       if (isset($_POST['submit'])) {
         $searchValue = $_POST['search'];
         $query = "SELECT * FROM luckyNumber WHERE numbers OR multiplier LIKE '%$searchValue%'";
         $count = mysqli_num_rows($query);
         $result = mysqli_query($db, $query);

         if ($count == 0) {
           $output = "no search result";
         } else {
           while ($row = mysqli_fetch_array($result)) {
             $lucky_id = $_row['id'];
             $lucky_num = $_row['numbers'];
             $lucky_mul = $_row['multipler'];
             $lucky_date = $_row['date'];
             
             $output .= '<div> '.$lucky_num.' '.' '.$lucky_mul.' </div>';
         }
 
       };
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
    <form id="search" action="search.php" method="post">
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