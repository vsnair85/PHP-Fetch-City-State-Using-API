<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pincode</title>
</head>

<body>
    <form method="POST" action="">
        <input type="number" name="pincode">
        <button type="submit">Submit</button>
    </form>
</body>

</html>
<?php
$pincode = isset($_REQUEST['pincode']) ? $_REQUEST['pincode'] : "";
$api = "https://api.postalpincode.in/pincode/" . $pincode;
$json = file_get_contents($api);
$json2 = substr($json, 1, -1);
$jsonString = $json2;
$data = json_decode($jsonString);
$city =  $data->PostOffice[0]->Division;
$state = $data->PostOffice[0]->State;
echo "City:" . $city . "<br>" . "State:" . $state;
//Reference : https://reqbin.com/code/php/u1at9ko5/php-get-request-example
?>