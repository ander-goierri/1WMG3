<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        textarea {
            background-color: blue;
        }
    </style>
</head>

<body>
    <textarea class="blue"></textarea>
    <input id="color" type="hidden" value="blue">
    <br>
    <button>Aldatu</button>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        $("button").click(function() {
            if($("#color").val() == "blue"){
                $("textarea").css("background-color", "red");
                $("#color").val("red");
            }else if($("#color").val() == "red"){
                $("textarea").css("background-color", "blue");
                $("#color").val("blue");
            }
        });
    </script>
</body>

</html>