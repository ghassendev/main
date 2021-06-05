<!DOCTYPE html>
<html>
  <head>
    <title>Roulette wheel</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link rel="icon" href="whel.png" type="image/gif" sizes="16x16">
   
  </head>

  <body class="back" >
    
    <h1 id="result" class="result"  ></h1>

    <form action="post" name="value">
    <input type="hidden" name="value" id="value" value="">
    </form>
    
    <div id="app">
      {{-- <div><span><img  src="button.png"  width="280px"/></span></div> --}}
      <img class="marker" src="marker.png" />  
      <img style="margin-top:5px" class="wheel" src="whel.png" />
      <img class="button" src="button.png" />
      
    </div>
    <div><span class="countdown" class="button" id="time">00:25</span></div>
   

    <script src="script.js"></script>
  
  </body>
</html>
