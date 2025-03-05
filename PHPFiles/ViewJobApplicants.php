<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Applicants</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:
                #ffffff;
        }

        .sidebar {
            width: 250px;
            background: #EDF3FF;
            position: fixed;
            height: 100vh;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);

        }


        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 200px;
        }

        .menu {
            list-style: none;
            padding: 0;
            margin: 15px;
        }

        .menu-item {
            display: flex;
            align-items: center;
            padding: 12px;
            color: #7C8493;
            text-decoration: none;
            font-size: 16px;
            border-radius: 8px;
            margin-bottom: 5px;
            transition: 0.3s;
            font-family: 'Inter', sans-serif;
            
        }

        .menu-item:hover,
        .menu-item.active {
            color: #0A66C2;
            background: #e1e6f0;
            font-weight: bold;
        }

        .menu-item img {
            width: 20px;
            margin-right: 10px;
        }

        .notification {
            background: #0A66C2;
            color: white;
            font-size: 12px;
            padding: 3px 8.5px;
            border-radius: 50%;
            margin-left: auto;
        }

        .logout {
            padding-top: 10px;
            color: #F4A120;
            border-radius: 8px;
            text-align: left;
            margin-right: 20px;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
        }

        .logout img {
            position: relative;
            left: 20px;
        }

        .logout p {
            position: relative;
            left: 60px;
            bottom: 23px;
            
        }
        

        .profile {
            display: flex;
            align-items: center;
            padding: 10px;
            position: relative;
            margin-top: 65%;
            border-bottom: 2px solid #ddd;
        }

        .profile img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }


        .profile-info {
            font-size: 15px;
            color: #333;
            font-family: 'Epilogue', sans-serif;
        }

        .profile-info strong {
            display: block;
        }

        .main-content {
            flex: 1;
            margin-left: 290px;
            transition: margin-left 0.3s ease-in-out;
            display: flex;
            flex-direction: column;
            width: calc(100% - 290px);
        }

        /* Header */
        .header {

            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 25px 25px;
            background-color: white;
            border-bottom: 1px solid #ddd;
        }

        .header-title {
            font-size: 20px;
            font-weight: bold;
            color: #1a202c;
            display:flex;
            gap:20px
        }

        h1{
            color:rgba(37, 50, 75, 1);
        }
        .header-right {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .back-home {
            text-decoration: none;
            color: #0A66C2;
            font-size: 14px;
            font-weight: bold;
            border: 1px solid #D6DDEB;
            padding: 5px 10px;
        }

        .notification-icon {
            width: 30px;
            height: 30px;
            position: relative;
            margin-top:23px;
        }

        .notification-icon img {
            width: 90%;
        }

        .notification-dot {
            width: 6px;
            height: 6px;
            background-color: #FF6550;
            border-radius: 50%;
            position: absolute;
            top: 2px;
            right: 2px;
        }

        .pagination-btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            background-color: #e0e7ff;
            border-radius: 0.375rem;
            text-decoration: none;
            margin-right: 0.5rem;
        }

        .pagination-btn.active {
            background-color: #6366f1;
            color: white;
        }

        .search-filter-container {
    display: flex;
    align-items: center;
    border: 1px solid #ccc;
    padding: 8px;
    border-radius: 4px;
    width: 330px; /* Adjust width as needed */
    margin-left: 600px;
    margin-buttom: 150px
  }

  .search-input {
    flex-grow: 1;
    border: none;
    outline: none;
    padding: 4px;
    font-size: 16px;
    color: #888; /* Light gray for placeholder text */
  }

  .search-icon {
    margin-right: 8px;
       width:30px;
       height:30px;
  }

  .filter-button {
    background: none;
    border: none;
    cursor: pointer;
    font-size: 16px;
    color: #004d99; /* Blue for the filter button */
    display: flex;
    align-items: center;
    margin-right:20px;
  }

  .filter-icon {
    margin-right: 4px;

  }

  .tab-content {
    display: none; /* Hide all tab content by default */
}

