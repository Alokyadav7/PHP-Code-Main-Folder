<html>
  <body>
         <table width="800px" border="2px">
         <?php
         for ($row=1;$row<=8;$row++)
         {
            echo "<tr>";
            for ($col=1;$col<=8;$col++)
            {
                $total=$row+$col;
                if ($total%2==0)
            {
                echo "<td height=80px width=80px bgcolor=ffffffff></td>";
            }
                else 
            {
                echo "<td height=80px width=80px bgcolor=00000000></td>";
            } 
         }
               echo "</tr>";

         }

         ?>


        </table>

 </body>

</html>