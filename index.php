
<!DOCTYPE html>
<html>
  <head>
    <title>Magic 8 Ball Stuff</title>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <style>
        #userNamePromptOverlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 10;
            background-color: rgba(0,0,0,0.9);
            display: none;
        }
        
        #userNamePrompt {
            background-color: #222222;
            border: 20px solid #222222;
            border-radius: 20px;
            padding: 10px;
            width: 75%;
            max-width: 500px;
            height: 75%;
            max-height: 150px;
            color: white;
            position: fixed;
            margin: auto;
            top:0; right:0; bottom:0; left:0;
            overflow-y: auto;
            overflow-x: hidden;
            display: none;
        }
    </style>
    
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
 
        function possibleAnswers(ans) {
            var select = Math.floor(Math.random() * ans.length);
            var ball = ans[select];
            return ball;
        }
 
        function magic() {
            var answer = [ "It is certain", "It is decidedly so", "Without a doubt", 
                           "Yes definitely", "You may rely on it", "As I see it, yes",
                           "Most likely", "Outlook good", "Yes", "Signs point to yes",
                           "Reply hazy try again", "Ask again later", "Better not tell you now",
                           "Cannot predict now", "Concentrate and ask again", "Don't count on it",
                           "My reply is no", "My sources say no", "Outlook not so good", "Very doubtful",
                           "Why would you ask such a silly question?", "In your dreams", "Of course silly", 
                           "Why do you doubt?", "Ask someone else", "Try another 8 ball", "I think so", 
                           "Maybe next year", "Don't ask again", "I don't know", "You can bet on it", 
                           "Most definitley", "Quite absolute", "Maybe pigs can fly", "What did you say?",
                           "Sorry I didn't hear that", "Like that'll ever happen", "No", "Never", 
                           "You already know the answer to that", "So I asked my friend, he didn't know either...",
                           "Sorta", "Kinda", "Not exactly", "With luck, yes", "Even with luck, no", "I have no idea...", 
                           "I got nothing", "Error detected in your future", "That would be a mistake", "Turn back now", 
                           "You can bet on it", "Don't worry about it", "Yes, but technically no", "No, but technically yes",
                           "Only God knows the answer to that...", "Just do it!", "If you try one more time I might say yes",
                           "Yes, but you didn't hear it from me", "Uhh, I think that's a yes?", "Should have asked yesterday",
                           "Not even possible", "This is a joke right?", "You're seriously asking me that!?", "Bad idea",
                           "Think on it, the answer will come" ];
 
            var magicAnswer = possibleAnswers(answer);
 
            document.getElementById('output').innerHTML = magicAnswer;
        }
    </script>
  </head>
  <body onload="docLoad()">
    <div id="userNamePromptOverlay">
      <div id="userNamePrompt">
        <form>
          "Welcome to the Magic 8 Ball where all of your questions may be answered."
          <br>
          <br>
          "Please enter your name below so that we might better serve you:"
          <br>
          <input type="text" id="name">
          <br>
          <input type="submit" value="Save my name" onclick="saveUserName()">
        </form>
      </div>
    </div>
      <p id="intro">
        "Welcome back to the Magic 8 Ball, "<span id="userName"></span>"!"
        <br>
        "Ask a 'Yes' or 'No' question!"
      </p>
      <p>
    <button type="button" onclick='magic()' id='button1'>spin</button>
    <button type="button" onclick='magic()' id='button2'>roll</button>
    <button type="button" onclick='magic()' id='button3'>shake</button>
    <button type="button" onclick='magic()' id='button4'>throw against wall</button>
    <button type="button" onclick='magic()' id='button5'>run over with car</button>
      </p>
    
      <img id="ball" src="images/8_ball.png" alt="8 ball"/>

      <img id="tri" src="images/triangle.gif" alt="tri"/>
      
      <p><div id="output"></div></p>

    </div>
    </div>
    <div id="forget">
      <a href='javascript:void(0);' onclick='forgetUserName()'>Forget Me</a>
    </div>
  </body>
</html>
