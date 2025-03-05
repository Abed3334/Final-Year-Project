<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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

.logoutbutt{
    background-color:white;
    color:rgba(10, 102, 194, 1);
    width: 50px;
    padding:10px;
}
.logoutbutt:hover{
    background-color:rgba(10, 102, 194, 1);
    color:white;

}


    </style>
</head>
<body>
    

<div class="overlay" onclick="closeModal()"></div>
    <div class="center">
       
        <div class="modal">
            <div style="border: solid 1px black;width:100%;height:100%;padding:10px">
            <h1 style="display:flex;justify-content:center;margin-top:20px;">Are you sure you want to logout?</h1>
            <div style="display:flex;justify-content:flex-end;gap:20px;margin-top:100px;">
            <button class="logoutbutt" >Yes</button>
            <button class="logoutbutt" onclick="closeModal()">No</button>
        
            </div>
            </div>
        </div>
    </div>
    <script>
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
</body>
</html>