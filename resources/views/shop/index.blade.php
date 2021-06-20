<!doctype html>
<html lang="en">
  <head>
    <title>Roulette wheel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="shop/style.css">
  </head>
  <body style="background-color: rgb(0, 9, 79);"> 
      <nav class="navbar navbar-expand-sm navbar-light " style="background-color: rgb(0, 9, 79);">
          <div class="collapse navbar-collapse" id="collapsibleNavId">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                      <a class="nav-link" href="#" style="color: white;"><img src="assets/user.png" width="5%" alt="Avatar" />  User</a>
                  </li>
                  <li class="nav-item" style="display:flex;">
                      <img src="assets/flous.png" alt="" width="5%" /> 
                      <a class="nav-link" href="#" style="color: white;">Balance : 0.000 TND</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;">Parameters</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;">Historique</a>
                </li>
              </ul>
          </div>
      </nav>
      <br>
      <div class="container">
        
        <div class="row">
          <button type="button" style="margin-right: -20px; height :100px" onclick="myFunction(0)"  class="btn btn__st20">0</button>
          <div class="col">
            
            <!-- Table -->
              {{-- <h3 style="color: white;">Nikomou e tableaux</h3> --}}
              <div class="btn-group"role="group" aria-label="Basic example">
                <button type="button" onclick="myFunction(3)" style="margin-left: 10px;" class="btn btn__red">3</button>
                <button type="button" onclick="myFunction(6)"  class="btn btn__st2">6</button>
                <button type="button" onclick="myFunction(9)"  class="btn btn__red">9</button>
                <button type="button" onclick="myFunction(12)"  class="btn btn__red">12</button>
                <button type="button" onclick="myFunction(15)"  class="btn btn__st2">15</button>
                <button type="button" onclick="myFunction(18)"  class="btn btn__red">18</button>
                <button type="button" onclick="myFunction(21)"  class="btn btn__red">21</button>
                <button type="button" onclick="myFunction(24)"  class="btn btn__st2">24</button>
                <button type="button" onclick="myFunction(27)"  class="btn btn__red">27</button>
                <button type="button" onclick="myFunction(30)"  class="btn btn__red">30</button>
                <button type="button" onclick="myFunction(33)"  class="btn btn__st2">33</button>
                <button type="button" onclick="myFunction(36)"  class="btn btn__red">36</button>
              </div>
              <div class="btn-group"role="group" aria-label="Basic example">
                <button type="button" style="margin-left: 10px;" class="btn btn__st2" onclick="myFunction(2)">2</button>
                <button type="button"  class="btn btn__red" onclick="myFunction(5)">5</button>
                <button type="button"  class="btn btn__st2" onclick="myFunction(8)">8</button>
                <button type="button"  class="btn btn__st2" onclick="myFunction(11)">11</button>
                <button type="button"  class="btn btn__red" onclick="myFunction(14)">14</button>
                <button type="button"  class="btn btn__st2" onclick="myFunction(17)">17</button>
                <button type="button"  class="btn btn__st2" onclick="myFunction(20)">20</button>
                <button type="button"  class="btn btn__red" onclick="myFunction(23)">23</button>
                <button type="button"  class="btn btn__st2" onclick="myFunction(26)">26</button>
                <button type="button"  class="btn btn__st2" onclick="myFunction(29)">29</button>
                <button type="button"  class="btn btn__red" onclick="myFunction(32)">32</button>
                <button type="button"  class="btn btn__st2" onclick="myFunction(35)">35</button>
            
              </div>
              <div class="btn-group"role="group" aria-label="Basic example">
                
                <button type="button" style="margin-left: 10px;" onclick="myFunction(1)" class="btn btn__red" >1</button>
                <button type="button"  class="btn btn__st2"  onclick="myFunction(4)">4</button>
                <button type="button"  class="btn btn__red" onclick="myFunction(7)">7</button>
                <button type="button"  class="btn btn__st2" onclick="myFunction(10)">10</button>
                <button type="button"  class="btn btn__st2" onclick="myFunction(13)">13</button>
                <button type="button"  class="btn btn__red" onclick="myFunction(16)">16</button>
                <button type="button"  class="btn btn__red" onclick="myFunction(19)">19</button>
                <button type="button"  class="btn btn__st2" onclick="myFunction(22)">22</button>
                <button type="button"  class="btn btn__red" onclick="myFunction(25)">25</button>
                <button type="button"  class="btn btn__st2" onclick="myFunction(28)">28</button>
                <button type="button"  class="btn btn__st2" onclick="myFunction(31)">31</button>
                <button type="button"  class="btn btn__red" onclick="myFunction(34)">34</button>
              </div>
            <!-- Table -->
          <div style="margin-top: 40px">
             <div class="bets_zone">
                 <div class="dozen">
                     <h2 class="info">DOZEN</h2>
                     <div class="btn-group"role="group" aria-label="Basic example">
                        <button type="button"  class="btn btn__st">1 to 12</button>
                        <button type="button"  class="btn btn__st">12 to 24</button>
                        <button type="button" class="btn btn__st">24 to 36</button>
                      </div>
                 </div>
             </div>
            </div>
             <div class="bets_zone">
                <div class="dozen">
                    <h2 class="info">FINAL </h2>
                    <div class="btn-group"role="group" aria-label="Basic example">
                       <button type="button" style="margin-left: 10px;" class="btn btn__st20">0</button>
                       <button type="button"  class="btn btn__st2">1</button>
                       <button type="button"  class="btn btn__st2">2</button>
                       <button type="button"  class="btn btn__st2">3</button>
                       <button type="button"  class="btn btn__st2">4</button>
                       <button type="button"  class="btn btn__st2">5</button>
                       <button type="button"  class="btn btn__st2">6</button>
                       <button type="button"  class="btn btn__st2">7</button>
                       <button type="button"  class="btn btn__st2">8</button>
                       <button type="button"  class="btn btn__st2">9</button>
                     </div>
                </div>
            </div>
            <div class="bets_zone">
                <div class="dozen">
                    <h2 class="info">COLOR </h2>
                    <div class="btn-group"role="group" aria-label="Basic example">
                       <button type="button" style="margin-left: 4px;"  class="btn btn-danger">Red</button>
                       <button type="button"  class="btn btn-dark">black</button>
                     </div>
                </div>
            </div>
            <div class="bets_zone">
                <div class="dozen">
                    <h2 class="info">EVEN/ODD </h2>
                    <div class="btn-group"role="group" aria-label="Basic example">
                        <button type="button"  class="btn btn__st">Even</button>
                        <button type="button"  class="btn btn__st">Odd</button>
                     </div>
                </div>
            </div>
            <div class="bets_zone">
                <div class="dozen">
                    <h2 class="info">LOW/HIGH </h2>
                    <div class="btn-group"role="group" aria-label="Basic example">
                        <button type="button"  class="btn btn__st">1 to 18</button>
                        <button type="button"  class="btn btn__st">19 to 36</button>
                     </div>
                </div>
            </div>
            <div class="bets_zone">
                <div class="dozen">
                    <h2 class="info">ALPHA </h2>
                    <div class="btn-group"role="group" aria-label="Basic example">
                       <button style="margin-left: 33px;"  type="button"  class="btn btn__st2" onclick="betLetter('A')">A</button>
                       <button type="button"  class="btn btn__st2" onclick="betLetter('B')">B</button>
                       <button type="button"  class="btn btn__st2" onclick="betLetter('C')">C</button>
                       <button type="button"  class="btn btn__st2" onclick="betLetter('D')">D</button>
                       <button type="button"  class="btn btn__st2" onclick="betLetter('E')">E</button>
                       <button type="button"  class="btn btn__st2" onclick="betLetter('F')">F</button>
                     </div>
                </div>
            </div>
            <div class="bets_zone">
                <div class="dozen">
                    <h2 class="info">TWINS</h2>
                    <div class="btn-group"role="group" aria-label="Basic example">
                        <button type="button"  class="btn btn__st33">11 - 22 - 33</button>
                     </div>
                </div>
            </div>
            <div class="bets_zone" id="divID">
                <div class="dozen">
                    <h2 class="info">LOW/HIGH & COLOR </h2>
                    <div class="btn-group"role="group" aria-label="Basic example">
                       <button type="button" style="margin-left: 4px;"  class="btn btn-danger">Low</button>
                       <button type="button" style="margin-right: 10px;"  class="btn btn-dark">Low</button>
                       <button type="button" style="margin-left: 4px;"  class="btn btn-danger">HIGH</button>
                       <button type="button" style="margin-right: 10px;"  class="btn btn-dark">HIGH</button>
                     </div>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="ticket__zone"style="border: 3px solid black;">
                <div class="zone1">
                    <span class="s1">secteur</span>
                    <span class="s1">miltip</span>
                    <span class="s1">gains</span>
                </div>
                <div class="solde" style="margin-top: 15px;">
                    <span style="margin-left: 20px;" class="s1">mise</span>
                    <input style="width:80px;margin-right: auto;border: none;" type="number" id="mise" name="" value="1" min="1" id="">
                    <span class="s1">total:</span>
                    <span class="s1">0</span>
                </div>
            </div>
            <!-- Jeton -->
            {{-- <button>Valider</button> --}}
            <div id="list" style="background-color: white">
             
            </div>
            {{-- <div class="" id="totale" style="background-color: ghostwhite"></div> --}}
            <input type="button" value="Valider" class="btn btn-success" onclick="window.print();"  />  
            <input type="button" onclick="mydelete()" class="btn btn-danger" value="Supprimer"></button>
            <img src="./assets/tv.png" class="tv" alt="TV" />
          </div>

        </div>
      </div>

        <script>

          function myFunction(number) {
            let mise = document.getElementById("mise").value ;
            let gain = mise*36 ;
            
           let totaleMise;
           console.log(totaleMise);
            if (totaleMise == undefined){
              totaleMise = 0;
            }
            totaleMise=totaleMise+mise;
            var totale =gain+totale;
            console.log(totaleMise);
            // document.getElementById("totale").innerHTML="";
            // document.getElementById("totale").innerHTML = " </span> <span style='float:center'>  Totale Mise :"+totaleMise+  "</span>   <span style='float:right'>      Totale Gain possible :  "+ totale +" </span><br>";
            document.getElementById("list").innerHTML += "<span style='float:left'> Number : "+number +" </span> <span style='float:center'>   Mise :"+mise+  "</span>   <span style='float:right'>         Gain possible :  "+ gain +"TND </span><br>";  
          }
          function betLetter(number) {

            let mise = document.getElementById("mise").value ;
            let gain = mise*6 ;

            document.getElementById("list").innerHTML += "<span style='float:left'> Letter : "+number +" </span> <span style='float:center'>   Mise :"+mise+  "</span>   <span style='float:right'>         Gain possible :  "+ gain +"TND </span><br>";   
          }

          function betColorEvenLow() {
         document.getElementById("list").innerHTML = ""; 
          }

          function mydelete() {
         document.getElementById("list").innerHTML = ""; 
          }

          function mydelete() {
         document.getElementById("list").innerHTML = ""; 
          }

          
        </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>