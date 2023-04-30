<?php
require 'vendor/autoload.php';
use Intervention\Image\ImageManagerStatic as Image;


function draw_bottom_heart() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $height, $image;

  $points = [
    $most_right_x, $most_right_y,
    $text_width, $most_right_y + 45,
    $text_width, $most_right_y + 60,
    $most_right_x, $most_right_y + 80,
    $most_right_x, $most_right_y - 60,
    $most_right_x, $most_right_y + 80,
    $text_width, $most_right_y + 80,
    $most_right_x, $most_right_y + 100,
    $most_right_x + 100, $most_right_y + 100,
    $most_right_x, $most_right_y,
  ];

  $image->bezierCurve($points, function ($draw) {
    // $draw->border(2, '000000');
    $draw->color('#000');
    $draw->width(2);
  });
}

function draw_top_sun() {
  global $imagick, $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $height, $most_top_y;

  $overlay = new \Imagick();
  $overlay->readImage('C:\Apache24\htdocs\signature_script\images\sun.png');
  // $overlay->readImage('C:\php_projects\signature\images\sun.png');
  $overlay_width = $overlay->getImageWidth();
  $overlay_height = $overlay->getImageHeight();
  $degrees = -20;
  $overlay->rotateImage('none', $degrees);

  $x = round($most_right_x - $overlay_width / 2 - ($overlay_height * cos(deg2rad($degrees)) / 2)); // значение координаты X
  $y = round($most_top_y - $overlay_height - ($overlay_height * sin(deg2rad($degrees)) / 4) - 20); // значение координаты Y

  $imagick->compositeImage($overlay, \Imagick::COMPOSITE_DEFAULT, $x, $y);
}

// Написание текста
$first_name = 'Nikita';
$last_name = 'Sobolev';
$middle_name = 'Alexeyevich';

$first_letter_of_first_name = strlen($first_name) > 0 ? $first_name[0] : '';
$first_letter_of_last_name = strlen($last_name) > 0 ? $last_name[0] : '';
$first_letter_of_middle_name = strlen($middle_name) > 0 ? $middle_name[0] : '';
$shortest_part_of_the_name = strlen($first_name) < strlen($last_name) ? $first_name : $last_name;
$longest_part_of_the_name = $shortest_part_of_the_name == $first_name ? $last_name : $first_name;
$shortest_part_of_the_name_lowercase = strtolower($shortest_part_of_the_name);

$text_style_1 = "$first_letter_of_last_name$first_name"; // SNikita
$text_style_2 = "$first_letter_of_first_name$last_name"; // NSobolev
$text_style_3 = "$first_letter_of_last_name$first_letter_of_middle_name$first_name"; // SANikita
$text_style_4 = "$first_letter_of_first_name$first_letter_of_middle_name$last_name"; // NASobolev
$text_style_5 = "$last_name"; // Sobolev
$text_style_6 = "$first_name"; // Nikita
$text_style_7 = "    $shortest_part_of_the_name_lowercase\n$longest_part_of_the_name"; //     nikita \n Sobolev
$text_style_2_short = substr($text_style_2, 0, 4); // NSobolev

$font_allison = [
  'path' => 'fonts/Allison_Script.otf',
  'thickness_index' => 60
];
$font_creation = [
  'path' => 'fonts/Creattion_Demo.otf',
  'thickness_index' => 60
];
$font_aerotis = [
  'path' => 'fonts/aerotis.regular.otf',
  'thickness_index' => 60
];
$font_funky = [
  'path' => 'fonts/funky-signature.regular.otf',
  'thickness_index' => 60 // 1
];
$font_holimount = [
  'path' => 'fonts/holimount.regular.otf',
  'thickness_index' => 60
];
$font_southam = [
  'path' => 'fonts/Southam.otf',
  'thickness_index' => 60
];
$font_honeymoon = [
  'path' => 'fonts/honeymoon-avenue-script.regular.otf',
  'thickness_index' => 120 // 1
];
$font_adinda_melia = [
  'path' => 'fonts/AdindaMelia.otf',
  'thickness_index' => 25 // 1
];
$font_alfrida = [
  'path' => 'fonts/AlfridaSignature.ttf',
  'thickness_index' => 30 // 1
];
$font_arty = [
  'path' => 'fonts/ArtySignature.otf',
  'thickness_index' => 60 // 1
];
$font_barokah = [
  'path' => 'fonts/BarokahSignature.ttf',
  'thickness_index' => 120 // 1
];
$font_centhiny = [
  'path' => 'fonts/Centhiny.otf',
  'thickness_index' => 120 // 1
];
$font_geovana = [
  'path' => 'fonts/Geovana.otf',
  'thickness_index' => 120 // 1
];
$font_hight_summit = [
  'path' => 'fonts/HighSummit.otf',
  'thickness_index' => 120 // 1
];
$font_humaira = [
  'path' => 'fonts/Humaira.otf',
  'thickness_index' => 120 // 1
];
$font_mrs_saint_delafield = [
  'path' => 'fonts/MrsSaintDelafield-Regular.ttf',
  'thickness_index' => 120 // 1
];
$font_radith = [
  'path' => 'fonts/Radith.otf',
  'thickness_index' => 120 // 1
];
$font_rathie = [
  'path' => 'fonts/Rathie.otf',
  'thickness_index' => 120 // 1
];
$font_somelove = [
  'path' => 'fonts/Somelove.otf',
  'thickness_index' => 120 // 1
];
$font_south_town = [
  'path' => 'fonts/SouthTown.otf',
  'thickness_index' => 120 // 1
];
$font_thesignature = [
  'path' => 'fonts/Thesignature.otf',
  'thickness_index' => 120 // 1
];
$index = 0;

