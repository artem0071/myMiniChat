<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>myMiniChat</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/main.css" type="text/css" rel="stylesheet">

</head>
<body>

<div class="container">
    <h1 class="text-center">This is my mini chat!</h1>
    <h3 class="text-center">Your id is #<strong id="id"></strong></h3>
    <div class="row">
        <div class="col-md-5">

            <h1 class="text-center">Main chat</h1>
            <hr>
            <?php include_once 'chat/chat1.html';?>

        </div>

        <div class="col-md-2">
            <h1 class="text-center">About</h1>
            <div id="info"></div>
            <p>Transaction every 4 seconds</p>
        </div>

        <div class="col-md-5">

            <h1 class="text-center">Answer chat</h1>
            <hr>
            <?php include_once 'chat/chat2.html';?>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/chat.js"></script>

</body>
</html>