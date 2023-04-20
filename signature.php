<?php
// Создание нового изображения
$width = 600;
$height = 800;
$img = imagecreatetruecolor($width, $height);
imageantialias($img, true);
// Установка цвета текста
$text_color = imagecolorallocate($img, 0, 0, 0);

$bg_index = imagecolorallocate($img, 255, 255, 255);
$bg_color = imagecolorsforindex($img, $bg_index);
imagefill($img, 0, 0, $bg_index);

// Написание текста
$text = 'NSobolev';
$font_size = 80;
// $font_file = 'fonts/Allison_Script.otf';
// $font_file = 'fonts/Creattion_Demo.otf';
// $font_file = 'fonts/Holligate_Signature_Demo.ttf';  // only with small letter in the end
// $font_file = 'fonts/Southam.otf';  // only with small letter in the end
// $font_file = 'fonts/aerotis.regular.otf';
$font_file = 'fonts/broetown-signature.broetownsignatureregular.ttf';  // ----
// $font_file = 'fonts/funky-signature.regular.otf';
// $font_file = 'fonts/holimount.regular.otf';
// $font_file = 'fonts/honeymoon-avenue-script.regular.otf';  // only with small letter in the end
// $font_file = 'fonts/lovtony.regular.ttf';  // only with small letter in the end

// Поиск самого правого пикселя последней буквы
$bbox = imagettfbbox($font_size, 0, $font_file, $text);
$text_width = round(abs($bbox[4] - $bbox[0]) + 10);
$text_height = round(abs($bbox[5] - $bbox[1]) + 10);
$most_right_x = 0;
$most_left_x = $width;
$most_left_y = $height;
$most_right_y = 0;
$text_x = round(($width - $text_width) / 2);
$text_y = round(($height - $text_height) / 2 + $font_size);

// adding text
imagettftext($img, $font_size, 0, $text_x, $text_y, $text_color, $font_file, $text);

for($y=0; $y<$height; $y++) {
  for($x=0; $x<$width; $x++) {
    $color_index = imagecolorat($img, $x, $y);
    $color = imagecolorsforindex($img, $color_index);
    if ($color != $bg_color && $most_right_x < $x) {
      $most_right_x = $x;
      $most_right_y = $y;
    }
    else if ($color != $bg_color && $most_left_x > $x) {
      $most_left_x = $x;
      $most_left_y = $y;
    }
  }
}

function add_bottom_curve() {
  global $img, $most_right_x, $most_right_y, $text_width, $text_color;

  $points = array(
    [$most_right_x, $most_right_y], // Start point
    [$text_width / 1.5, $most_right_y + 45], // Control point 1
    [$text_width / 1.5, $most_right_y + 60], // Control point 2
    [$most_right_x, $most_right_y + 80], // End point
    [$most_right_x, $most_right_y - 60],
    [$most_right_x, $most_right_y + 80],
    [$text_width, $most_right_y + 60],
  );
  
  draw_beizer_curve($points, $img, $text_color);
}

function draw_beizer_curve($points, $img, $text_color) {
  $steps = 70;
  $line_thickness = 1; // set the desired thickness
  
  for ($j = -($line_thickness-1)/2; $j <= ($line_thickness-1)/2; $j++) {
    imagesetthickness($img, 1); // use a thin thickness
    for ($i = 0; $i <= $steps; ++$i) {
      $t = $i / $steps;
      $pt = bezier($points, $t);
      if ($i === 0) {
        $prev_pt = $pt;
        continue;
      }
      // draw the line with an offset starting and ending position
      imageline($img, round($prev_pt[0]+$j), round($prev_pt[1]+$j), round($pt[0]+$j), round($pt[1]+$j), $text_color);
      $prev_pt = $pt;
    }
  }
}

function bezier($points, $t) {
  $n = count($points) - 1;
  $result = array(0, 0);
  for ($i = 0; $i <= $n; $i++) {
      $b = intval(gmp_strval(gmp_binomial($n, $i))) * pow($t, $i) * pow(1 - $t, $n - $i);
      $p = $points[$i];
      $result[0] += $b * $p[0];
      $result[1] += $b * $p[1];
  }
  return $result;
}

function add_bottom_heart() {
  global $img, $most_right_x, $most_right_y, $text_width, $text_color;

  $points = array(
    [$most_right_x, $most_right_y],
    [$text_width, $most_right_y + 45],
    [$text_width / 1, $most_right_y + 60],
    [$most_right_x, $most_right_y + 80],
    [$most_right_x, $most_right_y - 60],
    [$most_right_x, $most_right_y + 80],
    [$text_width, $most_right_y + 80],
    [$most_right_x, $most_right_y + 100],
    [$most_right_x + 100, $most_right_y + 100],
    [$most_right_x, $most_right_y],
  );
  
  draw_beizer_curve($points, $img, $text_color);
}

