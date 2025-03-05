<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="CSSFiles/Form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header><img src="IMG/logo.png" alt=""></header>
    <div class="form-content">
    <h1>Fill out the <span class="highlight">in-take form</span></h1>
        <div style="background-color:white;padding:20px;display:flex;justify-content:space-evenly">
            <div class="sstep">

            <div style="width:30px;height:30px" class="step active" id="step1-indicator"></div>
              <p>STEP1- <br> LETS GET TO KNOW U</p>
            </div>
            <div class="sstep">
            <div style="width:30px;height:30px" class="step" id="step2-indicator"></div>
            <p>STEP2- <br>YOUR SKILLS</p>

            </div>
        </div>
        <div id="step1">
   
<form action="" method="post"> 
    <div class="forms">       
<h2>Personal Information <hr></h2>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email" required>
    </div>
    <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input type="password" class="form-control" id="inputPassword4" placeholder="Password" required>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="DateofBirth">Date of Birth</label>
        <input type="date" class="form-control" id="DateofBirth" required>
    </div>
    <div class="form-group col-md-6">
        <label for="Nationality">Nationality</label>
        <select class="form-control" id="Nationality" required>
            <option value="">Select</option>
            <option value="US">United States</option>
            <option value="UK">United Kingdom</option>
            <option value="IN">India</option>
            <option value="AU">Australia</option>
        </select>
    </div>
</div>

<div class="form-row">
    <div style="display:flex;flex-direction:column" class="form-group col-md-6">
        <label for="Gender">Gender</label>
        <div style="display:flex;margin-top:10px;gap:20px">
            <input class="form-check-input" type="radio" name="Gender" id="male" required>
            <label style="background-color:white;width:100px;height:30px;display:flex;justify-content:center;align-items:center" class="form-check-label" for="male">
                Male
            </label>
            <input class="form-check-input" type="radio" name="Gender" id="female" required>
            <label style="background-color:white;width:100px;height:30px;display:flex;justify-content:center;align-items:center" class="form-check-label" for="female">
                Female
            </label>
        </div>
    </div>
    <div style="" class="form-group col-md-6">
        <label for="Location">Location</label>
        <div style="display:flex;gap:15px">
            <select class="form-control" id="country" required>
                <option value="">Country</option>
                <option value="US">United States</option>
                <option value="UK">United Kingdom</option>
                <option value="IN">India</option>
                <option value="AU">Australia</option>
            </select>
            <select class="form-control" id="city" required>
                <option value="">City</option>
                <option value="NY">New York</option>
                <option value="LDN">London</option>
                <option value="DEL">Delhi</option>
                <option value="SYD">Sydney</option>
            </select>
        </div>
    </div>
</div>

<h2>Education <hr></h2>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="University">University</label>
        <select class="form-control" id="University" required>
            <option value="">Select</option>
            <option value="Harvard">Harvard University</option>
            <option value="Stanford">Stanford University</option>
            <option value="MIT">MIT</option>
            <option value="Oxford">Oxford University</option>
        </select>
    </div>
    <div class="form-group col-md-6">
        <label for="Major">Major</label>
        <select class="form-control" id="Major" required>
            <option value="">Select</option>
            <option value="CS">Computer Science</option>
            <option value="EE">Electrical Engineering</option>
            <option value="ME">Mechanical Engineering</option>
            <option value="BA">Business Administration</option>
        </select>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="startdate">Start Date</label>
        <input type="date" class="form-control" id="startdate" required>
    </div>
    <div class="form-group col-md-6">
        <label for="enddate">End Date</label>
        <input type="date" class="form-control" id="enddate">
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="graduationstatus">Graduation Status</label>
        <select class="form-control" id="graduationstatus" required>
            <option value="">Select</option>
            <option value="Graduated">Graduated</option>
            <option value="Enrolled">Currently Enrolled</option>
            <option value="Dropout">Dropout</option>
        </select>
    </div>

    <div class="form-group col-md-6">
        <label for="topictitle">Topic Title</label>
        <input type="text" class="form-control" id="topictitle" placeholder="Text">
    </div>
</div>

<div class="form-group">
    <div style="display:flex;flex-direction:column" class="form-LI">    
        <label>Description</label>
        <textarea class="form-control" placeholder="Describe your experience..."></textarea>
        <div style="display:flex;flex-direction:column;gap:20px;margin-top:20px">
            <div style="margin-left: 16px" class="eductionsub">
                <input type="radio" name="currentlyAttending" id="attending">
                <label for="attending">I'm currently attending this university</label>
            </div>
            
        </div>
    </div>
</div>
<div id="education-section">
    <div class="education-block">
       
    </div>
    <div class="eductionsub">
        <a href="#" onclick="addUniversity(); return false;"><img src="IMG/plus.png" alt=""></a>
        <h6>Add another university</h6>
    </div>
