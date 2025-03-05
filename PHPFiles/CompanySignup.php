<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form</title>
    <style>
        body{
            margin:0px;
            padding:0px;
        }
        h1,h3{
            color:rgba(0, 46, 91, 1);
           
        }
         main{
            display:flex;
            flex-direction:column;
            align-items:center;
           

         }
       
         .container {
   
    margin: 20px auto;
    padding: 20px;
    width:70%;
   height:600px;
 background-color:rgba(237, 243, 255, 1);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
 form{
    display:flex;
    justify-content:space-evenly;
    flex-wrap:wrap;
 }
.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
}

input[type="url"], textarea, select {
    width: 400px;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

textarea {
    height: 100px;
    resize: none;
}
label{
    color:rgba(0, 46, 91, 1);
    font-weight:bold;
}
button {
    background-color: #0a66c2;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    display: block;
    width: 70%;
    margin-top:120px;
}

button:hover {
    background-color: #094a82;
}
.overlay {
            display: none;
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 123, 255, 0.5); 
            z-index: 2; 
            cursor: pointer; 
        }
.modal {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    
    transform: translate(-50%, -50%);
    width: 500px;
  
    padding: 20px;
    background: white;
    z-index: 3;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
   
    height:250px;
}
@media (max-width: 600px) {
    .container {
        width: 90%;
        margin: 20px auto;
        padding: 15px;
    }

}
    </style>
</head>
<body>
    <main>

    <h1>  More information about the company is needed to <br> <span style="color:rgba(244, 161, 32, 1);margin-left:120px">complete the registration request</span>  </h1>

    <div class="container">
        <form id="createAccountForm">
            <div>
            <div class="form-group">
                <label for="">Location</label>
                <label for="city">City</label>
                <select id="city" required>
                    <option value="">Select a city</option>
                    <option value="new_york">New York</option>
                    <option value="london">London</option>
                </select>

                <label for="country">Country</label>
                <select id="country" required>
                    <option value="">Select a country</option>
                    <option value="usa">USA</option>
                    <option value="uk">UK</option>
                </select>
            </div>

            <div class="form-group">
                <label for="businessType">Business Type</label>
                <select id="businessType" required>
                    <option value="">Select</option>
                    <option value="tech">Tech</option>
                    <option value="retail">Retail</option>
                </select>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" placeholder="Type company's description" required></textarea>
            </div>
            </div>
                <div>
            <div class="form-group">
                <label for="">Social Links</label>
                <label for="instagram">Instagram</label>
                <input type="url" id="instagram" placeholder="Enter link" required>

                <label for="website">Website</label>
                <input type="url" id="website" placeholder="Enter link" required>

                <label for="linkedin">LinkedIn</label>
                <input type="url" id="linkedin" placeholder="Enter link" required>
            </div>

            <button type="submit" onclick="openModal()">Create Account</button>
            </div>
        </form>
    </div>





     </div>













    </main>
    <div class="overlay" onclick="closeModal()"></div>
    <div class="center" onclick="closeModal()">
       
        <div class="modal">
            <div style="padding:10px;border: solid 1px black;width:100%;height:100%;padding:10px;display:flex;align-items:center;justify-content:center;">
            <h3 style="display:flex;justify-content:center;margin-top:20px;">Thank you for choosing us!
            You can login once the request is accepted</h3>
           
            </div>
        </div>
    </div>


    <script>
        document.getElementById('createAccountForm').addEventListener('submit', function(event) {
    event.preventDefault();  // Prevent the form from submitting normally
    if (this.checkValidity()) {
        alert('Form is valid! Submitting...');
        // Here you would typically handle the form submission,
        // such as using `fetch()` or another method to submit the form data.
    } else {
        alert('Please fill out all required fields.');
    }
});
const overlay = document.querySelector('.overlay');
        const modal = document.querySelector('.modal');

        function openModal() {
    document.querySelector('.overlay').style.display = 'block';
    document.querySelector('.modal').style.display = 'flex';
    document.body.classList.add('blurred');
}

function closeModal() {
    document.querySelector('.overlay').style.display = 'none';
    document.querySelector('.modal').style.display = 'none';
    document.body.classList.remove('blurred');
}
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>