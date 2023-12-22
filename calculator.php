<?php

$area_of_construction = $_POST['area_of_construction'];
$cost_per_sqft = 1500;

$total_cost= $area_of_construction * $cost_per_sqft;

//cement 
$cement_qty = $area_of_construction * 0.45;
$cement_amount = $cement_qty * 320;

//steel 
$steel_qty = $area_of_construction * 4;
$steel_amount = $steel_qty * 65;

//bricks 
$bricks_qty = $area_of_construction * 19;
$bricks_amount = $bricks_qty * 7;

//aggregate 
$aggregate_qty = $area_of_construction * 1.4;
$aggregate_amount = $aggregate_qty * 30;

//Sand 
$sand_qty = $area_of_construction * 2.5;
$sand_amount = $sand_qty * 70;

//Fittings and Finishers
$fitting_finisher = (19.74/100) * $total_cost;

//other charges
$other_charges = (30/100) * $total_cost;

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
  <div class="img-fluid" >
    <img src="img/banner.jpg" alt="" class="img-fluid" style="width:1400px; height:500px;" >
  </div>
  
  <nav class="navbar" style="background-color: #afd9f7;">
    <div class="container text-center">
      <h2 class=" text-center ">BUILDING ESTIMATION CACULATOR</h2>
    </div>
  </nav>

  <div class="container mb-3">
    
    <div class="card mt-3">
      <div class="alert alert-danger ">
        Note :- This is an Approximate estimate this price can be lower and higher
      </div>
      <div class="card-body">
        <h6>Approx amount of cost for given construction is <span style="color: red;">
            <?php echo $total_cost; ?>
            Rs
          </span> .</h6>
        <h6 class="mt-5"> Note :- Cost per sq feet of house construction is 1500.</h6>
      </div>
    </div>
    
        
          <div class="col-md-12 mt-5">
            <div class="card ">
              <!-- <div class="card-header text-center">
                Quantity of material required for <span style="color: red;">
                  <?php echo $builtuparea; ?>
                </span> ft<sup>2</sup>
              </div> -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Resources</th>
                    <th scope="col">Unit</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Amount</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Cement</td>
                    <td>Bag</td>
                    <td><?php echo $cement_qty; ?></td>
                    <td>RS.
                        <?php echo $cement_amount; ?></td>
                       
                  </tr>
                  <tr>
                    <td>Steel </td>
                    <td>kg</td>
                    <td><?php echo $steel_qty; ?></td>
                    <td>RS.
                        <?php echo $steel_amount; ?></td>
                       
                  </tr>
                  <tr>
                    <td>Bricks </td>
                    <td>peices</td>
                    <td><?php echo $bricks_qty; ?></td>
                    <td>RS.
                        <?php echo $bricks_amount; ?></td>
                       
                  </tr>
                  <tr>
                    <td>Aggregate </td>
                    <td>Cubic feet</td>
                    <td><?php echo $aggregate_qty; ?></td>
                    <td>RS.
                        <?php echo $aggregate_amount; ?></td>
                       
                  </tr>
                  <tr>
                    <td>Sand </td>
                    <td>Cubic feet</td>
                    <td><?php echo $sand_qty; ?></td>
                    <td>RS.
                        <?php echo $sand_amount; ?></td>
                       
                  </tr>
                  <tr>
                    <td>Fittings and Finishers 
                      <br>(Doors,Windows,Electrical Fittings,Sanitary Fittings,Paint,Tiles,etc)
                    </td>
                    <td>-</td>
                    <td></td>
                    <td>RS.
                        <?php echo $fitting_finisher; ?></td>
                       
                  </tr>
                  <tr>
                    <td>Other Charges
                      <br>(Labour Charge,Contractor Charge, etc)
                    </td>
                    <td>-</td>
                    <td></td>
                    <td>RS.
                        <?php echo $other_charges; ?></td>
                       
                  </tr>
                  
                  
                  
                </tbody>
              </table>
            </div>
            <h6 class="mt-2">Note :- prices of material can be fluctuated </h6>
          
    </div>
    <div class="d-grid gap-2 col-6 mx-auto m-5">
      <button class="btn btn-warning mb-5" type="button"><a href="index.php">< Back</a> </button>
      
    </div>
  </div>
</body>

</html>