<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        body::-webkit-scrollbar {
            display: none;
        }
        main {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .googleimg {
            width: 20px;
            height: 20px;
        }
        .google-btn {
            background-color: white;
            color: rgba(10, 102, 194, 1);
            border: none;
            padding: 8px 12px;
            margin: 5px 0;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .google-btn:hover {
            background-color: #357ae8;
            color: white;
        }
        .Google-div {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            font-size: larger;
            font-weight: bold;
            height: 20px;
        }
        form {
            margin-top: 10px;
            width: 100%;
        }
        label {
            display: block;
            margin-bottom: 3px;
            font-size: 16px; 
        }
        .tab {
            display: flex;
            width: 100%; /* Full width */
            overflow-x: auto; /* Scroll on small screens */
            justify-content: center;
        }
        .tablinks {
            border: none;
            font-size: 16px; 
            color: rgba(10, 102, 194, 1);
            font-weight: bold;
            height: 40px; 
            padding: 10px 20px; 
            cursor: pointer; 
            display: inline-block; 
            margin-right: 5px;
        }
        .tabcontent {
            background-color: white; 
    padding: 20px;
    width: 100%;
    max-width: 500px;
    margin: auto;
    height: 550px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    margin: auto;
    box-sizing: border-box;
        }
        .tablinks.active, .tablinks:hover {
    background-color: #ddd; 
    border-bottom: 1px solid white; 
}
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px; 
            margin-bottom: 10px; 
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px; 
        }
        #contin {
            background-color: rgba(10, 102, 194, 1);
            color: white;
            border: none;
            padding: 8px 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            height: 50px; /* Adjusted height */
            font-size: larger;
        }
        #contin:hover {
            background-color: #0056b3;
        }
        .Already {
            display: flex;
            gap: 5px;
            font-size: 14px; /* Reduced font size for better fit */
        }
        label{
    color: rgba(81, 91, 111, 1);
    
  
}
        a {
            color: #007BFF;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        p {
            font-size: 0.85em; /* Adjusted font size */
            color: #666;
            line-height: 1.4; /* Adjusted line height */
        }
        h1, #or {
            text-align: center;
            font-size: 18px; /* Adjusted font size */
        }
        @media (max-width: 768px) {
            .tablinks, .google-btn {
                padding: 8px 10px;
                font-size: 14px;
            }
            h1, p, label {
                font-size: 14px;
            }
            .Google-div p {
                font-size: 16px;
            }
           .imgcenter {
        display: none; 
    }
    .tabcontent{
        margin-top:30px;
     
    }

   
        }
    </style>
</head>
<body>
    <header>
        <img class="imgheader" src="IMG/logov21.png" style="margin-left:100px; margin-top:10px; height:40px" alt="Logo">
    </header>
    <main>
        <img class="imgcenter" style="width:400px; height:550px; " src="IMG/Signup.png" alt="">
        <div class="Signupdiv">
           
            <div id="JobSeeker" class="tabcontent">
            <div class="tab">
                <button class="tablinks" onclick="openTab(event, 'JobSeeker')">Job Seeker</button>
                <button class="tablinks" onclick="openTab(event, 'Company')">Company</button>
            </div>
                <h1>Get more opportunities</h1>
                <button class="google-btn">
                    <div class="Google-div">
                        <img class="googleimg" src="IMG/google.png" alt="Google logo">
                        <p style="font-size: 20px;color:rgba(10, 102, 194, 1);">SignUp with Google</p>
                    </div>
                </button>
                <p id="or" style="font-size: 18px">-------  Or SignUp with email  ------- </p>
                <form action="#" method="POST">
                    <label for="fullname">Full name</label>
                    <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter email address" required>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter password" required>
                    <button type="submit" id="contin">Continue</button>
                </form>
                <div class="Already">
                    <label for="" style="font-size:16px;margin-top:5px">Already have an account?</label> <a href="Login.php" style="font-size:16px;font-weight:bold;margin-top:6px"> Login</a>
                </div>
                <p style="font-size:12px">By clicking 'Continue', you acknowledge that you have read <br> and accept the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.</p>
                <a href="" style=""><img src="IMG/arrow.png" alt=""></a>
            </div>
            <div id="Company" class="tabcontent">
            <div class="tab">
                <button class="tablinks" onclick="openTab(event, 'JobSeeker')">Job Seeker</button>
                <button class="tablinks" onclick="openTab(event, 'Company')">Company</button>
            </div>
                <h1>Get more opportunities</h1>
                <button class="google-btn">
                    <div class="Google-div">
                        <img class="googleimg" src="IMG/google.png" alt="Google logo">
                        <p style="font-size: 20px;color:rgba(10, 102, 194, 1);">SignUp with Google</p>
                    </div>
                </button>
                <p id="or" style="font-size: 18px">-------  Or SignUp with email  ------- </p>
                <form action="#" method="POST">
                    <label for="Cname">Company name</label>
                    <input type="text" id="Cname" name="Cname" placeholder="Enter Company name" required>
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter email address" required>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter password" required>
                    <button type="submit" id="contin">Continue</button>
                </form>
                <div class="Already">
                <label for="" style="font-size:16px;margin-top:5px">Already have an account?</label> <a href="Login.php" style="font-size:16px;font-weight:bold;margin-top:6px"> Login</a>
                </div>
                <p style="font-size:12px;margin-buttom:px">By clicking 'Continue', you acknowledge that you have read <br> and accept the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.</p>
                <a href="" style=""><img src="IMG/arrow.png" alt=""></a>
            </div>
        </div>
    </main>
    <script>
        function openTab(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelector('.tablinks').click(); // Open the first tab by default
        });
    </script>
</body>
</html>