/* Active tab content */
.active-tab {
    display: block;
}


      

       

        .Job-Discription{
           margin-top:50px;
            display:flex;
            gap:20px;
        }
        .Job-Discription h2{
            color: rgba(37, 50, 75, 1);
            font-weight:bold;
            font-size:larger;
        }
        .JobDiscription p{
            color: rgba(81, 91, 111, 1);
        }


       .content{
        display:flex;
        flex-wrap:wrap;
        flex-direction:column;
        gap:40px;
        
       }
        .ulreq li{
display:flex;
gap:10px
        }
        .ulreq li img{
            width: 30px;
            height:30px;
            margin-top:8px
        }

        .subcontent{
            display:flex;
        flex-wrap:wrap;
        flex-direction:column;
        }

        .jobdetails {
            background: white;
           
            border-radius: 8px;
            display:flex;
            flex-direction:column;
        }
        .jobdetails h2 {
            color: rgba(37, 50, 75, 1);
            font-size: 22px;
        }
        .details-list {
            list-style: none;
            padding: 0;
            margin: 20px 0;
            display:flex;
            flex-direction:column;
            flex-wrap:wrap;
            margin-right:300px;
        }
        .details-list li {
            margin-bottom: 10px;
            display: flex;
            justify-content: space-around;
            color: rgba(81, 91, 111, 1);
        
        }
        .details-list span {
            font-weight: bold;
        }
        .tag {
            background-color: #e0e0e0; /* Light gray background */
            color: #333; /* Dark text color for contrast */
            border-radius: 15px; /* Rounded corners for the tag */
            padding: 5px 15px; /* Top and bottom, Left and right padding */
            display: inline-block; /* Necessary for inline flow and spacing */
            margin: 5px; /* Space between tags */
            font-size: 14px; /* Text size */
            font-weight: bold; /* Bold text for the tag */
        }
        .section-title {
            color: #333;
            margin-top: 20px;
            margin-bottom: 10px;
            font-size: 18px;
           
        }
       .RSTAGS{
            display:flex;
           flex-direction:column;
            flex-wrap:wrap;
        }
        .Job-Discriptiontwo{
            margin-left:300px;
        }
        .RSTAGS .tag{
            color: BLUE;
            background-color:rgba(248, 248, 253, 1);
        }

        .perks-section {
    padding: 50px 100px;
    width:100%;
           
            height:fit-content;
            padding:30px;
            padding-left:50px;


}

.perks-section h2 {
    font-size: 32px;
    font-weight: bold;
    margin-bottom: 10px;
    color:rgba(37, 50, 75, 1);
}

.perks-section p {
    font-size: 16px;
    margin-bottom: 30px;
}

.perks-container {
    display: flex;
    flex-wrap:wrap;
    grid-template-columns: repeat(4, 1fr); /* 4 items per row */
    gap: 30px;
    margin-top: 20px;
}

.perk-item {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    text-align: left;
    max-width: 250px;
}

.perk-item img {
    width: 40px;
    height: 40px;
    margin-bottom: 10px;
}

.perk-item h4 {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 5px;
    color:rgba(37, 50, 75, 1);
}

.perk-item p {
    font-size: 14px;
    color: #555;
}
        @media (max-width: 1024px) {
            .sidebar {
                width: 250px;
            }

            .main-content {
                margin-left: 270px;
                width: calc(100% - 290px);
            }

            .header-title {
                margin-left: 20px;
            }

            .Job-Discriptiontwo{
            margin-left:200px;
        }
        .content{
        width:400px;
        
       }
        .subcontent{
         width:200px;
        }
        }

        .divider {
            display: none;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
                padding: 15px;
            }

            .content{
        width:400px;
        
       }
            .main-content {
                margin-left: 210px;
                width: calc(100% - 240px);
            }

            .Job-Discriptiontwo{
            margin-left:100px;
        }

            .header-title {
                margin-left: 45px;
            }
            .subcontent{
         width:200px;
        }
        }

        @media (max-width: 480px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                box-shadow: none;
                display: flex;
                flex-direction: column;
                align-items: center;
                /* Ensures items are centered */
            }

            .sidebar .menu {
                display: flex;
                /* Allow menu items to be visible */
                flex-direction: column;
                width: 100%;
            }

            .main-content {
                margin-left: 0;
                width: 100%;
            }


            .header-title {
                position: relative;
                top: -10px;
                width: 0%;
            }

            .header-right {
                position: absolute;
                right: 0;
                transform: translateY(-20%);
                color: white;
            }

            .back-home {
                width: 40%;
            }
        
            .profile img {
                margin-bottom: 5px;
            }
        }
        

        .menu-toggle,
        .close-btn {
            display: none;
        }






        /* Responsive Sidebar Behavior */
        @media (max-width: 768px) {
            .divider {
                display: none;
            }

            /* Show the menu button on small screens */
            .menu-toggle {
                display: block;
                position: fixed;
                top: 15px;
                left: 15px;
                background-color: #0A66C2;
                color: white;
                border: none;
                padding: 10px 15px;
                font-size: 18px;
                cursor: pointer;
                z-index: 1001;
            }

            /* Sidebar is hidden by default when the screen is small */
            .sidebar {
                width: 250px;
                height: 100vh;
                position: fixed;
                left: -290px;
                transition: left 0.3s ease-in-out;
                z-index: 1000;
            }

            /* Sidebar appears when active */
            .sidebar.active {
                left: 0;
                box-shadow: 5px 0 10px rgba(0, 0, 0, 0.2);
            }

            /* Show close button inside the sidebar */
            .close-btn {
                display: block;
                background: none;
                border: none;
                color: #333;
                font-size: 30px;
                cursor: pointer;
                position: absolute;
                top: 5px;
                right: 5px;
            }

            /* Hide sidebar from main content */
            .main-content {
                margin-left: 0;
                width: 100%;
            }
        }
    </style>
