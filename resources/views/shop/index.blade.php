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
                      <a class="nav-link" href="#" style="color: white;"><img src="assets/user.png" width="5%" alt="Avatar" /> {{$name}}</a>
                  </li>
                  <li class="nav-item" style="display:flex;">
                      <img src="assets/flous.png" alt="" width="5%" /> 
                      <a class="nav-link" href="#" style="color: white;">Balance : {{$solde}} TND</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;">Parameters</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;" data-toggle="modal" data-target="#exampleModalLong">Historique</a>
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
                <button type="button" onclick="myFunction(6)" style="background-color:black;"  class="btn btn__st2">6</button>
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
                <button type="button"  class="btn btn__st2" onclick="myFunction(10)" class="btn btn__red" >10</button>
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
                        <button type="button" onclick="dozen()"   class="btn btn__st">1 to 12</button>
                        <button type="button" onclick="dozen2()"   class="btn btn__st">12 to 24</button>
                        <button type="button"  onclick="dozen3()" class="btn btn__st">24 to 36</button>
                      </div>
                 </div>
             </div>
            </div>
             <div class="bets_zone">
                <div class="dozen">
                    <h2 class="info">FINAL </h2>
                    <div class="btn-group"role="group" aria-label="Basic example">
                       <button type="button" id="zeroF" onclick="zeroFinal()"  value="0" style="margin-left: 10px;" class="btn btn__st20">0</button>
                       <button type="button" id="oneF"   onclick="OneF()" value="1" class="btn btn__st2">1</button>
                       <button type="button" id="final" onclick="TwoF()" value="2" class="btn btn__st2">2</button>
                       <button type="button" id="ThreeF" onclick="ThreeF()" value="3" class="btn btn__st2">3</button>
                       <button type="button" id="FoorF" onclick="FoorF()" value="4"  class="btn btn__st2">4</button>
                       <button type="button"  id="Fivef" onclick="Fivef()" value="5" class="btn btn__st2">5</button>
                       <button type="button" id="SixF" onclick="SixF()" value="6" class="btn btn__st2">6</button>
                       <button type="button"  id="SevenF" onclick="SevenF()" value="7"  class="btn btn__st2">7</button>
                       <button type="button"  id="EightF" onclick="EightF()" value="8"  class="btn btn__st2">8</button>
                       <button type="button"  id="nighnF" onclick="nighnF()" value="9"  class="btn btn__st2">9</button>
                     </div>
                </div>
            </div>
            <div class="bets_zone">
                <div class="dozen">
                    <h2 class="info">COLOR </h2>
                    <div class="btn-group"role="group" aria-label="Basic example">
                       <button type="button" id="red" onclick="red()" style="margin-left: 4px;"  class="btn btn-danger">Red</button>
                       <button type="button" id="black" onclick="black()"  class="btn btn-dark">black</button>
                     </div>
                </div>
            </div>
            <div class="bets_zone">
                <div class="dozen">
                    <h2 class="info">EVEN/ODD </h2>
                    <div class="btn-group"role="group" aria-label="Basic example">
                        <button type="button" id="even" onclick="EVEN()"  class="btn btn__st">Even</button>
                        <button type="button" id="odd" onclick="odd()" class="btn btn__st">Odd</button>
                     </div>
                </div>
            </div>
            <div class="bets_zone">
                <div class="dozen">
                    <h2 class="info">LOW/HIGH </h2>
                    <div class="btn-group"role="group" aria-label="Basic example">
                        <button type="button" id="LOW" onclick="LOW()"  class="btn btn__st">1 to 18</button>
                        <button type="button" id="HIGH" onclick="HIGH()"  class="btn btn__st">19 to 36</button>
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
                        <button type="button" id="TWINS" onclick="TWINS()" class="btn btn__st33">11 - 22 - 33</button>
                     </div>
                </div>
            </div>
            <div class="bets_zone" id="divID">
                <div class="dozen">
                    <h2 class="info">LOW/HIGH & COLOR </h2>
                    <div class="btn-group"role="group" aria-label="Basic example">
                       <button type="button" style="margin-left: 4px;" id="LOWCOLORRED"  onclick="LOWCOLORRED()" class="btn btn-danger">Low</button>
                       <button type="button" style="margin-right: 10px;" id="LOWCOLORBLACK"  onclick="LOWCOLORBLACK()"  class="btn btn-dark">Low</button>
                       <button type="button" style="margin-left: 4px;"  id="HIGHCOLORBRED"  onclick="HIGHCOLORBRED()"   onclick="" class="btn btn-danger">HIGH</button>
                       <button type="button" style="margin-right: 10px;" id="HIGHCOLORBLACK"  onclick="HIGHCOLORBLACK()"    onclick="" class="btn btn-dark">HIGH</button>
                     </div>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="ticket__zone"style="border: 3px solid black;width: 142%;">
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
            {{-- <div id="list" style="background-color: white;margin-left: 22px;width: 141%;">
              
            </div> --}}
            <form  action='{{ route('handleTicket') }}' method='POST'>
                @csrf
                <input type="hidden" name="id" value="{{$id}}">
                <br>
                <div id="list" style="background-color: white;margin-left: 22px;width: 198%;">

                </div>
                <br>
                <input value="Valider" type="submit" class="btn btn-success" onclick="window.PrintElem()"  />  
                <input type="button" onclick="mydelete()" class="btn btn-danger" value="Supprimer"></button>
            </form>
            {{-- <div class="" id="totale" style="background-color: ghostwhite"></div> --}}
            {{-- <input type="button" value="Valider" class="btn btn-success" onclick="window.PrintElem()"  />  
            <input type="button" onclick="mydelete()" class="btn btn-danger" value="Supprimer"></button> --}}
            <img src="./assets/tv.png" class="tv" alt="TV" />
            <a href="/" target="_blank" rel="">Main Roulette</a>
          </div>

        </div>
      </div>







      <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">History</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @foreach ($tickets as $ticket)
            <span>ID Ticket:{{$ticket->id}}  &nbsp;&nbsp;&nbsp;  </span><span>Gain estimeé: {{$ticket->maxwin}} &nbsp; &nbsp;&nbsp;&nbsp; </span><span>Statut:  @if($ticket->statut == 0) <span class="text-warning">  en attente </span> @elseif($ticket->statut == 1) <span class="text-success"> Gagnant </span>@else <span class="text-danger">  Perdu </span> @endif</span><hr>
        @endforeach
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
      </div>
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
            // document.getElementById("totale").innerHTML=""; HIGHCOLORBLACK
            // document.getElementById("totale").innerHTML = " </span> <span style='float:center'>  Totale Mise :"+totaleMise+  "</span>   <span style='float:right'>      Totale Gain possible :  "+ totale +" </span><br>";
            // document.getElementById("list").innerHTML += "<span style='float:left'> Number : "+number +" </span> <span style='float:center'>   Mise :"+mise+  "</span>   <span style='float:right'>         Gain possible :  "+ gain +"TND </span><br>";  
            // document.getElementById("list").innerHTML += "<form id='"+number+"' action='{{ route('handleTicket') }}' method='POST' >  <span style='float:left'> Number : "+number +" </span> <span style='float:center'>   Mise :"+mise+  "</span>   <span style='float:right'>         Gain possible :  "+ gain +"TND </span></form> ";  

            
            document.getElementById("list").innerHTML += " <div class='row'>  <div class='col'> Number :  <input type='text' name='choice'  readonly='readonly'  value='"
             +number +
             "'> </div>  <div class='col'>   Mise :  <input type='number' name='mise'  readonly='readonly'  value='"
             +mise+
              "' > </div>  <div class='col'>  Gain possible : <input type='number' name='maxwin' readonly='readonly'  value='"
              + gain +
              "'>  </div></div><br> ";  
            
          }
          function HIGHCOLORBRED(number){
            var tab = new Array(19,21,23,25,27,30,32,34,36);
            let mise = document.getElementById("mise").value;
            var x = document.getElementById("HIGHCOLORBRED");
            let gain = mise*2 ; 
            for(var i=0;i<=tab.length;i++){
               number = tab[i]
            }          
            const str = tab.toString() + ": HIGH RED";
            number = str;
            // document.getElementById("list").innerHTML += "<span style='float:left;font-size:12px;'> Number : "+ number +" </span> <span style='float:center;font-size:12px;'>   Mise :"+mise+ "</span><span style='float:right;font-size:12px;'> Gain possible :  "+ gain +"TND </span><br>";
            document.getElementById("list").innerHTML += " <div class='row'>  <div class='col'> Number :  <input type='text' name='choice'  readonly='readonly'  value='"
             +number +
             "'> </div>  <div class='col'>   Mise :      <input type='number' name='mise'  readonly='readonly'  value='"
             +mise+
              "' > </div>  <div class='col'>  Gain possible : <input type='text' name='maxwin' readonly='readonly'  value=' "
              + gain +
              "TND'>  </div></div><br> ";   
          }
          function HIGHCOLORBLACK(number){
            var tab = new Array(20,22,24,26,29,31,33,35);
            let mise = document.getElementById("mise").value;
            var x = document.getElementById("HIGHCOLORBLACK");
            let gain = mise*2 ; 
            for(var i=0;i<=tab.length;i++){
               number = tab[i]
            }          
            const str = tab.toString() + ": HIGH BLACK";
            number = str;
            document.getElementById("list").innerHTML += "<span style='float:left;font-size:12px;'> Number : "+ number +" </span> <span style='float:center;font-size:12px;'>   Mise :"+mise+ "</span><span style='float:right;font-size:12px;'> Gain possible :  "+ gain +"TND </span><br>"; 
          }

          function LOWCOLORBLACK(number){
            var tab = new Array(2,4,6,8,10,11,13,15,17);
            let mise = document.getElementById("mise").value;
            var x = document.getElementById("LOWCOLORBLACK");
            let gain = mise*2 ; 
            for(var i=0;i<=tab.length;i++){
               number = tab[i]
            }          
            const str = tab.toString() + ": LOW BLACK";
            number = str;
            document.getElementById("list").innerHTML += "<span style='float:left;font-size:12px;'> Number : "+ number +" </span> <span style='float:center;font-size:12px;'>   Mise :"+mise+ "</span><span style='float:right;font-size:12px;'> Gain possible :  "+ gain +"TND </span><br>"; 
          }
          function LOWCOLORRED(number){
            var tab = new Array(1,3,5,7,9,12,14,16,18);
            let mise = document.getElementById("mise").value;
            var x = document.getElementById("LOWCOLORRED");
            let gain = mise*2 ; 
            for(var i=0;i<=tab.length;i++){
               number = tab[i]
            }          
            const str = tab.toString() + ": LOW RED";
            number = str;
            document.getElementById("list").innerHTML += "<span style='float:left;font-size:12px;'> Number : "+ number +" </span> <span style='float:center;font-size:12px;'>   Mise :"+mise+ "</span><span style='float:right;font-size:12px;'> Gain possible :  "+ gain +"TND </span><br>"; 
          }
          function EVEN(number){
            var tab = new Array(2,4,6,8,10,12,14,16,18,20,22,24,26,28,30,32,34,36);
            let mise = document.getElementById("mise").value;
            var x = document.getElementById("even");
            let gain = mise*2 ; 
            for(var i=0;i<=tab.length;i++){
               number = tab[i]
            }          
            const str = tab.toString() + ": Even";
            number = str;
            document.getElementById("list").innerHTML += "<span style='float:left;font-size:12px;'> Number : "+ number +" </span> <span style='float:center;font-size:12px;'>   Mise :"+mise+ "</span><span style='float:right;font-size:12px;'> Gain possible :  "+ gain +"TND </span><br>"; 
          }

          function odd(number){
            var tab = new Array(1,3,5,7,9,11,13,15,17,19,21,23,25,27,29,31,33,35,37,39);
            let mise = document.getElementById("mise").value;
            var x = document.getElementById("odd");
            let gain = mise*2 ; 
            for(var i=0;i<=tab.length;i++){
               number = tab[i]
            }          
            const str = tab.toString() + ": Odd";
            number = str;
            document.getElementById("list").innerHTML += "<span style='float:left;font-size:12px;'> Number : "+ number +" </span> <span style='float:center;font-size:12px;'>   Mise :"+mise+ "</span><span style='float:right;font-size:12px;'> Gain possible :  "+ gain +"TND </span><br>"; 
          }
          function LOW(number){
            var tab = new Array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18);
            let mise = document.getElementById("mise").value;
            var x = document.getElementById("LOW");
            let gain = mise*2 ; 
            for(var i=0;i<=tab.length;i++){
               number = tab[i]
            }          
            const str = tab.toString() + ": Low";
            number = str;
            document.getElementById("list").innerHTML += "<span style='float:left;font-size:12px;'> Number : "+ number +" </span> <span style='float:center;font-size:12px;'>   Mise :"+mise+ "</span><span style='float:right;font-size:12px;'> Gain possible :  "+ gain +"TND </span><br>"; 
          }
          function HIGH(number){
            var tab = new Array(19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36);
            let mise = document.getElementById("mise").value;
            var x = document.getElementById("LOW");
            let gain = mise*2 ; 
            for(var i=0;i<=tab.length;i++){
               number = tab[i]
            }          
            const str = tab.toString() + ": HIGH";
            number = str;
            document.getElementById("list").innerHTML += "<span style='float:left;font-size:12px;'> Number : "+ number +" </span> <span style='float:center;font-size:12px;'>   Mise :"+mise+ "</span><span style='float:right;font-size:12px;'> Gain possible :  "+ gain +"TND </span><br>"; 
          }
          function TWINS(number){
            var tab = new Array(11,22,33);
            let mise = document.getElementById("mise").value;
            var x = document.getElementById("TWINS");
            let gain = mise*2 ; 
            for(var i=0;i<=tab.length;i++){
               number = tab[i]
            }          
            const str = tab.toString() + ": HIGH";
            number = str;
            document.getElementById("list").innerHTML += "<span style='float:left;font-size:12px;'> Number : "+ number +" </span> <span style='float:center;font-size:12px;'>   Mise :"+mise+ "</span><span style='float:right;font-size:12px;'> Gain possible :  "+ gain +"TND </span><br>"; 
          }

          function red(number){
            var tab = new Array(1,3,5,7,9,12,14,16,18,19,21,23,25,27,30,32,34,36);
            let mise = document.getElementById("mise").value;
            var x = document.getElementById("red");
            let gain = mise*2 ;  
            for(var i=0;i<=tab.length;i++){
               number = tab[i]
            }          
            const str = tab.toString() + ": RED";
            number = str;
            document.getElementById("list").innerHTML += "<span style='float:left;font-size:12px;'> Number : "+ number +" </span> <span style='float:center;font-size:12px;'>   Mise :"+mise+ "</span><span style='float:right;font-size:12px;'> Gain possible :  "+ gain +"TND </span><br>";   
          }
          function black(number){
            var tab = new Array(2,4,6,10,11,13,15,17,20,22,24,26,28,29,31,33,35);
            let mise = document.getElementById("mise").value;
            var x = document.getElementById("black");
            let gain = mise*2 ;  
            for(var i=0;i<=tab.length;i++){
               number = tab[i]
            }          
            const str = tab.toString() + ": BLACK";
            number = str;
            document.getElementById("list").innerHTML += "<span style='float:left;font-size:12px;'> Number : "+ number +" </span> <span style='float:center;font-size:12px;'>   Mise :"+mise+ "</span><span style='float:right;font-size:12px;'> Gain possible :  "+ gain +"TND </span><br>";   
          }


          function dozen(number){
            var tab = new Array(1,2,3,4,5,6,7,8,9,10,11,12);
            let mise = document.getElementById("mise").value ;
            let gain = mise*3 ;  
            for(var i=0;i<=tab.length;i++){
               number = tab[i]
            }          
            const str = tab.toString();
            number = str;
            document.getElementById("list").innerHTML += "<span style='float:left'> Number : "+ number +" </span> <span style='float:center'>   Mise :"+mise+ "</span><span style='float:right'> Gain possible :  "+ gain +"TND </span><br>";   
          }
          function dozen2(number){
            var tab = new Array(12,13,14,15,16,17,18,19,20,21,22,23,24);
            let mise = document.getElementById("mise").value ;
            let gain = mise*3 ;  
            for(var i=12;i<=tab.length;i++){
               number = tab[i]
            }          
            const str = tab.toString();
            number = str;
            document.getElementById("list").innerHTML += "<span style='float:left'> Number : "+ number +" </span> <span style='float:center'>   Mise :"+mise+ "</span><span style='float:right'> Gain possible :  "+ gain +"TND </span><br>";   
          }
          function dozen3(number){
            var tab = new Array(24,25,26,27,28,29,30,31,32,33,34,35,36);
            let mise = document.getElementById("mise").value ;
            let gain = mise*3 ;  
            for(var i=24;i<=tab.length;i++){
               number = tab[i]
            }          
            const str = tab.toString();
            number = str;
            document.getElementById("list").innerHTML += "<span style='float:left;'> Number : "+ number +" </span> <span style='float:center'>   Mise :"+mise+ "</span><span style='float:right'> Gain possible :  "+ gain +"TND </span><br>";   
          }
         
          function zeroFinal(number) {
                let mise = document.getElementById("mise").value ;
                var tab = new Array(0,10,20,30);
                var x = document.getElementById("zeroF").value;
                let gain = mise*2 ;  
                for(var i=0;i<=tab.length;i++){
                   number = tab[i]
                              }          
                  const str = tab.toString();
                number = str;
               document.getElementById("list").innerHTML += "<span style='float:left'> Number : "+ number +" </span> <span style='float:center'>   Mise :"+mise+ "</span><span style='float:right'> Gain possible :  "+ gain +"TND </span><br>";   
                                 
           }
           function OneF(number) {
                let mise = document.getElementById("mise").value ;
                var tab = new Array(1,11,21,31);
                var x = document.getElementById("oneF").value;
                let gain = mise*2 ; 
                for(var i=0;i<=tab.length;i++){
                   number = tab[i]
                }          
                  const str = tab.toString();
                number = str;
               document.getElementById("list").innerHTML += "<span style='float:left'> Number : "+ number +" </span> <span style='float:center'>   Mise :"+mise+ "</span><span style='float:right'> Gain possible :  "+ gain +"TND </span><br>";   
                                 
           }

           function TwoF(number) {
                let mise = document.getElementById("mise").value ;
                var tab = new Array(2,12,22,32);
                var x = document.getElementById("oneF").value;
                let gain = mise*2 ; 
                for(var i=0;i<=tab.length;i++){
                   number = tab[i]
                }          
                  const str = tab.toString();
                number = str;
               document.getElementById("list").innerHTML += "<span style='float:left'> Number : "+ number +" </span> <span style='float:center'>   Mise :"+mise+ "</span><span style='float:right'> Gain possible :  "+ gain +"TND </span><br>";   
                                 
           }

           function ThreeF(number) {
                let mise = document.getElementById("mise").value ;
                var tab = new Array(3,13,23,33);
                var x = document.getElementById("ThreeF").value;
                let gain = mise*2 ;  
                for(var i=0;i<=tab.length;i++){
                   number = tab[i]
                }          
                  const str = tab.toString();
                number = str;
               document.getElementById("list").innerHTML += "<span style='float:left'> Number : "+ number +" </span> <span style='float:center'>   Mise :"+mise+ "</span><span style='float:right'> Gain possible :  "+ gain +"TND </span><br>";   
                                 
           }         
           function FoorF(number) {
                let mise = document.getElementById("mise").value ;
                var tab = new Array(4,14,24,34);
                var x = document.getElementById("FoorF").value;
                let gain = mise*2 ;  
                for(var i=0;i<=tab.length;i++){
                   number = tab[i]
                }          
                  const str = tab.toString();
                number = str;
               document.getElementById("list").innerHTML += "<span style='float:left'> Number : "+ number +" </span> <span style='float:center'>   Mise :"+mise+ "</span><span style='float:right'> Gain possible :  "+ gain +"TND </span><br>";   
                                 
           } 

           function Fivef(number) {
                let mise = document.getElementById("mise").value ;
                var tab = new Array(5,15,25,35);
                var x = document.getElementById("Fivef").value;
                let gain = mise*2 ;  
                for(var i=0;i<=tab.length;i++){
                   number = tab[i]
                }          
                  const str = tab.toString();
                number = str;
               document.getElementById("list").innerHTML += "<span style='float:left'> Number : "+ number +" </span> <span style='float:center'>   Mise :"+mise+ "</span><span style='float:right'> Gain possible :  "+ gain +"TND </span><br>";   
                                 
           } 
           function SixF(number) {
                let mise = document.getElementById("mise").value ;
                var tab = new Array(6,16,28,36);
                var x = document.getElementById("SixF").value;
                let gain = mise*2 ;  
                for(var i=0;i<=tab.length;i++){
                   number = tab[i]
                }          
                  const str = tab.toString();
                number = str;
               document.getElementById("list").innerHTML += "<span style='float:left'> Number : "+ number +" </span> <span style='float:center'>   Mise :"+mise+ "</span><span style='float:right'> Gain possible :  "+ gain +"TND </span><br>";   
                                 
           }  
           function SevenF(number) {
                let mise = document.getElementById("mise").value ;
                var tab = new Array(7,17,27,37);
                var x = document.getElementById("SevenF").value;
                let gain = mise*2 ;  
                for(var i=0;i<=tab.length;i++){
                   number = tab[i]
                }          
                  const str = tab.toString();
                number = str;
               document.getElementById("list").innerHTML += "<span style='float:left'> Number : "+ number +" </span> <span style='float:center'>   Mise :"+mise+ "</span><span style='float:right'> Gain possible :  "+ gain +"TND </span><br>";   
                                 
           }   
           function EightF(number) {
                let mise = document.getElementById("mise").value ;
                var tab = new Array(8,18,28);
                var x = document.getElementById("EightF").value;
                let gain = mise*2 ;  
                for(var i=0;i<=tab.length;i++){
                   number = tab[i]
                }          
                  const str = tab.toString();
                number = str;
               document.getElementById("list").innerHTML += "<span style='float:left'> Number : "+ number +" </span> <span style='float:center'>   Mise :"+mise+ "</span><span style='float:right'> Gain possible :  "+ gain +"TND </span><br>";   
                                 
           }   
           function nighnF(number) {
                let mise = document.getElementById("mise").value ;
                var tab = new Array(9,19,29);
                var x = document.getElementById("nighnF").value;
                let gain = mise*2 ; 
                for(var i=0;i<=tab.length;i++){
                   number = tab[i]
                }          
                  const str = tab.toString();
                number = str;
               document.getElementById("list").innerHTML += "<span style='float:left'> Number : "+ number +" </span> <span style='float:center'>   Mise :"+mise+ "</span><span style='float:right'> Gain possible :  "+ gain +"TND </span><br>";   
                                 
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

function PrintElem(list)
 {
    var mywindow = window.open('', 'PRINT', 'height=400,width=600');
    mywindow.document.write(document.getElementById("list").innerHTML);

    mywindow.document.close(); // necessary for IE >= 10
    mywindow.focus(); // necessary for IE >= 10*/

    mywindow.print();
    mywindow.close();

    return true;
 }
          
        </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>