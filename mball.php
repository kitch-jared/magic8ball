<!DOCTYPE html>
   <head>
      <meta charset = utf-8>
      <title>Magic 8 Ball</title>
      <script type = "application/javascript">
         function loadJSON(){
            var url = "ans.json";
            var http_request = new XMLHttpRequest();
            http_request.onreadystatechange = function(){
                if (http_request.readyState == 4 && http_request.status == 200){
                  // Javascript function JSON.parse to parse JSON data
                  var jsonObj = JSON.parse(http_request.responseText);
                  // jsonObj variable now contains the data structure
		  var reply = '';
                  var i;
                    for (i=0; i < jsonObj.length; i++){
                    ans = jsonObj[i].answer;
                    }
		    document.getElementById("answers").innerHTML = reply;
		    }
                };
            http_request.open("GET", url + Math.random(), true);
            http_request.setRequestHeader("content-type","application/json");
            http_request.send();
        }
		
      </script>
	
   </head>
	
   <body>
      <p>This is a Magic 8 Ball!</p>
	  <p>Ask a 'Yes' or 'No' question!<br></p>
 
 <button type="button" onclick='loadJSON()'>Ask A Question</button><br>
 <div id="answers"></div>
   </body>
		
</html>