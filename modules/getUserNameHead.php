    <style>
        #userNamePromptOverlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 10;
            background-color: rgba(0,0,0,0.8);
            display: none;
        }
        
        #userNamePrompt {
            background-color: black;
            border: 20px solid rgba(0,0,0,0.9);
            width: 100%;
            height: 100vh;
            color: white;
            position: fixed;
            top:0; right:0; bottom:0; left:0;
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
        }
        
        function saveUserName() {
            userName = document.getElementById('name').value;
            localStorage.setItem('Magic8BallUserName', userName);
            document.getElementById('userNamePromptOverlay').style.display = "none";
            document.getElementById('userNamePrompt').style.display = "none";
        }
        
        function forgetUserName() {
            localStorage.removeItem('Magic8BallUserName');
        }
    </script>
