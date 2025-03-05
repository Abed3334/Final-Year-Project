<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discover Companies</title>
    <link rel="stylesheet" href="CSSFiles/DiscoverCompanies.css">
</head>
<body>
    <header><?php include 'Header.php' ?></header>

    <main>
    <div class="hero-container">
        <div class="hero">
            <h1><span>Find Your</span> <span>Dream Company</span></h1>
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
    <section class="CompaniesCatagoriesandRecommended">
        <div class="CompaniesCatagories">
        <h2>Companies by Category</h2>
        <div class="CompaniesCat-Container">
               <a href=""> <div class="catagories-content">
                    <img src="IMG/Pencil.png" alt="">
                    <h3> Design  </h3>
                </div></a>

                <a href=""><div class="catagories-content">
                    <img src="IMG/Earth.png" alt="">
                    <h3> Hosting  </h3>
                </div></a>

               <a href=""><div class="catagories-content">
                    <img src="IMG/Money.png" alt="">
                    <h3>  Fintech </h3>
                </div></a> 

                <a href=""><div class="catagories-content">
                    <img src="IMG/Medicine.png" alt="">
                    <h3> Medicine  </h3>
                </div></a>

                <a href=""><div class="catagories-content">
                    <img src="IMG/Developer.png" alt="">
                    <h3>  Developer </h3>
                </div></a>

                <a href=""><div class="catagories-content">
                    <img src="IMG/Bag.png" alt="">
                    <h3> Business Service  </h3>
                </div></a>

                <a href=""><div class="catagories-content">
                    <img src="IMG/Engineer.png" alt="">
                    <h3> Engineering  </h3>
                </div></a>
        </div>

        </div>

        <div class="Recommended">
                <h2>Recommended Companies</h2>
                <div class="Recomended-Content">
                <img src="IMG/Company2.png" alt="">
                <h3>Nomad</h3>
                <p>Nomad is located in Paris, France. 
                    Nomad has generates $728,000 in sales (USD).</p>
                    <span>Business Service</span>
                </div>

                <div class="Recomended-Content">
                <img src="IMG/Company2.png" alt="">
                <h3>Nomad</h3>
                <p>Nomad is located in Paris, France. 
                    Nomad has generates $728,000 in sales (USD).</p>
                    <span>Business Service</span>
                </div>

                <div class="Recomended-Content">
                <img src="IMG/Company2.png" alt="">
                <h3>Nomad</h3>
                <p>Nomad is located in Paris, France. 
                    Nomad has generates $728,000 in sales (USD).</p>
                    <span>Business Service</span>
                </div>
        </div>
    </section>

    <section class="Results">
<div style="display:flex;gap:20px"><img style="width:60px;height:60px;margin-buttom:30px" src="IMG/Result.png" alt=""><p style="font-size:20px;">Results:</p></div>
            <div class="Result-content">
                    <a href=""><div class="companies">
                        <img class="compLogo" src="IMG/Pentagram.png" alt="">
                        <h3>Pentagram</h3>
                    </div></a>

                    <a href=""><div class="companies">
                        <img class="compLogo" src="IMG/Square.png" alt="">
                        <h3>Square</h3>
                    </div>
                    </a>
                    <a href=""><div class="companies">
                        <img class="compLogo" src="IMG/Pentagram.png" alt="">
                        <h3>Pentagram</h3>
                    </div></a>

                    <a href=""><div class="companies">
                        <img class="compLogo" src="IMG/Square.png" alt="">
                        <h3>Square</h3>
                    </div>
                    </a>




            </div>

        <a style="" href="">View more Design companies </a>
    </section>
    
    </main>

<footer><?php  include 'footer.php'    ?></footer>


</body>
</html>