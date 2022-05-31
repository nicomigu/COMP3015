<!DOCTYPE html>
<html>

<head>
  <title>Form</title>
</head>

<body>
  <h1>Nico Miguel Lab 2</h1>
  <p>
    My Lab 2
  </p>

  <?php
  /*  
test to see if a GET query string has been sent to this page
*/
  if (isset($_GET["errors"])) {
    //print_r($_GET);
    //if so, display the message
    echo "<span>" . $_GET["errors"] . "</span>";
    //clear the message from memory
    unset($_GET["errors"]);
    echo "<hr />";
  }

  ?>
  <form action="./form_processing.php" method="post">
    <input type="text" name="username" id="username" />
    <label for="username">Username</label><br />

    <input type="password" name="password" id="password" />
    <label for="password">Password</label><br />

    <input type="text" name="studentNumber" id="studentNumber" />
    <label for="studentNumber">Student Number</label><br />

    <fieldset>
      <legend>
        <label for="life">Gender</label>
      </legend>
      <input type="radio" name="gender" id="male" value="male" />
      <label for="male">Male</label><br />
      <input type="radio" name="gender" id="female" value="female" />
    <label for="female">Female</label><br />
    </fieldset>

    <fieldset>
      <legend>
        <label for="life">What programming languages are you studying?</label>
      </legend>
      <input type="checkbox" name="languages[]" id="cplus" value="cplus" />
      <label for="cplus">C++</label><br />
      <input type="checkbox" name="languages[]" id="csharp" value="csharp" />
      <label for="csharp">C#</label><br />
      <input type="checkbox" name="languages[]" id="javascript" value="javascript" />
      <label for="javascript">Javascript</label><br />
      <input type="checkbox" name="languages[]" id="java" value="java" />
      <label for="java">Java</label><br />
      <input type="checkbox" name="languages[]" id="perl" value="perl" />
      <label for="perl">Perl</label><br />
      <input type="checkbox" name="languages[]" id="php" value="php" />
      <label for="php">PHP</label><br />
      <input type="checkbox" name="languages[]" id="python" value="python" />
      <label for="python">Python</label><br />

    </fieldset>

    <input type="submit" value="Submit" />
  </form>
</body>

</html>