</head>
<body>
    


  <!-- Menu Toggle Button (Hidden in Full Screen) -->
  <button class="menu-toggle" onclick="toggleSidebar()">☰</button>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Close Button (Only Visible on Small Screens) -->
    <button class="close-btn" onclick="toggleSidebar()">×</button>

    <div class="logo">
        <img src="IMG/aspirepath.png" alt="ASPIREPATH">
    </div>
    <ul class="menu">
        <li><a href="dashboard.html" class="menu-item active"><img src="IMG/dashboard.png" alt="">Dashboard</a></li>
        <li><a href="#" class="menu-item"><img src="IMG/messages.png" alt="">Messages
             <span class="notification">1</span></a>
        </li>
        <li><a href="SavedJobsApplicants.html" class="menu-item"><img src="IMG/saved.png" alt="">Company Profile</a></li>
        <li><a href="ApplicationsApplicant.html" class="menu-item"><img src="IMG/ALLAPP.png" alt="">
              All Applicants</a></li>
        <li><a href="MatchedJobsApplicatns.html" class="menu-item "><img src="IMG/JOBLISTING.png" alt="">Job
                Listing</a></li>
       
        <li><a href="" class="menu-item"><img src="IMG/ALLAPP.png" alt="">Suggested Candidates</a></li>
        <li><a href="MyProfileApplicant.html" class="menu-item"><img src="IMG/settings.png" alt="">Settings</a></li>
    </ul>
   
    <div class="logout" onclick="openModal()">
        <img src="IMG/logout.png" alt="">
        <p>Logout</p>
    </div>
    
</div>

<div class="main-content">

    <!-- Header -->
    <div class="header">
        <div class="header-title">
            <img src="IMG/Company2.png" alt="">
            <div>
                <p style="color:rgba(81, 91, 111, 1)">Company</p>
                <p class="Company-name">Nomad</p>
            </div>
        </div>
        <div class="header-right">
            
            <div class="notification-icon">
                <img  src="IMG/notification.png" alt="Notifications">
                <div class="notification-dot"></div>

            </div>
            <button style=" background-color: rgba(10, 102, 194, 1);
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
    height: 50px;
    margin-top: 20px;
    font-size: x-large; 
    display:flex;
    align-items:center;"> <img src="IMG/plustwo.png" alt="">Post a Job</button>
        </div>
    </div>










<div class="bg-gray-100">

