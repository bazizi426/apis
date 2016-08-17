<?php 
session_start();

if( ! isset($_SESSION['email']) ) {
    header('Location: /index.php');
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css" />
    <style type="text/css">
        body {
            background-color: #76b852;
        }
        .wrapper{
            width: 1000px;
            margin: 0 auto;
            color: white;
        }
        .wrapper h1{
            text-align: center;
        }
        .wrapper ul{
            list-style: none;
            padding: 0;
            margin: 0 auto;
            overflow: hidden;
            text-align: center;
        }
        .wrapper ul li {
            float: left;
        }
        .wrapper .fa-stack.fa-lg {
            color: blue;
            font-size: 4em;
            transition: all 0.3s ease-in-out;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
        }
        .wrapper .fa-stack.fa-lg:hover {
            transform: rotate(360deg);
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
        }
        .logout{
            text-align: right;
        }
        .logout a{
            font-family: Arial;
            font-size: 1em;
            color: #333;
            text-decoration: none;
        }
        .logout a:hover,.logout a:active{
            color: white;
        }
        
        .zoho{
            display: inline-block; 
            font-size: 4.6em; 
            font-family: Arial; 
            font-weight: bold; 
            color: white; 
            margin-top: 12px;
        }
        .link-zoho {
            margin: 10px; 
            background: blue; 
            width: 110px; 
            height: 110px; 
            border-radius: 50%; 
            display:block;
            transition: all 0.3s ease-in-out;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
        }
        
        .link-zoho:hover, .link-zoho:active {
            transform: rotate(360deg);
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="logout">
            <a href="/logout.php"><i class="fa fa-lock"></i> Déconnexion</a>
        </div>
        <h1>Zoho CRM Integrates with </h1>
        <div class="providers">
            <ul>
                <li>
                    <a href="/facebook/">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="/gplus/">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-google fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="/linkedin/">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="/twitter/">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="link-zoho" href="/christiaan/">
                        <span class="zoho">Z</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>