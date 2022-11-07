<?php  

session_start();
if(isset($_SESSION['user_info']))
{

?>



<!DOCTYPE html>

<html>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Dhia Hotel</title>
        <link rel="stylesheet" type="text/css" href="index.css">
        
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
	   <script type="text/javascript" src="engine1/script.js"></script>
        
        <style>
        
            .icon{width: 32px}
            
summary{
        top: 15px;
        margin: 0px 0px 25px 5px ;  
        background: red;
        position: relative;
        height: 20px;
        width: 135px ;
        border-radius: 5px;
        cursor: pointer;
        
        }

#cc{
    background: lightseagreen;
    width: 235px;
    height: 110px;
    position: relative;
    padding-top: 5px;
    padding-left: 10px;
    padding-bottom: 5px;
    border-radius: 7px;
    
}            
/* hotel*/
            
#v{   
    background: #ff0000;
    color: yellow;
    position: relative;
    top: 155px;
}
            
a{text-decoration-line:none;}
            
#cunt{  
        background: blue;
        position: relative;
        padding: 5px;
        border-radius: 10px;
        width: 55px;
        color: yellow;
        margin-left: 5px;
    
}


#cunt:hover{  
        background: yellow;
        position: relative;
        padding: 5px;
        border-radius: 10px;
        width: 64px;
        color: blue;
        font-size: 20px;
        left: 10px;
  
}


#cn{    
    background-color: aqua;
    position: relative;
    padding: 5px;
    border-radius: 10px;
    width: 78px;
    color: #000000;       
            
}
            
#mfrim{ 
        position: absolute;
        left: 254px;
        width: 79%;
        top: 800px;
        height: 80%;
    
}
            
            
        </style>
    </head>
    
    <body>
    <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="index.php" class="logo d-flex align-items-center">
    <img src="assets/img/logo.png" alt="">
    <span class="d-none d-lg-block">NiceHOTEL</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->

<div class="search-bar">
  <form class="search-form d-flex align-items-center" method="POST" action="#">
    <input type="text" name="query" placeholder="Search" title="Enter search keyword">
    <button type="submit" title="Search"><i class="bi bi-search"></i></button>
  </form>
</div><!-- End Search Bar -->

