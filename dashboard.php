<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
<div id="time" style="position: absolute; left: 20px;top: 20px;">TIME</div>
      <div id="date" style="position: absolute; right:20px;bottom: 20px;background: #fff;padding: 10px;"><?php echo date('d/m/Y'); ?></div>
          </div>
          <!-- <div class="clock">
            <p id="time"></p>
          </div> -->
          <script>
            // Get the time element
            var timeElem = document.getElementById('time');
            
            // Update the clock every second
            setInterval(function() {
              var currentTime = new Date();
              var hours = currentTime.getHours();
              var minutes = currentTime.getMinutes();
              var seconds = currentTime.getSeconds();
              
              // Add a leading zero to minutes and seconds if needed
              if (minutes < 10) {
                minutes = '0' + minutes;
              }
              if (seconds < 10) {
                seconds = '0' + seconds;
              }
              
              // Update the time element with the current time
              timeElem.innerHTML = hours + ':' + minutes + ':' + seconds;
            }, 1000);
          </script>
        </div>
        
    <div class="read-send">
        <div class="logout-link">
            <a href="index.php">
                Logout
            </a>

        </div>


        <div class="container">
            <div class="button input">
                <a href="read_mail.php" class="btn btn-primary btn-lg" role="button" style="background: transparent!important;color: #000;" >Read Mail</a>
                <a href="send_mail.php" class="btn btn-success btn-lg" role="button" style="background: transparent!important;color: #000;" >Send Mail</a>

            </div>
        </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>
