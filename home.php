<!DOCTYPE html>
<html>
<head>
    
    <title>Register</title>
    <style>


        .button {
            display: inline-block;
            border-radius: 4px;
            background-color: #2c6382;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 28px;
            padding: 20px;
            width: 400px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }

        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.8s;
        }

        .button:hover span {
            padding-right: 15px;
        }

        .button:hover span:after {
            opacity: 1;
            right: 0;
        }

        .button {
            transition-duration: 0.4s;
        }

        .button:hover {
            background-color: #04AA6D;
            color: white;
        }
        h4 {
            background-color: #0a5a45;
            padding: 20px;
            display: none;
        }

        h3:hover + h4 {
            display: block;
        }
        div {background-color:rgb(27,90,67);}
        div a {
            text-decoration: none;
            color: white;
            font-size: 20px;
            padding: 15px;
            display:inline-block;
        }
        ul {
            display: inline;
            margin: 0;
            padding: 0;
        }
        ul li {display: inline-block;}
        ul li:hover {background: #555;}
        ul li:hover ul {display: block;}
        ul li ul {
            position: absolute;
            width: 200px;
            display: none;
        }
        ul li ul li {
            background: #555;
            display: block;
        }
        ul li ul li a {display:block !important;}
        ul li ul li:hover {background: #666;}

        body {
            font-family: Arial, sans-serif;
            margin: 10;
            padding: 10;
        }

        .header {
            display: flex;
            justify-content:space-around;
            align-items: center;
            padding: 100px 100px;
            background-color: #f0f0f0;
        }

        .header a {
            text-decoration: none;
            color: #000;
        }

        .search-container {
            display: flex;
            align-items: center;
        }

        .search-container input[type="text"] {
            border: 5px solid #ccc;
            border-radius: 10px;
            padding: 10px 10px;
            font-size: 50px;
        }

        .main-content {
            background:rgb(27,90,67);
            text-align:center;
            padding: 200px;

        }

        .registration-form {
            background-color: #f0f0f0;
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 25px;
        }

        .registration-form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .registration-form input[type="text"],
        .registration-form input[type="email"],
        .registration-form input[type="password"],
        .registration-form textarea {
            width: 25%;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 18px 1px;
            font-size: 25px;
            margin-bottom: 20px;
        }

        .registration-form input[type="checkbox"] {
            margin-right: 10px;
        }

        .registration-form button  {
            background-color: #0095ff;
            color: #ffffff;

            border: none;
            padding: 14px 45px;
            border-radius: 30px;
            cursor: pointer;
        }
        .registration-form button:hover {
            background-color: rgb(27,90,67);
            color: green;
        .

        .login-text {
            text-align: center;
            margin-bottom: 10px;
        }

        .footer {
            text-align: center;
            padding: 13px;
            background-color: #f0f0f0;
        }
        .Dropdrown{
        div {background-color:rgb(27,90,67);}
        div a {
            text-decoration: none;
            color: white;
            font-size: 20px;
            padding: 15px;
            display:inline-block;
        }
        ul {
            display: inline;
            margin: 0;
            padding: 0;
        }
        ul li {display: inline-block;}
        ul li:hover {background: #555;}
        ul li:hover ul {display: block;}
        ul li ul {
            position: absolute;
            width: 200px;
            display: none;
        }
        ul li ul li {
            background: #555;
            display: block;
        }
        ul li ul li a {display:block !important;}
        ul li ul li:hover {background: #666;}
    </style>

</head>
<body>
<main class="main-content">
    <button class="button" style="vertical-align:middle"><span>Online shopping</span></button>

<section class="registration-form">
    <h2 style="text-align:center;">Register Here</h2>
    <p style="text-align:center;">Fill-up your information to complete your registration process</p> <br>
    <form action="route.php?page=routeHomereg" method="post">
        <label for="name">Write your full name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <label for="phone">Write Phone number</label>
        <input type="text" id="phone" name="phone" required>

        <label for="address">Full address</label>
        <input type="text" id="address" name="address" required> <br>

        <input type="checkbox" name="terms" required> I have agreed with  <a href="route.php?page=terms">Terms & Conditions</a> <br><br>

        <button style="color: white; background-color: rgb(0,0,0);" type="submit" class="registerbtn">Register</button>
    </form>

    <p style="text-align:center;">
        Already have an account?<br><br><a href="route.php?page=reg">Log in Now</a>
    </p>
</section>
    </main>
</body>
</html>
