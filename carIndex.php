<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'cardatabase';

$conn = mysqli_connect($hostname,$username,$password,$database);
if(!$conn){
    die("Sorry we cannot connect" );
}
else{
    echo " <br> SUCCESS !";
}

$result = mysqli_query($conn,"SELECT * FROM `carmodels`");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="carDetails.css">
</head>
<body>
    <header class="header" id="header">
        <nav>
        <a href="layout.php"><img src="images\VASY-logos_white.png" href="home.html" class="logo">
</a>
        <ul>
                <li><a href="#" class="btn" id="modelv">Model V</a></li>
                <li><a href="#" class="btn" id="modela">Model A</a></li>
                <li><a href="#" class="btn" id="models">Model S</a></li>
                <li><a href="#" class="btn" id="modely">Model Y</a></li>
            </ul>
            <a href="PlaceOrder.php" class="btn-1">Reserve Now</a>
        </nav>

        <div class="info">
            <div>
                <h2 id="seconds">1.9 s</h2>
                <p>60mph</p>
            </div>
            <div>
                <h2 id="speed">200 mph</h2>
                <p>Top Speed</p>
            </div>
            <div>
                <h2 id="range">396 mi</h2>
                <p>Max Range</p>
            </div>
            <div class="line"></div>
            <div>
                <h2 id="model">Model V</h2>
            </div>
            
        </div>
    </header>


    <section class="team-wrap">
        <div class="container">
            <h2>OUR FEATURED MODELS <br><br>MODEL V<br><br></h2>

            <?php $row = mysqli_fetch_assoc($result); ?>
            <ul class="team-list">
                <li class="team-member">
                    <a href="#" data-tab="team1">
                        <span class="image">
                            <img src="images\car1.jpg">
                        </span>
                        <span class="name"><?php echo($row['ModelName'])?></span>
                    </a>
                    
                    <div class="popup-wrap" id="team1">
                        <div class="overlay"></div>
                            
                        <div class="popup-box">
                            <div class="close-btn">

                            </div>
                            <div class="left-image">
                                <img src="images\car1.jpg">
                            </div>
                        

                        <div class="right-content">
                            <h2><?php echo($row['ModelName'])?>
                            </h2>
                            <h3><?php echo($row['ModelName'])?> SPECS</h3>
                            <ul>
                                <li><strong><br>PEAK POWER : </strong><?php echo($row['Peak_power'])?> hp</li>
                                <li><strong><br>RANGE :  </strong><?php echo($row['Range'])?> mi</li>
                                <li><strong><br>WHEELS : </strong><?php echo($row['Wheels'])?>''</li>
                                <li><strong><br>CARGO : </strong><?php echo($row['Cargo'])?> cu ft</li>
                                <li><strong><br>ACCLERATION : </strong><?php echo($row['Acceleration'])?></li>
                                <li><strong><br>TOP SPEED : </strong><?php echo($row['Top_Speed'])?> mph</li>
                                <li><strong><br>DRAG COEFFICIENT : </strong><?php echo($row['Drag_Co-eff'])?> Cd</li>
                                <li><strong><br>WEIGHT : </strong><?php echo($row['Weight'])?> lbs</li>
                                <li><strong><br>POWERTRAIN : </strong><?php echo($row['Powertrain'])?></li>
                                <li><strong><br>SUPERCHARGING MAX : </strong><?php echo($row['SuperCharge'])?> kW<br></li>
                            </ul>
                        </div>
                       </div>
                    </div>
                </li>

                <?php $row = mysqli_fetch_assoc($result); ?>
                <li class="team-member">
                    <a href="#" data-tab="team2">
                        <span class="image">
                            <img src="images\car1-1.jpg">
                        </span>
                        <span class="name"><?php echo($row['ModelName'])?></span>
                    </a>
                    
                    <div class="popup-wrap" id="team2">
                        <div class="overlay"></div>
                            
                        

                        <div class="popup-box">
                            <div class="close-btn">

                            </div>
                            <div class="left-image">
                                <img src="images\car1-1.jpg">
                            </div>
                        

                        <div class="right-content">
                            <h2><?php echo($row['ModelName'])?>
                            </h2>
                            <h3><?php echo($row['ModelName'])?> SPECS</h3>
                            <ul>
                                <li><strong><br>PEAK POWER : </strong><?php echo($row['Peak_power'])?> hp</li>
                                <li><strong><br>RANGE :  </strong><?php echo($row['Range'])?> mi</li>
                                <li><strong><br>WHEELS : </strong><?php echo($row['Wheels'])?>''</li>
                                <li><strong><br>CARGO : </strong><?php echo($row['Cargo'])?> cu ft</li>
                                <li><strong><br>ACCLERATION : </strong><?php echo($row['Acceleration'])?></li>
                                <li><strong><br>TOP SPEED : </strong><?php echo($row['Top_Speed'])?> mph</li>
                                <li><strong><br>DRAG COEFFICIENT : </strong><?php echo($row['Drag_Co-eff'])?> Cd</li>
                                <li><strong><br>WEIGHT : </strong><?php echo($row['Weight'])?> lbs</li>
                                <li><strong><br>POWERTRAIN : </strong><?php echo($row['Powertrain'])?></li>
                                <li><strong><br>SUPERCHARGING MAX : </strong><?php echo($row['SuperCharge'])?> kW<br></li>
                            </ul>
                             
                        </div>
                       </div>
                    </div>
                </li>

                <?php $row = mysqli_fetch_assoc($result); ?>
                <li class="team-member">
                    <a href="#" data-tab="team3">
                        <span class="image">
                            <img src="images\car1-2.jpg">
                        </span>
                        <span class="name"><?php echo($row['ModelName'])?></span>
                    </a>
                    
                    <div class="popup-wrap" id="team3">
                        <div class="overlay"></div>
                            
                        

                        <div class="popup-box">
                            <div class="close-btn">

                            </div>
                            <div class="left-image">
                                <img src="images\car1-2.jpg">
                            </div>
                        

                        <div class="right-content">
                            <h2><?php echo($row['ModelName'])?>
                            </h2>
                            <h3><?php echo($row['ModelName'])?> SPECS</h3>
                            <ul>
                                <li><strong><br>PEAK POWER : </strong><?php echo($row['Peak_power'])?> hp</li>
                                <li><strong><br>RANGE :  </strong><?php echo($row['Range'])?> mi</li>
                                <li><strong><br>WHEELS : </strong><?php echo($row['Wheels'])?>''</li>
                                <li><strong><br>CARGO : </strong><?php echo($row['Cargo'])?> cu ft</li>
                                <li><strong><br>ACCLERATION : </strong><?php echo($row['Acceleration'])?></li>
                                <li><strong><br>TOP SPEED : </strong><?php echo($row['Top_Speed'])?> mph</li>
                                <li><strong><br>DRAG COEFFICIENT : </strong><?php echo($row['Drag_Co-eff'])?> Cd</li>
                                <li><strong><br>WEIGHT : </strong><?php echo($row['Weight'])?> lbs</li>
                                <li><strong><br>POWERTRAIN : </strong><?php echo($row['Powertrain'])?></li>
                                <li><strong><br>SUPERCHARGING MAX : </strong><?php echo($row['SuperCharge'])?> kW<br></li>
                            </ul>
                             
                        </div>
                       </div>
                    </div>
                </li>

                <?php $row = mysqli_fetch_assoc($result); ?>
                <li class="team-member">
                    <a href="#" data-tab="team4">
                        <span class="image">
                            <img src="images\car1-3.jpg">
                        </span>
                        <span class="name"><?php echo($row['ModelName'])?></span>
                    </a>
                    
                    <div class="popup-wrap" id="team4">
                        <div class="overlay"></div>
                            
                        

                        <div class="popup-box">
                            <div class="close-btn">

                            </div>
                            <div class="left-image">
                                <img src="images\car1-3.jpg">
                            </div>
                        

                        <div class="right-content">
                            <h2><?php echo($row['ModelName'])?>
                            </h2>
                            <h3><?php echo($row['ModelName'])?> SPECS</h3>
                            <ul>
                                <li><strong><br>PEAK POWER : </strong><?php echo($row['Peak_power'])?> hp</li>
                                <li><strong><br>RANGE :  </strong><?php echo($row['Range'])?> mi</li>
                                <li><strong><br>WHEELS : </strong><?php echo($row['Wheels'])?>''</li>
                                <li><strong><br>CARGO : </strong><?php echo($row['Cargo'])?> cu ft</li>
                                <li><strong><br>ACCLERATION : </strong><?php echo($row['Acceleration'])?></li>
                                <li><strong><br>TOP SPEED : </strong><?php echo($row['Top_Speed'])?> mph</li>
                                <li><strong><br>DRAG COEFFICIENT : </strong><?php echo($row['Drag_Co-eff'])?> Cd</li>
                                <li><strong><br>WEIGHT : </strong><?php echo($row['Weight'])?> lbs</li>
                                <li><strong><br>POWERTRAIN : </strong><?php echo($row['Powertrain'])?></li>
                                <li><strong><br>SUPERCHARGING MAX : </strong><?php echo($row['SuperCharge'])?> kW<br></li>
                            </ul>
                             
                        </div>
                       </div>
                    </div>
                </li>

                <H2><br>MODEL A<br><br></H2>
                <?php $row = mysqli_fetch_assoc($result); ?>
                <li class="team-member">
                    <a href="#" data-tab="team5">
                        <span class="image">
                            <img src="images\car2.jpg">
                        </span>
                        <span class="name"><?php echo($row['ModelName'])?></span>
                    </a>
                    
                    <div class="popup-wrap" id="team5">
                        <div class="overlay"></div>
                            
                        <div class="popup-box">
                            <div class="close-btn">

                            </div>
                            <div class="left-image">
                                <img src="images\car2.jpg">
                            </div>
                        

                        <div class="right-content">
                            <h2><?php echo($row['ModelName'])?>
                            </h2>
                            <h3><?php echo($row['ModelName'])?> SPECS</h3>
                            <ul>
                                <li><strong><br>PEAK POWER : </strong><?php echo($row['Peak_power'])?> hp</li>
                                <li><strong><br>RANGE :  </strong><?php echo($row['Range'])?> mi</li>
                                <li><strong><br>WHEELS : </strong><?php echo($row['Wheels'])?>''</li>
                                <li><strong><br>CARGO : </strong><?php echo($row['Cargo'])?> cu ft</li>
                                <li><strong><br>ACCLERATION : </strong><?php echo($row['Acceleration'])?></li>
                                <li><strong><br>TOP SPEED : </strong><?php echo($row['Top_Speed'])?> mph</li>
                                <li><strong><br>DRAG COEFFICIENT : </strong><?php echo($row['Drag_Co-eff'])?> Cd</li>
                                <li><strong><br>WEIGHT : </strong><?php echo($row['Weight'])?> lbs</li>
                                <li><strong><br>POWERTRAIN : </strong><?php echo($row['Powertrain'])?></li>
                                <li><strong><br>SUPERCHARGING MAX : </strong><?php echo($row['SuperCharge'])?> kW<br></li>
                            </ul>
                             
                        </div>
                       </div>
                    </div>
                </li>

                <?php $row = mysqli_fetch_assoc($result); ?>
                <li class="team-member">
                    <a href="#" data-tab="team6">
                        <span class="image">
                            <img src="images\car2-1.jpg">
                        </span>
                        <span class="name"><?php echo($row['ModelName'])?></span>
                    </a>
                    
                    <div class="popup-wrap" id="team6">
                        <div class="overlay"></div>
                            
                        

                        <div class="popup-box">
                            <div class="close-btn">

                            </div>
                            <div class="left-image">
                                <img src="images\car2-1.jpg">
                            </div>
                        

                        <div class="right-content">
                            <h2><?php echo($row['ModelName'])?>
                            </h2>
                            <h3><?php echo($row['ModelName'])?> SPECS</h3>
                            <ul>
                                <li><strong><br>PEAK POWER : </strong><?php echo($row['Peak_power'])?> hp</li>
                                <li><strong><br>RANGE :  </strong><?php echo($row['Range'])?> mi</li>
                                <li><strong><br>WHEELS : </strong><?php echo($row['Wheels'])?>''</li>
                                <li><strong><br>CARGO : </strong><?php echo($row['Cargo'])?> cu ft</li>
                                <li><strong><br>ACCLERATION : </strong><?php echo($row['Acceleration'])?></li>
                                <li><strong><br>TOP SPEED : </strong><?php echo($row['Top_Speed'])?> mph</li>
                                <li><strong><br>DRAG COEFFICIENT : </strong><?php echo($row['Drag_Co-eff'])?> Cd</li>
                                <li><strong><br>WEIGHT : </strong><?php echo($row['Weight'])?> lbs</li>
                                <li><strong><br>POWERTRAIN : </strong><?php echo($row['Powertrain'])?></li>
                                <li><strong><br>SUPERCHARGING MAX : </strong><?php echo($row['SuperCharge'])?> kW<br></li>
                            </ul>
                             
                        </div>
                       </div>
                    </div>
                </li>

                <?php $row = mysqli_fetch_assoc($result); ?>
                <li class="team-member">
                    <a href="#" data-tab="team7">
                        <span class="image">
                            <img src="images\car2-2.jpg">
                        </span>
                        <span class="name"><?php echo($row['ModelName'])?></span>
                    </a>
                    
                    <div class="popup-wrap" id="team7">
                        <div class="overlay"></div>
                            
                        

                        <div class="popup-box">
                            <div class="close-btn">

                            </div>
                            <div class="left-image">
                                <img src="images\car2-2.jpg">
                            </div>
                        

                        <div class="right-content">
                            <h2><?php echo($row['ModelName'])?>
                            </h2>
                            <h3><?php echo($row['ModelName'])?> SPECS</h3>
                            <ul>
                                <li><strong><br>PEAK POWER : </strong><?php echo($row['Peak_power'])?> hp</li>
                                <li><strong><br>RANGE :  </strong><?php echo($row['Range'])?> mi</li>
                                <li><strong><br>WHEELS : </strong><?php echo($row['Wheels'])?>''</li>
                                <li><strong><br>CARGO : </strong><?php echo($row['Cargo'])?> cu ft</li>
                                <li><strong><br>ACCLERATION : </strong><?php echo($row['Acceleration'])?></li>
                                <li><strong><br>TOP SPEED : </strong><?php echo($row['Top_Speed'])?> mph</li>
                                <li><strong><br>DRAG COEFFICIENT : </strong><?php echo($row['Drag_Co-eff'])?> Cd</li>
                                <li><strong><br>WEIGHT : </strong><?php echo($row['Weight'])?> lbs</li>
                                <li><strong><br>POWERTRAIN : </strong><?php echo($row['Powertrain'])?></li>
                                <li><strong><br>SUPERCHARGING MAX : </strong><?php echo($row['SuperCharge'])?> kW<br></li>
                            </ul>
                             
                        </div>
                       </div>
                    </div>
                </li>

                <?php $row = mysqli_fetch_assoc($result); ?>
                <li class="team-member">
                    <a href="#" data-tab="team8">
                        <span class="image">
                            <img src="images\car2-3.jpg">
                        </span>
                        <span class="name"><?php echo($row['ModelName'])?></span>
                    </a>
                    
                    <div class="popup-wrap" id="team8">
                        <div class="overlay"></div>
                            
                        

                        <div class="popup-box">
                            <div class="close-btn">

                            </div>
                            <div class="left-image">
                                <img src="images\car2-3.jpg">
                            </div>
                        

                        <div class="right-content">
                            <h2><?php echo($row['ModelName'])?>
                            </h2>
                            <h3><?php echo($row['ModelName'])?> SPECS</h3>
                            <ul>
                                <li><strong><br>PEAK POWER : </strong><?php echo($row['Peak_power'])?> hp</li>
                                <li><strong><br>RANGE :  </strong><?php echo($row['Range'])?> mi</li>
                                <li><strong><br>WHEELS : </strong><?php echo($row['Wheels'])?>''</li>
                                <li><strong><br>CARGO : </strong><?php echo($row['Cargo'])?> cu ft</li>
                                <li><strong><br>ACCLERATION : </strong><?php echo($row['Acceleration'])?></li>
                                <li><strong><br>TOP SPEED : </strong><?php echo($row['Top_Speed'])?> mph</li>
                                <li><strong><br>DRAG COEFFICIENT : </strong><?php echo($row['Drag_Co-eff'])?> Cd</li>
                                <li><strong><br>WEIGHT : </strong><?php echo($row['Weight'])?> lbs</li>
                                <li><strong><br>POWERTRAIN : </strong><?php echo($row['Powertrain'])?></li>
                                <li><strong><br>SUPERCHARGING MAX : </strong><?php echo($row['SuperCharge'])?> kW<br></li>
                            </ul>
                             
                        </div>
                       </div>
                    </div>
                </li>

                <H2><br>MODEL S<br><br></H2>
                <?php $row = mysqli_fetch_assoc($result); ?>
                <li class="team-member">
                    <a href="#" data-tab="team9">
                        <span class="image">
                            <img src="images\car3.jpg">
                        </span>
                        <span class="name"><?php echo($row['ModelName'])?></span>
                    </a>
                    
                    <div class="popup-wrap" id="team9">
                        <div class="overlay"></div>
                            
                        <div class="popup-box">
                            <div class="close-btn">

                            </div>
                            <div class="left-image">
                                <img src="images\car3.jpg">
                            </div>
                        

                        <div class="right-content">
                            <h2><?php echo($row['ModelName'])?>
                            </h2>
                            <h3><?php echo($row['ModelName'])?> SPECS</h3>
                            <ul>
                                <li><strong><br>PEAK POWER : </strong><?php echo($row['Peak_power'])?> hp</li>
                                <li><strong><br>RANGE :  </strong><?php echo($row['Range'])?> mi</li>
                                <li><strong><br>WHEELS : </strong><?php echo($row['Wheels'])?>''</li>
                                <li><strong><br>CARGO : </strong><?php echo($row['Cargo'])?> cu ft</li>
                                <li><strong><br>ACCLERATION : </strong><?php echo($row['Acceleration'])?></li>
                                <li><strong><br>TOP SPEED : </strong><?php echo($row['Top_Speed'])?> mph</li>
                                <li><strong><br>DRAG COEFFICIENT : </strong><?php echo($row['Drag_Co-eff'])?> Cd</li>
                                <li><strong><br>WEIGHT : </strong><?php echo($row['Weight'])?> lbs</li>
                                <li><strong><br>POWERTRAIN : </strong><?php echo($row['Powertrain'])?></li>
                                <li><strong><br>SUPERCHARGING MAX : </strong><?php echo($row['SuperCharge'])?> kW<br></li>
                            </ul>
                             
                        </div>
                       </div>
                    </div>
                </li>

                <?php $row = mysqli_fetch_assoc($result); ?>
                <li class="team-member">
                    <a href="#" data-tab="team10">
                        <span class="image">
                            <img src="images\car3-1.jpg">
                        </span>
                        <span class="name"><?php echo($row['ModelName'])?></span>
                    </a>
                    
                    <div class="popup-wrap" id="team10">
                        <div class="overlay"></div>
                            
                        

                        <div class="popup-box">
                            <div class="close-btn">

                            </div>
                            <div class="left-image">
                                <img src="images\car3-1.jpg">
                            </div>
                        

                        <div class="right-content">
                            <h2><?php echo($row['ModelName'])?>
                            </h2>
                            <h3><?php echo($row['ModelName'])?> SPECS</h3>
                            <ul>
                                <li><strong><br>PEAK POWER : </strong><?php echo($row['Peak_power'])?> hp</li>
                                <li><strong><br>RANGE :  </strong><?php echo($row['Range'])?> mi</li>
                                <li><strong><br>WHEELS : </strong><?php echo($row['Wheels'])?>''</li>
                                <li><strong><br>CARGO : </strong><?php echo($row['Cargo'])?> cu ft</li>
                                <li><strong><br>ACCLERATION : </strong><?php echo($row['Acceleration'])?></li>
                                <li><strong><br>TOP SPEED : </strong><?php echo($row['Top_Speed'])?> mph</li>
                                <li><strong><br>DRAG COEFFICIENT : </strong><?php echo($row['Drag_Co-eff'])?> Cd</li>
                                <li><strong><br>WEIGHT : </strong><?php echo($row['Weight'])?> lbs</li>
                                <li><strong><br>POWERTRAIN : </strong><?php echo($row['Powertrain'])?></li>
                                <li><strong><br>SUPERCHARGING MAX : </strong><?php echo($row['SuperCharge'])?> kW<br></li>
                            </ul>
                             
                        </div>
                       </div>
                    </div>
                </li>

                <?php $row = mysqli_fetch_assoc($result); ?>
                <li class="team-member">
                    <a href="#" data-tab="team11">
                        <span class="image">
                            <img src="images\car3-2.jpg">
                        </span>
                        <span class="name"><?php echo($row['ModelName'])?></span>
                    </a>
                    
                    <div class="popup-wrap" id="team11">
                        <div class="overlay"></div>
                            
                        

                        <div class="popup-box">
                            <div class="close-btn">

                            </div>
                            <div class="left-image">
                                <img src="images\car3-2.jpg">
                            </div>
                        

                        <div class="right-content">
                            <h2><?php echo($row['ModelName'])?>
                            </h2>
                            <h3><?php echo($row['ModelName'])?> SPECS</h3>
                            <ul>
                                <li><strong><br>PEAK POWER : </strong><?php echo($row['Peak_power'])?> hp</li>
                                <li><strong><br>RANGE :  </strong><?php echo($row['Range'])?> mi</li>
                                <li><strong><br>WHEELS : </strong><?php echo($row['Wheels'])?>''</li>
                                <li><strong><br>CARGO : </strong><?php echo($row['Cargo'])?> cu ft</li>
                                <li><strong><br>ACCLERATION : </strong><?php echo($row['Acceleration'])?></li>
                                <li><strong><br>TOP SPEED : </strong><?php echo($row['Top_Speed'])?> mph</li>
                                <li><strong><br>DRAG COEFFICIENT : </strong><?php echo($row['Drag_Co-eff'])?> Cd</li>
                                <li><strong><br>WEIGHT : </strong><?php echo($row['Weight'])?> lbs</li>
                                <li><strong><br>POWERTRAIN : </strong><?php echo($row['Powertrain'])?></li>
                                <li><strong><br>SUPERCHARGING MAX : </strong><?php echo($row['SuperCharge'])?> kW<br></li>
                            </ul>
                             
                        </div>
                       </div>
                    </div>
                </li>

                <?php $row = mysqli_fetch_assoc($result); ?>
                <li class="team-member">
                    <a href="#" data-tab="team12">
                        <span class="image">
                            <img src="images\car3-3.jpg">
                        </span>
                        <span class="name"><?php echo($row['ModelName'])?></span>
                    </a>
                    
                    <div class="popup-wrap" id="team12">
                        <div class="overlay"></div>
                            
                        

                        <div class="popup-box">
                            <div class="close-btn">

                            </div>
                            <div class="left-image">
                                <img src="images\car3-3.jpg">
                            </div>
                        

                        <div class="right-content">
                            <h2><?php echo($row['ModelName'])?>
                            </h2>
                            <h3><?php echo($row['ModelName'])?> SPECS</h3>
                            <ul>
                                <li><strong><br>PEAK POWER : </strong><?php echo($row['Peak_power'])?> hp</li>
                                <li><strong><br>RANGE :  </strong><?php echo($row['Range'])?> mi</li>
                                <li><strong><br>WHEELS : </strong><?php echo($row['Wheels'])?>''</li>
                                <li><strong><br>CARGO : </strong><?php echo($row['Cargo'])?> cu ft</li>
                                <li><strong><br>ACCLERATION : </strong><?php echo($row['Acceleration'])?></li>
                                <li><strong><br>TOP SPEED : </strong><?php echo($row['Top_Speed'])?> mph</li>
                                <li><strong><br>DRAG COEFFICIENT : </strong><?php echo($row['Drag_Co-eff'])?> Cd</li>
                                <li><strong><br>WEIGHT : </strong><?php echo($row['Weight'])?> lbs</li>
                                <li><strong><br>POWERTRAIN : </strong><?php echo($row['Powertrain'])?></li>
                                <li><strong><br>SUPERCHARGING MAX : </strong><?php echo($row['SuperCharge'])?> kW<br></li>
                            </ul>
                             
                        </div>
                       </div>
                    </div>
                </li>

                <H2><br>MODEL Y<br><br></H2>
                <?php $row = mysqli_fetch_assoc($result); ?>
                <li class="team-member">
                    <a href="#" data-tab="team13">
                        <span class="image">
                            <img src="images\car4.jpg">
                        </span>
                        <span class="name"><?php echo($row['ModelName'])?></span>
                    </a>
                    
                    <div class="popup-wrap" id="team13">
                        <div class="overlay"></div>
                            
                        <div class="popup-box">
                            <div class="close-btn">

                            </div>
                            <div class="left-image">
                                <img src="images\car4.jpg">
                            </div>
                        

                        <div class="right-content">
                            <h2><?php echo($row['ModelName'])?>
                            </h2>
                            <h3><?php echo($row['ModelName'])?> SPECS</h3>
                            <ul>
                                <li><strong><br>PEAK POWER : </strong><?php echo($row['Peak_power'])?> hp</li>
                                <li><strong><br>RANGE :  </strong><?php echo($row['Range'])?> mi</li>
                                <li><strong><br>WHEELS : </strong><?php echo($row['Wheels'])?>''</li>
                                <li><strong><br>CARGO : </strong><?php echo($row['Cargo'])?> cu ft</li>
                                <li><strong><br>ACCLERATION : </strong><?php echo($row['Acceleration'])?></li>
                                <li><strong><br>TOP SPEED : </strong><?php echo($row['Top_Speed'])?> mph</li>
                                <li><strong><br>DRAG COEFFICIENT : </strong><?php echo($row['Drag_Co-eff'])?> Cd</li>
                                <li><strong><br>WEIGHT : </strong><?php echo($row['Weight'])?> lbs</li>
                                <li><strong><br>POWERTRAIN : </strong><?php echo($row['Powertrain'])?></li>
                                <li><strong><br>SUPERCHARGING MAX : </strong><?php echo($row['SuperCharge'])?> kW<br></li>
                            </ul>
                             
                        </div>
                       </div>
                    </div>
                </li>

                <?php $row = mysqli_fetch_assoc($result); ?>
                <li class="team-member">
                    <a href="#" data-tab="team14">
                        <span class="image">
                            <img src="images\car4-1.jpg">
                        </span>
                        <span class="name"><?php echo($row['ModelName'])?></span>
                    </a>
                    
                    <div class="popup-wrap" id="team14">
                        <div class="overlay"></div>
                            
                        

                        <div class="popup-box">
                            <div class="close-btn">

                            </div>
                            <div class="left-image">
                                <img src="images\car4-1.jpg">
                            </div>
                        

                        <div class="right-content">
                            <h2><?php echo($row['ModelName'])?>
                            </h2>
                            <h3><?php echo($row['ModelName'])?> SPECS</h3>
                            <ul>
                                <li><strong><br>PEAK POWER : </strong><?php echo($row['Peak_power'])?> hp</li>
                                <li><strong><br>RANGE :  </strong><?php echo($row['Range'])?> mi</li>
                                <li><strong><br>WHEELS : </strong><?php echo($row['Wheels'])?>''</li>
                                <li><strong><br>CARGO : </strong><?php echo($row['Cargo'])?> cu ft</li>
                                <li><strong><br>ACCLERATION : </strong><?php echo($row['Acceleration'])?></li>
                                <li><strong><br>TOP SPEED : </strong><?php echo($row['Top_Speed'])?> mph</li>
                                <li><strong><br>DRAG COEFFICIENT : </strong><?php echo($row['Drag_Co-eff'])?> Cd</li>
                                <li><strong><br>WEIGHT : </strong><?php echo($row['Weight'])?> lbs</li>
                                <li><strong><br>POWERTRAIN : </strong><?php echo($row['Powertrain'])?></li>
                                <li><strong><br>SUPERCHARGING MAX : </strong><?php echo($row['SuperCharge'])?> kW<br></li>
                            </ul>
                             
                        </div>
                       </div>
                    </div>
                </li>

                <?php $row = mysqli_fetch_assoc($result); ?>
                <li class="team-member">
                    <a href="#" data-tab="team15">
                        <span class="image">
                            <img src="images\car4-2.jpg">
                        </span>
                        <span class="name"><?php echo($row['ModelName'])?></span>
                    </a>
                    
                    <div class="popup-wrap" id="team15">
                        <div class="overlay"></div>
                            
                        

                        <div class="popup-box">
                            <div class="close-btn">

                            </div>
                            <div class="left-image">
                                <img src="images\car4-2.jpg">
                            </div>
                        

                        <div class="right-content">
                            <h2><?php echo($row['ModelName'])?>
                            </h2>
                            <h3><?php echo($row['ModelName'])?> SPECS</h3>
                            <ul>
                                <li><strong><br>PEAK POWER : </strong><?php echo($row['Peak_power'])?> hp</li>
                                <li><strong><br>RANGE :  </strong><?php echo($row['Range'])?> mi</li>
                                <li><strong><br>WHEELS : </strong><?php echo($row['Wheels'])?>''</li>
                                <li><strong><br>CARGO : </strong><?php echo($row['Cargo'])?> cu ft</li>
                                <li><strong><br>ACCLERATION : </strong><?php echo($row['Acceleration'])?></li>
                                <li><strong><br>TOP SPEED : </strong><?php echo($row['Top_Speed'])?> mph</li>
                                <li><strong><br>DRAG COEFFICIENT : </strong><?php echo($row['Drag_Co-eff'])?> Cd</li>
                                <li><strong><br>WEIGHT : </strong><?php echo($row['Weight'])?> lbs</li>
                                <li><strong><br>POWERTRAIN : </strong><?php echo($row['Powertrain'])?></li>
                                <li><strong><br>SUPERCHARGING MAX : </strong><?php echo($row['SuperCharge'])?> kW<br></li>
                            </ul>
                             
                        </div>
                       </div>
                    </div>
                </li>

                <?php $row = mysqli_fetch_assoc($result); ?>
                <li class="team-member">
                    <a href="#" data-tab="team16">
                        <span class="image">
                            <img src="images\car4-3.jpg">
                        </span>
                        <span class="name"><?php echo($row['ModelName'])?></span>
                    </a>
                    
                    <div class="popup-wrap" id="team16">
                        <div class="overlay"></div>
                            
                        

                        <div class="popup-box">
                            <div class="close-btn">

                            </div>
                            <div class="left-image">
                                <img src="images\car4-3.jpg">
                            </div>
                        

                        <div class="right-content">
                            <h2><?php echo($row['ModelName'])?>
                            </h2>
                            <h3><?php echo($row['ModelName'])?> SPECS</h3>
                            <ul>
                                <li><strong><br>PEAK POWER : </strong><?php echo($row['Peak_power'])?> hp</li>
                                <li><strong><br>RANGE :  </strong><?php echo($row['Range'])?> mi</li>
                                <li><strong><br>WHEELS : </strong><?php echo($row['Wheels'])?>''</li>
                                <li><strong><br>CARGO : </strong><?php echo($row['Cargo'])?> cu ft</li>
                                <li><strong><br>ACCLERATION : </strong><?php echo($row['Acceleration'])?></li>
                                <li><strong><br>TOP SPEED : </strong><?php echo($row['Top_Speed'])?> mph</li>
                                <li><strong><br>DRAG COEFFICIENT : </strong><?php echo($row['Drag_Co-eff'])?> Cd</li>
                                <li><strong><br>WEIGHT : </strong><?php echo($row['Weight'])?> lbs</li>
                                <li><strong><br>POWERTRAIN : </strong><?php echo($row['Powertrain'])?></li>
                                <li><strong><br>SUPERCHARGING MAX : </strong><?php echo($row['SuperCharge'])?> kW<br></li>
                            </ul>
                             
                        </div>
                       </div>
                    </div>
                </li>           
            </ul>
        </div>

    </section>


    <script>
        var header = document.getElementById('header');
        var mv = document.getElementById('modelv');
        var ma = document.getElementById('modela');
        var ms = document.getElementById('models' );
        var my = document.getElementById('modely');
        var model = document.getElementById('model');
        var seconds = document.getElementById('seconds');
        var speed = document.getElementById('speed');
        var range = document.getElementById('range');
        
        mv.onclick = function(){
            header.style.backgroundImage = "url(images/car1.jpg)";
            model.innerHTML = "Model V";
            seconds.innerHTML = "1.9 s";
            speed.innerHTML = "220 mph";
            range.innerHTML = "396 mi";
        }
        ma.onclick = function(){
            header.style.backgroundImage = "url(images/car2.jpg)";
            model.innerHTML = "Model A";
            seconds.innerHTML = "2.4 s";
            speed.innerHTML = "210 mph";
            range.innerHTML = "312 mi";
        }
        ms.onclick = function(){
            header.style.backgroundImage = "url(images/car3.jpg)";
            model.innerHTML = "Model S";
            seconds.innerHTML = "2.7 s";
            speed.innerHTML = "200 mph";
            range.innerHTML = "300 mi";
        }
        my.onclick = function(){
            header.style.backgroundImage = "url(images/car4.jpg)";
            model.innerHTML = "Model Y";
            seconds.innerHTML = "3.1 s";
            speed.innerHTML = "201 mph";
            range.innerHTML = "302 mi";
        }
        </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>

            $(function(){
                $('.team-list a').on('click',function(e){
                    e.preventDefault();

                    var PopupID = $(this).attr('data-tab');
                    $('#' + PopupID).fadeIn();
                })

                $('.close-btn').on('click',function(){
                    $(this).parents('.popup-wrap').fadeOut();
                })
            })
        </script>
</body>
</html> 
