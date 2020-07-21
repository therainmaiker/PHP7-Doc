<style>
.moja {

padding : 20px;



}
 </style>
<?php

$Directors = [
    'Director1'=> ['Film11','Film12','Film13','Film14','Film15'],
    'Director2'=> ['Film21','Film22','Film23','Film24','Film25'],
    'Director3'=> ['Film31','Film32','Film33','Film34','Film35'],
    'Director4'=> ['Film41','Film42','Film43','Film44','Film45'],
    'Director5'=> ['Film51','Film52','Film53','Film54','Film55']
    
    ];
    // print_r( $Directors);
 


foreach ($Directors as $key => $value)  {



echo $key;

    foreach($value as $b ) {


        echo '<li>
       <ul class="moja">'.$b.'</ul></li>';




    }





}











?>