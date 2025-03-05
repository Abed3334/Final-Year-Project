<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Employees</title>
    <link rel="stylesheet" href="CSSFiles/FindEmployees.css">
</head>
<body>
    <header><?php include 'Header.php' ?></header>
    <main>

    <div class="hero-container">
        <div class="hero">
            <h1><span>Find Your</span> <span>Dream Team</span></h1>
        <p>Find the dream company you desire to work for</p>

        </div>

        <div class="search-bar">
            <div>
                <img src="IMG/Search.png" alt="" class="searchimg">
                <input type="text" placeholder="Job title or keyword">
            </div>
            <img src="IMG/Divider.png" alt="" class="divider">
            <div>
                <img src="IMG/Location.png" alt="" class="searchimg">
                <input type="text" placeholder="City, country">
            </div>
            <button>Search</button>
        </div>
    </div>

<section class="Employees-sec">
<h2>All Candidates</h2>
        <div class="Employees">

            <div class="Employeediv">
                <div style="display:flex; justify-content:space-between">   <img style="height:50px;width:50px;border-radius:50%" src="IMG/girlprofilePhoto.jpg" alt=""><a href=""> <button class="ProfileButt">Profile</button></a></div>
                <h3>Rama Salem</h3>
                <p>Paris , France</p>
                <div style="display:flex;flex-wrap:wrap;gap:10px"><span>Business</span> <span>Marketing</span> <span>Digital Marketing</span> </div>
            </div>

            <div class="Employeediv">
                <div style="display:flex; justify-content:space-between">   <img style="height:50px;width:50px;border-radius:50%" src="IMG/Girl2profile.jpg" alt=""><a href=""> <button class="ProfileButt">Profile</button></a></div>
                <h3>Sara Sam</h3>
                <p>Paris , France</p>
                <div style="display:flex;flex-wrap:wrap;gap:10px"><span>Business</span> <span>Finance</span> <span>Digital Media</span> </div>
            </div>

            <div class="Employeediv">
                <div style="display:flex; justify-content:space-between">   <img style="height:50px;width:50px;border-radius:50%" src="IMG/BoyProfile.jpg" alt=""><a href=""> <button class="ProfileButt">Profile</button></a></div>
                <h3>Rami Habli</h3>
                <p>Ryad , Suadi Arabia</p>
                <div style="display:flex;flex-wrap:wrap;gap:5px"><span>Developer</span> <span>WebDeveloper</span> <span>Digital Marketing</span> </div>
            </div>

            <div class="Employeediv">
                <div style="display:flex; justify-content:space-between">   <img style="height:50px;width:50px;border-radius:50%" src="IMG/Girl2profile.jpg" alt=""><a href=""> <button class="ProfileButt">Profile</button></a></div>
                <h3>Yara kan</h3>
                <p>Saida , Lebanon</p>
                <div style="display:flex;flex-wrap:wrap;gap:10px"><span>Business</span> <span>Marketing</span> <span>Digital Marketing</span> </div>
            </div>


            <?php  // Assuming $conn is your database connection 
// $totalResult = $conn->query("SELECT COUNT(id) AS id FROM employees");
// $totalEmployee = $totalResult->fetch_assoc()['id'];

/*




$totalPages = ceil($totalEmployee / $limit); // Total pages needed

echo '<div class="pagination">';
echo '<a href="?page=1">First</a>';
for ($i = 1; $i <= $totalPages; $i++) {
    echo '<a href="?page=' . $i . '">' . $i . '</a>';
}
echo '<a href="?page=' . $totalPages . '">Last</a>';
echo '</div>';
*/
?>


        </div>


</section>












    </main>

    <footer> <?php include 'footer.php'?></footer>
</body>
</html>