function add_curve() {
  global $img, $most_right_x, $most_right_y, $text_width, $text_color, $width, $text_height, $height, $most_left_x, $most_left_y;

  $points = array(
    [$most_right_x, $most_right_y], // Start point
    [$most_right_x - $text_width / 3, $most_right_y * 0.7], // Control point 1
    [$most_left_x - $text_width, $most_right_y], // Control point 2
    [$most_right_x - $text_width / 1.5, ($height - $text_height) / 2 + $text_height], // End point
    [$most_right_x - $text_width / 1.5 + 20, ($height - $text_height) / 2 + $text_height - 20],
  );
  
  draw_beizer_curve($points, $img, $text_color);
}

function add_stretched_curve() {
  global $img, $most_right_x, $most_right_y, $text_width, $text_color, $width, $text_height, $height, $most_left_x, $most_left_y;

  $points = array(
    [$most_right_x, $most_right_y], // Start point
    [$most_right_x - $text_width / 3, $most_right_y * 0.7], // Control point 1
    [$most_left_x - $text_width, $most_right_y], // Control point 2
    [$most_right_x - $text_width, ($height - $text_height) / 2 + $text_height], // End point
    [$most_right_x - $text_width + 20, ($height - $text_height) / 2 + $text_height - 20],
  );
  
  draw_beizer_curve($points, $img, $text_color);
}

function add_bottom_curve2() {
  global $img, $most_right_x, $most_right_y, $text_width, $text_color, $most_left_x, $most_left_y;

  $points = array(
    [$most_right_x, $most_right_y], // Start point
    [$most_left_x + $text_width * -0.55, $most_right_y + 10], // Control point 1
    [$most_left_x + $text_width * -0.55, $most_right_y + 30], // Control point 2
    [$most_right_x, $most_right_y + 40], // End point
    [$most_right_x + $text_width * 0.25, $most_right_y + 50], // Control point 1
    [$most_right_x + $text_width * 0.25, $most_right_y + 50], // Control point 2
    [$most_left_x  + $text_width * 0.1, $most_right_y + 60], // End point
    
    [$most_right_x + $text_width * 0.25, $most_right_y + 50], // Control point 1
    [$most_right_x + $text_width * 0.25, $most_right_y + 50], // Control point 2
    [$most_left_x  + $text_width * 0.1, $most_right_y + 60], // End point
    [$most_right_x, $most_right_y - 60],
    [$most_right_x, $most_right_y + 80],
    [$text_width, $most_right_y + 60],
  );
  
  draw_beizer_curve($points, $img, $text_color);
}

function add_bottom_curve3() {
  global $img, $most_right_x, $most_right_y, $text_width, $text_color, $most_left_x, $most_left_y;

  $points = array(
    [$most_right_x, $most_right_y], // Start point
    [$most_left_x + $text_width * -0.55, $most_right_y + 10], // Control point 1
    [$most_left_x + $text_width * -0.55, $most_right_y + 30], // Control point 2
    [$most_right_x, $most_right_y + 40], // End point
    [$most_right_x + $text_width * 0.25, $most_right_y + 50], // Control point 1
    [$most_right_x + $text_width * 0.25, $most_right_y + 50], // Control point 2
    [$most_left_x  + $text_width * 0.1, $most_right_y + 60], // End point
    
    [$most_left_x + $text_width * 0.5, $most_right_y + 70], // Control point 1
    [$most_left_x + $text_width * 0.5, $most_right_y + 70], // Control point 2
    [$most_left_x + $text_width, $most_right_y + 80], // End point
  );
  
  draw_beizer_curve($points, $img, $text_color);
}

function add_bottom_curve4() {
  global $img, $most_right_x, $most_right_y, $text_width, $text_color, $most_left_x, $most_left_y;

  $points = array(
    [$most_right_x, $most_right_y], // Start point
    [$most_left_x + $text_width * -0.55, $most_right_y + 30], // Control point 1
    [$most_left_x + $text_width * -0.55, $most_right_y + 30], // Control point 2
    [$most_right_x, $most_right_y + 40], // End point

    [$most_right_x + $text_width * 0.25, $most_right_y + 50], // Control point 1
    [$most_right_x + $text_width * 0.25, $most_right_y + 50], // Control point 2
    [$most_left_x  + $text_width * 0.1, $most_right_y + 60], // End point
    
    [$most_left_x - $text_width * 0.25, $most_right_y + 70], // Control point 1
    [$most_left_x - $text_width * 0.25, $most_right_y + 70], // Control point 2
    [$most_left_x + $text_width * 0.1, $most_right_y + 80], // End point

    [$most_right_x, $most_right_y + 90], // Control point 1
    [$most_right_x, $most_right_y + 90], // Control point 2
    [$most_left_x + $text_width * 0.3, $most_right_y + 100], // End point
    [$most_left_x + $text_width * 0.3, $most_right_y + 90], // End point
  );
  
  draw_beizer_curve($points, $img, $text_color);
}

