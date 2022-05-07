<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Command Injection</title>
  </head>
  <body>
    <h1>Nhập tên miền để kiểm tra kết nối</h1>
    <form method='get'>
      Domain name: <input type="text" name="domain">
      <input type="submit">
    </form>
    <?php
    # Kiểm tra biến tổng quát được khai báo chưa
    if (isset($_GET['domain']) == TRUE) {

      $untrusted_data = $_GET['domain'];
      system("ping -c 2 $untrusted_data");

    }
    ?>
  </body>
</html>