$fonts = [
  $font_southam,
  $font_aerotis,
  $font_funky,
  $font_honeymoon,
  $font_holimount,
  $font_creation,
  $font_adinda_melia,
  $font_alfrida,
  $font_arty,
  $font_barokah,
  $font_centhiny,
  $font_geovana,
  $font_hight_summit,
  $font_humaira,
  $font_mrs_saint_delafield,
  $font_radith,
  $font_rathie,
  $font_somelove,
  $font_south_town,
  $font_thesignature,
];


function _get_style($font, $text_style, $curves_style, $angle=0, $font_size=240) {
  return [
    'text_style' => $text_style,
    'font' => $font,
    'draw_styles' => $curves_style,
    'font_size' => $font_size,
    'angle' => $angle,
  ];
}

$styles = [];
$font_i = 0;
for ($i=0; $i < 1; $i++) {
  $style_number = $i + 1;

  for ($j=0; $j < 3; $j++) {
    $styles = [
      ...$styles,
      "get_style_$style_number"($fonts[$font_i])
    ];

    $font_i = $font_i + 2 > count($fonts) ? 0 : $font_i + 1;
  }
}

function get_style_1($font) {
  global $text_style_1;

  return _get_style($font, $text_style_1, 'add_curve_style_1', -15);
}

function get_style_2($font) {
  global $text_style_7;
  
  return _get_style($font, $text_style_7, 'add_curve_style_2', -15);
}

function add_curve_style_1() {
  draw_bottom_heart();
}

function add_curve_style_2() {
  draw_top_sun();
}

$width;
$height;
$most_right_x;
$most_left_x;
$most_right_y;
$most_left_y;
$most_top_y;
$text_width;
$text_height;
$text_box_bottom_y;
$text_box_top_y;

// $imagick = new \Imagick();
// $bg_color = new ImagickPixel('white');
$image;

// $text_draw = new \ImagickDraw();
// $text_draw->setFillColor('black');

// $curves_draw = new \ImagickDraw();
// $curves_draw->setFillColor('transparent');
// $curves_draw->setStrokeOpacity(1);
// $curves_draw->setStrokeColor('black');
// $curves_draw->setStrokeAntialias(true);
// $curves_draw->setStrokeLinecap(\imagick::LINECAP_ROUND);
// $curves_draw->setStrokeLinejoin(\imagick::LINEJOIN_ROUND);
// $curves_draw->setStrokeMiterLimit(2);
// $curves_draw->setStrokeAntialias(true);

Image::configure(['driver' => 'imagick']);

function get_image_from_style($styles_index) {
  global $image, $text_draw, $imagick, $bg_color, $styles, $width, $height, $most_right_x, $most_left_x, $most_right_y, $most_left_y, $most_top_y, $text_width, $text_height, $text_box_bottom_y, $text_box_top_y, $curves_draw;

  $style = $styles[$styles_index];
  $font = $style['font'];
  $text = $style['text_style'];
  $font_size = $style['font_size'];
  $angle = $style['angle'];
  $draw_styles = $style['draw_styles'];
  $thickness = max(1, round($font_size / $font['thickness_index']));
  
  $width = round(1200);
  $height = round(800);
  $image = Image::canvas($width, $height, '#ffffff');

  // $text_draw->setTextInterlineSpacing(-$font_size / 1.25);
  // $text_draw->setFontSize($font_size);
  // $text_draw->setFont($font['path']);


  // $imagick->newImage($width, $height, $bg_color);
  // $imagick->setImageFormat('png');

  $text_x = round($width / 2);
  $text_y = round($height / 2);
  $text_image = $image->text($text, $text_x, $text_y, function($text) use ($font, $font_size) {
    $text->file($font['path']);
    $text->size($font_size);
    $text->color('#000000');
    $text->align('center');
    $text->valign('center');
  });

  $text_width = $text_image->getWidth();
  $text_height = $text_image->getHeight();

  // $imagick->annotateImage($text_draw, $text_x, $text_y, 0, $text);
  
  $text_box_top_y = $text_y - $text_height / 2; //$metrics['boundingBox']['y1'] + $text_y / 2;
  $text_box_bottom_y = $text_y + $text_height / 2; // $metrics['boundingBox']['y2'] / 2 + $text_y;

  $most_right_x = 0;
  $most_left_x = $width;
  $most_right_y = 0;
  $most_left_y = $height;
  $most_top_y = $height;
  for($y=0; $y<$height; $y++) {
    for($x=0; $x<$width; $x++) {
      // $color = $image->getPixel($x, $y);
      $color = $image->pickColor($x, $y, 'hex');
      $isDifferentWithBg = $color == '#000000';

      if (!$isDifferentWithBg) {
        if ($most_right_x < $x) {
          $most_right_x = $x;
          $most_right_y = $y;
        }
        else if ($most_left_x > $x) {
          $most_left_x = $x;
          $most_left_y = $y;
        }
  
        if ($most_top_y > $y) {
          $most_top_y = $y;
        }
      }
    }
  }

  // $curves_draw->setStrokeWidth($thickness);

  $draw_styles();
  // $imagick->drawImage($curves_draw);
  // $imagick->rotateImage('white', $angle);
  // $imagick->trimImage(0);

  return $image;
}

// $styles_index = 2;

// $images = [];

// for ($i=0; $i < count($styles); $i++) {
  //   $image = get_image_from_style(3);
  
  //   $images = [...$images, $image];
  // }
  // echo $images;
  
  
$image = get_image_from_style($index);
// header('Content-Type: image/png');
echo $image->encode('png');;

// print_r($styles[0]);