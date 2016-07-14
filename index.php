
<!DOCTYPE html>
<html>
  <head>
    <title>Magic 8 Ball Stuff</title>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/8ball.css" rel="stylesheet" type="text/css" />
    
    <script type="text/javascript">
        function getUserName () {
            var storedUser = localStorage.getItem('Magic8BallUserName');
            
            if (!storedUser) {
                document.getElementById('userNamePromptOverlay').style.display = "block";
                document.getElementById('userNamePrompt').style.display = "block";
            }
            
            document.getElementById('userName').innerHTML = storedUser;
        }
        
        function saveUserName() {
            userName = document.getElementById('name').value;
            localStorage.setItem('Magic8BallUserName', userName);
            document.getElementById('userNamePromptOverlay').style.display = "none";
            document.getElementById('userNamePrompt').style.display = "none";
        }
        
        function forgetUserName() {
            localStorage.removeItem('Magic8BallUserName');
            window.location.reload();
        }
    </script>
    <script type="text/javascript">
        /* Input: 
         * Processing: 
         * Output: 
         */

        function docLoad() {
            getUserName(); // name will be stored in Local Storage as Magic8BallUserName
        }
 
    </script>
    
    <style>
        
   </style>
  </head>
  <body onload="docLoad()">
    <div id="userNamePromptOverlay">
      <div id="userNamePrompt">
        <form>
          Welcome to the Magic 8 Ball where all of your questions may be answered.
          <br>
          <br>
          Please enter your name below so that we might better serve you:
          <br>
          <input type="text" id="name">
          <br>
          <input type="submit" value="Save my name" onclick="saveUserName()">
        </form>
      </div>
    </div>
      <p id="intro">
        Welcome back to the Magic 8 Ball, <span id="userName"></span>!
        <br>
        Ask a 'Yes' or 'No' question!
      </p>
    <div>
    <div class='Magic8Ball'>
        <div class="position">
            <div class="ball">
                <div class="innerBall"></div>
                <div class="circle"></div>
                <div class="tri"></div>
                <div class="output"></div>
            </div>
        </div>
    </div>
</div>
      <div>
      <ul>
          <li><button class='button1' value='spin'>Spin</button></li>
          <script>
        // Spin
        var boxOne = document.getElementsByClassName('Magic8Ball')[0]

        document.getElementsByClassName('button1')[0].onclick = function() {
          if(this.innerHTML === 'Spin') 
          { 
            this.innerHTML = 'Stop';
            boxOne.classList.add('spin');
          } else if (this.innerHTML === 'Stop')
          {  
            this.innerHTML = 'Answer';
            boxOne.classList.remove('spin');
          } else {
            this.innerHTML = 'Spin';
            boxOne.classList.remove('output');
          }  
        }
        </script>
          <li><button class='button2' value='shake-crazy'>Shake</button></li>
        <script>
        // Shake
        var boxTwo = document.getElementsByClassName('Magic8Ball')[0]

        document.getElementsByClassName('button2')[0].onclick = function() {
          if(this.innerHTML === 'Shake') 
          { 
            this.innerHTML = 'Stop';
            boxTwo.classList.add('shake-crazy');
          } else if (this.innerHTML === 'Stop')
          {  
            this.innerHTML = 'Answer';
            boxTwo.classList.remove('shake-crazy');
          } else {
            this.innerHTML = 'Shake';
            boxTwo.classList.remove('output');
          }
        }
    </script>
      </ul>
      </div>
   

    <div id="forget">
      <a href='javascript:void(0);' onclick='forgetUserName()'>Forget Me</a>
    </div>
  </body>
</html>
