<!DOCTYPE html>
   <head>
      <meta charset = utf-8>
      <title>Magic 8 Ball</title>
      <script type = "application/javascript">
         function loadJSON(){
            var url = "reply.json";
            var http_request = new XMLHttpRequest();
            http_request.onreadystatechange = function(){
                if (http_request.readyState == 4 && http_request.status == 200){
                  // Javascript function JSON.parse to parse JSON data
                  var jsonObj = JSON.parse(http_request.responseText);

                  // jsonObj variable now contains the data structure and can
		  var ans = '';
                    for (var i=0; i < jsonObj.length; i++){
                    ans = jsonObj[i].answer;
                    }
		    document.getElementById("answers").innerHTML = ans;
		    }
                }
            http_request.open("GET", url, true);
            ajaxhttp.setRequestHeader("content-type","application/json");
            http_request.send();
        }
		
      </script>
	
   </head>
	
   <body>
      <p id="text">This is a Magic 8 Ball!</p>
	  <p>Ask a 'Yes' or 'No' question!<br></p>
 
 <button type="button" onclick='loadJson()'>Ask A Question</button><br>
 <div id='answers'></div>
		
   </body>
		
</html>