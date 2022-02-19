
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 


class Travel extends Region {

      public $namename;
      public $password;
      public $condb;
      public $param;

            function DBCon() {
                  $username = "root";
                  $password = "";
                  $host = "localhost";
                  $database = "pwb1";
            
                  try {
                        $con = new pdo("mysql:host=$host;dbname=$database",$username,$password);
                  
                        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                        $this->condb = $con;
                  }catch(PDOExeption $e){
                        $e->getMessage();
                  }
                  }




      public static function TravelCreate ($param=[]){
 
            $c = $param['img'];

            return $UploadImg = Travel::UploadImg($c,$param);

      }
      
      public static function UploadImg($c,$param) {
            date_default_timezone_set("Asia/Bangkok");
            $time = date("Y_m_dH_i_s");


            $dirname = "uploads/";

            $fileImage = $dirname.$time.basename($c['name']);
            
      
            $imageFileType = strtolower(pathinfo($fileImage,PATHINFO_EXTENSION));

            $upload_error_msg = "";


            $size = $c['size'];
            $state = 0;
            if($size < 5000000) {
                  
                  if($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png"){
                        $upload_error_msg = "ขอโทษ ต้องใช้ไฟล์นามสกุล JPG, JPEG, PNG & GIF เท่านั้น";
                  }else{
                        if (move_uploaded_file($c['tmp_name'],$fileImage)){
                              $upload_error_msg = "ไฟล์ภาพ".basename($c['name']) ."อัพโหลดสำเร็จ";
                              $img = $time.basename($c['name']);
                              return $img;
                        }else{
                              echo "เกิดข้อผิดพลาด";
                        }
                  }


            }else{
                  $upload_error_msg = "ไฟลต้องขนาดไม่เกิน 5MB";
            }

            echo "&nbsp;";
            echo "<script>
                              Swal.fire({
                                    title: 'เกิดข้อผิดพลาด!',
                                    text: '{$upload_error_msg}',
                                    icon: 'error',
                                    confirmButtonText: 'Ok'
                              });
                              setTimeout(function(){
                                    window.location.href = 'index.php';
                              }, 1000);

            </script>";



      }

      function createTravelItem($param){
                  $sql = "INSERT INTO `traveltble` (`t_id`, `t_name`, `t_region`, `t_emblegoogle`, `t_img`, `u_id`) VALUES (NULL, :name, :region , :enblegoogle , :img, :uid);";
                  $stmt = $this->condb->prepare($sql);
                  $result = $stmt->execute($param);

                  return $id = $this->condb->lastInsertId();
      }


      function getTravelItem(){
                  $sql = "SELECT * FROM traveltble 
                  LEFT JOIN regiontbl on t_region = r_id";
                  $stmt = $this->condb->prepare($sql);
                  $stmt->execute();
                  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                  return $result;
      }


      function createScore($sid) {
                  $param = [
                        "sid"=>"$sid"
                  ];
                  $sql = "INSERT INTO scoretbl (s_id,s_point) VALUES (:sid, 0 );";
                  $stmt = $this->condb->prepare($sql);
                  $stmt->execute($param);

                  
      }

      
      function getTravelByID($id){
            $param = [
                  "t_id"=>"$id"
            ];

            $sql = " SELECT * FROM `traveltble` WHERE t_id = :t_id ";
            $stmt = $this->condb->prepare($sql);
            $stmt->execute($param);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;

      }

      
      









}


class Region {

      public $condb;

      function GetRegion() {
            $sql = "select * from regiontbl";
            $stmt = $this->condb->prepare($sql);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;
      }


}





?>