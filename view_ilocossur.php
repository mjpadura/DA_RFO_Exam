
<?php
require_once('function/function.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Sample Website</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">
  
  <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="main.css" />
  </head>

  <body>
    <div class="container">
      <header>
        <img src="images/logoDA.png" alt="Logo of Department of Agriculture" />
      </header>

      <nav>
        <a href="index.html"><b>HOME</b></a>
        <a href="#"><b>ABOUT US</b></a>
        <a href="#"><b>CONTACT</b></a>
      </nav>
      <br>
     

      <section class="ilocosmaps">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119336.60276635551!2d120.48706420941119!3d18.049255100000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x338ec03d7c009e65%3A0x3b82a07e92a8dffa!2sDepartment%20of%20Agriculture%20-%20INREC!5e1!3m2!1sen!2sph!4v1699420080351!5m2!1sen!2sph" 
      width="400" 
      height="300" 
      style="border:0;" 
      allowfullscreen="" 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
    </section>
  
    <div class="card-right">
    <h4>Ilocos Sur Research Center(ISREC) <br>
    <span><i>San Juan, Ilocos Sur</i></span></h4>
    <?php
        $details = getDataIlocosSur($mysqli);
        foreach ($details as $key) :?>
                <div class="docu-detail">
                  <div class="det-br">
                    <table class="table table-striped table-inverse table-responsive" id="dataTable" width="100%" cellspacing="0">
                      <tr>
                        <th>Land Area:</th>
                        <td><b><?php echo strtoupper($key['Area']); ?></b></td>
                      </tr>
                      <tr>
                        <th>Alienable and Disposable:</th>
                        <td><?php echo strtoupper($key['Alienable']); ?></td>
                      </tr>
                      <tr>
                        <th>Forest:</th>
                        <td><?= $key['Forest'];?></td>
                      </tr>
                      <tr>
                        <th>Districts:</th>
                        <td><?= $key['districts'];?></td>
                      </tr>
                      <tr>
                        <th>Cities:</th>
                        <td><?= $key['cities'];?></td>
                      </tr>
                      <tr>
                        <th>Municipalities:</th>
                        <td><?= $key['municipalities'];?></td>
                      </tr>
                      <tr>
                        <th>barangays:</th>
                        <td><?= $key['barangays'];?></td>
                      </tr>
                      <tr>
                        <th>Total Farmers:</th>
                        <td><b><?= $key['Farmers'];?></b></td>
                      </tr>
                      <!-- <tr>
                        <th align="center">
                      <a href="view_ilocosDingras.php">
                             <button class="button button1">   View map location of Regional Offices</button>
                        </a>
                        </th>
                      </tr> -->
                    </table>
                  </div>
                </div>



<?php endforeach; ?>

    </div>

 
      
    </div>
  </body>
</html>