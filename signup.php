<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">

 
</head>
<body>
    
    <h1>Signup</h1>
    <div style="display: flex;">
    <form action="process-signup.php" method="post" id="" novalidate>
             <div>   
            <label for="username">Username</label>
            <input type="text" id="username" name="username">
      
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" >
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" >
    
            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone">
            <label for="email">email</label>
            <input type="text" id="email" name="email">
      
            <label for="country">Country</label>
            <input type="text" id="country" name="country">
            <label for="city">city</label>
            <input type="text" id="city" name="city">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <label for="password_confirmation">Repeat password</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
      </div>
        
        <button>Sign up</button>
    </form>
    </div>
</body>
</html>



// Gather user data
$username = $_POST['username'];
$email = $_POST['email'];
$data = ['username' => $username, 'email' => $email];

// Serialize user data
$serializedData = serialize($data);

// Open file for writing
$filename = 'user_data.php';
$file = fopen($filename, 'w');

// Write user data to file
fwrite($file, $serializedData);

// Close file
fclose($file);

echo "User data stored successfully.";

?>