<div class="container mx-auto p-6 bg-white shadow-lg rounded-lg">
        
        <!-- Header Section -->
        <div  class="flex justify-between items-center mb-6">
            <div style="display:flex;gap:20px" class="text-2xl font-semibold">
                <img src="IMG/arrow.png" alt="">
                <div style="display:flex;flex-direction:column;gap:20x">
            <h1>Social Media Assistant</h1>
                <p class="text-sm text-gray-600">Design - Full-Time</p>
                </div>
            </div>

            
        </div>
        <div class="flex items-center space-x-4">
    <button class="tab-button text-sm px-4 py-2 text-gray-600 rounded-md relative group" onclick="openTab('applicants')">
        Applicants
        <span class="absolute bottom-0 left-0 w-full h-1 bg-blue-500 transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100 origin-left"></span>
    </button>
    <button class="tab-button text-sm px-4 py-2 text-gray-600 rounded-md relative group" onclick="openTab('job-details')">
        Job Details
        <span class="absolute bottom-0 left-0 w-full h-1 bg-blue-500 transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100 origin-left"></span>
    </button>
    <button class="tab-button text-sm px-4 py-2 text-gray-600 rounded-md relative group" onclick="openTab('analytics')">
        Analytics
        <span class="absolute bottom-0 left-0 w-full h-1 bg-blue-500 transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100 origin-left"></span>
    </button>
</div>
       

        <!-- Applicants Table -->
        <div id="applicants" class="tab-content overflow-x-auto" style="display: none;">
             <!-- Total Applicants Section -->
        <div class="bg-gray-100 p-6">

<div class="container mx-auto p-4 bg-white shadow-md rounded-lg">
    <div style="display:flex">
    <h2 style="color:rgba(37, 50, 75, 1);font-size:30px;" class="text-xl font-semibold mb-4">Total Applicant:<span id="Applicant-numbers">19</span></h2>
    <div class="search-filter-container">

    <img class="search-icon" src="IMG/searchicon.png" alt="">
    <input type="text" class="search-input" placeholder="Search Applicants" oninput="searchApplicants(this.value)">
    <button class="filter-button">
        <span class="filter-icon">☰</span>
        Filter
    </button>
