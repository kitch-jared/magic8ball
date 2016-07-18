<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Magic 8 Ball Replies</title>
    <script>
    var xmlhttp = new XMLHttpRequest();
    var url = "replies.txt";

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var myArr = JSON.parse(xmlhttp.responseText);
            myFunction(myArr);
        }
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();

    function myFunction() {
        var out = "";
        var i;
        for(i = 0; i < myArr.length; i++) {
            out = myArr[i].answer;
        }
        document.getElementById("answer").innerHTML = out;
    }
    </script>   
    </head>
    <body>
        <p>This is a Magic 8 Ball!</p>
	<p>Ask a 'Yes' or 'No' question!<br></p>
        <button type="button" onclick="myFunction(myArr)">Reply</button>
      
        <div id="answer"></div>
    </body>
</html>


  
 
