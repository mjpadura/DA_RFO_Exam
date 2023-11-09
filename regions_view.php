<?php include('../common/header.php'); ?>
<?php include('../common/sidebar.php'); ?>

<?php $employeeBDay = getAllBday($mysqli); ?>
<?php $getCOS = getCOSDetails($mysqli); ?>
<?php $getPERM = getPERMDetails($mysqli); ?>
<?php $data = getAnnouncement($mysqli); ?>
<?php $specialOrderDocus = GetSpecialOrderDashboard($mysqli); ?>
<?php $memorandumDocus = GetMemorandumDashboard($mysqli);?>

<style>
.button1 {
  display: inline-block;
  padding: 5px 5px;
  font-size: 12px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: green;
  border: none;
  border-radius: 20px;
  
}

</style>
<main id="main" class="main">
  <!-- Start Page Title -->
  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../views/dashboard.php">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
      <!-- Start Left side columns -->
      <div class="col-xl-7 col-lg-6 col-md-6">
        <div class="row">
          <!-- Permanent -->
          <div class="col-xxl-6 col-md-6">
          <div class="alert alert-primary alert-dismissible fade show" role="alert">
              <div class="card-body">
                <h5 class="card-title">Employee <span>| Permanent</span></h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-file-person"></i>
                  </div>
                  <div class="ps-3">
                    <h2>
                      <?php
                      $NumOfPERM = COUNT($getPERM);
                      echo $NumOfPERM;
                      ?>
                    </h2>
                    <span class="text-success small pt-1 fw-bold">Plantilla</span>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Permanent -->

          <!-- Contact-of-Service -->
          <div class="col-xxl-6 col-md-6">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              <div class="card-body">
                <h5 class="card-title">Employee <span>| COS</span></h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-file-person-fill"></i>
                  </div>
                  <div class="ps-3">
                    <h2>
                      <?php
                      $NumOfCOS = COUNT($getCOS);
                      echo $NumOfCOS;
                      ?>
                    </h2>
                    <span class="text-success small pt-1 fw-bold">Contractual</span>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Contact-of-Service -->

          <!-- Reports -->
          <!-- <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Reports <span>/Today</span></h5>
                  <div id="reportsChart"></div>
                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'Sales',
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: 'Revenue',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                          name: 'Customers',
                          data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'datetime',
                          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          },
                        }
                      }).render();
                    });
                  </script>
                </div>
              </div>
            </div> -->

          <!-- Recent Sales -->
          <!-- <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Recent Sales <span>| Today</span></h5>
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">#2457</a></th>
                        <td>Brandon Jacob</td>
                        <td><a href="#" class="text-primary">At praesentium minu</a></td>
                        <td>$64</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2147</a></th>
                        <td>Bridie Kessler</td>
                        <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                        <td>$47</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2049</a></th>
                        <td>Ashleigh Langosh</td>
                        <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
                        <td>$147</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2644</a></th>
                        <td>Angus Grady</td>
                        <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                        <td>$67</td>
                        <td><span class="badge bg-danger">Rejected</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2644</a></th>
                        <td>Raheem Lehner</td>
                        <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                        <td>$165</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div> -->
         

      
          <!-- Announcements -->
          <div class="col-xxl-12 col-md-12">
            <div class="card">
              <div class="card-body">
              <h5 class="card-title">Announcements <span>| <a href="#">View more...</a></span></h5>
                <div class="activity">
                  <?php foreach ($data as $key) : ?>
                    <div class="activity-item d-flex">
                      <div class="activite-label"><?php echo strtoupper($key['section']); ?></div>
                      <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                      <div class="activity-content">
                        <tr>
                          <h8><b><?php echo $key['AnnouncementTitle']?></b></h8>
                          <p><?php echo substr($key['AnnouncementContent'], 0, 60);?></p>
                          <button type="button" class="button1" data-bs-toggle="modal" data-bs-target="#readmore">
                          Read more...</button>
                        </tr>
                        <!-- <button class="button1">More...</button> -->
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
          <!-- End Announcements -->


          <!--  Start Special Order -->
          <div class="col-xxl-6 col-md-6">
          <div class="alert alert-warning  alert-dismissible fade show" role="alert">
              <div class="card-body">
                <h5 class="card-title">Special Order <span>| <a href="../records/history.php?code=SO">View All</a> </span></h5>
                <div class="activity">
                  <?php foreach ($specialOrderDocus as $so) : ?>
                    <div class="activity-item d-flex">
                      <?php $res1 = getAttachmentByID($mysqli, $so['attachment']); ?>
                      <div class="activite-label"><?= $so['referenceNo'] ?></div>
                      <i class='bi bi-square-fill activity-badge text-danger align-self-start'></i>
                      <div class="activity-content">
                        <tr>
                          <h6><a href="#" onclick="window.open('../uploads/records/specialorder/<?php echo $res1['fileName'].'_'.$res1['size'].$res1['id'].'.'. $res1['fileExtension']?>','_blank')"><?= $so['subject'] ?> </a></h6>
                          <!-- <p>PDF File</p> -->
                        </tr>
                      </div>
                    </div>
                  <?php endforeach;?>
                </div>
              </div>
            </div>
          </div>
          <!-- End SPECIAL ORDER-->

            <!--  Memorandum -->
            <div class="col-xxl-6 col-md-6">
            <div class="alert alert-info  alert-dismissible fade show" role="alert">
              <div class="card-body">
                <h5 class="card-title">Memorandum <span>| <a href="../records/history.php?code=M">View All</a> </span></h5>
                <div class="activity">
                  <?php foreach ($memorandumDocus as $m) : ?>
                    <div class="activity-item d-flex">
                      <?php $res1 = getAttachmentByID($mysqli, $m['attachment']); ?>
                      <div class="activite-label"><?= $m['referenceNo'] ?></div>
                      <i class='bi bi-square-fill activity-badge text-danger align-self-start'></i>
                      <div class="activity-content">
                        <tr>
                          <h6><a href="#" onclick="window.open('../uploads/records/memorandum/<?php echo $res1['fileName'].'_'.$res1['size'].$res1['id'].'.'. $res1['fileExtension']?>','_blank')"><?= $m['subject'] ?> </a></h6>
                          <!-- <p>PDF File</p> -->
                        </tr>
                      </div>
                    </div>
                  <?php endforeach;?>
                </div>
              </div>
            </div>
          </div>
          <!-- Memorandum-->

        </div>
      </div>
      <!-- End Left side columns -->

      <!-- Start Right side columns -->
      <div class="col-xl-5 col-lg-6 col-md-6">
        <div class="row">
          <!-- Division Count -->
          <div class="col-xxl-12 col-md-12">
            <div class="card">
              <div class="card-body pb-0">
                <h5 class="card-title">Employee <span>| Per Division</span></h5>
                <?php
                  $res = array();
                  for ($i=1; $i < 13 ; $i++) { 
                    $i = sprintf("%02d", $i);
                    $res[] = count(getUserPerDivision($mysqli));
                  }
                ?>
                <script src="https://cdn.anychart.com/releases/8.0.0/js/anychart-base.min.js"></script>
                <div id="chart"></div>
                <script>
                anychart.onDocumentReady(function() {

                var currentYear = <?php echo date("Y");?>;
                var jArray = <?php echo json_encode($res); ?>;
                // set the data
                var data = {
                  header: ["Month", "Reserved Users"],
                  rows: [
                    ["KMISD", jArray[0]],
                    ["OAD", jArray[1]],
                    ["OAD-P", jArray[2]],
                    ["OD", jArray[3]],
                    ["PMELD", jArray[4]],
                    ["RPDD", jArray[5]]
                    // ["OTHERS", jArray[6]]
                ]};

                // create the chart
                var chart = anychart.pie();

                // add data
                chart.data(data);

                // draw
                chart.innerRadius("40%");
                chart.container("chart");
                chart.draw();
              });
              </script>
                
              </div>
            </div>
          </div>
          <!-- End Division Count -->

          <!-- Start Birthday Celebrants -->
          <div class="col-xxl-12 col-md-12">
            <div class="card">
              <!-- <div class="card-header bg-info text-white">
                <h6 class="mb-0"><b>Birthday Celebrants</b></h6>
              </div> -->
              <div class="card-body">
                <h5 class="card-title">Birthday <span>| Celebrators</span></h5>
                <div class="carousel slide carousel-fade" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <?php foreach ($employeeBDay as $key => $info) : ?>
                      <div class="carousel-item <?= !$key ? 'active' : '' ?> text-center">
                        <!-- <img src="../assets/img/slide-1.jpg" class="d-block w-100" alt="..."> -->
                        <div class="carousel-content">
                          <div>
                            <h2 class="text-dark"><b><?php echo strtoupper($info['firstName'] . " " . $info['lastName']); ?></b></h2>
                            <h4 class="text-dark">
                              <b>
                                <?php $bdate = date_create($info['birthdate']); ?>
                                <?php echo date_format($bdate, "F d"); ?>
                              </b>
                            </h4>
                            <h5 class="text-dark"><small><?php echo strtoupper($info['division']); ?><l/small></h5>
                          </div>
                        </div>
                      </div>
                    <?php endforeach ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Birthday Celebrants -->

          
      </div>
      <!-- End Right side columns -->
  </section>

</main><!-- End #main -->

<?php include('../common/footer.php'); ?>