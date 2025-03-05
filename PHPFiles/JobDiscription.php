<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Description</title>
    <style>
        body, header, main {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: rgba(237, 243, 255, 1);
        }

        .JobHeader {
            display: flex;
            flex-direction:column;
            justify-content: center;
            align-items: center;
            background-color: rgba(237, 243, 255, 1);
            padding: 20px 0; /* Adjust padding as necessary */
            margin-top:10px;
            height:300px
         
        }

        .job-details {
            display: flex;
            align-items: center;
            gap: 30px; /* Space between logo and job details */
        }

        .Jobdetails h2 {
            color: rgba(37, 50, 75, 1);
            margin: 0; /* Remove margin for h2 */
        }

        .Jobdetails ul {
            list-style: none;
            padding: 0; /* Remove padding */
            color: rgba(81, 91, 111, 1);
            margin: 5px 0; /* Spacing between items and the job title */
        }

        .Jobdetails ul li {
            display: inline;
            margin-right: 10px; /* Space between items */
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-left:300px;
        }

        button:hover {
            background-color: #0056b3;
        }
        .Job-Discription{
            padding-left:150px;
            display:flex;
            gap:20px;
        }
        .Job-Discription h2{
            color: rgba(37, 50, 75, 1);
        }
        .JobDiscription p{
            color: rgba(81, 91, 111, 1);
        }


       .content{
        display:flex;
        flex-wrap:wrap;
        flex-direction:column;
        
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
            background-color: rgba(237, 243, 255, 1);
            height:fit-content;
            padding:30px;
            padding-left:50px;


}

.perks-section h2 {
    font-size: 32px;
    font-weight: bold;
    margin-bottom: 10px;
}

.perks-section p {
    font-size: 16px;
    margin-bottom: 30px;
}

.perks-container {
    display: grid;
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
}

.perk-item p {
    font-size: 14px;
    color: #555;
}



    
        .container{
            margin-left:140px;
            margin-top:100px;
            width:600px;
            display:flex;
            flex-dirction:column;
            flex-wrap:wrap;
        }

        .SimiliarJobs{
            width: 100%;
            background-color: rgba(237, 243, 255, 1);
            height:fit-content;
            
        }
        .Jobdetails{
            display:flex;
            flex-direction:column;
        }
        @media (max-width: 768px) {
            .Job-Discriptiontwo{
                margin-left:50px;
            }
            
           
            .RSTAGS{
            display:flex;
            flex-direction:column;
            
            flex-wrap:wrap;
        }
      .job-detailstwo{
                display: flex;
            align-items: center;
            gap: 30px;
            margin-left:140px
            }

        .job-details {
                flex-direction: column; 
                align-items: center; 
            }
            .Jobdetails ul {
                justify-content: center;
            }
            .Job-Discription {
                padding: 20px; 
            }
            button {
                width: 100%; 
                margin-left:0px;
            }
            .container{
                margin-left:20px;
            }
            . .container p{
                font-size: 10px;
            }
            .PandB{
                padding:10px
            }
           
            .SJ{
                margin-right:1000px;
            }
.container{
    display:flex;
    flex-direction:column;
}
            .container p{
                width: 400px;
            }
        }
        @media (max-width: 1024px) {
    .perks-container {
        grid-template-columns: repeat(2, 1fr); /* 2 per row on smaller screens */
    }
}

@media (max-width: 768px) {
    .perks-container {
        grid-template-columns: repeat(1, 1fr); /* 1 per row on mobile */
    }
}
    </style>
</head>
<body>
    <header><?php include 'Header.php'; ?></header>
    <main>
        <section class="JobHeader">
          <a href="">  <img style="margin-right:800px;margin-bottom:50px" src="IMG/arrow.png" alt=""></a> 
            <div class="job-details">
                <img src="IMG/Company Logo.png" alt="Company Logo" style="width:90px; height:90px;">
                <div class="Jobdetails">
                    <h2>Social Media Assistant</h2>
                    <ul>
                        <li>Stripe</li>
                        <li>Paris, France</li>
                        <li>Full-Time</li>
                    </ul>
                </div>
                <a href="#" style=""><button>Apply</button></a>
            </div>
        </section>
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
   
        <section class="beforethelast">
<div class="container">
<div style="display:flex; flex-wrap:wrap;">
    <img style="width:150px;height:150px;" src="IMG/Company Logo.png" alt="">
 <div style="margin-left:30px;">
    <h2 style="color:rgba(37, 50, 75, 1);font-size:40px">Stripe</h2>
    <a style="color:blue;" href="">Read more about Stripe <img src="IMG/Arrow - Right.png" alt=""></a>
        </div>
        </div>
        <p  style="">Stripe is a technology company that builds economic infrastructure for the internet.
            Businesses of every size—from new startups to public
            companies—use our software to accept payments and manage their businesses online.</p>
</div>
        </section>

        <section class="SimiliarJobs">
            
            <h2 style="color:rgba(37, 50, 75, 1);font-size:40px; margin-left:140px;margin-top:50px;">Similar Jobs</h2>
            <div class="SJ" style="display:flex;flex-wrap:wrap;">
            <div class="job-detailstwo" style="margin-left:140px;display:flex;align-items:center;background-color:white;width:450px;padding:20px;gap:20px">
                <img src="IMG/Company Logo.png" alt="Company Logo" style="width:90px; height:90px;">
                <div class="Jobdetails">
                    <h2>Social Media Assistant</h2>
                    <ul>
                        <li>Stripe</li>
                        <li>Paris, France</li>
                        <li>Full-Time</li>
                    </ul>
                    <div><span class="tag">Full-Time</span><span class="tag">Markiting</span><span class="tag">Design</span></div>
                </div>
              
            </div>

            </div>
        </section>
    </main>
</body>
</html>
