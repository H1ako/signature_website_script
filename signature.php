<?php
// TODO: попробовать вариант с Imagick bezier
$styles_index = 0;
$text_style_index = 0;

// Написание текста
$text = 'NSobolev';
$first_name = 'Nikita';
$last_name = 'Sobolev';
$middle_name = 'Alexeyevich';
$first_letter_of_first_name = strlen($first_name) > 0 ? $first_name[0] : '';
$first_letter_of_last_name = strlen($last_name) > 0 ? $last_name[0] : '';
$first_letter_of_middle_name = strlen($middle_name) > 0 ? $middle_name[0] : '';

$styled_text_1 = "$first_letter_of_last_name$first_letter_of_first_name$first_letter_of_middle_name"; // SNA
$styled_text_2 = "$first_letter_of_last_name$first_letter_of_first_name"; // SN
$styled_text_3 = "$first_letter_of_last_name$first_name"; // SNikita
$styled_text_4 = "$first_letter_of_last_name$first_letter_of_middle_name$first_name"; // SANikita
$styled_text_5 = "$first_letter_of_first_name$last_name"; // NSobolev
$styled_text_6 = "$first_letter_of_first_name$first_letter_of_middle_name$last_name"; // NASobolev
$styled_text_7 = "$last_name"; // Sobolev
$styled_text_8 = "$first_name"; // Nikita

$text_styles_not_acronym = [
  $styled_text_3,
  $styled_text_4,
  $styled_text_5,
  $styled_text_6,
  $styled_text_7,
  $styled_text_8
];

$text_styles_full = [
  $styled_text_1,
  $styled_text_2,
  $styled_text_3,
  $styled_text_4,
  $styled_text_5,
  $styled_text_6
];

$font_size = 80;
$font_allison = [
  'path' => 'fonts/Allison_Script.otf',
  'text_styles_thickness' => 2
];
$font_creation = [
  'path' => 'fonts/Creattion_Demo.otf',
  'text_styles_thickness' => 2
];
$font_aerotis = [
  'path' => 'fonts/aerotis.regular.otf',
  'text_styles_thickness' => 2
];
$font_funky = [
  'path' => 'fonts/funky-signature.regular.otf',
  'text_styles_thickness' => 1
];
$font_holimount = [
  'path' => 'fonts/holimount.regular.otf',
  'text_styles_thickness' => 2
];
$font_southam = [
  'path' => 'fonts/Southam.otf',
  'text_styles_thickness' => 2
];  // only with small letter in the end
$font_honeymoon = [
  'path' => 'fonts/honeymoon-avenue-script.regular.otf',
  'text_styles_thickness' => 1
];  // only with small letter in the end

$fonts_full = [
  $font_aerotis,
  $font_funky,
];
$fonts_not_acronym = [
  $font_southam,
  $font_honeymoon,
  $font_holimount,
  $font_creation,
];

$styles = [
  
];

foreach ($fonts_not_acronym as $font) {
  $styles = [...$styles, get_style1($font, $text_styles_not_acronym)];
  $styles = [...$styles, get_style2($font, $text_styles_not_acronym)];
  $styles = [...$styles, get_style3($font, $text_styles_not_acronym)];
  $styles = [...$styles, get_style4($font, $text_styles_not_acronym)];
  $styles = [...$styles, get_style5($font, $text_styles_not_acronym)];
  $styles = [...$styles, get_style6($font, $text_styles_not_acronym)];
  $styles = [...$styles, get_style7($font, $text_styles_not_acronym)];
  $styles = [...$styles, get_style8($font, $text_styles_not_acronym)];
  $styles = [...$styles, get_style9($font, $text_styles_not_acronym)];
  $styles = [...$styles, get_style10($font, $text_styles_not_acronym)];
  $styles = [...$styles, get_style11($font, $text_styles_not_acronym)];
  $styles = [...$styles, get_style12($font, $text_styles_not_acronym)];
  $styles = [...$styles, get_style13($font, $text_styles_not_acronym)];
  $styles = [...$styles, get_style14($font, $text_styles_not_acronym)];
  $styles = [...$styles, get_style15($font, $text_styles_not_acronym)];
  $styles = [...$styles, get_style16($font, $text_styles_not_acronym)];
  $styles = [...$styles, get_style17($font, $text_styles_not_acronym)];
  $styles = [...$styles, get_style18($font, $text_styles_not_acronym)];
  $styles = [...$styles, get_style19($font, $text_styles_not_acronym)];
  $styles = [...$styles, get_style20($font, $text_styles_not_acronym)];
  $styles = [...$styles, get_style21($font, $text_styles_not_acronym)];
  $styles = [...$styles, get_style22($font, $text_styles_not_acronym)];
  $styles = [...$styles, get_style23($font, $text_styles_not_acronym)];
  $styles = [...$styles, get_style24($font, $text_styles_not_acronym)];
  $styles = [...$styles, get_style25($font, $text_styles_not_acronym)];
  $styles = [...$styles, get_style26($font, $text_styles_not_acronym)];
  $styles = [...$styles, get_style27($font, $text_styles_not_acronym)];
  $styles = [...$styles, get_style28($font, $text_styles_not_acronym)];
  $styles = [...$styles, get_style29($font, $text_styles_not_acronym)];
}

