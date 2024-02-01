<!DOCTYPE html>
<html>
    <head>
        <title>PHP MySQL Stored Procedure Demo 1</title>
        <link rel="stylesheet" href="css/table.css" type="text/css" />
    </head>
    <body>
        
<?php
    $query='CALL users()';
    $result=mysqli_query($con,$query);
    
    echo "
    <div class='main'>
    <div class='card-body' style='background-color:#ffffff;color:#000000;>
         <div >
    <table class='table table-hover'>
      
            <tr>
                <th>userid</th>
                <th>userfirst</th>
                <th>userfirst</th>
                <th>userfirst</th>
                <th>userfirst</th>
                <th>userfirst</th>
            </tr></table>
        </div></div>";
    while ($row=mysqli_fetch_array($result)){
          
        echo "<tr>
                    <td><?php echo "$row['userid']" ?></td>
                         <td><?php echo "$row['user_first']" ?></td>
                         <td><?php echo "$row['user_last']"?></td>
                          <td><?php echo "$row['user_email']" ?></td>
                           <td><?php echo "$row['phone']" ?></td>
                            <td><?php echo "$row['gender'] "?></td>
                    </td>
                </tr>";
        }
        echo '</tbody></table></div></div></div>';
?>
    </body>
</html>