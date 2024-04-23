  <?php
  // ini_set('display_errors', '1');

  include_once("config.php");

  if (isset($_POST['rigister_btn'])) {
    if(!empty($_POST['user_name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['medicalename']) && !empty($_POST['repassword'])){
    session_start();
    $user_name = mysql_real_escape_string($_POST['user_name']);
    $email = mysql_real_escape_string($_POST['email']);
    $medicalename =mysql_real_escape_string($_POST['medicalename']);
    $password =mysql_real_escape_string($_POST['password']);
    $repassword =mysql_real_escape_string($_POST['repassword']);
      if ($password==$repassword) {
        $sql = "insert into registered_users(user_name, password, medicalname, email, repassword)values('$user_name','$medicalename','$email','$password','$repassword')";
        $result = mysqli_query($connection, $sql);
        if($result){
          if($result['email'] == $_POST['email']){
            header('location: index.php');
          $_SESSION['message'] = 'Yout are Now Logged in';
          }else{
            $message = "This is email is already exist ";
          }
        }else{
          $message = "Sorry there is an error";
        }
        
      }
      else{
        $message = "Two password dosen't  Match";
      }
    }
  }
  ?>
