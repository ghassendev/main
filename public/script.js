// Immediately invoked function expression
// to not pollute the global scope



function startTimer(duration, display) {
  var timer = duration, minutes, seconds;
  setInterval(function () {
      minutes = parseInt(timer / 60, 10);
      seconds = parseInt(timer % 60, 10);

      minutes = minutes < 10 ? "0" + minutes : minutes;
      seconds = seconds < 10 ? "0" + seconds : seconds;

      display.textContent = minutes + ":" + seconds;

      if (--timer < 0) {
          timer = duration;
      }
  }, 1000);
}

window.onload = function () {
  var Threeminite =   25,
      display = document.querySelector('#time');
  startTimer(Threeminite, display);
};


(function() {
  const wheel = document.querySelector('.wheel');
  const startButton = document.querySelector('.button');
  const back= document.querySelector('.back')
  let deg = 0;


  setInterval(function(on)  {

    
    // var audio = new Audio('sound.mp3');
    // audio.play();
    // Disable button during spin
    startButton.style.pointerEvents = 'none';
    // Calculate a new rotation between 5000 and 10 000
    deg = Math.floor(1800 + Math.random() * 1800);
    //deg =40 ;
    // Set the transition on the wheel
    wheel.style.transition = 'all 15s ease ';
    // back.style.transition = 'all 14s ease-out';
    
    // Rotate the wheel
    wheel.style.transform = `rotate(${deg}deg)`;


    
    // Apply the blur
    // wheel.classList.add('blur');
    back.classList.add('rainbow');
  },27000);
  wheel.addEventListener('transitionend', () => {
    // Remove blur
    wheel.classList.remove('blur');
    back.classList.remove('rainbow');
    // Enable button when spin is over
    startButton.style.pointerEvents = 'auto';
    // Need to set transition to none as we want to rotate instantly
    wheel.style.transition = 'none';
    // Calculate degree on a 360 degree basis to get the "natural" real rotation
    // Important because we want to start the next spin from that one
    // Use modulus to get the rest value from 360
    const actualDeg = deg % 360;
    // Set the real rotation instantly without animation
    wheel.style.transform = `rotate(${actualDeg}deg)`;
    
    
    var element = document.getElementById("result");
   
    
    
    if (actualDeg>=0 && actualDeg<10 ){
      document.getElementById("value").value="26"; 
      document.getElementById("result").textContent="26 BLACK";
      element.classList.remove("green");
       element.classList.remove("red");
      element.classList.add("black");
    }
    if (actualDeg>=10 && actualDeg<20 ){
      document.getElementById("value").value="3"; 
      document.getElementById("result").textContent="3 RED";
      element.classList.remove("green");
       element.classList.remove("black");
      element.classList.add("red");
    }
    if (actualDeg>=20 && actualDeg<30 ){
      document.getElementById("value").value="35"; 
      document.getElementById("result").textContent="35 BLACK";
      element.classList.remove("green");
       element.classList.remove("red");
      element.classList.add("black");
    }
    if (actualDeg>=30 && actualDeg<39 ){
      document.getElementById("value").value="12"; 
      document.getElementById("result").textContent="12 RED";
      element.classList.remove("green");
       element.classList.remove("black");
      element.classList.add("red");
    }
    if (actualDeg>=39 && actualDeg<49 ){
      document.getElementById("value").value="28"; 
      document.getElementById("result").textContent="28 BLACK";
      element.classList.remove("green");
       element.classList.remove("red");
      element.classList.add("black");
    }
    if (actualDeg>=49 && actualDeg<59 ){
      document.getElementById("value").value="7"; 
      document.getElementById("result").textContent="7 RED";
      element.classList.remove("green");
       element.classList.remove("black");
      element.classList.add("red");
    }
    if (actualDeg>=59 && actualDeg<69 ){
      document.getElementById("value").value="29"; 
      document.getElementById("result").textContent="29 BLACK";
      element.classList.remove("green");
       element.classList.remove("red");
      element.classList.add("black");
    }
    if (actualDeg>=69 && actualDeg<78 ){
      document.getElementById("value").value="18"; 
      document.getElementById("result").textContent="18 RED";
      element.classList.remove("green");
       element.classList.remove("black");
      element.classList.add("red");
    }
    if (actualDeg>=78 && actualDeg<88 ){
      document.getElementById("value").value="22"; 
      document.getElementById("result").textContent="22 BLACK";
      element.classList.remove("green");
       element.classList.remove("red");
      element.classList.add("black");
    }
    if (actualDeg>=88 && actualDeg<98 ){
      document.getElementById("value").value="9"; 
      document.getElementById("result").textContent="9 RED";
      element.classList.remove("green");
       element.classList.remove("black");
      element.classList.add("red");
    }
    if (actualDeg>=98 && actualDeg<107 ){
      document.getElementById("value").value="31"; 
      document.getElementById("result").textContent="31 BLACK";
      element.classList.remove("green");
       element.classList.remove("red");
      element.classList.add("black");
    }
    if (actualDeg>=107 && actualDeg<117 ){
      document.getElementById("value").value="14";     
      document.getElementById("result").textContent="14 RED";
          element.classList.remove("green");
           element.classList.remove("black");
          element.classList.add("red");
    }
    if (actualDeg>=117 && actualDeg<127 ){
      document.getElementById("value").value="20"; 
      document.getElementById("result").textContent="20 BLACK";
      element.classList.remove("green");
       element.classList.remove("red");
      element.classList.add("black");
    }
    if (actualDeg>=127 && actualDeg<137 ){
      document.getElementById("value").value="1";     
      document.getElementById("result").textContent="1 RED";
          element.classList.remove("green");
           element.classList.remove("black");
          element.classList.add("red");
    }
    if (actualDeg>=137 && actualDeg<146 ){
      document.getElementById("value").value="33"; 
      document.getElementById("result").textContent="33 BLACK";
      element.classList.remove("green");
       element.classList.remove("red");
      element.classList.add("black");
    }
    if (actualDeg>=146 && actualDeg<156 ){
      document.getElementById("value").value="16";     
      document.getElementById("result").textContent="16 RED";
          element.classList.remove("green");
           element.classList.remove("black");
          element.classList.add("red");
    }
    if (actualDeg>=156 && actualDeg<166 ){
      document.getElementById("value").value="24"; 
      document.getElementById("result").textContent="24 BLACK";
      element.classList.remove("green");
       element.classList.remove("red");
      element.classList.add("black");
    }
    if (actualDeg>=166 && actualDeg<176 ){
      document.getElementById("value").value="5";     
      document.getElementById("result").textContent="5 RED";
          element.classList.remove("green");
           element.classList.remove("black");
          element.classList.add("red");
    }
    if (actualDeg>=176 && actualDeg<185 ){
      document.getElementById("value").value="10"; 
      document.getElementById("result").textContent="10 BLACK";
      element.classList.remove("green");
       element.classList.remove("red");
      element.classList.add("black");
    }
    if (actualDeg>=185 && actualDeg<195 ){
      document.getElementById("value").value="23";     
      document.getElementById("result").textContent="23 RED";
          element.classList.remove("green");
           element.classList.remove("black");
          element.classList.add("red");
    }
    if (actualDeg>=195 && actualDeg<205 ){
      document.getElementById("value").value="8"; 
      document.getElementById("result").textContent="8 BLACK";
      element.classList.remove("green");
       element.classList.remove("red");
      element.classList.add("black");
    }
    if (actualDeg>=205 && actualDeg<215 ){
      document.getElementById("value").value="30";     
      document.getElementById("result").textContent="30 RED";
          element.classList.remove("green");
           element.classList.remove("black");
          element.classList.add("red");
    }
    if (actualDeg>=215 && actualDeg<224 ){
      document.getElementById("value").value="11"; 
      document.getElementById("result").textContent="11 BLACK";
      element.classList.remove("green");
       element.classList.remove("red");
      element.classList.add("black");
    }
    if (actualDeg>=224 && actualDeg<234 ){
      document.getElementById("value").value="36";     
      document.getElementById("result").textContent="36 RED";
          element.classList.remove("green");
           element.classList.remove("black");
          element.classList.add("red");
    }
    if (actualDeg>=234 && actualDeg<244 ){
      document.getElementById("value").value="13"; 
      document.getElementById("result").textContent="13 BLACK";
      element.classList.remove("green");
       element.classList.remove("red");
      element.classList.add("black");
    }
    if (actualDeg>=244 && actualDeg<253 ){
      document.getElementById("value").value="21";     
      document.getElementById("result").textContent="21 RED";
          element.classList.remove("green");
           element.classList.remove("black");
          element.classList.add("red");
    }
    if (actualDeg>=253 && actualDeg<263 ){
      document.getElementById("value").value="6"; 
      document.getElementById("result").textContent="6 BLACK";
      element.classList.remove("green");
       element.classList.remove("red");
      element.classList.add("black");
    }
    if (actualDeg>=263 && actualDeg<273 ){
      document.getElementById("value").value="34";     
      document.getElementById("result").textContent="34 RED";
          element.classList.remove("green");
           element.classList.remove("black");
          element.classList.add("red");
    }
    if (actualDeg>=273 && actualDeg<283 ){
      document.getElementById("value").value="17"; 
      document.getElementById("result").textContent="17 BLACK";
      element.classList.remove("green");
       element.classList.remove("red");
      element.classList.add("black");
    }
    if (actualDeg>=283 && actualDeg<292 ){
      document.getElementById("value").value="25";    
      document.getElementById("result").textContent="25 RED";
          element.classList.remove("green");
           element.classList.remove("black");
          element.classList.add("red");
    }
    if (actualDeg>=292 && actualDeg<302 ){
      document.getElementById("value").value="2"; 
      document.getElementById("result").textContent="2 BLACK";
      element.classList.remove("green");
       element.classList.remove("red");
      element.classList.add("black");
    }
    if (actualDeg>=302 && actualDeg<312 ){
      document.getElementById("value").value="21";     
      document.getElementById("result").textContent="21 RED";
          element.classList.remove("green");
           element.classList.remove("black");
          element.classList.add("red");
    }
    if (actualDeg>=312 && actualDeg<322 ){
      document.getElementById("value").value="4"; 
      document.getElementById("result").textContent="4 BLACK";
      element.classList.remove("green");
       element.classList.remove("red");
      element.classList.add("black");
    }
    if (actualDeg>=322 && actualDeg<331 ){
      document.getElementById("value").value="19";     
      document.getElementById("result").textContent="19 RED";
          element.classList.remove("green");
           element.classList.remove("black");
          element.classList.add("red");
    }
    if (actualDeg>=331 && actualDeg<341 ){
      document.getElementById("value").value="15"; 
      document.getElementById("result").textContent="15 BLACK";
      element.classList.remove("green");
       element.classList.remove("red");
      element.classList.add("black");
     }
    if (actualDeg>=341 && actualDeg<350 ){
      document.getElementById("value").value="32";     
      document.getElementById("result").textContent="32 RED";
          element.classList.remove("green");
           element.classList.remove("black");
          element.classList.add("red");
    }
    if (actualDeg>=350 && actualDeg<360 ){
      document.getElementById("value").value="0"; 
      document.getElementById("result").textContent="0 GREEN";
      element.classList.remove("black");
      element.classList.remove("red");
      element.classList.add("green");
    }

    
    // console.log(resut);
  }
  );
})();
