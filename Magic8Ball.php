<!DOCTYPE HTML>
 <html lang="en-us">
 <head>
 <meta charset="utf-8">
 <title>Magic 8 Ball</title>
 <link href="" rel="stylesheet" type="text/css"/>
 <script type="text/javascript">
  function possibleAnswers(ans) {
 	var select = Math.floor(Math.random() * ans.length);
 	var ball = ans[select];
 		return ball;
 }
  
  function magic() {
      if (url.type == positive){
          for (var i = 0; i < )
      }
          
  
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
                                     "Not even possible", "This is a joke right?", "You're seriously asking me that!?", "Bad idea"
                                     , "Think on it, the answer will come" ];
  
 	var magicAnswer = possibleAnswers(answer);
  
  document.getElementById('show').innerHTML = magicAnswer;
 	
  }
  </script>
 </head>
 <body>
 <p id="text">This is a Magic 8 Ball!<br>
 Ask a 'Yes' or 'No' question!<br></p>
 
 <button type="button" onclick='loadJason()'>Ask A Question</button>
 <p><div id='show'></div></p>
 
 </body>
 </html>