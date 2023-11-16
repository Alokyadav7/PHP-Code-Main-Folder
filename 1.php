<?php
     
        $a=10;
        $b=20;


        $addition=$a+$b;
        $subraction=$a-$b;
        $multiplication=$a*$b;
        $division=$a/$b;
?>

<html>
  <body>
         <table border="1pt">
       <tr>

             <th>addition</th>
             <th>subraction</th>
             <th>multiplication</th>
             <th>division</th>

      </tr>    
      <tr>
             <td><?php echo $addition;?></td>
             <td><?php echo $subraction;?></td>
             <td><?php echo $multiplication;?></td>
             <td><?php echo $division;?></td>
     </tr>

        </table>
 
 </body>

</html>