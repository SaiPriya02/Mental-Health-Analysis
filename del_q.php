<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Remove Question</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Poppins:wght@300;500;600;700;800&family=Satisfy&display=swap" rel="stylesheet"> 

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
    <section class="coloured-section">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="index.html">Oizys</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="resources.html">Resources</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about-us.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Admin</a>
                </li>
                </ul>
            </div>
          </nav>
    </section>

    <section class="white-section">
        <div class="container-fluid">
            <h1>Remove a Question from the Database</h1> <br>
            <h3>Here are all the questions. Pick which one you want to remove and enter its ID down below.</h3>
            <br><br>
            <div style="text-align:left;">
                <table>
                <tr>  
                    <td> <strong>ID</strong></td>
                    <td><strong>QUESTION</strong></td>
                </tr>
                <?php
                $servername="localhost";
                $username = "sai_priya";
                $password = "oizys1234";
                $dbname= "oizys";
                $conn  = mysqli_connect($servername,$username,$password,$dbname);
                if($conn->connect_error)
                    die("connection error" . $conn->connect_error);
                    $sql = "SELECT id,Question FROM CESD";
                    $result = $conn->query($sql); //this is an array of IDs
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()){
                            $question = $row['Question'];
                            $id=$row['id'];
                            echo " <tr>
                            <td class='cesd-statements'>$id</td>
                            <td class='cesd-statements'>$question</td>
                            </tr>" ;
                        }
                    }
                mysqli_close($conn);
                ?>
                </table>
            </div>
            <br><br>                        
            <form action="removedb.php" method="post">
                <input class="form-control form-control-lg" type="text" name="id" id="id" placeholder="Enter ID">
                <input class="input-button btn btn-dark btn-lg" type="submit" value="Remove Question">
            </form>
        </div>
    </section>
</body>
</html>