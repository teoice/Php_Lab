<?php declare(strict_types=1);?> <!-- type usage -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Poli Lorenzo" />
        <meta name="robots" content="noindex, nofollow" />
        <meta name="description" content="simple web app" />
        <meta name="keywords" content="resistor, RSA, php" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap-grid.min.css" />
        <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap-reboot.min.css" />
        <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap-utilities.min.css" />
        
        <link rel="stylesheet" type="text/css" href="./style.css" />

        <title>RESISTOR 🔌</title>
    </head>
    <body>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" id="calc_form">
            <div class="h-75 position-absolute top-50 start-50 translate-middle d-flex flex-column boder border-dark rounded res_div" style="background-color: #8C00FF;">
                
                <div class="w-25 h-25 mx-auto">
                    <img src="./images/resistor.png" style="width: 100%; height: 100%; object-fit: contain" />
                </div>
                
                <span class="res_text mx-auto"> SELECT THE RESISTOR VALUES </span>
            
                <div class="mx-auto d-flex mt-5" id="father_digit" style="width: 90%; justify-content: space-evenly">
                    <input type="number" class="d-none" value="0" name="i_1" />
                    <input type="number" class="d-none" value="0" name="i_2" />
                    <input type="number" class="d-none" value="0" name="i_3" />
                    <input type="number" class="d-none" value="0" name="i_4" />
                    <input type="number" class="d-none" value="0" name="i_5" />

                    <div id="first_digit" class="digit">
                        <span class="h3" style="color: white"> 0 </span>
                    </div>

                    <div id="second_digit" class="digit">
                        <span class="h3" style="color: white"> 0 </span>
                    </div>
                    
                    <div id="third_digit" class="digit">
                        <span class="h3" style="color: white"> 0 </span>
                    </div>
                    
                    <div id="fourth_digit" class="digit">
                        <span class="h5" style="color: white"> 1 </span>
                    </div>
                    
                    <div id="fifth_digit" class="digit">
                        <span class="h6" style="color: white"> 1 </span>
                        <span class="h6" style="color: white"> % </span>
                    </div>
                </div>

                <div class="w-auto mt-5 m-auto">
                    <button class="btn-danger btn px-4 py-3" type="submit"> CALCULATE </button>
                </div>
                <div class="w-auto mt-5 m-auto">
                    <?php 
                        class Resistance {
                            private array $current_values = [0, 1, 1];
                        
                            // ------------------------------- //
                            // output formatted resistance     //
                            // runtime: max = O(1) / min=O(1)  //
                            // ------------------------------- //
                            public function get_resistance(): ?string {
                                if(isset($_POST['i_1'])) {
                                    $this->current_values[0] += ((int) $_POST['i_1']) * 100;
                                    $this->current_values[0] += ((int) $_POST['i_2']) * 10;
                                    $this->current_values[0] += ((int) $_POST['i_3']) * 1;

                                    $this->current_values[1] = $_POST['i_4'];
                                    $this->current_values[2] = $_POST['i_5'];

                                    $output = ($this->current_values[0] * $this->current_values[1]);

                                    if($output >= 1_000_000) {
                                        $output /= 1_000_000;
                                        echo "<h1 class='h1 text-center'>{$output}M Ohm &#xb1; {$this->current_values[2]}% </h1>";
                                    } else if($output >= 1_000) {
                                        $output /= 1_000;
                                        echo "<h1 class='h1 text-center'>{$output}k Ohm &#xb1; {$this->current_values[2]}%</h1>";
                                    } else {
                                        echo "<h1 class='h1 text-center'>{$output} Ohm &#xb1; {$this->current_values[2]}%</h1>";
                                    }
                                }

                                return "{$output}";
                            }
                        }

                        $resistance = new Resistance(); 
                        $resistance->get_resistance();
                    ?>
                </div>
            </div>
        </form>

        <script src="./main.js"></script>
    </body>
</html>