function add_bottom_curve5() {
  global $img, $most_right_x, $most_right_y, $text_width, $text_color, $most_left_x, $most_left_y;

  $points = array(
    [$most_right_x, $most_right_y], // Start point
    [$most_right_x + 40, $most_right_y - 180], // Start point
    [$most_right_x + 80, $most_right_y + 80], // Start point
    [$most_right_x - $text_width / 4, $most_right_y + 20], // Start point
    [$most_right_x - $text_width / 4, $most_right_y + 50], // Start point
    [$most_right_x - $text_width / 5, $most_right_y + 65], // Start point
    [$most_right_x - $text_width / 5, $most_right_y + 65], // Start point
    [$most_left_x + $text_width * -0.55, $most_right_y + 30], // Control point 1
    [$most_left_x + $text_width / 3, $most_left_y + 150], // End point
    [$most_left_x - $text_width / 4, $most_left_y + 50], // End point
    [$most_left_x + $text_width / 4, $most_left_y + 40], // End point
    [$most_left_x + $text_width / 4, $most_left_y + 70], // End point
  );
  
  draw_beizer_curve($points, $img, $text_color);
}

function add_bottom_curve6() {
  global $img, $most_right_x, $most_right_y, $text_width, $text_color, $most_left_x, $most_left_y;

  $points = array(
    [$most_right_x, $most_right_y], // Start point
    [$most_right_x + 40, $most_right_y - 180], // Start point
    [$most_right_x + 80, $most_right_y + 80], // Start point
    [$most_right_x - $text_width / 4, $most_right_y + 20], // Start point
    [$most_right_x - $text_width / 5, $most_right_y + 65], // Start point
    // [$most_left_x + $text_width * -0.55, $most_right_y + 30], // Control point 1
    [$most_left_x + $text_width / 3, $most_left_y + 150], // End point
    [$most_left_x - $text_width / 4, $most_left_y + 50], // End point
    [$most_left_x + $text_width / 2, $most_left_y + 40], // End point
    [$most_left_x + $text_width / 3, $most_left_y + 100], // End point
  );
  
  draw_beizer_curve($points, $img, $text_color);
}

function add_bottom_curve7() {
  global $img, $most_right_x, $most_right_y, $text_width, $text_color, $most_left_x, $most_left_y;

  $points = array(
    [$most_right_x, $most_right_y], // Start point
    [$most_right_x + 20, $most_right_y - 180], // Start point
    [$most_right_x - 20, $most_right_y - 100], // Start point
    [$most_right_x - 20, $most_right_y + 80], // Start point
    [$most_right_x - 10, $most_right_y + 20], // Start point
    [$most_right_x - 20, $most_right_y + 50], // Start point
    [$most_right_x, $most_right_y + 65], // Start point
    [$most_right_x, $most_right_y + 65], // Start point
    [$most_right_x, $most_right_y + 65], // Start point
    [$most_right_x, $most_right_y + 65], // Start point
    [$most_right_x, $most_right_y + 65], // Start point
    [$most_right_x - $text_width / 5, $most_right_y + 45], // Start point
    [$most_left_x + $text_width * -0.55, $most_right_y + 30], // Control point 1
    [$most_left_x + $text_width / 3, $most_left_y + 150], // End point
    [$most_left_x - $text_width / 4, $most_left_y + 50], // End point
    [$most_left_x + $text_width / 4, $most_left_y + 40], // End point
    [$most_left_x + $text_width / 4, $most_left_y + 70], // End point
  );
  
  draw_beizer_curve($points, $img, $text_color);
}

function add_right_line() {
  global $img, $most_right_x, $most_right_y, $text_width, $text_color, $most_left_x, $most_left_y;

  $points = array(
    [$most_right_x + 30, $most_right_y - 20], // Start point
    [$most_right_x + 45, $most_right_y - 40], // Start point
    [$most_right_x + 55, $most_right_y - 45], // Start poin
    [$most_right_x + 80, $most_left_y - 60], // End point
  );
  
  draw_beizer_curve($points, $img, $text_color);
}

function add_top_line() {
  global $img, $most_right_x, $most_right_y, $text_width, $text_color, $most_left_x, $most_left_y;

  $points = array(
    [$most_left_x, $most_right_y - 60], // Start point
    [$most_left_x, $most_right_y - 140], // Start point
    [$most_right_x, $most_right_y - 140], // End point
    [$most_right_x, $most_right_y - 60], // End point
  );
  
  draw_beizer_curve($points, $img, $text_color);
}

// add_stretched_curve();
// add_curve();
// add_bottom_curve();
// add_bottom_curve2();
// add_bottom_curve3();
// add_bottom_curve4();
// add_bottom_heart();
// add_bottom_curve5();
// add_bottom_curve6();
add_bottom_curve7();
// add_right_line();
// add_top_line();

// Вывод изображения
header('Content-Type: image/png');
imagepng($img);

// Освобождение памяти
imagedestroy($img);