<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Ask Whether</h1>
        <form>
            <div class="form-group form-inline">
                <label for="">Enter Country</label>
                <input type="text" class="form-control" id="country">
            </div>
           
        </form>
        <button class="btn" id="submit" onclick="submit()">Submit</button>
        <div id="result"></div>
    </div>
 
    <script type="text/javascript">
        function submit() {
            const http = new XMLHttpRequest();
            let country = document.getElementById('country').value;
            //console.log(country);
            
            const url = 'http://api.openweathermap.org/data/2.5/weather?q='+country+'&APPID=ec79558ff20bc98db1f38ee960770fcc';
            http.open("GET", url);
            http.send();

            http.onreadystatechange = function(){
                //console.log(http.responseText)
                let json = JSON.parse(this.responseText);
                document.getElementById('result').innerHTML = json.main.temp;
                //console.log(json.main.temp);
            };
            
            //let result = $.getJSON('http://api.openweathermap.org/data/2.5/weather?q=Colombo&APPID=ec79558ff20bc98db1f38ee960770fcc');
            //console.log(JSON.stringify(result));
        
        }
    </script>
</body>

</html>