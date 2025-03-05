<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="CSSFiles/EmployeesProfile.css">
</head>
<body>
    <header><?php include 'header.php' ?></header>
    <main>
<section class="Sec-one">
    <div class="Profile">
        <img style="width:120px;height:120px;border-radius:50%;margin-top:50px" src="IMG/BoyProfile.jpg" alt="">
        <div>
            <h2>Jake Gyll</h2>
            <p>Product Designer at Twitter </p>
            <div style="display:flex;gap:10px;align-items:center;"><img style="width:20px;height:20px" src="IMG/Locationprofile.png" alt=""><p>Manchester,UK</p></div>
            <div style="diplay:flex;justify-content:space-between">
               <a href=""><span>OPEN FOR OPPORTUNITIES</span></a> 
                <Button style="margin-left:70px">Message now!</Button>
            </div>
        </div>
    </div>

<div class="Adition-Details">
    <h2>Additional Details</h2>
    <div class="Details">
        <img src="IMG/Message.png" alt="">
        <div>
            <p>Email</p>
            <p>Jakegyll@gmail.com</p>
        </div>
    </div>

    <div class="Details">
        <img src="IMG/Phone.png" alt="">
        <div>
            <p>Phone</p>
            <p>4321324343</p>
        </div>
    </div>

    <div class="Details">
        <img src="IMG/Language.png" alt="">
        <div>
            <p>Languages</p>
            <p>English,Frensh</p>
        </div>
    </div>

</div>
</section>

<section class="sec-two">

<div class="Aboutme">
    <h2>About Me</h2>
    <p>I’m a product designer + filmmaker currently working remotely 
        at Twitter from beautiful Manchester, United Kingdom. I’m passionate
         about designing digital 
        products that have a positive impact on the world.</p>
</div>

<div class="socialLinks">
    <h2>social Links</h2>
    <div class="Details">
        <img src="IMG/Instagram.png" alt="">
        <div>
            <p>Instagram</p>
            <a href="">www.afdadfa.com</a>
        </div>
    </div>

    <div class="Details">
        <img src="IMG/Icon (5).png" alt="">
        <div>
            <p>Instagram</p>
            <a href="">www.afdadfa.com</a>
        </div>
    </div>

    <div class="Details">
        <img src="IMG/Website.png" alt="">
        <div>
            <p>Instagram</p>
            <a href="">www.afdadfa.com</a>
        </div>
    </div>

</div>

</section>


<section class="Skills">
<h2>Skills</h2>
<div class="skill-content">

            <span class="tag">Project Management</span>
            <span class="tag">Copywriting</span>
            <span class="tag">Social Media Marketing</span>
            <span class="tag">English</span>
            <span class="tag">Copy Editing</span>

</div>

</section>

<section class="Experiance">
    <div class="section-Experiance">
<h2>Experiance</h2>
<div>
        <div class="exp-content">
                <img style="width:100px;height:100px;" src="IMG/TwitterCompany.png" alt="">
                <div class="exp-details">
                    <div style="display:flex;justify-content:space-between">
                    <h3>Product Designer</h3>
                   <a href=""><img style="width:30px;height:30px" src="IMG/Button.png" alt=""></a> 
                    </div> 
                    <p><b>Twitter</b> . Full-Time . June 2011-May 2019 (8y)</p>
                    <p>Manchester,UK</p>
                    <p>Created and executed social media plan for 10 brands 
                        utilizing multiple features and content
                        types to increase brand outreach, engagement, and leads.</p>
                </div>

        </div>

        <div class="exp-content">
                <img style="width:100px;height:100px;" src="IMG/HeartCompany.png" alt="">
                <div class="exp-details">
                    <div style="display:flex;justify-content:space-between">
                    <h3>Product Designer</h3>
                    <a href=""><img style="width:30px;height:30px" src="IMG/Button.png" alt=""></a> 
                    </div> 
                    <p> <b>GoDaddy</b> . Full-Time . June 2011-May 2019 (8y)</p>
                    <p>Manchester,UK</p>
                    <p>Developed digital marketing strategies, activation plans, proposals,
                         contests and promotions for client initiatives</p>
                </div>

        </div>
  </div>

  </div>
<div class="Additional-Details">
    <h2>Additional Details</h2>

        <div style="display:flex;gap:10px">
        <img style="width:20px;height:20px;margin-top:18px" src="IMG/Icon (7).png" alt="">
            <div>
        <h3>Major</h3>
        <ul>
            <li>Films</li>
        </ul>
        </div>

        </div>

        <div style="display:flex;gap:10px">
        <img style="width:20px;height:20px;margin-top:18px" src="IMG/Icon (7).png" alt="">
            <div>
        <h3>Major Flied</h3>
        <ul style="dispaly:flex;flex-direction:column">
            <li>Designer</li>
            <li>filmmaker</li>
        </ul>
        </div>

        </div>

</div>
</section>

<Section class="Education">

<h2>Education</h2>
<div class="display:flex;flex-direction:column;gap:20px">
        <div class="Edu-content">
                <img style="width:70px;height:70px;" src="IMG/Harvard.png" alt="">
                <div class="edu-details">
                   
                    <h3>Harvard University</h3>
                    <p>Postgraduate degree,Aplied Psychology</p>
                    <p>2010-2012</p>
                    <p>As an Applied Psychologist in the field of Consumer
                         and Society, I am specialized in creating business
                          opportunities by observing,
                         analysing, researching and changing behaviour.</p>
                </div>

        </div>

        <div class="Edu-content">
                <img style="width:70px;height:70px;" src="IMG/Toronto.png" alt="">
                <div class="edu-details">
                   
                    <h3>University of Toronto</h3>
                    <p>Bachelor of Arts, Visual Communication</p>
                    <p>2005-2009</p>
                    <p></p>
                </div>

        </div>

       
  </div>

</Section>


    </main>
    <footer><?php  include 'footer.php'  ?></footer>
</body>
</html>