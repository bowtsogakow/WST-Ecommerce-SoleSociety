<?php
// Connect to the database
$servername = "localhost";
$serveruser = "root";
$serverpass = "";
$dbname = "solesocietydb";
$conn;

#Initalizes DB connection, must be called everytime a query will be performed
function OpenDB(){
    global $conn, $servername, $serveruser, $serverpass, $dbname;
    $conn = new mysqli($servername, $serveruser, $serverpass, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
}

#closes Db connection, called at the end of every query
function closeDB(){
    global $conn; 
    $conn->close();
}

# checks wether username or email already exists, returns id or 0 if user does not exist
function checkExistingUser($user, $email){ 
    global $conn;

    $sql_query = "SELECT * FROM useraccount WHERE Username = ? OR Email = ?"; 
    $stmt = $conn->prepare($sql_query); 
    $stmt->bind_param('ss', $user, $email); 
    $stmt->execute(); 
    $result = $stmt->get_result();

    if ($result->num_rows > 0){
        return 1; 
    } 
    else {
        return 0; 
    }

}

function LogIn($Email, $InputPassword, $ConfirmPassword) {
    if ($InputPassword != $ConfirmPassword) {
        return -2; // Passwords do not match
    } else {
        OpenDB(); 
        global $conn;  
        $sql_query = "Select id FROM useraccount WHERE Email = ? AND Password = ?"; 
        $stmt = $conn->prepare($sql_query); 
        $stmt->bind_param('ss', $Email, $InputPassword);  
        $stmt->execute(); 
        $stmt->bind_result($user_id); 
        $stmt->fetch();
        return $user_id; 
    }
}

# Write user sign up info to the Database 
function SignUp($new_user, $new_email, $new_pass){
    OpenDB(); 
    global $conn;

    $existing = checkExistingUser($new_user, $new_email); 

    if($existing == 0){
        $sql_query = "Insert into useraccount(Username, Email, Password) values (?, ?, ?)"; 
        $stmt = $conn->prepare($sql_query);
        $stmt->bind_param('sss', $new_user, $new_email, $new_pass); 
        $stmt->execute(); 
        return 0;
    }else if ($existing >= 1){
        return 1;

    }
    

    closeDB();
} 



?>