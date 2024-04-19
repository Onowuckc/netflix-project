<?php
session_start();

// Check if user is already logged in
if(isset($_SESSION['user_id'])){
    // Redirect to movieremake.php if already logged in
    header("Location:movieremake.php");
    exit();
}

// Check if form is submitted
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    // Validate form inputs (e.g., username and password)
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Validate username and password (e.g., against database records)
    
    // Assuming you have a MySQL database, you can connect to it using PDO:
    
    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "netflix_users";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbName", $dbUsername, $dbPassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Check if username exists in the users table
        $stmt = $conn->prepare("SELECT * FROM users WHERE username=:username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        
        if($stmt->rowCount() > 0){
            // Username exists, verify password
            $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if(password_verify($password, $userRow['password'])){ // Added missing $ before userRow
                // Password matched, create session variables and redirect to movieremake.php
                $_SESSION['user_id'] = $userRow['id']; // Added missing $ before userRow
                header("Location:movieremake.php");
                exit();
            } else {
                // Password did not match
                echo "
Invalid credentials.

";
            }
            
        } else {
            echo "
Invalid credentials.

";
        }
        
    } catch(PDOException $e){ // Fixed typo: $$e to $e
        echo "
Error: ".$e->getMessage()."

"; // Changed ->getMessage() to ->getMessage()
        exit();
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: rgba(0, 0, 0, 0.75);
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
        input[type="password"] {
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
        .message {
            color: #ff0000;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Sign In</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" value="Sign In">
        </form>
        <p class="message">Invalid credentials.</p>
    </div>
</body>
</html>
