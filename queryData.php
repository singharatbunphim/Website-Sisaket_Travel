<?php

      $id =  $_POST['Id_query'];
      include("class.php");


      $stmt = new Travel();
      $stmt->DBCon();
      $result = $stmt->getTravelByID($id);
      
?>



      <div class="container">
            <div class="header">
                  <img src="uploads/<?php echo $result['t_img'];?>">
            </div>
      </div>

      <button class="btn-close btnquery">close</button>


