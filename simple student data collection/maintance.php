<?php

  include_once 'connection.php';

  if(isset($_POST['submit'] ))
  {
      
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $mobile = $_POST['number'];
    $email = $_POST['email'];
    $language = $_POST['language'];
    $date = $_POST['date'];

    $sql = "INSERT INTO student(Name,Gender,Mobile,Email,Language,Date) VALUES('$name','$gender','$mobile','$email','$language',' $date')";

    if(mysqli_query($conn,$sql) == TRUE)
      {
        header('location:maintance.php');
      }
      else
      {
        echo "Data not Inserted";
      }

  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Maintance</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <section class="maintain , background">
    <div>
      <h1 align="center">Data Form</h1><br>
    </div>
  </section>
  <center>
  <form method=post action='maintance.php'>
    <table cellspacing=0 cellpadding=0 width='720' border=0 align='center' bgcolor='#f1f1f1'>
        
        <tr>
          <td>Name</td>
          <td><input type=text name=name value=''></td>
        </tr>

        <tr bgcolor='#f1f1f1'>
          <td>gender</td>
          <td><input type=radio name=gender value='Male' >Male
          <input type=radio name=gender value='Female' >Female
          <input type=radio name=gender value='Other'>other</td>
        </tr>
          
        <tr>
          <td>Mobile</td>
          <td><input type=int name=number value=''></td>
        </tr>

        <tr>
          <td>Email</td>
          <td><input type=text name=email value=''></td>
        </tr>

        <tr>
          <td>Your preferable Languages</td>
          <td>
            <input type=radio name=language value='C' > C &nbsp;
            <input type=radio name=language  value='C++' > C++ &nbsp; 
            <input type=radio name=language  value='HTML' > HTML &nbsp;
            <input type=radio name=language  value='PHP' > PHP &nbsp;
            <input type=radio name=language  value='JavaScript' >JavaScript
          </td>
        </tr>

        <tr bgcolor='#ffffff'><tr>
          <td>Date</td>
          <td><input type=date name=date value=''></td>
        </tr><br>
		<tr>
          <td>Amount</td>
          <td><input type=number name=number value=''></td>
        </tr>

        <tr>
          <td colspan=2><input type=submit name=submit value=Submit> </td>
        </tr>
 
    </table>
    </center>

  </form>

</body>
</html>
