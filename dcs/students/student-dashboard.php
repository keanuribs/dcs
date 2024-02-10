<?

  session_start();
  if (!isset($_SESSION['SESSION_EMAIL'])) {
      header("Location: ../index.php");
      die();
  }

?>

<!doctype html>
<html>


<body className='snippet-body'>

    <body id="body-pd">
        <?php require '../include/sidebar.php';?>
        <!--Container Main start-->
        <div class="height-100 bg-light">
            <h4>Main Components</h4>
        </div>
        <!--Container Main end-->
        <?php require '../include/footer.php';?>
    </body>

</html>