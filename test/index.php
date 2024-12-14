<?php
function getCornersCount(string ...$shapeNames): void {
    $shapeCorners = [
        'square' => 4,
        'circle' => 0,
        'triangle' => 3,
    ];

    foreach ($shapeNames as $shapeName) {
        $shapeName = strtolower(trim($shapeName));
        if (array_key_exists($shapeName, $shapeCorners)) {
            echo "$shapeName - {$shapeCorners[$shapeName]} углов<br>";
        } else {
            echo "$shapeName - not defined<br>";
        }
    }
}

if (isset($_POST['shapes'])) {
    $input = trim($_POST['shapes']);
    $shapes = array_map('trim', explode(',', $input));
    getCornersCount(...$shapes);
}
?>

<form method="post">
    <label for="shapes">Введите названия фигур, разделенные запятой:</label><br>
    <input type="text" id="shapes" name="shapes"><br><br>
    <button type="submit">Отправить</button>
</form>
