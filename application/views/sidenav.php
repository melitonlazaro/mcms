<html>
<head>
<style type="text/css">

.sidenav 
{
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1032;
    top: 0;
    left: 0;
    background-color: #343d46;
    color:white;
    overflow-x: hidden;
    transition: 0.3s;
    padding-top: 60px;
    opacity: 0.95;
}

.sidenav a 
{
    padding: 8px 8px 8px 8px;
    text-decoration: bold;
    font-family: Arial;
    font-size: 18px;
    color: #818181;
    display: block;
    transition: 3s.	0;
}

.sidenav a:hover, .offcanvas a:focus{
    color: #33cc00;
}

.closebtn {
    position: absolute;
    top: 20px;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
#sidenav_title
{
  font-size: 20px;
  font-family: Arial;
  background-color: #33cc00;
}
#ergo_logo
{
  position: relative;
  top: -59%;
  left:10%;
}

</style>

</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top" id="admin_nav">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    
      <a class="navbar-brand" onclick="openNav()" >
      <p ><i class="fa fa-bars fa-5" style="cursor:pointer" id="hamburger_toggle"></i></p></a>
 
    </div>
</div>
</nav>
</body>

<div id="mySidenav" class="sidenav">
<br>
  <div>
    <center> 

      <p><img src="<?php echo base_url();?>/Public/images/menu.png" height="80px" width="80px"></p>
    </center>
  </div>
  <div class="container">

  	<p class="closebtn" onclick="closeNav()" style="cursor:pointer">&times;</p>
  </div>
  <a href="<?php echo base_url();?>Main/dashboard"><i class="fa fa-dashboard"> </i>&nbsp Dashboard</a>
  <a href="<?php echo base_url();?>Prms/case_list" ><i class="fa fa-plus-square"> </i>&nbsp Maternity Case</a>
  <a href="<?php echo base_url();?>Prms/Patient_list"><i class="fa fa-user-o"></i>&nbsp Patients</a>
  <a href="<?php echo base_url();?>Prms/Infant_list"><i class="fa fa-user"></i>&nbsp Infants</a>
  <a href="#"><i class="fa fa-pencil-square"></i>&nbsp E-Prescription</a>
  <a href="#"><i class="fa fa-file"></i>&nbsp Report</a>
  <a href="#" ><i class="fa fa-cog"></i>&nbsp Settings</a>
  <a href="<?php echo base_url();?>/Main/logout"><i class="fa fa-sign-out"></i>&nbsp Logout
  </a>

</div>



</html>
<script>

function openNav() {
    document.getElementById("mySidenav").style.width = "220px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

</script>