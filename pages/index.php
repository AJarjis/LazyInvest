<?php include 'invest.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lazy Invest</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link type="text/css" rel="stylesheet" href="../css/style.css" />
</head>
    
<body>
    <div class="wrapper">
        <h1>Lazy Invest</h1>
        <form id="investForm" name="investForm" action="index.php" method="post">
            <div class="question">
                <p>Amount to Invest:</p>
                <input id="investAmount" name="investAmount" type="number" />
            </div>
            <div class="question">
                <p>Sustainable choices only: </p>
                <input id="sustainable" name="sustainable" type="checkbox" />
            </div>
            <div class="question">
                <p>Location: </p>
                <input id="location" name="location" type="text" />
            </div>
            <div class="question">
                <p>Industry: </p>
                <input id="industry" name="industry" type="text" />
            </div>
            <input name="submit" type="submit" value="Invest" />
        </form>
    </div>
</body>