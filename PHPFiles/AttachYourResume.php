<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Attach Your Resume</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        body {
           
            margin: 0;
            padding:0;
            font-family: Arial, sans-serif;
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

        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .Attach {
            display: none; 
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background: white;
    margin-top:100px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            z-index: 3; 
            width: 40%;
            height:300px;
            gap:20px;

        }

        button {
    background-color: rgba(10, 102, 194, 1);
    color: white;
    border: none;
    padding: 10px 15px;
   
    cursor: pointer;
    width: 25%;
    height: 50px;
    margin-top: 20px;
    font-size: x-large;
   display: flex;
   justify-content: center;
   align-items: center;
  
    
}
button:hover {
    background-color: rgb(71, 134, 197);
}

.attach-certificate {
    border: 2px dashed #007bff;
    padding: 20px;
    text-align: center;
    border-radius: 10px;
    cursor: pointer;
    display: inline-block;
    background: #f8faff;
    width: 260px;
    height: 30px;
    display: flex;
    align-items: center;
}
.attach-certificate:hover {
    background: #eaf1ff;
}
.certificate-label {
    color: #6c757d;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    font-size: 18px;
}
.attach-icon {
    width: 24px;
    height: 24px;
}
.file-name {
    margin-top: 10px;
    color: #007bff;
    font-size: 14px;
}

h1{
    color: rgba(0, 46, 91, 1);
}

@media (max-width:767px) {
    .Attach{
        width: 400px;

    }
}
    </style>
</head>
<body>
    <div class="overlay" onclick="closeModal()"></div>
    <button onclick="openModal()">Upload Your CV</button>
    <div class="center">
        <div class="Attach">
            <h1>Attach Your Resume</h1>
            <div class="attach-certificate">
                <input type="file" id="certificateInput" class="file-input" hidden>
                <label for="certificateInput" class="certificate-label">
                    <img src="IMG/Attach.png" alt="Attach" class="attach-icon">
                    Attach Resume/CV
                </label>
                <p class="file-name"></p>
            </div>
            <button>Submit</button>
        </div>
    </div>

    <script>
        const overlay = document.querySelector('.overlay');
        const modal = document.querySelector('.Attach');

        function openModal() {
            overlay.style.display = 'block';
            modal.style.display = 'flex'; // Changes from 'none' to 'flex' to show the modal
        }

        function closeModal() {
            overlay.style.display = 'none';
            modal.style.display = 'none';
        }

        const certificateInput = document.getElementById('certificateInput');
        const fileNameDisplay = document.querySelector('.file-name');

        certificateInput.addEventListener('change', function() {
            const fileName = this.files[0]?.name;
            if (fileName) {
                fileNameDisplay.textContent = `Selected: ${fileName}`;
            } else {
                fileNameDisplay.textContent = '';
            }
        });
    </script>
</body>
</html>