foreach ($fonts_full as $font) {
  $styles = [...$styles, get_style1($font, $text_styles_full)];
  $styles = [...$styles, get_style2($font, $text_styles_full)];
  $styles = [...$styles, get_style3($font, $text_styles_full)];
  $styles = [...$styles, get_style4($font, $text_styles_full)];
  $styles = [...$styles, get_style5($font, $text_styles_full)];
  $styles = [...$styles, get_style6($font, $text_styles_full)];
  $styles = [...$styles, get_style7($font, $text_styles_full)];
  $styles = [...$styles, get_style8($font, $text_styles_full)];
  $styles = [...$styles, get_style9($font, $text_styles_full)];
  $styles = [...$styles, get_style10($font, $text_styles_full)];
  $styles = [...$styles, get_style11($font, $text_styles_full)];
  $styles = [...$styles, get_style12($font, $text_styles_full)];
  $styles = [...$styles, get_style13($font, $text_styles_full)];
  $styles = [...$styles, get_style14($font, $text_styles_full)];
  $styles = [...$styles, get_style15($font, $text_styles_full)];
  $styles = [...$styles, get_style16($font, $text_styles_full)];
  $styles = [...$styles, get_style17($font, $text_styles_full)];
  $styles = [...$styles, get_style18($font, $text_styles_full)];
  $styles = [...$styles, get_style19($font, $text_styles_full)];
  $styles = [...$styles, get_style20($font, $text_styles_full)];
  $styles = [...$styles, get_style21($font, $text_styles_full)];
  $styles = [...$styles, get_style22($font, $text_styles_full)];
  $styles = [...$styles, get_style23($font, $text_styles_full)];
  $styles = [...$styles, get_style24($font, $text_styles_full)];
  $styles = [...$styles, get_style25($font, $text_styles_full)];
  $styles = [...$styles, get_style26($font, $text_styles_full)];
  $styles = [...$styles, get_style27($font, $text_styles_full)];
  $styles = [...$styles, get_style28($font, $text_styles_full)];
  $styles = [...$styles, get_style29($font, $text_styles_full)];
}

function _get_style($font, $text_styles, $curves) {
  return [
    'text_styles' => $text_styles,
    'font' => $font,
    'curves' => $curves
  ];
}

// top curve
function get_style1($font, $text_styles) {
  return _get_style($font, $text_styles, [
    'add_curve',
  ]);
}

function get_style2($font, $text_styles) {
  return _get_style($font, $text_styles, [
    'add_curve',
    'add_right_line'
  ]);
}

function get_style3($font, $text_styles) {
  return _get_style($font, $text_styles, [
    'add_curve',
    'add_top_line'
  ]);
}

// top stretched curve
function get_style4($font, $text_styles) {
  return _get_style($font, $text_styles, [
    'add_stretched_curve',
  ]);
}

function get_style5($font, $text_styles) {
  return _get_style($font, $text_styles, [
    'add_stretched_curve',
    'add_right_line'
  ]);
}

function get_style6($font, $text_styles) {
  return _get_style($font, $text_styles, [
    'add_stretched_curve',
    'add_top_line'
  ]);
}

function get_style7($font, $text_styles) {
  return _get_style($font, $text_styles, [
    'add_stretched_curve',
    'add_bottom_curve4'
  ]);
}

function get_style8($font, $text_styles) {
  return _get_style($font, $text_styles, [
    'add_stretched_curve',
    'add_bottom_curve3'
  ]);
}

// bottom curve 2
function get_style9($font, $text_styles) {
  return _get_style($font, $text_styles, [
    'add_bottom_curve2',
  ]);
}

