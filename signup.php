<?php
session_start();

// Check if user is already logged in
if(isset($_SESSION['user_id'])){
    // Redirect to login.php if already logged in
    header("Location:login.php");
    exit();
}

// Check if form is submitted
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    // Validate form inputs
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Calculate user's age
    $currentDate = new DateTime();
    $userDob = new DateTime($dob);
    $age = $userDob->diff($currentDate)->y;
    
    // Check if user is at least 16 years old
    if($age < 16){
        echo "You must be at least 16 years old to sign up.";
        exit();
    }
    
    // Assuming you have a MySQL database, you can connect to it using PDO:
    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "netflix_users";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbName", $dbUsername, $dbPassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Check if email already exists
        $stmt = $conn->prepare("SELECT * FROM users WHERE email=:email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            echo "Email already exists.";
            exit();
        }
        
        // Check if username already exists
        $stmt = $conn->prepare("SELECT * FROM users WHERE username=:username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            echo "Username already exists.";
            exit();
        }
        
        // Insert user data into the users table
        $stmt = $conn->prepare("INSERT INTO users (fullname, email, dob, username, password) VALUES (:fullname, :email, :dob, :username, :password)");
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':dob', $dob);
        $stmt->bindParam(':username', $username);
        // You should hash the password before storing it in the database
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->execute();
        
        // Redirect to login.php after successful signup
        header("Location:login.php");
        exit();
        
    } catch(PDOException $e){
        echo "Error: ".$e->getMessage();
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #141414;
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .signup-container {
            background-color: #000;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            width: 300px;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
            border: none;
            background-color: #333;
            color: #fff;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: none;
            background-color: #e50914;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #b2070a;
        }
        p.error-message {
            color: #ff0000;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h2>Sign Up</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" name="fullname" placeholder="Full Name" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="date" name="dob" required><br>
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" value="Sign Up">
        </form>
        <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($age) && $age < 16){
            echo "<p class='error-message'>You must be at least 16 years old to sign up.</p>";
        }
        ?>
    </div>
</body>
</html>
