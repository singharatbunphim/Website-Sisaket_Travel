<?php

      include("class.php");
      $stmt = new Travel();
      $stmt->DBCon();
      $GetTravel = $stmt->getTravelItem();
      $regionQuery = $stmt->GetRegion();
      




?>



<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/singh-custom.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
      <title>เที่ยวศรีสะเกษ</title>
</head>

<body>

      <div class="main">
            <nav class="navbar">
                  <div class="navbar-logo">เที่ยวศรีสะเกษ</div>
                  <div class="navbar-menu">
                        <ul>
                              <li class="nav-link" id="home"><a>หน้าแรก</a></li>
                              <li class="nav-link" id="about"><a>สถานที่เที่ยว</a></li>
                              <li class="nav-link" id="work"><a>ยอดนิยม</a></li>
                              <li class="nav-link" id="contact"><a>ติดต่อ</a></li>
                        </ul>
                  </div>
            </nav>
      
            <section id="home">
                  <div class="container-fuid">
                        <div class="homepage">
                              <div class="introduction">
                                    <div class="intro-left">
                                          <div class="object">
                                                <div class="man">
                                                      <img src="https://images.unsplash.com/photo-1562835156-75d18f5ef57f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80">
                                                </div>
                                          </div>
                                    </div>
      
                                    <div class="intro-right">
                                          <h2>เที่ยวศรีสะเกษสนุกแน่</h2>
                                          <h4>อยากลองมีประสบการ์ณดีๆ ในการเที่ยวหรือไม่ ?</h4>
      
                                          <button class="btn-go">Get Started</button>
                                    </div>
                              </div>
                        </div>
                  </div>
      
            </section>
      
            <section id="about">
                  <div class="container-fuid">
                        <div class="aboutpage">
                        
                              <div class="slider-image">
                                    <div class="container-fuid">
                                          <div class="slider">
      
                                                <div class="slide-item active">
                                                      <img src="https://images.unsplash.com/photo-1480796927426-f609979314bd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80">
                                                      <div class="title">Tokyo</div>
                                                </div>
      
                                                <div class="slide-item">
                                                      <img src="https://images.unsplash.com/photo-1496442226666-8d4d0e62e6e9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80">
                                                      <div class="title">New York</div>
                                                </div>
                                                <div class="slide-item">
                                                      <img src="https://images.unsplash.com/photo-1528181304800-259b08848526?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80">
                                                      <div class="title">Thailand</div>
                                                </div>
                                                <div class="slide-item">
                                                      <img src="https://images.unsplash.com/photo-1600664356348-10686526af4f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1475&q=80">
                                                      <div class="title">Singapore</div>
                                                </div>
                                                
                                                <div class="prevbutton">
                                                      <div class="prevbtn backbtn"><</div>
                                                      <div class="prevbtn nextbtn">></div>
                                                </div>
      
                                                <div class="prevbuttonpoint">
                                                </div>
                                          </div>
      
                                    </div>
                              </div>
      
      
                              <div class="article">
                                    <div class="column">
                                          <div class="box"></div>
                                    </div>
      
                              </div>
                        </div>
                  </div>
            </section>
      
            <section id="about">
                  <div class="stageview">
                        <div class="container">
                              <div class="con-box">
                                    <div class="container-fuid">
                                          <div class="row d-flex justify-end"> 
                                                <button class="btn-close">Close</button>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="container-fuid">
                        <div class="stage-menu-page">



                              <div class="add-travel">
                                    <div class="container">
                                          <div class="menu-title"><h1>เพิ่มข้อมูล</h1> <div class="btn-close btn_close">close</div></div>
                                          <form action="upload.php" method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                      <label>ชื่อสถานที่</label><input class="form-control" type="text" name="t_name">
                                                </div>
                                                <div class="row">
                                                      <label>เลือกอำเภอ</label><select name="region" class="form-control">


                                                      <?php 
                                                            foreach( $regionQuery as $row) { ?>
                                                            <option value="<?php echo $row['r_id'] ?>"><?php echo $row['r_name'] ?></option>
                                                      <?php } ?>
                                                      </select>
                                                </div>
                                                <div class="row">
                                                      <label>รูปภาพ</label><input type="file" id="file" name="file" >
                                                </div>
                                                <div class="row">
                                                      <label>Google Map</label><br>
                                                      <textarea  name="lorem" id="lorem" col="20" row="20" style="resize: none; width: 100%; height: 30em;"></textarea>
                                                </div>

                                                <button type="submit" class="btn-close">เพิ่มข้อมูล</button>
                                          </form>
                                    </div>
                              </div>


                              <div class="container">
                              <div class="row"><button class="btn_addTravel"> + เพิ่มสถานที่ท่องเที่ยว</button></div>
                                    <div class="mytable-r">
                                          <table id="mytable" class="mytable-view">
                                                <thead>
                                                            <th>สถานที่</th>
                                                            <th>จังหวัด</th>
                                                            <th>อำเภอ</th>
                                                            <th>รูปภาพ</th>
                                                            <th></th>
                                                </thead>
                                                <tbody>

                                                      <?php 
                                                            foreach($GetTravel as $row) { ?>
                                                                  <tr class="t-d-align">
                                                                        <td><?php echo $row['t_name'] ?></td>
                                                                        <td>ศรีสะเกษ</td>
                                                                        <td><?php echo $row['r_name']?></td>
                                                                        <td class="img"><img src="uploads/<?php echo $row['t_img']?>" width="100">.</td>
                                                                        <td class="btn"><button class="btn-view" id="<?php echo $row['t_id'] ?>">ดูเพิ่ม</button></td>
                                                                  </tr>
                                                           <?php }
                                                      
                                                      ?>

                                                </tbody>


                                          </table>



                                    </div>
                              </div>
                        
                        </div>
                  </div>
            </section>
      
            <section id="about">
                  <div class="travel-tran-page">
                        <div class="container-fuid">
                              <div class="background-pic">
                                    <div class="container">
                                          
                                          <h1>โลกแห่งการท่องเที่ยวกำลังรอคุณอยู่</h1>
                                    </div>
                              </div>
                        </div>
      
                  </div>
            </section>
      
            <section id="work">
                  <div class="container-fuid">
                        <div class="top-chart-page">


                              <div class="container">
                                    <div class="title"><h1>10 อันดับยอดฮิต</h1></div>
                                    <div class="map-items">
                                          <div class="t-item">
                                                <div class="title-name">วัดป่าศรีมงคลรัตนาราม จ.ศรีสะเกษ</div>
                                                <div class="t-img">
                                                      <img src="asset/watpasisaket.jpg">
                                                </div>
                                                <div class="t-footer">
                                                      <div class="star">★<span class="star-count">10</span></div>
                                                      <div class="comment">✎ <span class="comment-count">3</span></div>
                                                      <div class="write-comment">ดูเพิ่ม</div>
                                                </div>
                                          </div>
      
                                          <div class="t-item">
                                                <div class="title-name">วัดศรีบึงบูรพ์ จ.ศรีสะเกษ</div>
                                                <div class="t-img">
                                                      <img src="asset/10877_ 1.jpg">
                                                </div>
                                                <div class="t-footer">
                                                      <div class="star">★<span class="star-count">5</span></div>
                                                      <div class="comment">✎ <span class="comment-count">2</span></div>
                                                      <div class="write-comment">ดูเพิ่ม</div>
                                                </div>
                                          </div>
      
      
                                          <div class="t-item">
                                                <div class="title-name">เกาะกลางน้ำ จ.ศรีสะเกษ</div>
                                                <div class="t-img">
                                                      <img src="asset/Jixl111.jpg">
                                                </div>
                                                <div class="t-footer">
                                                      <div class="star">★<span class="star-count">1</span></div>
                                                      <div class="comment">✎ <span class="comment-count">2</span></div>
                                                      <div class="write-comment">ดูเพิ่ม</div>
                                                </div>
                                          </div>
      
      
      
      
                                    </div>
                              </div>


                        </div>
                  </div>
                  </div>
                  <div class="travel-map-page">
                        <div class="container">
                              <div class="mapping-travel">
                                    <h1>สถานที่ท่องเที่ยว</h1>
                                    <?php 
                                          foreach($GetTravel as $row) { ?>
                                          <div class="travel-item">

                                                <div class="t-img">

                                                      <div class="t-name">
                                                            <span><?php echo $row['t_name'] ?></span>
                                                      </div>

                                                      <img src="uploads/<?php echo $row['t_img'] ?>">
                                                </div>
                                                <div class="t-googlemap">
                                                      <span><?php echo $row['t_emblegoogle']?></span>
                                                </div>
                                          </div>
                                    <?php } ?>

                              </div>
                        </div>
                  </div>
                                                
            </section>





            
            <section id="contact">
                  <div class="student-contact-page">
                        <div class="container">
                              <h1 style="text-align: center;">จัดทำโดย</h1>
                              <div class="user">
                                    <div class="user-item">
                                          นายสิงหราช บุญพิม
                                    </div>
                                    <div class="user-item">
                                          นายธนพล ปัญญาเนียม
                                    </div>
                                    <div class="user-item">
                                          นายณภัทร ศรีสุระ
                                    </div>
                                    <div class="user-item">
                                          นายอนุพนธ์ มะเดื่อ
                                    </div>
                                    <div class="user-item">
                                          นายจักรพันธ์ ลำนัย
                                    </div>
                              </div>

                        </div>

                  </div>

            </section>
      </div>

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"> </script>
      <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
      <script src="js/customenavbarscroll.js"></script>
      <script src="js/slider.js"></script>
      <script src="js/script.js"></script> 
      <script src="js/handle.js"></script>
      <script src="js/list_travel.js"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>