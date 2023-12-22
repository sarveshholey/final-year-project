<?php

$num2 = '0'; 
$total_cost = '0'; 

// if ($_SERVER['REQUEST_METHOD'] == 'GET') { 
  // check if submit button is clicked
// Get the values of num1 and num2 from the form
// $builtuparea = $_GET['builtup_area'];
// $num2 = $_GET['cost_per_sqft'];

// }


// calculate cement required
// $cement = $builtuparea * 0.4;
// $cement_amount = (16.4/100)* $total_cost;

// $cementamount = $cement * 320;

// calculate Sand required
// $sand = $builtuparea * 0.816;
// $sand_amount = (12.3/100)* $total_cost;


// $sandamount = $sand * 3300;

// calculate Aggregate required
// $aggregate = $builtuparea * 0.608;
// $aggregate_amount = (7.4/100)* $total_cost;


// $aggregateamount = $aggregate * 1100;

// calculate steel required
// $steel = $builtuparea * 4;
// $steel_amount = (24.6/100)* $total_cost;


// calculate brick required

// $brick = $builtuparea * 12;

// calculate Paint required
// $paint = $builtuparea * 0.18;

// calculate flooring required
// $flooring = $builtuparea * 1.3;

// calculate Finishers required
// $finishers = (16.5/100) * $total_cost;

// calculate Fittings required
// $fitting = (22.8/100) * $total_cost;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Construction cost calculator</title>

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <script src="bootstrap.bundle.min.js"></script>
</head>

<body>
  <div class="img-fluid">
    <img src="img/banner.jpg" alt="" class="img-fluid" style="width:1400px">
  </div>

  <nav class="navbar" style="background-color: #afd9f7;">
    <div class="container text-center">
      <h2 class=" text-center ">BUILDING ESTIMATION CACULATOR</h2>
    </div>
  </nav>

  <div class="container mb-3">
    <div class="card mt-5 mb-3">
      <h5 class="card-header">BUILDING ESTIMATION CACULATOR</h5>
      <div class="card-body ">

        <div class="row">
          <div class="col-md-2">
            <img src="img/location-area.png" alt="">
          </div>
          <div class="col-md-4">
            <h2 class="mt-5">Location and Area</h4>
          </div>


        </div>

        <form style="width: 60%; " method="post" action="calculator.php">
          <div class="row mb-3 ">
            <label for="" class="col-sm-4 col-form-label">State</label>
            <div class="col-sm-8">
              <div class="input-group mb-3">
                <input class="form-control" type="text" value="Maharashtra" aria-label="readonly input example" readonly>
              </div>
            </div>
          </div>
          <div class="row mb-3 ">
            <label for="" class="col-sm-4 col-form-label">City</label>
            <div class="col-sm-8">
              <div class="input-group mb-3">
              <input class="form-control" type="text" value="Amravati" aria-label="readonly input example" readonly>
              </div>
            </div>
          </div>
          <div class="row mb-3 ">
            <label for="" class="col-sm-12 col-form-label">Note :  Current Cost per sq ft of construction in amravati city is between 1250 to 1500. <br>Here we have assumed is 1500.</label>
            
          </div>
          <div class="row mb-3">
            <label for="" class="col-sm-4 col-form-label">Area of Construction</label>
            <div class="col-sm-8">
              <div class="input-group mb-3">
                <input type="number" class="form-control" placeholder="Enter Area of Construction" name="area_of_construction"
                  aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2">Sq ft</span>
              </div>
            </div>
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-warning">Next</button>
            <button type="reset" class="btn btn-danger">Reset</button>
          </div>

        </form>
        <div class="mt-5 mb-5">
          <h6>Disclaimer: The cost and quantity indicated are approximated for each resource . Actual cost estimate may vary for your city.Quality of materials assumed are of medium grade . The cost of materials may vary according to the  quality of materials .

          </h6>
        </div>

      </div>
    </div>

  </div>
</body>

</html>