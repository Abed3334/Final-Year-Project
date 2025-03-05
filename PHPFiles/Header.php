<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Header</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        header {
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
        }
        .head {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px 20px;
            gap:70px;
        }
        .logo img {
            height: 40px;
        }
        .navigation {
            display: flex;
            align-items: center;
        }
        .menu {
            position: fixed;
            top: 0;
            bottom: 0;
            right: -100%; /* Start off-screen from the right */
            width: 100%; /* Full width for smaller screens */
            max-width: 300px; /* Maximum width for the menu */
            background-color: #fff;
            transition: right 0.3s ease;
            padding: 60px 20px 20px; /* Give some padding around the menu */
            box-sizing: border-box;
            z-index: 999;
        }
        .menu.active {
            right: 0; /* Slide in from the right */
        }
        ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 20px;
        }
        ul li a {
            text-decoration: none;
            color: black;
            font-weight: bold;
            font-size: 18px;
        }
        button {
            background-color: rgba(10, 102, 194, 1);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }
        button:hover {
            background-color: #357ae8;
        }
        .hamburger {
            font-size: 30px;
            cursor: pointer;
            display: none; /* Hidden by default */
        }
        @media (max-width: 768px) {
            .hamburger {
                display: block; /* Show hamburger in mobile view */
            }
            .navigation { /* Hide desktop navigation */
                display: none;
            }
            .menu ul {
                flex-direction: column;
                align-items: center;
                padding: 0;
            }
            .menu ul li {
                width: 100%; /* Full width for each link */
            }
            .menu button {
                width: 100%; /* Full width for the button */
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="head">
            <div class="logo">
                <img src="IMG/logo.png" alt="Logo">
            </div>
            <div onclick="toggleMenu()" class="hamburger">&#9776;</div>
            <div class="navigation">
                <ul>
                    <li><a href="Home.php">Home</a></li>
                    <li><a href="find-jobs.html">Find Jobs</a></li>
                    <li><a href="DiscoverCompanies.php">Discover Companies</a></li>
                    <li><a href="FindEmployees.php">Find Employees</a></li>
                </ul>
                <a href="SignUp.php"><button style="margin-left:100px">Sign Up</button></a>
            </div>
        </div>
        <div class="menu">
        <div onclick="toggleMenu()" class="hamburger">&#9776;</div>
        <br>
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="#">Find Jobs</a></li>
                <li><a href="#">Discover Companies</a></li>
                <li><a href="#">Find Employees</a></li>
            </ul>
            <br>
           <a href="SignUp.php"> <button>Sign Up</button></a>
        </div>
    </header>
    <script>
        function toggleMenu() {
            const menu = document.querySelector('.menu');
            menu.classList.toggle('active'); // Toggle the 'active' class to open/close the menu
        }
        window.addEventListener('resize', () => {
            if (window.innerWidth > 768) {
                document.querySelector('.menu').classList.remove('active');
            }
        });
    </script>
</body>
</html>
