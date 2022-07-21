<?php
    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: index.php");
        die();
    }

    include 'config.php';

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);

        echo "Welcome " . $row['name'] . " <a href='logout.php'>Logout</a>";
    }


?>

<!DOCTYPE html>
<html>
  <head>
    <title>user</title>
    <link rel="stylesheet" href="./css/welcome.css">
  </head>
  
   <body>
       <div class="steps">
           <div class="step1 active circle">
                  <div class="circle">1</div>
                  <i class = "icon">icon</i>
                  <i>details</i>
           </div>

           <div class="step2 circle ">
           <div class="circle">2</div>
                  <i class = "icon">icon</i>
                  <i>QMS</i>
           </div>

           <div class="step3 circle">
           <div class="circle">3</div>
                  <i class = "icon">icon</i>
                  <i>Programme <br> Scope</i>
           </div>

           <div class="step4 circle">
           <div class="circle">4</div>
                  <i class = "icon">icon</i>
                  <i>ETD <br>staff</i>
           </div>

           <div class="step5 circle">
           <div class="circle">5</div>
                  <i class = "icon">icon</i>
                  <i>Satellite <br>Offices & Delivery <br>Sites</i>
           </div>

           <div class="step6 circle">
           <div class="circle">6</div>
                  <i class = "icon">icon</i>
                  <i>Documents <br> Information</i>
           </div>

           <div class="step7 circle">
           <div class="circle">7</div>
                  <i class = "icon">icon</i>
                  <i>Verify</i>
           </div>
       </div>

       
            <p>Enter the details of the training provider. Click on Save to save the changes that you have made. Click on Edit to edit an already existing record.</p>
           
                <div class="buttonsGroup">
                  <button class="save btn">Save</button>
                  <button class="edit btn">Edit</button>
                </div>


                <form action="" id = "providerForm">
                  <!-- start provider id section -->
                    <div class="providerId">
                        <div>
                         <label for="pid">Provider Id:</label>
                          <input type="text" name="pid" id="pid" readonly>
                       </div>

                         <div>
                          <label for="pCode">Provider Code:</label>
                          <input type="text" name="pCode" id="pCode" readonly>
                         </div>

                         <div>
                          <label for="egn">Entity Registration No.:</label>
                          <input type="text" name="egn" id="egn" >
                        </div>
                    </div>
                    <!-- end provider id section-->

                    <!-- start provider details -->
                        <div class="providerDetails">
                          <div>
                            <label for="pName">Provider Name:</label>
                            <input type="text" name="pName" id="pName">
                          </div>

                          <div>
                          <label for="tName">Trading Name:</label>
                          <input type="text" name="tName" id="tName">
                          </div>

                          <div>
                          <label for="sps">Select Primary SETA</label>
                          <select name="sps" id="sps">
                              <option value="test">test</option>
                              <option value=""></option>
                              <option value=""></option>  
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                          </select>
                           </div>

                           <div>
                          <label for="proofAcc">Proof of Primary Accreditation and RL</label>
                          <input type="file" name="proofAcc" id="proofAcc">
                          </div>
                        </div>
                        
                          <!-- raring sec -->
                          <div class="rating">
                             <table>
                              <tr>
                                <td> <label for="dhet">Registered with DHET:</label></td>
                                <td>   <input type="text" name="dhet" id="dhet"></td>
                                
                                <td>  <label for="dhetRegNum">DHET Registration No.:</label></td>
                                <td><input type="text" name="dhetRegNum" id="dhetRegNum"></td>
                                
                              </tr>

                              <tr>
                                 <td> <label for="dhetSDate">DHET Registration Start Date</label></td>
                                 <td> <input type="date" name="dhetSDate" id="dhetSDate"></td>

                                 <td><label for="dhetEDate">DHET Registration End Date</label></td>
                                 <td><input type="date" name="dhetEDate" id="dhetEDate"></td>
                              </tr>

                              <tr>
                                 <td><label for="BBBEE">BBBEE Rating:</label></td>
                                 <td>
                                  <select name="BBBEE" id="BBBEE">
                                    <option value="null">--select--</option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                 </select>
                                </td>

                                 <td> <label for="BBBEErec">BBBEE Recognition:</label></td>
                                 <td><input type="number" name="BBBEErec" id="BBBEErec"></td>
                              </tr>

                              <tr>
                                <td> <label for="nbFullTimrStuff">No. Full Time Staff:</label></td>
                                <td> <input type="number" name="nbFullTimrStuff" id="nbFullTimrStuff"></td>

                                <td><label for="contStaff">No. Contracted Staff</label></td>
                                <td> <input type="number" name="contStaff" id="contStaff"></td>
                              </tr>

                              <tr>
                                <td><label for="mpo">Main Province Of Operation</label></td>
                                <td>
                                  <select name="mpo" id="mpo">
                                       <option value="null">--select--</option>
                                       <option value=""></option>
                                       <option value=""></option>
                                       <option value=""></option>
                                       <option value=""></option>
                                       <option value=""></option>
                                       <option value=""></option>
                                       <option value=""></option>
                                       <option value=""></option>
                                       <option value=""></option>
                                  </select>
                                </td>
                              </tr>
                             </table>
                            </div>
                          <!-- end rating sec -->
                       
                            <!-- start longitude and latitude -->
                              <div class="location">
                                   <table class = "tblLocation">
                                       <tr class = "latitude">
                                          <td><label for="latDegree">Latitude Degree: </label></td>
                                          <td><input type="number" name="latDegree" id="latDegree"></td>

                                          <td><label for="latMin">Latitude Minutes: </label></td>
                                          <td><input type="number" name="latMin" id="latMin"></td>

                                          <td><label for="latSec">Latitude Seconds: </label></td>
                                          <td><input type="number" name="latSec" id="latSec"></td>
                                       </tr>

                                       <tr class = "longitude">
                                          <td><label for="latDegree">Longitude Degrees: </label></td>
                                          <td><input type="number" name="longDegree" id="longDegree"></td>

                                          <td><label for="latMin">Longitude Minutes: </label></td>
                                          <td><input type="number" name="longMin" id="longMin"></td>

                                          <td><label for="latSec">Longitude Seconds: </label></td>
                                          <td><input type="number" name="longSec" id="longSec"></td>
                                       </tr>
                                   </table>
                              </div>
                            <!-- end logitude and latitude -->
                        </div>
                    <!-- end provider details -->
                </form>
               
          
   </body>
</html>


