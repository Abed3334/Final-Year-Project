<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
         footer {
            background-color: #EDF3FF;
            padding: 20px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            width: 100%;
            font-family: "Poppins", serif;
            

            
        }

        .footer-content {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            /* Allows wrapping for smaller screens */
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 0;
            text-align: center;
           
            justify-content: space-between;
            align-items: center;
            width: 67%;
            max-width: 1200px;
            margin-bottom: 60px;
        }

        .footer-logo img {
            width: 150px;
        }

        .footer-nav {
            display: flex;
            gap: 50px;
            justify-content: center;
            font-weight: bold;
        }

        .footer-nav a {
            text-decoration: none;
            color: #222222;
            font-size: 1.2em;

        }

        .footer-bottom {
            width: 67%;
            max-width: 1200px;
            border-top: 1px solid #D6DDEB;
            padding-top: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-bottom span {
            color: #666666;
        }

        .social-icons {
            display: flex;
            gap: 15px;
        }

        .social-icons span {
            margin-top: 8px;
            color: #666666;
        }

        .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            background-color: white;
            border-radius: 50%;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }


        .facebook {
            width: 10px;
        }

        .insta {
            width: 15px;
            height: 15px;
            margin-top: -1px;
            margin-right: 1px;
        }

        .twitter {
            width: 15px;
            height: 15px;
        }
        @media (max-width: 1024px) {
            .footer-content {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }

            .footer-nav {
                flex-direction: column;
                gap: 10px;
            }
        }

        @media (max-width: 768px) {
            .footer-bottom {
                display: flex;
                flex-direction: column;
                text-align: center;
                gap: 15px;
            }

            .social-icons {
                display: flex;
                justify-content: center;
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .social-icons {
                flex-direction: column;
                align-items: center;
                gap: 10px;
            }

            .social-icons span {
                margin-bottom: 5px;
            }
        }
    </style>
</head>
<body>
<footer>
        <div class="footer-content">
            <div class="footer-logo">
                <img src="IMG/aspirepath.png" alt="AspirePath">
            </div>
            <nav class="footer-nav">
                <a href="#">Home</a>
                <a href="#">Find Jobs</a>
                <a href="#">Discover Companies</a>
                <a href="#">Find Employees</a>

            </nav>
        </div>
        <div class="footer-bottom">
            <span>Copyright, AspirePath 2025. All rights reserved.</span>

            <div class="social-icons">
                <span>Follow Us:</span>

                <a href="#"><img class="facebook" src="IMG/Facebook .png" alt="Facebook"></a>
                <a href="#"><img class="insta" src="IMG/insta.png" alt="Instagram"></a>
                <a href="#"><img class="twitter" src="IMG/twitter.png" alt="Twitter"></a>
            </div>
        </div>
         
    </footer>
</body>
</html>