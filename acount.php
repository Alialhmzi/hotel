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
                <h2><i class="fa fa-users"></i> الحساب</h2>


            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-md-8">
                <!-- Form Elements -->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-plus-circle"></i> CREATE ACCOUNT
                    </div>
                    <?php 
                    
                    if(isset($_POST['submit'])){
                  
                    
                    $name=trim ($_POST['name']);
                    $email=trim ($_POST['email']);
                    $password=sha1($_POST['pass']);
                    $confi_pass=sha1($_POST['confi_pass']);
                    $pariv=$_POST['pariv'];
                    $errors=array();

                    if (empty($name)) {
                        $errors['cname'] = "<div style='color:red'>Enter Name </div>";}
                    if(is_numeric($name))
                    {
                        $errors['cename'] = "<div style='color:red'>name must be string</div>";

                    }
                    if (empty($email)) {
                        $errors['eamil'] = "<div style='color:red'>enter your eamil</div>";}
                        if (empty($password)) {
                            $errors['cpname'] = "<div style='color:red'>please enter eamil</div>";}
                            if (empty($confi_pass)) {
                                $errors['cppname'] = "<div style='color:red'>Enter Name of Category</div>";}
                               if(empty($errors))
                               {

                               
                        
                            $sql="INSERT INTO users(username,eamil,password,con_password,pri_id) VALUES (?,?,?,?,?) " ;
                            $stm = $con->prepare($sql);
                            $stm->execute(array($name , $email ,$password ,$confi_pass,$pariv ));
                            if ($stm->rowCount()==1) {

                                header("location:login.php");
                            } else {
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
                                        <label>Name</label>
                                        <input type="text" placeholder="Please Enter your Name " class="form-control" name="name" />
                                        <i style="color: red;">
                                            <?php if(isset( $errors['cname'] )) echo  $errors['cname']  ?>
                                        </i>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" placeholder="PLease Enter Eamil"   name="email" />
                                        <i style="color: red;">
                                            <?php if(isset( $errors['eamil'] )) echo  $errors['eamil']  ?>
                                        </i>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="Please Enter password" name="pass">
                                        <i style="color: red;">
                                            <?php if(isset( $errors['cpname'] )) echo  $errors['cpname']  ?>
                                        </i>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control"
                                            placeholder="Please Enter confirm password"  name="confi_pass" >
                                            <i style="color: red;">
                                            <?php if(isset( $errors['cppname'] )) echo  $errors['cppname']  ?>
                                        </i>
                                    </div>
                                    <div class="form-group">
                                        <label>User Type</label>
                                        <select class="form-control" name="pariv" >
                                        <?php
                                        
                                        $query = "SELECT * FROM accounta WHERE id=1";
                                        $result = $con->prepare($query);
                                        $result->execute();
                                            foreach ($result->fetchAll() as $acount_type) {
                                                
                                             echo '<option value="' . $acount_type['id'] . '">' . $acount_type['name'] . '</option>';  }
                                             ?> 
                                        </select>
                                    </div>
                                    <div style="right:float;" >

                                        <button    type="submit" name="submit" class="btn btn-primary">انشاء الحساب</button>
                                        <button type="reset" class='btn btn-success'>الفاء</button>
                                    </div>

                            </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>

        </div>
        <hr />
                    <?php include 'admin/footer.php' ?>