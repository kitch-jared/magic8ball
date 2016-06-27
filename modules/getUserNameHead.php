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