</div>

<h2>Additional Information <hr></h2>

<div class="form-group">
    <div style="display:flex;flex-direction:column" class="form-LI">    
        <label>About Me</label>
        <textarea class="form-control" placeholder="Tell us about yourself..."></textarea>
    </div>
</div>


            <div class="sociallinks">
                <h4>Social Links </h4>
                <div class="Links">
                    <div class="link">
                        <div class="sublink"><img src="IMG/Instagram.png" alt=""><p>Instagram</p></div>
                        <input type="text" id="instagram"placeholder="URL">
                    </div>
                    <div class="link">
                        <div class="sublink"><img src="IMG/twitter.png" alt="" ><p>Twitter</p></div>
                        <input type="text" id="twitter"placeholder="URL">
                    </div>
                    <div class="link">
                        <div class="sublink"><img src="IMG/Website.png" alt="" ><p>Website</p></div>
                        <input type="text" id="website"placeholder="URL">
                    </div>
                </div>
            </div>

            </div>


<div id="butdiv">
 <button class="buttons" >Continue</button>
 </div>
 </div>
           <!--STEP2-->
 <div id="step2" class="hidden">
           <h2>Skills <hr></h2>


        <div class="form-row">
            
            <div class="form-group col-md-6">
                <label for="Field">Field</label>
                <select class="form-control" id="Field" required>
                    <option value="">Select</option>
                
                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="additionalskills">Additional Skills</label>
                <select class="form-control" id="additionalskills" required>
                    <option value="">Select</option>
                </select>
            </div>
        </div>

        <div class="skills-container">
        <h4>Your Main Skills</h4>
        <input type="text" class="form-control" id="skillInput" placeholder="Enter a skill and press Enter">
        <div id="skillsList"></div>
    </div>

    <h2>Work Experiance <hr></h2>

<div class="form-row">
<div class="form-group col-md-6">
        <label for="companyname">Company Name</label>
        <input type="text" class="form-control" id="companyname" placeholder="Text">
    </div>

    <div class="form-group col-md-6">
        <label for="position">Position</label>
        <input type="text" class="form-control" id="position" placeholder="Text">
    </div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
        <label for="typeofemployment">Type of Employment</label>
        <input type="text" class="form-control" id="typeofemployment" placeholder="Text">
    </div>

    <div class="form-group col-md-6">
        <label for="startdatesteptwo">Start Date</label>
        <input type="date" class="form-control" id="startdatesteptwo" required>
    </div>
</div>

<div class="form-row">

    <div class="form-group col-md-6">
        <label for="enddatesteptwo">End Date</label>
        <input type="date" class="form-control" id="enddatesteptwo">
    </div>

    <div style="" class="form-group col-md-6">
        <label for="Location">Location</label>
        <div style="display:flex;gap:15px">
            <select class="form-control" id="country" required>
                <option value="">Country</option>
                <option value="US">United States</option>
                <option value="UK">United Kingdom</option>
                <option value="IN">India</option>
                <option value="AU">Australia</option>
            </select>
            <select class="form-control" id="city" required>
                <option value="">City</option>
                <option value="NY">New York</option>
                <option value="LDN">London</option>
                <option value="DEL">Delhi</option>
                <option value="SYD">Sydney</option>
            </select>
        </div>
    </div>

</div>


<div class="form-group">
    <div style="display:flex;flex-direction:column" class="form-LI">    
        <label>Description</label>
        <textarea class="form-control" placeholder="Describe your experience..."></textarea>
        <div style="display:flex;flex-direction:column;gap:20px;margin-top:20px">
            <div style="margin-left: 16px" class="eductionsub">
                <input type="radio" name="currentlyAttending" id="attending">
                <label for="attending">I'm currently attending this university</label>
            </div>
          
        </div>
    </div>
</div>
<div id="employment-section">
    <div class="employment-block">
        <!-- Existing content here -->
    </div>
    <div class="eductionsub">
        <a href="#" onclick="addEmployment(); return false;"><img src="IMG/plus.png" alt=""></a>
        <h6>Add another position</h6>
    </div>
</div>
<h5>Certificates <hr></h5>

<div class="attach-certificate">
    <input type="file" id="certificateInput" class="file-input" hidden>
    <label for="certificateInput" class="certificate-label">
        <img src="IMG/Attach.png" alt="Attach" class="attach-icon">
        Attach Certificate
    </label>
    <p class="file-name"></p>
</div>



            <!-- Back and Submit Buttons -->
            <div style="margin-top: 20px; display:flex">
                <button class="buttons" onclick="prevStep()">Back</button>
                <button class="buttons" type="submit">Submit</button>
            </div>
        </div>
    </div>
</form>






    </div>





    
     

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="JS-Files/Form.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5Sr5J6TA6LgOgHdrY6TVQixxU94dDZq0s2f5p" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>


</body>
</html>