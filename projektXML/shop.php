<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP</title>
    <link rel="stylesheet" href="shop.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
      $json = file_get_contents("dresovi.json");
      $json_data = json_decode($json,true);
    ?>
    <div class="container-fluid">
        <div class="row header">
            <ul>
                <li>
                    <a href="index.html">NASLOVNA</a>
                </li>
                <li>
                    <a href="shop.php">SHOP</a>
                </li>
                <li>
                    <a href="kontakt.html">KONTAKT</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="container ponuda">
        <table class="table">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">DRES</th>
                <th scope="col">GODINA</th>
                <th scope="col">DOSTUPNE VELIČINE</th>
                <th scope="col">CIJENA</th>
                <th scope="col"></th>
              </tr>
            </thead>
            


              <?php

              $images = [
                'slike/barcelona2122.jpg',
                'slike/bayern1314treci.jpg',
                'slike/milan0506home.jpg',
                'slike/psg_home.png',
                'slike/real_home.jpg',
                'slike/spain2010.jpg',
                'slike/united9596.jpeg'
              ];
              foreach($json_data as $key => $value){
                echo '
                <tr>
                <th scope="row"><img src="' . $images[$key] . '" width="30%"></th>
                <td>' .$json_data[$key]["dres"] . '</td>
                <td>' .$json_data[$key]["godina"] . '</td>
                <td>' .$json_data[$key]["velicine"] . '</td>
                <td>' .$json_data[$key]["cijena"] . '</td>
                <td><button><a href="#">DODAJ U KOŠARICU</a></button></td>
                </tr>';
            }
            ?>
            </tbody>
          </table>
    </div>

    <footer>
        <div class="container">
            <h1>Jurica Borčić</h1>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<!--<tbody>
              <tr>
                <th scope="row">
                    <img src="slike/barcelona2122.jpg" width="50%">
                </th>
                
              </tr>
              <tr>
                <th scope="row">
                    <img src="slike/bayern1314treci.jpg" width="50%">
                </th>
                
              </tr>
              <tr>
                <th scope="row">
                    <img src="slike/milan0506home.jpg" width="50%">
                </th>
                
              </tr>
              <tr>
                <th scope="row">
                    <img src="slike/psg_home.png" width="50%">
                </th>
                
              </tr>
              <tr>
                <th scope="row">
                    <img src="slike/real_home.jpg" width="50%">
                </th>
                
              </tr>
              <tr>
                <th scope="row">
                    <img src="slike/spain2010.jpg" width="50%">
                </th>
                
              </tr>
              <tr>
                <th scope="row">
                    <img src="slike/united9596.jpeg" width="50%">
                </th>
                
              </tr>
          -->