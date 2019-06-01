<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>JobLister</title>
    <link rel="stylesheet" href="http://bootswatch.com/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <div class="container">
        <div class="header clearfix">
          <nav>
            <ul class="nav nav-pills pull-right">
              <li role="presentation" class="active"><a href="index.php">Home</a></li>
              <li role="presentation"><a href="create.php">Create Listing</a></li>
            </ul>
          </nav>
          <h3 class="text-muted"><?php echo SITE_TITLE; ?></h3>
        </div>
        <?php displayMessage(); ?>
