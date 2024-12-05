<?php
$data = [
    's1' => '我是連于綸',
    's2' => '年齡29歲',
    's3' => '等等，我快要30歲',
];

function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

// dd($data);

$myJSON = json_encode($data);

echo $myJSON;