</div>
</div>
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="text-left bg-gray-200">
                        <th class="py-3 px-4 border-b">Full Name</th>
                        <th class="py-3 px-4 border-b">Score</th>
                        <th class="py-3 px-4 border-b">Hiring Stage</th>
                        <th class="py-3 px-4 border-b">Applied Date</th>
                        <th class="py-3 px-4 border-b">Job Role</th>
                        <th class="py-3 px-4 border-b">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                    <td class="py-3 px-4" style="display:flex;align-items:center;"><input type="checkbox" class="mr-2"><img src="IMG/BoyProfile.jpg" alt="Profile Photo" class="w-10 h-10 rounded-full mr-2">Jake Gyll</td>
                        <td class="py-3 px-4">0.0</td>
                        <td class="py-3 px-4 text-yellow-500">In Review</td>
                        <td class="py-3 px-4">13 July, 2021</td>
                        <td class="py-3 px-4">Designer</td>
                        <td class="py-3 px-4"><button class="bg-blue-500 text-white px-4 py-2 rounded">See Application</button></td>
                    </tr>
                    <tr class="border-b">
                    <td class="py-3 px-4" style="display:flex;align-items:center;"><input type="checkbox" class="mr-2"><img src="IMG/BoyProfile.jpg" alt="Profile Photo" class="w-10 h-10 rounded-full mr-2">Jake Gyll</td>
                        <td class="py-3 px-4">0.0</td>
                        <td class="py-3 px-4 text-yellow-500">In Review</td>
                        <td class="py-3 px-4">13 July, 2021</td>
                        <td class="py-3 px-4">JavaScript Dev</td>
                        <td class="py-3 px-4"><button class="bg-blue-500 text-white px-4 py-2 rounded">See Application</button></td>
                    </tr>
                    <tr class="border-b">
                    <td class="py-3 px-4" style="display:flex;align-items:center;"><input type="checkbox" class="mr-2"><img src="IMG/BoyProfile.jpg" alt="Profile Photo" class="w-10 h-10 rounded-full mr-2">Jake Gyll</td>
                        <td class="py-3 px-4">4.5</td>
                        <td class="py-3 px-4 text-blue-500">Shortlisted</td>
                        <td class="py-3 px-4">12 July, 2021</td>
                        <td class="py-3 px-4">Golang Dev</td>
                        <td class="py-3 px-4"><button class="bg-blue-500 text-white px-4 py-2 rounded">See Application</button></td>
                    </tr>
                    <tr class="border-b">
                    <td class="py-3 px-4" style="display:flex;align-items:center;"><input type="checkbox" class="mr-2"><img src="IMG/BoyProfile.jpg" alt="Profile Photo" class="w-10 h-10 rounded-full mr-2">Jake Gyll</td>
                        <td class="py-3 px-4">3.75</td>
                        <td class="py-3 px-4 text-red-500">Declined</td>
                        <td class="py-3 px-4">11 July, 2021</td>
                        <td class="py-3 px-4">NET Dev</td>
                        <td class="py-3 px-4"><button class="bg-blue-500 text-white px-4 py-2 rounded">See Application</button></td>
                    </tr>
                    <tr class="border-b">
                    <td class="py-3 px-4" style="display:flex;align-items:center;"><input type="checkbox" class="mr-2"><img src="IMG/BoyProfile.jpg" alt="Profile Photo" class="w-10 h-10 rounded-full mr-2">Jake Gyll</td>
                        <td class="py-3 px-4">4.8</td>
                        <td class="py-3 px-4 text-green-500">Hired</td>
                        <td class="py-3 px-4">11 July, 2021</td>
                        <td class="py-3 px-4">Graphic Design</td>
                        <td class="py-3 px-4"><button class="bg-blue-500 text-white px-4 py-2 rounded">See Application</button></td>
                    </tr>
                    <tr class="border-b">
                    <td class="py-3 px-4" style="display:flex;align-items:center;"><input type="checkbox" class="mr-2"><img src="IMG/BoyProfile.jpg" alt="Profile Photo" class="w-10 h-10 rounded-full mr-2">Jake Gyll</td>
                        <td class="py-3 px-4">4.6</td>
                        <td class="py-3 px-4 text-green-500">Hired</td>
                        <td class="py-3 px-4">9 July, 2021</td>
                        <td class="py-3 px-4">Designer</td>
                        <td class="py-3 px-4"><button class="bg-blue-500 text-white px-4 py-2 rounded">See Application</button></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination Section -->
        <div class="flex justify-between items-center mt-6">
            <div>
                <span class="text-sm">View: 10</span>
                <span class="mx-2">|</span>
                <span class="text-sm">Applicants per page</span>
            </div>

            <div class="flex space-x-2">
                <a href="#" class="pagination-btn">1</a>
                <a href="#" class="pagination-btn active ">2</a>
                <a href="#" class="pagination-btn">3</a>
            </div>
        </div>
    </div>

    </div>


    <div id="job-details" class="tab-content overflow-x-auto" style="display: none;">
        <div style="display:flex;justify-content:space-evenly;margin-right:300px;flex-wrap:wrap;">
            <div style="display:flex;align-items:center;margin-right:400px;">
                <img style="width:80px;height:80px"  src="IMG/Company Logo.png" alt="">
                <h2 style="font-weight:bold;font-size:35px; color:rgba(37, 50, 75, 1);">Social Media Assistant</h2>
            </div>
            <div style="display:flex;align-items:center">
                <img src="IMG/Editt.png" alt="">
                <h2 style="color:rgba(10, 102, 194, 1)">Edit Job Details</h2>
            </div>
        </div>
    <!-- Job details data here -->
    <section class="Job-Discription">
                <div class="content">
               <div class="subcontent">
                    <h2>Discription</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem, architecto</p>
                </div>
                <div class="subcontent">
                <h2>Requirments</h2>
                <ul class="ulreq" style="list-style: none;">
                <li><img src="IMG/CheckIcon.png" alt=""><p>Community engagement to ensure that is supported and actively represented online</p></li>
                </ul>
                </div>
                <div class="subcontent">
                <h2>Who You Are</h2>
                <ul class="ulreq" style="list-style: none;">
                <li><img src="IMG/CheckIcon.png" alt=""><p>You get energy from people and building the ideal work environment</p></li>
                </ul>
                </div>
                <div class="subcontent">
                <h2>Nice-To-Haves</h2>
                <ul class="ulreq" style="list-style: none;">
                <li><img src="IMG/CheckIcon.png" alt=""><p>You get energy from people and building the ideal work environment</p></li>
                </ul>
                </div>
                

                </div>
                <div class="Job-Discriptiontwo">

                <div class="jobdetails">
        <h2>About this role</h2>
        <ul class="details-list">
            <li><span>Apply Before</span>July 31, 2021</li>
            <li><span>Job Posted On</span>July 1, 2021</li>
            <li><span>Job Type</span>Full-Time</li>
            <li><span>Salary</span>$75k-$85k USD</li>
        </ul>

        <h2 class="section-title">Categories</h2>
        <div><span class="tag">Marketing</span><span class="tag">Design</span></div>

        <h2 class="section-title">Required Skills</h2>
        <div class="RSTAGS">
            <span class="tag">Project Management</span><span class="tag">Copywriting</span>
            <span class="tag">Social Media Marketing</span><span class="tag">English</span>
            <span class="tag">Copy Editing</span>
        </div>
    </div>


                </div>
        </section>
       
        <div class="perks-section">
    <h2>Perks & Benefits</h2>
    <p>Some of the perks and benefits that the company provides</p>
    
    <div class="perks-container">
        <div class="perk-item">
            <img src="IMG/Medicon.png" alt="Healthcare">
            <h4>Full Healthcare</h4>
            <p>We believe in thriving communities and that starts with our team being happy and healthy.</p>
        </div>
        <div class="perk-item">
            <img src="IMG/vacation-icon.png" alt="Vacation">
            <h4>Unlimited Vacation</h4>
            <p>We believe you should have a flexible schedule that makes space for family, wellness, and fun.</p>
        </div>
        <div class="perk-item">
            <img src="IMG/skills-icon.png" alt="Skills">
            <h4>Skill Development</h4>
            <p>We believe in always learning and leveling up our skills. Whether it’s a conference or online course.</p>
        </div>
        <div class="perk-item">
            <img src="IMG/summit-icon.png" alt="Summits">
            <h4>Team Summits</h4>
            <p>Every 6 months we have a full team summit where we have fun, reflect, and plan for the upcoming quarter.</p>
        </div>
        <div class="perk-item">
            <img src="IMG/remote-icon.png" alt="Remote Work">
            <h4>Remote Working</h4>
            <p>You know how you perform your best. Work from home, coffee shop, or anywhere when you feel like it.</p>
        </div>
        <div class="perk-item">
            <img src="IMG/commute-icon.png" alt="Commuter Benefits">
            <h4>Commuter Benefits</h4>
            <p>We’re grateful for all the time and energy each team member puts into getting to work every day.</p>
        </div>
        <div class="perk-item">
            <img src="IMG/donate-icon.png" alt="We Give Back">
            <h4>We Give Back</h4>
            <p>We anonymously match any donation our employees make (up to $600) so they can support the organizations they care about most—times two.</p>
        </div>
    </div>


    </div>
