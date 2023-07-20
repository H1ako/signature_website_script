<?php
// Создание изображения
$imageWidth = 800;
$imageHeight = 600;
$image = imagecreatetruecolor($imageWidth, $imageHeight);

// Установка цветов
$backgroundColor = imagecolorallocate($image, 255, 255, 255);
$curveColor = imagecolorallocate($image, 0, 0, 0);

// Заполнение фона
imagefill($image, 0, 0, $backgroundColor);

// Координаты точек кривой Bezier
$points = [
  ['x' => 100, 'y' => 100],
  ['x' => 200, 'y' => 300],
  ['x' => 300, 'y' => 100],
  ['x' => 400, 'y' => 200],
];

// Рисование кривой Bezier
$numberOfPoints = count($points);
for ($t = 0; $t <= 1; $t += 0.01) {
  $x = 0;
  $y = 0;

  for ($i = 0; $i < $numberOfPoints; $i++) {
    $binomialCoefficient = binomialCoefficient($numberOfPoints - 1, $i);
    $power1 = pow(1 - $t, $numberOfPoints - 1 - $i);
    $power2 = pow($t, $i);
    $x += $binomialCoefficient * $power1 * $power2 * $points[$i]['x'];
    $y += $binomialCoefficient * $power1 * $power2 * $points[$i]['y'];
  }

  imagesetpixel($image, (int) round($x), (int) round($y), $curveColor);
}

// Отправка изображения в браузер
header('Content-Type: image/png');
imagepng($image);
imagedestroy($image);

// Функция для вычисления биномиального коэффициента
function binomialCoefficient($n, $k)
{
  $result = 1;
  for ($i = 1; $i <= $k; $i++) {
    $result *= ($n - $i + 1) / $i;
  }
  return $result;
}
