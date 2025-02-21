<?php
$name = $email = $age ="";
$nameErr =$emailErr = $ageErr ="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //validate Name
    if (empty($_POST["name"])){
        $nameErr = "Name is required";
    }elseif (strlen($_POST["name"])<3){
        $nameErr = "Name must be atleast 3 characters";
    } else{
        $name = htmlspecialchars($_POST["name"]);
    }

    //validate Email
    if(empty($_POST["email"])){
        $emailErr = "Email is required";

    }elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $emailErr = "Invalid email format";
    } else{
        $email = htmlspecialchars($_POST["email"]);
    }

    //validate Age(optional)

    if(!empty($_POST["age"])){
        if(!is_numeric($_POST["age"])){
            $ageErr = "Age must be a number";
        }else{
            $age =intval($_POST["age"]);
        }
    }


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Validation</title>
</head>
<body>
    <h2>Form Validation</h2>
    <form method="POST" action="">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>">
        <span style="color:red;"><?php echo $nameErr; ?></span>
        <br><br>

        <label>Email:</label>
        <input type="text" name="email" value="<?php echo $email; ?>">
        <span style="color:red;"><?php echo $emailErr; ?></span>
        <br><br>

        <label>Age (optional):</label>
        <input type="text" name="age" value="<?php echo $age; ?>">
        <span style="color:red;"><?php echo $ageErr; ?></span>
        <br><br>

        <button type="submit">Submit</button>
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !$nameErr && !$emailErr && !$ageErr) {
        echo "<h3>Submitted Data:</h3>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Age:</strong> " . ($age ? $age : "Not Provided") . "</p>";
    }
    ?>
</body>
</html>