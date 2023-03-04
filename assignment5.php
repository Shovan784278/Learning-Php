
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 5</title>
</head>
<body>
    <h3>Assignment Title: HTML, Basic OOP, and Superglobal Variables in PHP

</h3>
    <form action="assignment5.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <input type="submit" value="Submit">
    </form>


   
    <?php
    
    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $name = $_POST['name'];
      $email = $_POST['email'];
     
      echo "<p>Thank you for your submission : $name!</p>";
      echo "<p>Your email address is : $email.</p>";
     
      
    } else {
      echo "<p>Error: invalid form submission.</p>";
    }
    
    // Output query string parameters using $_GET
    if (!empty($_GET)) {
      echo "<h2>Query String Parameters:</h2>";
      echo "<ul>";
      foreach ($_GET as $key => $value) {
        echo "<li>$key: $value</li>";
      }
      echo "</ul>";
    }
    
    // Output all request parameters using $_REQUEST
    if (!empty($_REQUEST)) {
      echo "<h2>Records :</h2>";
      echo "<ul>";
      foreach ($_REQUEST as $key => $value) {
        echo "<li>$key: $value</li>";
      }
      echo "</ul>";
    }
    ?>



    <div class="text-center">
    <?php
    class Person{
        public $name;
        public $email;
        function __construct($name="",$email=""){
            $this->name = $name;
            $this->email = $email;
        }
        function get_name(){
            return $this->name;
        }
        function set_name($name){
            $this->name = $name;
        }
        function get_email(){
            return $this->email;
        }
        function set_email($email){
            $this->email = $email;
        }
        function person_details(){
            echo "Person name is : {$this->get_name()} \n";
            echo "\n";
            echo "Person email is : {$this->get_email()} \n";
        }
    }
    $person = new Person();
    $person->set_name("Shovan Nag");
    $person->set_email("Shovan@gmail.com");
    $person->person_details();


    
    
    ?>
    
    
</div>


</body>
</html>