</div>



<div id="analytics" class="tab-content overflow-x-auto" style="display: none;">
    <!-- Analytics data here -->
    <p>Analytics content goes here...</p>
</div>















    <?php include 'logoutmessage.php'?>
</div>



<script>
  function toggleSidebar() {
    var sidebar = document.querySelector('.sidebar');
    var menuToggle = document.querySelector('.menu-toggle');

    // Toggle sidebar active class
    sidebar.classList.toggle('active');

    // Hide the menu toggle button when the sidebar is open
    if (sidebar.classList.contains('active')) {
        menuToggle.style.display = 'none';
    } else {
        menuToggle.style.display = 'block';
    }
}

// Ensure the menu toggle button is hidden in full screen
window.addEventListener('resize', function () {
    var sidebar = document.querySelector('.sidebar');
    var menuToggle = document.querySelector('.menu-toggle');

    if (window.innerWidth > 768) {
        sidebar.classList.remove('active');
        menuToggle.style.display = 'none'; // Ensure it's hidden on larger screens
    } else {
        menuToggle.style.display = 'block'; // Show it only on small screens
    }
});

// Run on page load to check screen size
window.addEventListener('load', function () {
    var menuToggle = document.querySelector('.menu-toggle');
    if (window.innerWidth > 768) {
        menuToggle.style.display = 'none';
    }
});

function openTab(tabName) {
    // Hide all elements with class="tab-content" by default
    var i, tabcontent, tabbuttons;
    tabcontent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Remove the background color of all tab-buttons
    tabbuttons = document.getElementsByClassName("tab-button");
    for (i = 0; i < tabbuttons.length; i++) {
        tabbuttons[i].style.backgroundColor = "";
    }

    // Show the specific tab content
    document.getElementById(tabName).style.display = "block";
}

// Optionally open one tab by default when the page loads
window.onload = function() {
    openTab('applicants'); // Open the 'Applicants' tab by default
};


</script>

</body>
</html>