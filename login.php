<?PHP
$application_name = 'HABjournal';
$application_image = 'http://www.nasa.gov/sites/all/themes/custom/nasatwo/images/nasa-logo.svg';
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300|Lato:400,300' rel='stylesheet' type='text/css'>
  <link href='/less/custom.less.php' rel='stylesheet' type='text/css'>
</head>
<body class="login" >
  <div class="header">
    <div class="bars"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
    <div class="square"><i class="fa fa-square"></i><i class="fa fa-square"></i></div>
    <div class="system"><p><?PHP echo $application_name; ?></p></div>
  </div>

  <div class="main">
    <div class="left">
      <div class="rotated">
        <h1>user</h1>
        <div class="white-bar"></div>
        <p class="description">login for access</p>
        <div class="short-bar"></div>
      </div>
    </div>
    <div class="right">
      <div class="content">
        <h2><?PHP echo $application_name; ?></h2>
        <h1>login</h1>
        <div class="white-bar"></div>
        <div class="description">login for access</div>
        <div class="program-logo"><img src="<?PHP echo $application_image; ?>" /></div>
      </div>
    </div>
  </div>
  <div class="main">
    <div class="left">&nbsp;</div>
    <div class="right">
      <div class="content">
        <form action="/" method="post">
          <label for="user">user</label>
          <input type="text" name="user" id="user" /><br>
          <label for="password">password</label>
          <input type="password" name="password" id="password"/>
          <button type="submit"><i class="fa fa-chevron-right"></i></button>
        </form>
      </div>
    </div>
  </div>
  <footer class="footer">&nbsp;</footer><?PHP /*
  <div class="colors" style="">
    <p>color palate</p>
    <div class="blue-1">blue-1</div>
    <div class="blue-2">blue-2</div>
    <div class="blue-3">blue-3</div>
    <div class="blue-4">blue-4</div>
    <div class="blue-5">blue-5</div>
    <div class="cyan">cyan</div>
    <div class="cyan2">cyan2</div>
    <div class="grey">grey</div>
    <div class="grey-1">grey-1</div>
    <div class="grey-2">grey-2</div>
    <div class="grey-3">grey-3</div>
    <div class="grey-4">grey-4</div>
    <div class="grey-5">grey-5</div>
    <div class="dark-grey">dark-grey</div>

  </div> */ ?>
</body>
</html>