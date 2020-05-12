<!doctype html>
<html>
    <head><title>Practice</title></head>
    
    <body>
        <div align="center">
            <select onchange="fetchRoom(this.value)">
                <option>Standard</option>
                <option>Deluxe</option>
                <option>Executive</option>
            </select>
        </div>
        
        <div id="result"></div>
        <script>
            function fetchRoom(room){
                var xhr=new XMLHttpRequest();
                xhr.open("GET","showRoom.php?type="+room,true);
                xhr.send();
                
                xhr.onreadystatechange=function(){
                    if(xhr.readyState==4 && xhr.status==200){
                        document.getElementById('result').innerHTML=this.responseText;
                    }
                };
            }
        </script>
    </body>
</html>