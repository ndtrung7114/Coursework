    <?php 
    include "connect.php";
    // Retrieve user input
    $email = $_POST['email'] ;
    $password = $_POST['password'] ;
    $username = $_POST['username'] ;

    // // Query the database
    // $sql = "SELECT email, password, username FROM users WHERE email='$email'";
    // $infor = $conn->query($sql);

    foreach ($infor as $row) {
        if ($row["password"] == $password && $row["user_name"] == $username && $row["email"] == $email) {
            // Credentials match
            echo "Login successful!";
            header("location: pages/view_question.html.php");
        }
        else {
            // Credentials do not match
            echo "Invalid email, password, or username.";
    }
        
    }
    ?> 
