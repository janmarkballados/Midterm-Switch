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
        <form method='get' action='#'>
            <select name='fav_color'>
                <option value='r'>red</option>
                <option value='g'>green</option>
                <option value='b'>blue</option>
                <option value='o'>other</option>
            </select>
            <br />
            <input type='submit' name='fav_color_submit' value='Submit' />
        </form>
    </body>
</html>