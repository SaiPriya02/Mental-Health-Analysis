<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CES-D Test | Oizys</title>

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
    <!-- title and subtitle section -->
    <section class="coloured-section">
      <!-- Navbar -->
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
              <a class="nav-link" href="admin-login.html">Admin</a>
            </li>
            </ul>
        </div>
      </nav>
    </section>

    <!-- Heading -->
    <section class="white-section container-fluid">
      <div class="cesd-title"> <!--style="margin:0 15% 5% 15%"--> 
        <h1>Center for Epidemiologic Studies Depression (CES-D) Test</h1>
        <p>Below is a list of some ways you may have felt or behaved. Please indicate how often you have felt this way during the last week by checking the appropriate space. Please only provide one answer to each question.</p>
      </div>
        <table>
            <tr>  
                <td> <strong>Question</strong></td>
                <td><strong>RARELY/NONE OF THE TIME</strong><br>(less than 1 day)</td>
                <td><strong>SOMETIMES/A FEW TIMES</strong><br>(1-2 days)</td>
                <td><strong>OCCASSIONALLY/A MODERATE AMOUNT OF TIME</strong><br>(3-4 days)</td>
                <td><strong>MOST OF/ALL THE TIME</strong><br>(5-7 days)</td>
            </tr>
        <?php
            $servername="localhost";
            $username = "sai_priya";
            $password = "oizys1234";
            $dbname= "oizys";
            $conn  = mysqli_connect($servername,$username,$password,$dbname);
            if($conn->connect_error)
                die("connection error" . $conn->connect_error);
                $sql = "SELECT * FROM CESD";
                $result = $conn->query($sql); //this is an array of IDs
                $counter=1;
                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                    $question = $row['Question'];
                    //$question = htmlspecialchars($row['Question'],ENT_QUOTES);
                    $pts_1=$row['pts_1'];
                    $pts_2=$row['pts_2'];
                    $pts_3=$row['pts_3'];
                    $pts_4=$row['pts_4'];
                    
                    echo " <tr>
                    <td class='cesd-statements'>$question</td>
                    <td><input class='radio' type='radio' name='$counter' value=$pts_1 checked></td>
                    <td><input class='radio' type='radio' name='$counter' value=$pts_2></td>
                    <td><input class='radio' type='radio' name='$counter' value=$pts_3></td>
                    <td><input class='radio' type='radio' name='$counter' value=$pts_4></td>
                    </tr>" ;
                    $counter=$counter+1;
                }
                }
            mysqli_close($conn);
        ?>

        </table>
        <button type="submit" formaction='/results.html' class="input-button btn btn-dark btn-lg" id="results-btn">Tell Me My Results!</button>
    </section>

  <!-- Footer -->
  <footer class="footer coloured-section ">
    <p class="footer-text">This is a project created by Sai Priya and Zeeshan Islam.</p>
    <p>© Copyright 2020 Oizys</p>
  </footer>

  <script type="module" src="calculate.js"></script>
</body>
</html>