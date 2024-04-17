<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
$mysqli = require __DIR__ . "/functions/database.php";
    
    $sql = sprintf("SELECT * FROM users WHERE email = '%s'",
                   $conn->real_escape_string($_POST["email"]));
    
    $result = $conn->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
		
		// Store the user's role in the session.
// $_SESSION['user_role'] = $user['role'];



if ($user['role'] === 'Admin') {
    header('Location: c/A-dashboard.php');
} elseif ($user['role'] === 'UserPlus') {
    header('Location: Profile');
} elseif ($user['role'] === 'User') {
    header('Location: Profile');
} else  { header('Location: index.php');}

 // else {
    // header('Location: index.php'); // Redirect to default page if role is not recognized
// }

// Redirect the user to the appropriate dashboard.
// if ($user['role'] === 'Admin') {
  // header('Location: Seo/A-dashboard.php');
  // die();
// } //header("Location: index.php");
           
// if ($user['role'] === 'UserPlus') {
  // Code to execute if the condition is true
    // header('Location: Aeo/D-events.php');
  // die();
// } 

// if ($user['role'] === 'User') {
  // Code to execute if the condition is true
    // header('Location: Vos/News.php');
  // die();
// } 

		   exit;
        }
    }
    
    $is_invalid = true;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    
    <h1>Login</h1>
    
    <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>
    
    <form method="post">
        <label for="email">email</label>
        <input type="email" name="email" id="email"
               value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
        
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        
        <button>Log in</button>
    </form>
    
</body>
</html>