function get_style10($font, $text_styles) {
  return _get_style($font, $text_styles, [
    'add_bottom_curve2',
    'add_right_line'
  ]);
}

function get_style11($font, $text_styles) {
  return _get_style($font, $text_styles, [
    'add_bottom_curve2',
    'add_top_line'
  ]);
}

// bottom curve 3
function get_style12($font, $text_styles) {
  return _get_style($font, $text_styles, [
    'add_bottom_curve3',
  ]);
}

function get_style13($font, $text_styles) {
  return _get_style($font, $text_styles, [
    'add_bottom_curve3',
    'add_right_line'
  ]);
}

function get_style14($font, $text_styles) {
  return _get_style($font, $text_styles, [
    'add_bottom_curve3',
    'add_top_line'
  ]);
}

// bottom curve 4
function get_style15($font, $text_styles) {
  return _get_style($font, $text_styles, [
    'add_bottom_curve4',
  ]);
}

function get_style16($font, $text_styles) {
  return _get_style($font, $text_styles, [
    'add_bottom_curve4',
    'add_right_line'
  ]);
}

function get_style17($font, $text_styles) {
  return _get_style($font, $text_styles, [
    'add_bottom_curve4',
    'add_top_line'
  ]);
}

// add_bottom_heart
function get_style18($font, $text_styles) {
  return _get_style($font, $text_styles, [
    'add_bottom_heart',
  ]);
}

function get_style19($font, $text_styles) {
  return _get_style($font, $text_styles, [
    'add_bottom_heart',
    'add_right_line'
  ]);
}

function get_style20($font, $text_styles) {
  return _get_style($font, $text_styles, [
    'add_bottom_heart',
    'add_top_line'
  ]);
}

// bottom curve 5
function get_style21($font, $text_styles) {
  return _get_style($font, $text_styles, [
    'add_bottom_curve5',
  ]);
}

function get_style22($font, $text_styles) {
  return _get_style($font, $text_styles, [
    'add_bottom_curve5',
    'add_right_line'
  ]);
}

function get_style23($font, $text_styles) {
  return _get_style($font, $text_styles, [
    'add_bottom_curve5',
    'add_top_line'
  ]);
}

// bottom curve 6
function get_style24($font, $text_styles) {
  return _get_style($font, $text_styles, [
    'add_bottom_curve6',
  ]);
}

function get_style25($font, $text_styles) {
  return _get_style($font, $text_styles, [
    'add_bottom_curve6',
    'add_right_line'
  ]);
}

function get_style26($font, $text_styles) {
  return _get_style($font, $text_styles, [
    'add_bottom_curve6',
    'add_top_line'
  ]);
}

// bottom curve 7
function get_style27($font, $text_styles) {
  return _get_style($font, $text_styles, [
    'add_bottom_curve7',
  ]);
}

function get_style28($font, $text_styles) {
  return _get_style($font, $text_styles, [
    'add_bottom_curve7',
    'add_right_line'
  ]);
}

function get_style29($font, $text_styles) {
  return _get_style($font, $text_styles, [
    'add_bottom_curve7',
    'add_top_line'
  ]);
}

function add_bottom_curve() {
  global $img, $most_right_x, $most_right_y, $text_width, $text_color, $thickness;

  $points = array(
    [$most_right_x, $most_right_y], // Start point
    [$text_width / 1.5, $most_right_y + 45], // Control point 1
    [$text_width / 1.5, $most_right_y + 60], // Control point 2
    [$most_right_x, $most_right_y + 80], // End point
    [$most_right_x, $most_right_y - 60],
    [$most_right_x, $most_right_y + 80],
    [$text_width, $most_right_y + 60],
  );
  
  draw_beizer_curve($points, $img, $text_color, $thickness);
}

function draw_beizer_curve($points, $img, $text_color, $line_thickness=1) {
  $steps = 70;
  
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
  global $img, $most_right_x, $most_right_y, $text_width, $text_color, $thickness;

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
  
  draw_beizer_curve($points, $img, $text_color, $thickness);
}

function add_curve() {
  global $img, $most_right_x, $most_right_y, $text_width, $text_color, $width, $text_height, $height, $most_left_x, $most_left_y, $thickness;

  $points = array(
    [$most_right_x, $most_right_y], // Start point
    [$most_right_x - $text_width / 3, $most_right_y * 0.7], // Control point 1
    [$most_left_x - $text_width, $most_right_y], // Control point 2
    [$most_right_x - $text_width / 1.5, ($height - $text_height) / 2 + $text_height], // End point
    [$most_right_x - $text_width / 1.5 + 20, ($height - $text_height) / 2 + $text_height - 20],
  );
  
  draw_beizer_curve($points, $img, $text_color, $thickness);
}

