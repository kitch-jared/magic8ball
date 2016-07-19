<!DOCTYPE html>
<html>
  <head>
    <title>Magic 8 Ball</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        
        function getResponses() {
            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function() {
                if (xhttp.readyState === 4 && xhttp.status === 200) {
                    var retrievedAnswers = JSON.parse(xhttp.responseText);
                    localStorage.setItem('Magic8BallAllAnswers', JSON.stringify(retrievedAnswers));
                }
            };
            xhttp.open("GET", "answers.json", true);
            xhttp.send();
        }
        
        function getAnswer() {

            var usedAnswers = JSON.parse(localStorage.getItem('Magic8BallUsedAnswers'));
            var allAnswers = JSON.parse(localStorage.getItem('Magic8BallAllAnswers'));
            
            if (!usedAnswers) {
                usedAnswers = [{"type": "", "answer": ""}];
                localStorage.setItem('Magic8BallUsedAnswers', JSON.stringify(usedAnswers));
            }

            var selectedAnswer;
            var duplicate = true;
            
            while (duplicate) {
                selectedAnswer = allAnswers[Math.floor(Math.random() * allAnswers.length)];
                
                for (var i = 0; i < usedAnswers.length; i++) {
                    if (usedAnswers[i].answer === selectedAnswer.answer) {
                        duplicate = true;
                        break;
                    }
                    duplicate = false;
                }
            }
            
            document.getElementById("output").innerHTML = selectedAnswer.answer;
            
            if (usedAnswers.length > 9) {
                usedAnswers.shift();
            }
            
            usedAnswers.push(selectedAnswer);
            localStorage.setItem('Magic8BallUsedAnswers', JSON.stringify(usedAnswers));
        } // end getAnswer()
 
        function docLoad() {
            getUserName(); // name will be stored in Local Storage as Magic8BallUserName
            getResponses(); // all responses will be stored in Local Storage as Magic8BallAllAnswers
        }
    </script>

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
                    <div class="output"><span id="output"></span></div>
                </div>
            </div>
        </div>
    </div>
    
    <div>
        <ul>
            <li><button class='button1' value='spin'>Spin</button></li>
            <script>
                // Spin
                var boxOne = document.getElementsByClassName('Magic8Ball')[0];
                
                document.getElementsByClassName('button1')[0].onclick = function() {
                    if(this.innerHTML === 'Spin') 
                    { 
                        this.innerHTML = 'Stop';
                        boxOne.classList.add('spin');
                    } else {  
                        this.innerHTML = 'Spin';
                        boxOne.classList.remove('spin');
                        getAnswer();
                    }
                };
            </script>
            
            <li><button class='button2' value='shake-crazy'>Shake</button></li>
            <script>
                // Shake
                var boxTwo = document.getElementsByClassName('Magic8Ball')[0];
                document.getElementsByClassName('button2')[0].onclick = function() {
                    if(this.innerHTML === 'Shake') 
                    { 
                        this.innerHTML = 'Stop';
                        boxTwo.classList.add('shake-crazy');
                    } else {  
                        this.innerHTML = 'Shake';
                        boxTwo.classList.remove('shake-crazy');
                        getAnswer();
                    }
                };
            </script>
    
            <li><button class='button3' value='roll'>Roll</button></li>
            <script>
                // Roll
                var boxThree = document.getElementsByClassName('Magic8Ball')[0];
                
                document.getElementsByClassName('button3')[0].onclick = function() {
                    if(this.innerHTML === 'Roll') 
                    { 
                        this.innerHTML = 'Stop';
                        boxThree.classList.add('roll');
                    } else {  
                        this.innerHTML = 'Roll';
                        boxThree.classList.remove('roll');
                        getAnswer();
                    }
                };
            </script>
        </ul>
    </div>
   
    <div id="forget">
        <br>1) Select your method above.
        <br>2) Press stop
        <br>3) Hover over/Tap the Magic 8 Ball<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to see your answers.
        <br>
        <br><a href='javascript:void(0);' onclick='forgetUserName()'>Forget Me</a>
    </div>
    
  </body>
</html>