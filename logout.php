<?php   

session_start();
session_unset();
session_destroy();


header("location:login.php");



?>
 <header>
            
            
            <span><d>D</d>hia'a &#160;&#160;<d>H</d>otel</span>
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->
            
            <form id="form1" >
               
                <input type="search" name="searsh">
                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="18px" height="18px">
                        <path d="M0 0h24v24H0z" fill="none"/>
                        <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                    </svg>
                </button>               
          
            </form>
      <!-- login S -->
      </a>
         <div>
<!--  
                        if($_SESSION['user_info'])
                        echo " <p style='margin-right:20px'> welcom "  . $_SESSION['user_info']['username']     ." </p>"; --> -->
                     

</div>
<div>
 <a href="logout.php" class="btn btn-success square-btn-adjust">Logout</a> </div>

              
              
              <!-- login E -->

              <!-- sing in S-->
              <button id="xbtn">Sing in</button>

              <div id="xmyModal" class="xmodal">
              
              <div class="xmodal-content">
              <div class="modal-header">
              <h2 id="txet" >Create an account </h2>
              </div>
              <form  method="POST">
              <div class="modal-body">
              
          
              
              <p id="txet" >Enter your name</p>
              <input class="inp" type="text" name="name">
              <p id="txet" >Enter your password </p>
              <input class="inp" type="password" name="password">
              <p id="txet" >Enter your Email</p>
              <input class="inp" type="email" name="Email">
              <p id="txet" >Enter your Phone number </p>
              <input class="inp" type="tel" name="Phone number">
              </div>
              <div class="modal-footer">
                <ww class="xclose"><img style="width: 30px;
                       margin: -430px 0px 400px 0px;" src="img/x2.png"></ww>
             </div>
              <button id="bu" type="submit">Create</button>

                    </form>
                </div>
              </div>
              <!-- sing in E -->
        <nav>
            <ul>
                <li id="li1" ><a href="#">Home</a></li>       
                <li><a href="contact/co_us.html" target="_blank">Contact us</a></li>
                <li><a href="discussion/dis.html" target="_blank">Discussion</a></li>
                <li><a href="about/page1.html" target="_blank">About us</a></li>
                
            </ul>
        </nav>
        
    </header>