<?php include('head.php'); ?>

<?php $currentPage = 'obesity_bd'; ?>

<?php include('obesity_bd_scripts.php'); ?>


<body class="w3-grey">

<?php include('navbar.php'); ?>


<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:180px;margin-top:43px;">
  <!-- Header -->
  <header class="w3-container w3-dark-grey" style="padding-top:22px">
    <h5><b><i class="fa fa-table"></i> Obesity Data</b></h5>
  </header>

  <!-- <div class="w3-row-padding w3-margin-bottom"> -->
  <div class="w3-panel">
    <!-- <div class="w3-twothird"> -->
      <div id="chartObesity" class="card" style="height: 700px; width: 100%;"></div>
      <!-- </div> -->
      <div class="w3-column-padding w3-margin-bottom"> </div>

  </div>
  <div class="w3-column-padding w3-margin-bottom"> </div>
  <div class="w3-panel">
    <div class="w3-twothird">
      <div id="MapObesity" class="card w3-container w3-column-padding" style="height:800px; width: 100%">
      </div>
    </div>

    <div class="w3-third">
      <div class="card w3-black" style="margin-left:10px;height: 370px; width: 100%; ">
        <h4 id = "ObesityName"></h4>
        <h4 id = "ObesityRate"></h4>
      </div>
      <div class="w3-column-padding w3-margin-bottom"> </div>
      <div class="card w3-black" style="margin-left:10px;height: 370px; width: 100%; ">
        <h4 id = "ObeseMost"></h4>
        <h4 id = "ObeseLeast"></h4>
      </div>
    </div>
  </div>
  <div class="w3-column-padding w3-margin-bottom"></div>

  <footer class="w3-container w3-padding-16 w3-dark-grey">
    <h4>Computing Project: Walkabiltiy Correlation Analysis </h4>
  </footer>

  <!-- End page content -->
</div>

<script src="javascripts/main.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlrDIe2aqNWvrleu1U4Mc-vId1O4GISyQ&callback=myMap"> 
</script>
</body>
</html>