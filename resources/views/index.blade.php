<!DOCTYPE html>
<html>
  <head>
    <title>Roulette wheel</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link rel="icon" href="whel.png" type="image/gif" sizes="16x16">
   <style>


.round-time-bar {
  margin: 1rem;
  overflow: hidden;
}
.round-time-bar div {
  height: 5px;
  animation: roundtime calc(var(--duration) * 1s) steps(var(--duration))
    forwards;
  transform-origin: left center;
  background: linear-gradient(to bottom, red, #900);
}

.round-time-bar[data-style="smooth"] div {
  animation: roundtime calc(var(--duration) * 1s) linear forwards;
}

.round-time-bar[data-style="fixed"] div {
  width: calc(var(--duration) * 5%);
}

.round-time-bar[data-color="blue"] div {
  background: linear-gradient(to bottom, #64b5f6, #1565c0);
}

@keyframes roundtime {
  to {
    /* More performant than `width` */
    transform: scaleX(0);
  }
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.container {
  position: relative;
  text-align: center;
  color: white;
  margin-top: 40px;
}

table, tr, td {
  border: 1px solid white;
  border-collapse: collapse;
  font-size: 20px;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
}
   </style>
  </head>

  <body class="back" >
    {{-- <div class="container">
    <h1 id="result" class="result centred"  >ok</h1>
    <div><span class="countdown" class="button" id="time">00:25</span>
    <div class="round-time-bar" data-style="smooth" style="--duration: 27;">
      <div></div>
    </div></div>
    <form action="post" name="value">
    <input type="hidden" name="value" id="value" value="">
    </form>
    
    <div id="app">
      {{-- <div><span><img  src="button.png"  width="280px"/></span></div> --}}
      {{-- <img class="marker" src="marker.png" />  

      <img style="margin-top:5px" class="wheel" src="whel.png" /> --}}
      {{-- <img style="margin-top:-660px ; width:130px ;margin-left:135px"  class="wheel1" src="center.svg" /> --}}
      {{-- <img class="button" src="button.png" />
      
    </div> --}}
    
   
  {{-- </div> --}} 
  {{-- <table >
    
    <tr> --}}
      {{-- <td id="resultable"></td> --}}
     {{-- <td style="background-color: red; color : white">5</td>
  </tr>
  <tr>
    <td style="background-color: red; color : white">7</td>
   
</tr>
<tr>
  <td style="background-color: rgb(0, 0, 0); color : white">8</td>
 
</tr>
<tr>
  <td style="background-color: rgb(0, 0, 0); color : white">35</td>

</tr>
<tr>
  <td style="background-color: red; color : white">5</td>

</tr>
  </table> --}}
  {{-- <div class="" style="float: left;margin-top:-90px">
  
    <h2 style="background-color: cornsilk">5 </h2>
    <h2 style="background-color: cornsilk">5 </h2>
    <h2 style="background-color: cornsilk">5 </h2>
    <h2 style="background-color: cornsilk">5 </h2>
    <h2 style="background-color: cornsilk">5 </h2>
    <h2 style="background-color: cornsilk">5 </h2>
    <h2 style="background-color: cornsilk">5 </h2>

  </div> --}}
  
  <div style="background-color: rgb(255, 208, 0) ;width:190px;" >
    <h2 style="background-color: cornsilk;width:190px">LAST RESULTS </h2>
@foreach ($results as $item)
<span style="font-size: 23px"> {{$item->result}}   |</span>
@endforeach
    {{-- <span style="font-size: 30px"> 8   |</span>
    <span style="font-size: 30px"> 8   |</span>
    <span style="font-size: 30px"> 8   |</span>
    <span style="font-size: 30px"> 8   |</span>
    <span style="font-size: 30px"> 8   |</span> --}}

  </div>
  <div class="container app">
   
 
    <img class="marker" src="marker.png" /> 

    <img src="whel.png" id="wheel" style="width:33%;"/>
    
    <div class="centered " style="margin-top: -210px ;position:relative " ><img  src="center.svg" />  </div>
      <h1 id="result" class="result " style="margin-top:-185px  "  >{{$result}}</h1>
      {{-- <img  src="center.svg" />   --}}
      {{-- <h1 id="result" class="result"  >ok</h1> --}}
    
    <img class="button"  />
  </div>
  
  <div style="background-color: blue ; width :180px ; border-radius:10px ;padding-left:20px ;margin-top:-50px" >
    <h3 id="resultable">0 </h3> 
    
    <span style="font-size: 25px;">Next Game in :</span>
    <span class="countdown"   class="button" id="time"> 00:25</span>
  </div>
  {{-- <input type="hidden" name="value" id="value" value=""> --}}
 
 
  <table style="float: right  ; margin-top: -450px ;margin-top: -450px ; background-color:rgb(90, 90, 90); color:white">
   
    <tr>
      <td class="red">1</td>
      <td>&nbsp; &nbsp;0&nbsp;&nbsp; </td>
      <td class="black">13</td>
      <td>&nbsp;&nbsp;0&nbsp;&nbsp;</td>
      <td class="red">25</td>
      <td>&nbsp;&nbsp;0&nbsp;&nbsp;</td>
    </tr>
    <tr>
      <td class="black">2</td>
      <td></td>
      <td class="red">14</td>
      <td></td>
      <td class="black">26</td>
      <td></td>
    </tr>
    <tr>
      <td class="red">3</td>
      <td></td>
      <td class="black">15</td>
      <td></td>
      <td class="red">27</td>
      <td></td>
    </tr>
    <tr>
      <td class="black">4</td>
      <td></td>
      <td class="red">16</td>
      <td></td>
      <td class="black">28</td>
      <td></td>
    </tr>
    <tr>
      <td class="red">5</td>
      <td></td>
      <td class="black">17</td>
      <td></td>
      <td class="black">29</td>
      <td></td>
    </tr>
    <tr>
      <td class="black">6</td>
      <td></td>
      <td class="red">18</td>
      <td></td>
      <td class="red">30</td>
      <td></td>
    </tr>
    <tr>
      <td class="red">7</td>
      <td></td>
      <td class="red">19</td>
      <td></td>
      <td class="black">31</td>
      <td></td>
    </tr>
    <tr>
      <td class="black">8</td>
      <td></td>
      <td class="black">20</td>
      <td></td>
      <td class="red">32</td>
      <td></td>
    </tr>
    <tr>
      <td class="red">9</td>
      <td></td>
      <td class="red">21</td>
      <td></td>
      <td class="black">33</td>
      <td></td>
    </tr>
    <tr>
      <td class="black">10</td>
      <td></td>
      <td class="black">22</td>
      <td></td>
      <td class="red">34</td>
      <td></td>
    </tr>
    <tr>
      <td class="black">11</td>
      <td></td>
      <td class="red">23</td>
      <td></td>
      <td class="black">35</td>
      <td></td>
    </tr>
    <tr>
      <td class="red">12</td>
      <td></td>
      <td class="black">24</td>
      <td></td>
      <td class="red">36</td>
      <td></td>
    </tr>
    <tr>
      <td>0</td>
      <td></td>
      <td></td>
      <td>4</td>
      <td></td>
      <td></td>
    </tr>
  </table>
    


  <form name="yourform" id="yourform" method="POST" action="/">
    @csrf
    <input onchange="send()" type="hidden" id="value" name="value" value="{{$result}}">
    <input type="submit" id="send" name="send" value="Send">
</form>
<script>     
    let value=document.getElementById('value');     

    // let ok =addEventListener.getElementById('value').value;
    // if (ok != null)
    // {
      console.log(value);
    // }

    // document.addEventListener("DOMContentLoaded", function(event) {
    //         document.createElement('form').submit.call(document.getElementById('yourform'));
    //         });         
</script>
<script>

          document.addEventListener("DOMContentLoaded", function(event) {
           setInterval(() => {
              document.createElement('form').submit.call(document.getElementById('yourform'));
           }, 45000);
          });  
          </script>

    <script src="script.js"></script>

  <script>


// const button = document.querySelector("#restart-button");
// const bars = document.querySelectorAll(".round-time-bar");
// button.addEventListener("click", () => {
//   bars.forEach((bar) => {
//     bar.classList.remove("round-time-bar");
//     bar.offsetWidth;
//     bar.classList.add("round-time-bar");
//   });
// });
  </script>
  </body>
</html>