<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

    <li class="nav-item d-block d-lg-none">
      <a class="nav-link nav-icon search-bar-toggle " href="#">
        <i class="bi bi-search"></i>
      </a>
    </li><!-- End Search Icon-->


   
 <a href="logout.php" class="btn btn-success square-btn-adjust">Logout</a>       
      </a><!-- End Notification Icon -->

      

    <li class="nav-item dropdown">

    
 <a href="profile.php" class="btn btn-success square-btn-adjust">profile</a> </div>
      <!-- End Messages Icon -->

       

    
       
      

       

      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header>
        
    <main>
        
        
        <div id="wow" >
        
           <iframe src="wowslider.php" style="width:1280px;height:720px;max-width:100%;overflow:hidden;border:none;padding:0;margin:0 auto;display:block;" marginheight="0" marginwidth="0"></iframe> 
            
        </div>
        
            <details>
                 <summary> About the Site</summary>
                    <p id = "cc"> This site allows you to choose the best hotels around the world, as it facilitates the search work, saves time, and you can also make reservations in the hotel that you have chosen. </p>
             </details>

             <details>
                <summary> Site information </summary>
                    <p id="cc"> We have created this website to make it easy to find the hotel you want quickly and easily, and to book the hotel you have chosen  as it contains the most famous hotels in the world and medium-level hotels.</p>
            </details>  
       
            <details>
                <summary>&#160;Site services</summary>
                    <p id="cc">Our site allows you to choose from thousands of hotels on the Internet where you can search for the hotel you want and the price you want.
                    And the room that you want, just a push of a button.</p>
            </details>  

        <div style="width: 90px;height: 365px;border: 3px black solid;display:inline-block;margin: 5px;border-radius: 9px; " >
           <p id="cn" >The country</p>
             <a href="hotels/1.php" target="F" >
                 <p id = "cunt"> &#160;yemeni </p>
            </a>
        </div>

       
            <iframe id="mfrim" name="F"></iframe>
        

    </main>
        
    <footer>
        
        <p>
            <em>&#160; You can follow us on :</em>
            
            <lll>
                <a class="we" href="#"><img id="des"  src="img/8.png" width="32px" ></a></lll>
            <lll>
                <a class="we" href="#"> <img id="des" src="img/t.png"></a></lll>
            <lll>
                <a class="we" href="#"><svg class="icon" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve"><style type="text/css">
	.st01{fill:#25D366;}
	.st1{fill:#FFFFFF;}
	.st21{fill:#FF0000;}
	.st31{fill:#3D5A98;}
	.st41{fill:url(#SVGID_1_);}
	.st51{fill:url(#SVGID_21_);}
	.st61{fill:#55ADEE;}
	.st71{fill:#1E96C8;}
	.st81{fill:#A9C9DD;}
	.st91{fill:#C8DAEA;}
	.st101{fill:none;}
	.st111{fill:#4787F3;}
	.st121{fill:#DC483C;}
	.st131{fill:#FFCE43;}
	.st141{fill:#149F5C;}
	.st151{fill:#CE1E5B;}
	.st161{fill:#72C5CD;}
	.st171{fill:#DFA22F;}
	.st181{fill:#3CB187;}
	.st191{fill:#248C73;}
	.st201{fill:#392538;}
	.st211{fill:#BB242A;}
	.st221{fill:none;stroke:#3CB187;stroke-miterlimit:10;}
	.st231{fill:#009A57;}
	.st241{fill:#FCCD37;}
	.st251{fill:#2771F0;}
</style><g><linearGradient gradientUnits="userSpaceOnUse" id="SVGID_1_" x1="407.1325" x2="104.8675" y1="4.4733" y2="507.5267"><stop offset="0" style="stop-color:#4845A2"/><stop offset="4.536461e-02" style="stop-color:#5945A2"/><stop offset="0.1713" style="stop-color:#8444A1"/><stop offset="0.2698" style="stop-color:#9E44A1"/><stop offset="0.3282" style="stop-color:#A844A1"/><stop offset="0.3905" style="stop-color:#AB429A"/><stop offset="0.4788" style="stop-color:#B43C88"/><stop offset="0.4896" style="stop-color:#B53B85"/><stop offset="0.5577" style="stop-color:#BE3572"/><stop offset="0.6762" style="stop-color:#D22749"/><stop offset="0.7388" style="stop-color:#DF4F3E"/><stop offset="0.8559" style="stop-color:#F9A326"/><stop offset="1" style="stop-color:#F9DD26"/></linearGradient><path class="st41" d="M391.5,13H120.5C61.1,13,13,61.1,13,120.5v270.9C13,450.9,61.1,499,120.5,499h270.9   c59.4,0,107.5-48.1,107.5-107.5V120.5C499,61.1,450.9,13,391.5,13z"/><circle class="st1" cx="352.4" cy="160" r="21.2"/><g><path class="st1" d="M333.8,76H178.2C121.8,76,76,121.8,76,178.2v155.6C76,390.2,121.8,436,178.2,436h155.6    c56.4,0,102.2-45.9,102.2-102.2V178.2C436,121.8,390.2,76,333.8,76z M403.5,333.8c0,38.4-31.3,69.7-69.7,69.7H178.2    c-38.4,0-69.7-31.3-69.7-69.7V178.2c0-38.4,31.3-69.7,69.7-69.7h155.6c38.4,0,69.7,31.3,69.7,69.7V333.8z"/><path class="st1" d="M256,162.3c-51.7,0-93.7,42-93.7,93.7s42,93.7,93.7,93.7s93.7-42,93.7-93.7S307.7,162.3,256,162.3z     M256,317.2c-33.7,0-61.2-27.5-61.2-61.2s27.5-61.2,61.2-61.2s61.2,27.5,61.2,61.2S289.7,317.2,256,317.2z"/></g></g></svg></a></lll>
            <lll>
                <a class="we" href="#"><svg class="icon" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">
                .st0{fill:#25D366;}
                .st1{fill:#FFFFFF;}
                .st2{fill:#FF0000;}
                .st3{fill:#3D5A98;}
                .st4{fill:url(#SVGID_1_);}
                .st5{fill:url(#SVGID_2_);}
                .st6{fill:#55ADEE;}
                .st7{fill:#1E96C8;}
                .st8{fill:#A9C9DD;}
                .st9{fill:#C8DAEA;}
                .st10{fill:none;}
                .st11{fill:#4787F3;}
                .st12{fill:#DC483C;}
                .st13{fill:#FFCE43;}
                .st14{fill:#149F5C;}
                .st15{fill:#CE1E5B;}
                .st16{fill:#72C5CD;}
                .st17{fill:#DFA22F;}
                .st18{fill:#3CB187;}
                .st19{fill:#248C73;}
                .st20{fill:#392538;}
                .st21{fill:#BB242A;}
                .st22{fill:none;stroke:#3CB187;stroke-miterlimit:10;}
                .st23{fill:#009A57;}
                .st24{fill:#FCCD37;}
                .st25{fill:#2771F0;}
            </style><g><path class="st2" d="M423.6,81.5c-54.9-2-111.7-3.1-170.1-3c-56.7,0-111.8,1.1-165.2,3C42.4,83.2,6,120.9,6,166.9v178.2   c0,46,36.4,83.7,82.4,85.4c54.7,2,111.1,3.1,169.2,3c57,0,112.4-1.1,166.1-3c46-1.7,82.3-39.4,82.3-85.4V166.9   C506,120.9,469.6,83.2,423.6,81.5z"/><polygon class="st1" points="205.7,181 205.7,332.2 335.8,256.6  "/></g></svg></a></lll>
            <lll>
                <a class="we" href="#"><img id="img" src="img/telegram.jpeg" ></a>
            </lll>
            
        </p>
        <span> &#160;&#160;To communicate with the administration :</span>        
        <a href="#"><svg class="icon" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">
	.st0{fill:#25D366;}
	.st1{fill:#FFFFFF;}
	.st2{fill:#FF0000;}
	.st3{fill:#3D5A98;}
	.st4{fill:url(#SVGID_1_);}
	.st5{fill:url(#SVGID_2_);}
	.st6{fill:#55ADEE;}
	.st7{fill:#1E96C8;}
	.st8{fill:#A9C9DD;}
	.st9{fill:#C8DAEA;}
	.st10{fill:none;}
	.st11{fill:#4787F3;}
	.st12{fill:#DC483C;}
	.st13{fill:#FFCE43;}
	.st14{fill:#149F5C;}
	.st15{fill:#CE1E5B;}
	.st16{fill:#72C5CD;}
	.st17{fill:#DFA22F;}
	.st18{fill:#3CB187;}
	.st19{fill:#248C73;}
	.st20{fill:#392538;}
	.st21{fill:#BB242A;}
	.st22{fill:none;stroke:#3CB187;stroke-miterlimit:10;}
	.st23{fill:#009A57;}
	.st24{fill:#FCCD37;}
	.st25{fill:#2771F0;}
</style><g><path class="st0" d="M256,13C121.8,13,13,121.8,13,256c0,49.1,14.6,94.9,39.7,133.1L21.4,495.1l110.1-30.5   c36.4,21.8,79,34.3,124.5,34.3c134.2,0,243-108.8,243-243C499,121.8,390.2,13,256,13z"/><path class="st1" d="M389.5,322.7c-0.3-3.2-2.2-6-5.1-7.3c-19.6-9-39.3-18-58.9-27c-2.2-1-4.9-0.5-6.5,1.4l-26.6,30   c-2.1,2.4-5.4,3.2-8.3,2c-13.8-5.7-32.4-15.3-51.2-31.5c-22.5-19.3-35.7-40-43.1-53.5c3.7-2.5,13.8-10,18.3-23.9   c0-0.1,0.1-0.2,0.1-0.2c2.8-8.6,2.2-17.9-0.9-26.4c-5.3-14.1-15.9-41.4-20-45.6c-0.7-0.7-1.5-1.4-1.5-1.4c-3-2.7-6.9-4.2-11-4.4   c-1.4-0.1-2.9-0.1-4.5-0.1c-4.6-0.1-8.7-0.1-11.7,0.3c-8.5,1.2-14.7,6.9-18.6,11.7c-4.7,5.7-10.3,14.2-14,25.4   c-0.3,1-0.6,1.9-0.9,2.9c-4.1,14.2-3.3,29.4,1.6,43.4c4.6,13.1,11.3,28.7,21.4,45.2c17.1,28.1,35.7,45.5,48.3,57   c14.2,13.1,31.8,29.2,59.7,42.6c25.8,12.4,49.2,17,64.9,18.9c6.4,0.6,18.2,0.7,31.7-4.4c6.2-2.4,11.4-5.3,15.6-8.4   c11.1-7.9,18.9-19.8,20.9-33.2c0-0.1,0-0.2,0-0.3C389.9,330.8,389.8,326.4,389.5,322.7z"/></g></svg></a>
        <a href="#"> 
       
        <svg class="icon" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve"><style type="text/css">
            .st0{fill:#25D366;}
	.st1{fill:#FFFFFF;}
	.st2{fill:#FF0000;}
	.st3{fill:#3D5A98;}
	.st4{fill:url(#SVGID_11_);}
	.st5{fill:url(#SVGID_12_);}
	.st6{fill:#55ADEE;}
	.st7{fill:#1E96C8;}
	.st8{fill:#A9C9DD;}
	.st9{fill:#C8DAEA;}
	.st10{fill:none;}
	.st11{fill:#4787F3;}
	.st12{fill:#DC483C;}
	.st13{fill:#FFCE43;}
	.st14{fill:#149F5C;}
	.st15{fill:#CE1E5B;}
	.st16{fill:#72C5CD;}
	.st17{fill:#DFA22F;}
	.st18{fill:#3CB187;}
	.st19{fill:#248C73;}
	.st20{fill:#392538;}
	.st21{fill:#BB242A;}
	.st22{fill:none;stroke:#3CB187;stroke-miterlimit:10;}
	.st23{fill:#009A57;}
	.st24{fill:#FCCD37;}
	.st25{fill:#2771F0;}
    </style><g><linearGradient gradientUnits="userSpaceOnUse" id="SVGID_11_" x1="256" x2="256" y1="499" y2="13"><stop offset="0" style="stop-color:#0074FF"/><stop offset="0.1286" style="stop-color:#0082FF"/><stop offset="0.5012" style="stop-color:#00A6FF"/><stop offset="0.805" style="stop-color:#00BCFF"/><stop offset="1" style="stop-color:#00C4FF"/></linearGradient><path class="st4" d="M256,13C123.5,13,16.1,114.1,16.1,238.8c0,71.1,34.9,134.4,89.4,175.8V499l79.6-44.5c22.4,6.5,46.3,10,71,10   c132.5,0,239.9-101.1,239.9-225.8S388.5,13,256,13z"/><polygon class="st1" points="292.5,241.1 230.9,176.9 99.5,315 216.9,249.1 280.1,315 410.5,176.9  "/></g></svg>        
            
        </a>

            <p id="p">Copyright &copy; 2021 All Right Rereved To Dhia'a &reg; Team</p>
    </footer>
        
              
    <script>
        
        var modal = document.getElementById('myModal');
        
        var btn = document.getElementById("btn");
        
        var span = document.getElementsByClassName("close")[0];
        
        
        btn.onclick = function() {
            modal.style.display = "block";
        }
        
        span.onclick = function() {
            modal.style.display = "none";
        }
        
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
       </script>
 
        <script>
           
            var xmodal = document = document.getElementById('xmyModal');

            var xbtn = document.getElementById("xbtn");
            
            var span = document.getElementsByClassName("xclose")[0];
           
            xbtn.onclick = function() {
            xmodal.style.display = "block";
            }
            
            
            span.onclick = function() {
            xmodal.style.display = "none";
            }
           
            window.onclick = function(event) {
            if (event.target == xmodal) {
            xmodal.style.display = "none";
            }
            }     
        </script>

    </body>
    
</html>
<?php
      }
       else{
        header("location:login.php");
}


?>
