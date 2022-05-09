<html lang="en">
<head> 
  
<link href="../../global/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="./reservation_css.css" />
   <script src="../../global/Template/template.js"></script>
    <link href="style.css" rel="stylesheet">
    <script src="functions.js"></script>
    
    
<title> my reservations</title> 





<script>

/*function myFunction() {
  alert("I am an alert box!");
}*/
</script>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HURGHADA-GRND-HOTEL</title>
    <!--=============== BOXICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Main JS File -->
    <script src="template.js"></script>
    <!-- Render All Alements Normally -->
    <link rel="stylesheet" href="./normalize.css" />
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="./template.css" />



 <!-- Header -->
 <div class="header" id="header">
        <div class="container">
            <div class="links">
                <span id="icon" class="icon" onclick="showbar()">
                    <i class='bx bx-menu-alt-left'></i>
                </span>
                <div class="items" id="items">
                    <span class="container">
                        <span>Home</span>
                    </span>
                    <span class="container">
                        <span>Rooms</span>
                    </span>
                    <span class="container">
                        <span>Dining</span>
                    </span>
                    <span class="container">
                        <span>Experience</span>
                    </span>
                    <span class="container">
                        <span>Location</span>
                    </span>
                    <span class="container">
                        <span>About</span>
                    </span>
                </div>
                <span id='icon2' class="icon2" onclick="hidebar()">
                    <i class='bx bx-x'></i>
                </span>
                <i class='book' id="book">Book now</i>
                <ul id="bar">
                    <li><a href="Profile"><i class='bx bxs-user'></i> Profile</a></li>
                    <li><a href="MyReservations"><i class='bx bxs-bed'></i> My Reservations</a></li>
                    <li><a href="RateUs"><i class='bx bxs-star'></i> Rate us</a></li>
                    <li><a href="ContacUs"><i class='bx bxl-gmail'></i> Contact us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Of Header -->

   
</head>

<body>



 <!-- Body -->

    
 <div class="features">
        <div class="container">
        <table> <tr>

    <th> reservation id </th> 
    <th> Room number </th> 
    <th> checked in </th> 
    <th> checked out </th>
    <th> numberof_adults </th> 
    <th> numberof_children </th> 
    <th> extra_bed </th> 
... (33 lines left)
Collapse
message.txt
4 KB
﻿
<html>
<head> 
  
<link href="../../global/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="./reservation_css.css" />
   <script src="../../global/Template/template.js"></script>
    <link href="style.css" rel="stylesheet">
    <script src="functions.js"></script>
    
    
<title> my reservations</title> 





<script>

/*function myFunction() {
  alert("I am an alert box!");
}*/
</script>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HURGHADA-GRND-HOTEL</title>
    <!--=============== BOXICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Main JS File -->
    <script src="template.js"></script>
    <!-- Render All Alements Normally -->
    <link rel="stylesheet" href="./normalize.css" />
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="./template.css" />



 <!-- Header -->
 <div class="header" id="header">
        <div class="container">
            <div class="links">
                <span id="icon" class="icon" onclick="showbar()">
                    <i class='bx bx-menu-alt-left'></i>
                </span>
                <div class="items" id="items">
                    <span class="container">
                        <span>Home</span>
                    </span>
                    <span class="container">
                        <span>Rooms</span>
                    </span>
                    <span class="container">
                        <span>Dining</span>
                    </span>
                    <span class="container">
                        <span>Experience</span>
                    </span>
                    <span class="container">
                        <span>Location</span>
                    </span>
                    <span class="container">
                        <span>About</span>
                    </span>
                </div>
                <span id='icon2' class="icon2" onclick="hidebar()">
                    <i class='bx bx-x'></i>
                </span>
                <i class='book' id="book">Book now</i>
                <ul id="bar">
                    <li><a href="Profile"><i class='bx bxs-user'></i> Profile</a></li>
                    <li><a href="MyReservations"><i class='bx bxs-bed'></i> My Reservations</a></li>
                    <li><a href="RateUs"><i class='bx bxs-star'></i> Rate us</a></li>
                    <li><a href="ContacUs"><i class='bx bxl-gmail'></i> Contact us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Of Header -->

   
</head>

<body>



 <!-- Body -->

    
 <div class="features">
        <div class="container">
        <table> <tr>

    <th> reservation id </th> 
    <th> Room number </th> 
    <th> checked in </th> 
    <th> checked out </th>
    <th> numberof_adults </th> 
    <th> numberof_children </th> 
    <th> extra_bed </th> 
    <th> edit </th> 
    <th> delete </th> 
    <th > check in/out </th> 

   </tr>

   <tr><td>111</td><td>1</td><td> 2022-05-05</td> 
  <td>2022-05-19</td>
  <td>1</td>
  <td>2</td>
  <td>1</td>
  <td><a href ='edit_reservation.php?id=111' class= 'temp2'> edit </a> </td><td><a href  ='delete_reservations.php?id=111' class= 'temp2'> delete </a> </td><td><a href='check_in.php?id=111' class ='temp'> check in </a> </td></tr>   </table>


   
        </div>
    </div>
    

    <!-- End Of Body -->



 <!-- Footer -->
 <div class="footer">
        &copy; 2022
        <span>MIU</span>
        All Rights Reserved
    </div>
    <!-- End Of Footer -->

</body>
</html>