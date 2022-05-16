<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Check Availability & Search</title>
</head>

<body>
    <script>
        function checkAvailability(str) {
            if (str.length === 0) {
                document.getElementById('availability').innerHTML = "";
                return;
            }
            let xml_http = new XMLHttpRequest();
            xml_http.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    document.getElementById('availability').innerHTML = this.responseText;
                    console.log(this.responseText);
                }
            }
            xml_http.open('GET', 'search.php?q=' + str, true);
            xml_http.send();
        }
    </script>
    <form>
        <label for="username_input">Check username</label>
        <input class="form-control" type="text" name="username" size="30" onkeyup="checkAvailability(this.value)" id="username_input" placeholder="Enter username to check its availability in DB">
        <div id="availability"></div>
    </form>
</body>

</html>