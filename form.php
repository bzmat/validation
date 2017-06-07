<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>formularz</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
    
      <div class="col-md-4 col-md-offset-4">
        <form action="" method="POST">

        <div class="form-group">
          <label for="name">Imię: <i>*</i></label>
          <input type="text" name="name" id="name" placeholder="imię" class="form-control" value="<?php echo $form['name']; ?>">
        </div>

        <?php echo $error['name']; ?>

        <div class="form-group">
          <label for="phone">Telefon: <i>*</i></label>
          <input type="text" name="phone" id="phone" placeholder="telefon" class="form-control" value="<?php echo $form['phone']; ?>">
        </div>

        <?php echo $error['phone']; ?>

        <div class="form-group">
          <label for="email">Email: <i>*</i></label>
          <input type="text" name="email" id="email" placeholder="email" class="form-control" value="<?php echo $form['email']; ?>">
        </div>

        <?php echo $error['email']; ?>

        <div class="form-group">
          <label for="message">Wiadomość</label>
          <textarea name="message" id="message" class="form-control"><?php echo $form['message']; ?></textarea>
        </div>

        <p class="form-group">* - pola wymagane</p>

        <div class="form-group">
          <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Wyślij">
        </div>
        

      </form>
      </div>
    
      
      
      

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>