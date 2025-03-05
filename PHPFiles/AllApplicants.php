<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Applicants</title>
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
            
            margin-right: 20px;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
            display:flex;
            align-items:center;
            
        }

        .logout img {
            position: relative;
            left: 40px;
        }

        .logout p {
            position: relative;
            left: 60px;
            top:0px;
            bottom: 36px;
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
        .Company-name{
            font-weight:bold;
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

        }

        .divider {
            display: none;
        }
       
    
        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
                padding: 15px;
            }

            .main-content {
                margin-left: 210px;
                width: calc(100% - 240px);
            }

            .search-filter-container{
            margin-left:10px;
        }

            .header-title {
                margin-left: 45px;
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

            .search-filter-container{
            margin-left:10px;
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

            .search-filter-container{
            margin-left:10px;
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
        <div class="overflow-x-auto">
            <table class="min-w-full table-auto" id="applicant-table">
                <thead>
                    <tr style="color:rgba(37, 50, 75, 1)" class="text-left bg-gray-200">
                        <th class="py-3 px-4 border-b">Full Name</th>
                        <th class="py-3 px-4 border-b">Score</th>
                        <th class="py-3 px-4 border-b">Hiring Stage</th>
                        <th class="py-3 px-4 border-b">Applied Date</th>
                        <th class="py-3 px-4 border-b">Job Role</th>
                        <th class="py-3 px-4 border-b">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Each row -->
                    <tr class="border-b">
                        <td class="py-3 px-4" style="display:flex;align-items:center;"><input type="checkbox" class="mr-2"><img src="IMG/girlprofilePhoto.jpg" alt="Profile Photo" class="w-10 h-10 rounded-full mr-2">Jake Gyll</td>
                        <td class="py-3 px-4">0.0</td>
                        <td class="py-3 px-4 text-yellow-500">Interview</td>
                        <td class="py-3 px-4">13 July, 2021</td>
                        <td class="py-3 px-4">Designer</td>
                        <td class="py-3 px-4"><button class="bg-blue-500 text-white px-4 py-2 rounded">See Application</button></td>
                    </tr>
                    <tr class="border-b">
                    <td class="py-3 px-4" style="display:flex;align-items:center;"><input type="checkbox" class="mr-2"><img src="IMG/BoyProfile.jpg" alt="Profile Photo" class="w-10 h-10 rounded-full mr-2">Jake Gyll</td>
                        <td class="py-3 px-4">0.0</td>
                        <td class="py-3 px-4 text-yellow-500">Interview</td>
                        <td class="py-3 px-4">13 July, 2021</td>
                        <td class="py-3 px-4">JavaScript Dev</td>
                        <td class="py-3 px-4"><button class="bg-blue-500 text-white px-4 py-2 rounded">See Application</button></td>
                    </tr>
                    <tr class="border-b">
                    <td class="py-3 px-4" style="display:flex;align-items:center;"><input type="checkbox" class="mr-2"><img src="IMG/girlprofilePhoto.jpg" alt="Profile Photo" class="w-10 h-10 rounded-full mr-2">Jake Gyll</td>

                        <td class="py-3 px-4">4.5</td>
                        <td class="py-3 px-4 text-blue-500">Shortlisted</td>
                        <td class="py-3 px-4">12 July, 2021</td>
                        <td class="py-3 px-4">Golang Dev</td>
                        <td class="py-3 px-4"><button class="bg-blue-500 text-white px-4 py-2 rounded">See Application</button></td>
                    </tr>
                    <tr class="border-b">
                         <td class="py-3 px-4" style="display:flex;align-items:center;"><input type="checkbox" class="mr-2"><img src="IMG/girlprofilePhoto.jpg" alt="Profile Photo" class="w-10 h-10 rounded-full mr-2">Jake Gyll</td>

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
                    <tr class="border-b">
                    <td class="py-3 px-4" style="display:flex;align-items:center;"><input type="checkbox" class="mr-2"><img src="IMG/BoyProfile.jpg" alt="Profile Photo" class="w-10 h-10 rounded-full mr-2">Jake Gyll</td>

                        <td class="py-3 px-4">4.0</td>
                        <td class="py-3 px-4 text-blue-500">Interviewed</td>
                        <td class="py-3 px-4">5 July, 2021</td>
                        <td class="py-3 px-4">Designer</td>
                        <td class="py-3 px-4"><button class="bg-blue-500 text-white px-4 py-2 rounded">See Application</button></td>
                    </tr>
                    <tr class="border-b">
                    <td class="py-3 px-4" style="display:flex;align-items:center;"><input type="checkbox" class="mr-2"><img src="IMG/BoyProfile.jpg" alt="Profile Photo" class="w-10 h-10 rounded-full mr-2">Jake Gyll</td>

                        <td class="py-3 px-4">3.90</td>
                        <td class="py-3 px-4 text-red-500">Declined</td>
                        <td class="py-3 px-4">5 July, 2021</td>
                        <td class="py-3 px-4">Designer</td>
                        <td class="py-3 px-4"><button class="bg-blue-500 text-white px-4 py-2 rounded">See Application</button></td>
                    </tr>
                    <tr class="border-b">
                    <td class="py-3 px-4" style="display:flex;align-items:center;"><input type="checkbox" class="mr-2"><img src="IMG/BoyProfile.jpg" alt="Profile Photo" class="w-10 h-10 rounded-full mr-2">Jake Gyll</td>

                        <td class="py-3 px-4">4.20</td>
                        <td class="py-3 px-4 text-blue-500">Shortlisted</td>
                        <td class="py-3 px-4">3 July, 2021</td>
                        <td class="py-3 px-4">Designer</td>
                        <td class="py-3 px-4"><button class="bg-blue-500 text-white px-4 py-2 rounded">See Application</button></td>
                    </tr>
                    <tr class="border-b">
                    <td class="py-3 px-4" style="display:flex;align-items:center;"><input type="checkbox" class="mr-2"><img src="IMG/BoyProfile.jpg" alt="Profile Photo" class="w-10 h-10 rounded-full mr-2">Jake Gyll</td>

                        <td class="py-3 px-4">4.10</td>
                        <td class="py-3 px-4 text-blue-500">Interviewed</td>
                        <td class="py-3 px-4">1 July, 2021</td>
                        <td class="py-3 px-4">Designer</td>
                        <td class="py-3 px-4"><button class="bg-blue-500 text-white px-4 py-2 rounded">See Application</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    </div>



    <div class="flex justify-between items-center mt-6">
            <div>
                <span class="text-sm">View: 10</span>
                <span class="mx-2">|</span>
                <span class="text-sm">Applicants per page</span>
            </div>

            <div class="flex space-x-2">
                <a href="#" class="pagination-btn">1</a>
                <a href="#" class="pagination-btn active">2</a>
                <a href="#" class="pagination-btn">3</a>
            </div>
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

function searchApplicants(searchTerm) {
            const table = document.getElementById('applicant-table');
            const rows = table.getElementsByTagName('tr');

            for (let i = 1; i < rows.length; i++) {
                const nameCell = rows[i].getElementsByTagName('td')[0];
                if (nameCell) {
                    const name = nameCell.textContent || nameCell.innerText;
                    if (name.toLowerCase().indexOf(searchTerm.toLowerCase()) > -1) {
                        rows[i].style.display = '';
                    } else {
                        rows[i].style.display = 'none';
                    }
                }
            }
        }
</script>

</body>
</html>