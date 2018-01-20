<?php
	if(!empty($patient_info ))  
 { 
      $output = '';  
      foreach($patient_info as $pi)
      {
        $output .= '
                    <div class="col-md-4">
                      <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Last Name" value="'.$pi->last_name.'" readonly>
                    </div>
                    <div class="col-md-4">
                      <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" placeholder="First Name"  value="'.$pi->given_name.'" readonly>
                    </div>
                    <div class="col-md-4">
                      <label for="middle_initial">Middle Initial</label>
                      <input type="text" name="middle_initial" id="middle_initial" class="form-control" placeholder="Middle Initial" value="'.$pi->middle_initial.'" readonly>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-4">
                      <label for="occupation">Occupation</label>
                        <input type="text" class="form-control" id="occupation" placeholder="Occupation" value="'.$pi->occupation.'" readonly>
                    </div>
                    <div class="col-md-4">
                      <label for="date_of_birth">Date of Birth</label>
                        <input type="text" class="form-control" id="date_of_birth" placeholder="Date of Birth" value="'.$pi->date_of_birth.'" readonly>
                    </div>
                    <div class="col-md-4">
                      <label for="contact_num">Contact Number</label>
                        <input type="text" class="form-control" id="contact_num" placeholder="Contact Number" value="'.$pi->contact_num.'" readonly>
                    </div>
                  </div>
                  <h3>Address</h3>
                  <div class="row">
                    <div class="col-md-4">
                      <label for="street_no">Street Number</label>
                        <input type="text" class="form-control" id="street_no" value="'.$pi->street_no.'" placeholder="Contact Number" readonly>
                    </div>
                    <div class="col-md-4">
                      <label for="barangay">Barangay</label>
                        <input type="text" class="form-control" id="barangay" value="'.$pi->brgy.'" placeholder="Barangay" readonly>
                    </div>
                    <div class="col-md-4">
                      <label for="city">City</label>
                        <input type="text" class="form-control" id="city" value="'.$pi->city.'" placeholder="City" readonly>
                    </div>
                  </div>
                  <h3>Emergency Contact Information</h3>
                  <div class="row">
                    <div class="col-md-4">
                      <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" value="'.$pi->emergency_contact_name.'" placeholder="Name" readonly>
                    </div>
                    <div class="col-md-4">
                      <label for="emergency_contact_number">Emergency Contact Number</label>
                        <input type="text" class="form-control" id="emergency_contact_number" value="'.$pi->emergency_contact_num.'" placeholder="Emergency Contact Number" readonly>
                    </div>
                    <div class="col-md-4">
                      <label for="emergency_contact_address">Emergency Contact Address</label>
                        <input type="text" class="form-control" id="emergency_contact_address" value="'.$pi->emergency_contact_address.'" placeholder="Emergency Contact Address" readonly>
                    </div>
                     ';
      }                    
         echo $output; 

 }  
 
 else  
 {  
      echo 'Data Not Found';  
 } 