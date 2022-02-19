<?php

      include("class.php");
      $stmt = new Travel();
      $file = $_FILES['file'];
      $param = ["name"=> $_POST['t_name'],
                      "region"=>$_POST['region'],
                      "enblegoogle"=>$_POST['lorem'],
                      "img"=>$file,
                      "uid"=>"1"
                     ];

      $stmt->DBcon();

      



      $name = $_POST['t_name'];
      $region = $_POST['region'];
      $enblegoogle = $_POST['lorem'];


      if(!empty($name) && !empty($region) && !empty($enblegoogle) && isset( $_FILES["file"] ) && !empty( $_FILES["file"]["name"])  ){
            $NameImg = $stmt->TravelCreate($param);
            if($NameImg){

                  $paramfinal = ["name"=> $_POST['t_name'],
                  "region"=>$_POST['region'],
                  "enblegoogle"=>$_POST['lorem'],
                  "img"=>"$NameImg",
                  "uid"=>"1"
            ];
                  $createItem = $stmt->createTravelItem($paramfinal);
                  $id = $createItem;
                  
                  if($createItem){
                        $stmt->createScore($id);
                  }
            }
            echo " &nbsp;";
            echo "<script>
            Swal.fire({
                  title: 'สำเร็จ!',
                  text: 'คุณต้องการทำต่อหรือไม่',
                  icon: 'success',
                  confirmButtonText: 'Ok'
                });
                setTimeout(function(){
                  window.location.href = 'index.php';
            }, 1000);
            </script>";
      }else{
            echo "&nbsp;";
            echo "<script>
                              Swal.fire({
                                    title: 'เกิดข้อผิดพลาด!',
                                    text: 'กรุณากรอกข้อมูลให้ครบถ้วน',
                                    icon: 'error',
                                    confirmButtonText: 'Ok'
                              });
                              setTimeout(function(){
                                    window.location.href = 'index.php';
                              }, 1000);

            </script>";
      }







?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>

</body>
</html>