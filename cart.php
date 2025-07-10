<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> HEY!!!! THANK YOU FOR SHOPPING WITH USSSS....... 💖</h2>
    <h3> This is the of veiw of ur cart 🛒🛍️ </h3>
</body>
</html>
<?php
$cal = 0;
$item = isset($_POST['add_item']) ? $_POST['add_item'] : '';

switch ($item) {
    case "lipstick":
        echo "U have added a Lipstick 💄 to ur cart<br> <br>";
        $cal = 300;
        break;

    case "eyeliner":
        echo "U have added an Eyeliner 🖌️ to ur cart<br> <br>";
        $cal = 200;
        break;

    case "compact":
        echo "U have added a Compact Powder 🎀 to ur cart<br> <br>";
        $cal = 600;
        break;

    case "foundation":
        echo "U have added a Foundation ✨ to ur cart<br> <br>";
        $cal = 700;
        break;

    case "sunscreen":
        echo "U have added a Sunscreen 🌞🧴 to ur cart<br> <br>";
        $cal = 250;
        break;

    case "bodywash":
        echo "U have added a Bodywash 🚿🫧 to ur cart<br> <br>";
        $cal = 600;
        break;

    case "liptint":
        echo "U have added a Liptint 💋 to ur cart<br> <br>";
        $cal = 200;
        break;

    case "eyeshadow":
        echo "U have added an Eyeshadow 🎨✨ to ur cart<br> <br>";
        $cal = 1000;
        break;

    default:
        echo "No item selected, my love 😢";
        break;
}

if ($cal > 0) {
    echo "The cost of the item added:<br><br> 1 X Rs.{$cal} = Rs. {$cal}";
}
?>
