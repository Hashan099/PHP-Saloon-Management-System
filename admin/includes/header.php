<div class="sticky-header header-section " style="background-color: #D2AACF;">
      <div class="header-left" >
        <!--toggle button start-->
        <button id="showLeftPush"style="background-color: #D2AACF;"><i class="fa fa-bars"></i></button>
        <!--toggle button end-->
        <!--logo -->
        <div class="logo" style="background-color: #D2AACF;">
          <a href="dashboard.php">
            <h1>Salon Liya Soba</h1>
            <span>AdminPanel</span>
          </a>
        </div>
        <!--//logo-->
       
       
        <div class="clearfix"> </div>
      </div>
      <div class="header-right">
        <div class="profile_details_left"><!--notifications of menu start -->
          <ul class="nofitications-dropdown">
            <?php
            $ret1=mysqli_query($con,"select ID,Name from  tblappointment where Status=''");
            $num=mysqli_num_rows($ret1);

            ?>   
          
          </ul>
          <div class="clearfix"> </div>
        </div>
        <!--notification menu end -->
        <div class="profile_details">  
        <?php
          $adid=$_SESSION['bpmsaid'];
          $ret=mysqli_query($con,"select AdminName from tbladmin where ID='$adid'");
          $row=mysqli_fetch_array($ret);
          $name=$row['AdminName'];

          ?> 
          <ul>
            <li class="dropdown profile_details_drop">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <div class="profile_img"> 
                  <span class="prfil-img"><img src="images/salon_logo.png" style="border-radius:50%;" alt="" width="50" height="60">
                 
                  <i class="fa fa-angle-down lnr"></i>
                  <i class="fa fa-angle-up lnr"></i>
                  <div class="clearfix"></div>  
                </div>  
              </a>
              <ul class="dropdown-menu drp-mnu">
                <li> <a href="change-password.php"><i class="fa fa-cog"></i> Settings</a> </li> 
                <li> <a href="admin-profile.php"><i class="fa fa-user"></i> Profile</a> </li> 
                <li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
              </ul>
            </li>
          </ul>
        </div>  
        <div class="clearfix"> </div> 
      </div>
      <div class="clearfix"> </div> 
    </div>