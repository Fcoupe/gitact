<?php
    function suiteFibonacci($iteration=null) 
    {
    	$somme = 0;
        $table = array(0, 1);
        $iteration = isset($iteration)? $iteration:100;
        for ($i = 0; $i <= $iteration; $i++) {
            if ($i > 1) {
                $table[$i] = $table[$i - 1] + $table[$i - 2];
            }

            if  ($table[$i] % 2 == 0)
            {
            	$somme = $somme + $table[$i];
            	
            }
            //pour afficher la serie
            echo '<br/>' . $somme . '<br/>';
            // echo $table[$i] . '<br/>';
        }
        return $table;
        
    }

        //la serie est stockée dans $table
        $table = suiteFibonacci(33);
        // var_dump($table);
?>