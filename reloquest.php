<?php 

$ch = curl_init('https://coderbyte.com/api/challenges/json/json-cleaning');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  $data = curl_exec($ch);
  curl_close($ch);

  $myData = json_decode($data, true);
  $myNewData = [];

  foreach($myData as $key => $value) {

    if(is_array($value)) {

        foreach ($value as $subKey => $subValue) {
            
            if($subValue !== "N/A" && $subValue !== "-" && $subValue !== "") {
                $myNewData[$key][$subKey] = $subValue;
            }
        }
    
    } else {

        if($value !== "N/A" && $value !== "-" && $value !== "" ) {
            $myNewData[$key] = $value;
        }
    }
  }


print_r($myNewData);