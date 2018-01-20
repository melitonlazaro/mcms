<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="image/png" href="<?= base_url();?>/Public/images/icon.png"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>/Public/css/style.css"></link>
    <link rel="stylesheet" href="<?= base_url();?>/Public/font-awesome/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/Public/font-awesome/css/font-awesome.min.css">
</head>
<body>

  <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>  
      <div class="navi"></div>
      <a href="Dashboard.html"><i class="fa fa-home navli" aria-hidden="true"></i>&nbsp; Dashboard</a>
      <div class="accordion active"><i class="fa fa-files-o" aria-hidden="true"></i> Records <i class="fa fa-caret-down" style="float: right; padding-right: 90px;" aria-hidden="true"></i></div>
          <div class="drpnav">
          <a href="Record.html"><i class="fa fa-archive" aria-hidden="true"></i>&nbsp; Case</a>
          <a href="#"><i class="fa fa-archive" aria-hidden="true"></i>&nbsp; Patient</a>
          <a href="#"><i class="fa fa-archive" aria-hidden="true"></i>&nbsp; Infant</a>
          </div>
      <a href="#"><i class="fa fa-archive" aria-hidden="true"></i>&nbsp; Inventory</a>
  </div>


<div class="header">
    <span onclick="openNav()"><i class="fa fa-bars manage" aria-hidden="true"></i></span> PATIENT

</div>

<section id="main-content">
<div class="c-content">

<h3><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Records</h3>

<div class="tab">
  <button class="tablinks" onclick="opentab(event, 'Profiling')"><i class="fa fa-folder" aria-hidden="true"></i> Profiling</button>
 
</div><br>

<div id="Profiling" >
    <i class="fa fa-user"></i> Patient Profile<br>
    <table class="pro">
  <tr>
    <?php echo form_open('Prms/process_profiling'); ?>
    <th><input type="text" class="ans-p" name="surname" placeholder="Surname"></th>
    <th><input type="text" class="ans-p" name="given_name" placeholder="Given Name"></th>
    <th><input type="text" class="ans-p" name="middle_initial" placeholder="Middle Initial"</th>
  </tr>
  <tr>
    <th><input type="text" class="ans-p" name="occupation" placeholder="Occupation"></th>
    <th><input type="date" class="ans-p" name="date_of_birth"></th>
    <th><input type="text" class="ans-p" name="contact_num" placeholder="Contact Number"></th>
  </tr>
  <tr>
    <th><input type="text" class="ans-p" name="street_no" placeholder="Street Number"></th>
    <th><input type="text" class="ans-p" name="barangay" placeholder="Barangay"></th>
    <th><input type="text" class="ans-p" name="city" placeholder="City"></th>
  </tr>
    </table><br>
    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> In case of Emergency<br>
    <table class="pro">
  <tr>
    <th><input type="text" class="ans-p" name="emergency_contact" placeholder="Emergency Contact"><br>
    <th><input type="text" class="ans-p" name="emergency_num" placeholder="Emergency Contact Number"><br>
    <th><input type="text" class="ans-p" name="emergency_contact_address" placeholder="Emergency Contact Address"></th>
  </tr>
    </table>

    <table class="pro">
    <tr><th><input class="btn-l teal-l" type="submit" value="Submit and proceed to Medical History"></th></tr>
    </table>

  </form>
</div>



<script>

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

function opentab(evt, tab) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tab).style.display = "block";
    evt.currentTarget.className += " active";
}

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

</script>




</div>


</section>
     
</body>
</html> 
