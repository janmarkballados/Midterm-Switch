<html>
    <body>
<?php
    if(isset($_GET["fav_color_submit"]))
    {
        //The form was submitted.

        $favcolor = $_GET["fav_color"];
        switch ($favcolor)
            {
        case "r":
          echo '<body style="background-color:red">';
          break;
        case "b":
          echo '<body style="background-color:Blue">';
          break;
        case "g":
          echo '<body style="background-color:green">';
          break;
        default:
          echo "Your favorite color is neither red, blue, or green!";
        }

    }
?>
        
    </body>
</html>