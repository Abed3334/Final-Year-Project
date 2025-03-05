<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Suggested Candidates</title>
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

        h1,h2{
          color:  rgba(37, 50, 75, 1);
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

 

@media (max-width: 768px) {
    .modal {
        width: 80%;
    }
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
    <img src="IMG/logout.png" alt="Logout">
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

        <div class="bg-gray-50">

<!-- Container -->
<div class="max-w-screen-xl mx-auto p-4">
  <div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-semibold ">Suggested Candidates</h1>
    <button class="filter-button">
            <span class="filter-icon">☰</span>
            Filter
        </button>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Candidate 1 -->
    <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col justify-between">
      <img class="w-20 h-20 rounded-full mx-auto" src="https://i.pravatar.cc/150?img=1" alt="Ahmad Habli">
      <h2 class="text-xl font-bold mt-4 text-center">Ahmad Habli</h2>
      <p class="text-center text-gray-500">Paris, France</p>
      <div class="flex flex-wrap justify-center gap-2 mt-4">
        <span class="bg-purple-100 text-purple-700 text-sm px-3 py-1 rounded-full">Computer Science</span>
        <span class="bg-purple-100 text-purple-700 text-sm px-3 py-1 rounded-full">Software Engineer</span>
        <span class="bg-purple-100 text-purple-700 text-sm px-3 py-1 rounded-full">Machine Learning</span>
      </div>
      <div class="mt-4 text-center">
        <button class="bg-blue-500 text-white px-4 py-2 rounded-none">Profile</button>
      </div>
    </div>

    <!-- Candidate 2 -->
    <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col justify-between">
      <img class="w-20 h-20 rounded-full mx-auto" src="https://i.pravatar.cc/150?img=2" alt="Rama Salem">
      <h2 class="text-xl font-bold mt-4 text-center">Rama Salem</h2>
      <p class="text-center text-gray-500">León, France</p>
      <div class="flex flex-wrap justify-center gap-2 mt-4">
        <span class="bg-green-100 text-green-700 text-sm px-3 py-1 rounded-full">Advertising</span>
        <span class="bg-green-100 text-green-700 text-sm px-3 py-1 rounded-full">Marketing</span>
        <span class="bg-green-100 text-green-700 text-sm px-3 py-1 rounded-full">Digital Marketing</span>
      </div>
      <div class="mt-4 text-center">
        <button class="bg-blue-500 text-white px-4 py-2 rounded-none">Profile</button>
      </div>
    </div>

    <!-- Candidate 3 -->
    <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col justify-between">
      <img class="w-20 h-20 rounded-full mx-auto" src="https://i.pravatar.cc/150?img=3" alt="Lea Hariri">
      <h2 class="text-xl font-bold mt-4 text-center">Lea Hariri</h2>
      <p class="text-center text-gray-500">Madrid, Spain</p>
      <div class="flex flex-wrap justify-center gap-2 mt-4">
        <span class="bg-yellow-100 text-yellow-700 text-sm px-3 py-1 rounded-full">Creativity</span>
        <span class="bg-yellow-100 text-yellow-700 text-sm px-3 py-1 rounded-full">Design</span>
      </div>
      <div class="mt-4 text-center">
        <button class="bg-blue-500 text-white px-4 py-2 rounded-none">Profile</button>
      </div>
    </div>

    <!-- Candidate 4 -->
    <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col justify-between">
      <img class="w-20 h-20 rounded-full mx-auto" src="https://i.pravatar.cc/150?img=4" alt="Sara Makraine">
      <h2 class="text-xl font-bold mt-4 text-center">Sara Makraine</h2>
      <p class="text-center text-gray-500">Barcelona, Spain</p>
      <div class="flex flex-wrap justify-center gap-2 mt-4">
        <span class="bg-purple-100 text-purple-700 text-sm px-3 py-1 rounded-full">Software Engineer</span>
        <span class="bg-purple-100 text-purple-700 text-sm px-3 py-1 rounded-full">Web Development</span>
        <span class="bg-purple-100 text-purple-700 text-sm px-3 py-1 rounded-full">Mobile App</span>
      </div>
      <div class="mt-4 text-center">
        <button class="bg-blue-500 text-white px-4 py-2 rounded-none">Profile</button>
      </div>
    </div>

    <!-- Candidate 5 -->
    <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col justify-between">
      <img class="w-20 h-20 rounded-full mx-auto" src="https://i.pravatar.cc/150?img=5" alt="Robin Hamilton">
      <h2 class="text-xl font-bold mt-4 text-center">Robin Hamilton</h2>
      <p class="text-center text-gray-500">London, UK</p>
      <div class="flex flex-wrap justify-center gap-2 mt-4">
        <span class="bg-green-100 text-green-700 text-sm px-3 py-1 rounded-full">Business</span>
        <span class="bg-green-100 text-green-700 text-sm px-3 py-1 rounded-full">Management</span>
        <span class="bg-green-100 text-green-700 text-sm px-3 py-1 rounded-full">HR</span>
      </div>
      <div class="mt-4 text-center">
        <button class="bg-blue-500 text-white px-4 py-2 rounded-none">Profile</button>
      </div>
    </div>

    <!-- Candidate 6 -->
    <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col justify-between">
      <img class="w-20 h-20 rounded-full mx-auto" src="https://i.pravatar.cc/150?img=6" alt="Rayan Sene">
      <h2 class="text-xl font-bold mt-4 text-center">Rayan Sene</h2>
      <p class="text-center text-gray-500">Manchester, UK</p>
      <div class="flex flex-wrap justify-center gap-2 mt-4">
        <span class="bg-yellow-100 text-yellow-700 text-sm px-3 py-1 rounded-full">Design</span>
        <span class="bg-yellow-100 text-yellow-700 text-sm px-3 py-1 rounded-full">Branding</span>
        <span class="bg-yellow-100 text-yellow-700 text-sm px-3 py-1 rounded-full">Creativity</span>
      </div>
      <div class="mt-4 text-center">
        <button class="bg-blue-500 text-white px-4 py-2 rounded-none">Profile</button>
      </div>
    </div>
</div>

  
  <div class="flex justify-center mt-6">
    <nav class="flex gap-4">
      <button class="px-4 py-2 bg-blue-500 text-white rounded-none">1</button>
      <button class="px-4 py-2 bg-blue-500 text-white rounded-none">2</button>
      <button class="px-4 py-2 bg-blue-500 text-white rounded-none">3</button>
      <button class="px-4 py-2 bg-blue-500 text-white rounded-none">Next</button>
    </nav>
  </div>
</div>
</div>












<?php include 'logoutmessage.php'?>






        
    </div>

   


    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>

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



      
</script>
</body>



</html>