function add_stretched_curve() {
  global $img, $most_right_x, $most_right_y, $text_width, $text_color, $width, $text_height, $height, $most_left_x, $most_left_y, $thickness;

  $points = array(
    [$most_right_x, $most_right_y], // Start point
    [$most_right_x - $text_width / 3, $most_right_y * 0.7], // Control point 1
    [$most_left_x - $text_width, $most_right_y], // Control point 2
    [$most_right_x - $text_width, ($height - $text_height) / 2 + $text_height], // End point
    [$most_right_x - $text_width + 20, ($height - $text_height) / 2 + $text_height - 20],
  );
  
  draw_beizer_curve($points, $img, $text_color, $thickness);
}

function add_bottom_curve2() {
  global $img, $most_right_x, $most_right_y, $text_width, $text_color, $most_left_x, $most_left_y, $thickness;

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
  
  draw_beizer_curve($points, $img, $text_color, $thickness);
}

function add_bottom_curve3() {
  global $img, $most_right_x, $most_right_y, $text_width, $text_color, $most_left_x, $most_left_y, $thickness;

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
  
  draw_beizer_curve($points, $img, $text_color, $thickness);
}

function add_bottom_curve4() {
  global $img, $most_right_x, $most_right_y, $text_width, $text_color, $most_left_x, $most_left_y, $thickness;

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
  
  draw_beizer_curve($points, $img, $text_color, $thickness);
}

function add_bottom_curve5() {
  global $img, $most_right_x, $most_right_y, $text_width, $text_color, $most_left_x, $most_left_y, $thickness;

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
  
  draw_beizer_curve($points, $img, $text_color, $thickness);
}

function add_bottom_curve6() {
  global $img, $most_right_x, $most_right_y, $text_width, $text_color, $most_left_x, $most_left_y, $thickness;

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
  
  draw_beizer_curve($points, $img, $text_color, $thickness);
}

function add_bottom_curve7() {
  global $img, $most_right_x, $most_right_y, $text_width, $text_color, $most_left_x, $most_left_y, $thickness;

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
  
  draw_beizer_curve($points, $img, $text_color, $thickness);
}

function add_right_line() {
  global $img, $most_right_x, $most_right_y, $text_width, $text_color, $most_left_x, $most_left_y, $thickness;

  $points = array(
    [$most_right_x + 30, $most_right_y - 20], // Start point
    [$most_right_x + 45, $most_right_y - 40], // Start point
    [$most_right_x + 55, $most_right_y - 45], // Start poin
    [$most_right_x + 80, $most_left_y - 60], // End point
  );
  
  draw_beizer_curve($points, $img, $text_color, $thickness);
}

function add_top_line() {
  global $img, $most_right_x, $most_right_y, $text_width, $text_color, $most_left_x, $most_left_y, $thickness;

  $points = array(
    [$most_left_x, $most_right_y - 60], // Start point
    [$most_left_x, $most_right_y - 140], // Start point
    [$most_right_x, $most_right_y - 140], // End point
    [$most_right_x, $most_right_y - 60], // End point
  );
  
  draw_beizer_curve($points, $img, $text_color, $thickness);
}

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

$style = $styles[$styles_index];
// print_r($style);
$font = $style['font'];
$curves = $style['curves'];
$text_style = $style['text_styles'][$text_style_index];

$bbox = imagettfbbox($font_size, 0, $font['path'], $text_style);
$text_width = round(abs($bbox[4] - $bbox[0]) + 10);
$text_height = round(abs($bbox[5] - $bbox[1]) + 10);
$most_right_x = 0;
$most_left_x = $width;
$most_left_y = $height;
$most_right_y = 0;
$text_x = round(($width - $text_width) / 2);
$text_y = round(($height - $text_height) / 2 + $font_size);
$thickness = $font['text_styles_thickness'];

// adding text
imagettftext($img, $font_size, 0, $text_x, $text_y, $text_color, $font['path'], $text_style);

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

foreach ($curves as $curve) {
  $curve();
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
// add_bottom_curve7();
// add_right_line();
// add_top_line();

// Вывод изображения
header('Content-Type: image/png');
imagepng($img);

// Освобождение памяти
imagedestroy($img);