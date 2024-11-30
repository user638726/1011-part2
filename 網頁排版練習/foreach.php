<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    function dd($data){
        print('<pre>');
        print_r($data);
        print('</pre>');
    }

    // index array
    $myArr = ['amy','bob','cat'];
    dd($myArr);

    // assoc array
    $assocArr = [
        's1' => 'amy',
        's2' => 'amy',
        's3' => 'amy'
    ];
    dd($assocArr);

    foreach ($myArr as $key => $value) {
        dd($key);
        dd($value);
    }

    foreach ($assocArr as $key => $value) {
        dd($key);
        dd($value);
    }

?>
</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    function dd($data){
        print('<pre>');
        print_r($data);
        print('</pre>');
    }

    // index array
    $myArr = ['amy','bob','cat'];
    dd($myArr);

    // assoc array
    $assocArr = [
        's1' => 'amy',
        's2' => 'amy',
        's3' => 'amy'
    ];
    dd($assocArr);

    foreach ($myArr as $key => $value) {
        dd($key);
        dd($value);
    }

    foreach ($assocArr as $key => $value) {
        dd($key);
        dd($value);
    }

?>
</body>
>>>>>>> 4a934a5dc1e68a9427d400dc0cc4ad9eb6aebac5
</html>