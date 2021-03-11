
<?php
    $variables = " test variables";// this is headen
    $name = "safa";# data type [1] string
    $age = 20; /* data type [2] integer */
    $list = "<ul>";// start list
    $list .= "<li> 1 </li>";
    $list .= "<li> 2 </li>";
    $list .= "<li> 3 </li>";
    $list .= "</ul>";//end list
    $var1 = TRUE; // DATA TYPE [3] BOOLEAN

   
?>
<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
      <title> <?php echo "test page"; ?>  </title>
    </head>
    <body>
       <h1> <?php echo $variables ; ?> </h1> 
       <h2> <?php echo $name ;echo "<br/>"; echo gettype($name); ?> </h2>
       <h3> <?php echo $age ;
       echo "<br/>";
       echo gettype($age) . "<br/>";
       var_dump($age); 
        ?>  </h3>
       <p>  <?php echo $list; ?></p>
       <div> 
          <?php 
            if(1000 > 200 ){
            echo " function good";}
            echo "<br/>";
            var_dump($var1);
         ?> 
        </div>
        <div><h3>
         <?php
          $num1 = 80 ;
        
           if($num1 >= 500 && $num1 < 600  ){
             echo $num1 . " is a mediam number ";
           }
            elseif($num1 >= 600){
              echo $num1 . " is a bigist number  ";
            }
            else {
              echo $num1 . " is a small number  ";
            }
         ?>
        </h3></div>
    </body>
</html>