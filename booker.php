<?php
session_start();

include('header.php');
include 'admin/db.php';
// include 'sidebar.php';
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2><i class="fa fa-users"></i> الحجز</h2>


            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-md-8">
                <!-- Form Elements -->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-plus-circle"></i> اضافة حجز جديد
                    </div>
                    <?php 
                    
                    if(isset($_POST['submit'])){
                  
                    
                    $usre=trim($_POST['user']);
                    $room=$_POST['room'];
                    $number=($_POST['number']);
                    $date=($_POST['date']);

                    $errors=array();
                    if (empty($number)) {
                        $errors['cname'] = "<div style='color:red'>Enter number_phone</div>";}
                     if(empty($date))
                    {
                        $errors['cename'] = "<div style='color:red'>name must be date</div>";}
                        if(empty($errors)){

                    
                 
                    

                 
            
                             

                               
                        
                            $sql="INSERT INTO booking(user_id,romm_id,number_phone,date) VALUES (?,?,?,?) " ;
                            $stm = $con->prepare($sql);
                            $stm->execute(array($usre ,$room,$number,$date ));
                            if ($stm->rowCount()==1) {

                                // echo "<div class='alert alert-success'>Row Inserted</div>" ;
                             
                                    $room_stats_sql = "UPDATE romm SET statue ='1' WHERE room_id = '$room'";
                                    $sew=$con->prepare($room_stats_sql);
                                    $sew->execute();
                                    if($sew->rowCount()==1)
                                    {
                                        echo "true";
                                    }
                                }

                             else {
                                echo "<div class='alert alert-danger'>Row Not Inserted</div>" ;
                            }
                        
                      
                        
                        


                    }
                   
                
                }

                    ?>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form role="form" method="post"  enctype="multipart/form-data" >
                                    
                               
                                <div class="form-group">
                                        <label>Username</label>
                                        <select class="form-control" name="user" >
                                        <?php
                                       // $pre_id=$_SESSION['user_info'];
                                        $query = "SELECT * FROM users where id=:id ";
                                        $result = $con->prepare($query);
                                        $result->execute(array("id"=>$_SESSION['user_info']['id']));
                                        foreach ($result->fetchAll() as $catRow) {
                                            echo '<option value="' . $catRow['id'] . '">' . $catRow['eamil'] . '</option>';  
                                        }
                                             ?> 
                                        </select>
                                    </div>
                                  
                                    <div class="form-group">
                                        <label>romm_type</label>
                                        <select class="form-control" name="room" >
                                        <?php
                                        
                                        $query = "SELECT * FROM romm NATURAL JOIN room_type ";
                                        $result = $con->prepare($query);
                                        $result->execute();
                                            foreach ($result->fetchAll() as $acount_type) {
                                                
                                             echo '<option value="' . $acount_type['room_id'] . '">' . $acount_type['room_type'] . '</option>';  }
                                             ?> 
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>number_phone</label>
                                        <input type="text" class="form-control" placeholder="Please Enter number" name="number">

                                    </div>
                                    <div class="form-group">
                                        <label>مدة الاقامة </label>
                                        <input type="text" class="form-control" placeholder="Please Enter date" name="date">
                                        <div class="invalid-feedback">لو سمحت ادخل مدة الاقامة.</div>

                                    </div>
                                    <div style="right:float;" >

                                        <button    type="submit" name="submit" class="btn btn-primary">Add bbking</button>
                                        <button type="reset" class='btn btn-success'>Cancel</button>
                                    </div>

                            </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>

        </div>
                                            <hr/>











                                            
                                            <?php
          include 'admin/footer.php';    ?>
        
        
        
        