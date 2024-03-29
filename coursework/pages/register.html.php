<!DOCTYPE html>
<html>
  <head>
    <title>Sign In</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/register.css">
  </head>
  <body>
    <div class="main-block">
      <h1>Sign In</h1>
      <form action="../loggin.php" method="post">
        <hr>
        <div class="account-type">
          <input type="radio" value="none" id="radioOne" name="account" checked/>
          <label for="radioOne" class="radio">Personal</label>
          <input type="radio" value="none" id="radioTwo" name="account" />
          <label for="radioTwo" class="radio">Company</label>
        </div>
        <hr>
        <label id="icon" for="name"><i class="fas fa-envelope"></i></label>
        <input type="text" name="email"  placeholder="Email" required/>
        <label id="icon" for="name"><i class="fas fa-user"></i></label>
        <input type="text" name="username"  placeholder="Name" required/>
        <label id="icon" for="name"><i class="fas fa-unlock-alt"></i></label>
        <input type="password" name="password"  placeholder="Password" required/>
        <hr>
        <div class="gender">
          <input type="radio" value="none" id="male" name="gender" checked/>
          <label for="male" class="radio">Male</label>
          <input type="radio" value="none" id="female" name="gender" />
          <label for="female" class="radio">Female</label>
        </div>
        <hr>
        <div class="btn-block">
          <p>By clicking Register, you agree on our <a href="https://www.w3docs.com/privacy-policy">Privacy Policy for W3Docs</a>.</p>
          <button type="submit" name="submit">Submit</button>
        </div>
      </form>
    </div>
  </body>
</html>