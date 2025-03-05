<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body  {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
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
}</style>
</head>
<body>
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
</body>
</html>