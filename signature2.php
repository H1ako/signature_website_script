<?php
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

function draw_bottom_heart() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y;

  $points = [
    ['x' => $most_right_x, 'y' => $most_right_y],
    ['x' => $text_width, 'y' => $most_right_y + 45],
    ['x' => $text_width / 1, 'y' => $most_right_y + 60],
    ['x' => $most_right_x, 'y' => $most_right_y + 80],
    ['x' => $most_right_x, 'y' => $most_right_y - 60],
    ['x' => $most_right_x, 'y' => $most_right_y + 80],
    ['x' => $text_width, 'y' => $most_right_y + 80],
    ['x' => $most_right_x, 'y' => $most_right_y + 100],
    ['x' => $most_right_x + 100, 'y' => $most_right_y + 100],
    ['x' => $most_right_x, 'y' => $most_right_y],
  ];

  $curves_draw->bezier($points);
}

function draw_curve() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y;

  $points = [
    ['x' => $most_right_x, 'y' => $most_right_y],
    ['x' => $most_right_x - $text_width / 3, 'y' => $most_right_y * 0.7],
    ['x' => $most_left_x - $text_width, 'y' => $most_right_y],
    ['x' => $most_right_x - $text_width / 1.5, 'y' => ($height - $text_height) / 2 + $text_height],
    ['x' => $most_right_x - $text_width / 1.5 + 20, 'y' => ($height - $text_height) / 2 + $text_height - 20],
  ];

  $curves_draw->bezier($points);
}

function draw_stretched_curve() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y;

  $points = [
    ['x' => $most_right_x, 'y' => $most_right_y],
    ['x' => $most_right_x - $text_width / 3, 'y' => $most_right_y * 0.7],
    ['x' => $most_left_x - $text_width, 'y' => $most_right_y],
    ['x' => $most_right_x - $text_width, 'y' => ($height - $text_height) / 2 + $text_height],
    ['x' => $most_right_x - $text_width + 20, 'y' => ($height - $text_height) / 2 + $text_height - 20],
  ];

  $curves_draw->bezier($points);
}

function draw_bottom_curve1() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y;

  $points = [
    ['x' => $most_right_x, 'y' => $most_right_y],
    ['x' => $most_right_x + 20, 'y' => $most_right_y - 180],
    ['x' => $most_right_x - 20, 'y' => $most_right_y - 100],
    ['x' => $most_right_x - 20, 'y' => $most_right_y + 80],
    ['x' => $most_right_x - 10, 'y' => $most_right_y + 20],
    ['x' => $most_right_x - 20, 'y' => $most_right_y + 50],
    ['x' => $most_right_x, 'y' => $most_right_y + 65],
    ['x' => $most_right_x, 'y' => $most_right_y + 65],
    ['x' => $most_right_x, 'y' => $most_right_y + 65],
    ['x' => $most_right_x, 'y' => $most_right_y + 65],
    ['x' => $most_right_x, 'y' => $most_right_y + 65],
    ['x' => $most_right_x - $text_width / 5, 'y' => $most_right_y + 45],
    ['x' => $most_left_x + $text_width * -0.55, 'y' => $most_right_y + 30],
    ['x' => $most_left_x + $text_width / 3, 'y' => $most_left_y + 150],
    ['x' => $most_left_x - $text_width / 4, 'y' => $most_left_y + 50],
    ['x' => $most_left_x + $text_width / 4, 'y' => $most_left_y + 40],
    ['x' => $most_left_x + $text_width / 4, 'y' => $most_left_y + 70],
  ];

  $curves_draw->bezier($points);
}

function draw_bottom_curve2() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y;

  $points = [
    ['x' => $most_right_x, 'y' => $most_right_y],
    ['x' => $most_right_x + 40, 'y' => $most_right_y - 180],
    ['x' => $most_right_x + 80, 'y' => $most_right_y + 80],
    ['x' => $most_right_x - $text_width / 4, 'y' => $most_right_y + 20],
    ['x' => $most_right_x - $text_width / 4, 'y' => $most_right_y + 50],
    ['x' => $most_right_x - $text_width / 5, 'y' => $most_right_y + 65],
    ['x' => $most_right_x - $text_width / 5, 'y' => $most_right_y + 65],
    ['x' => $most_left_x + $text_width * -0.55, 'y' => $most_right_y + 30],
    ['x' => $most_left_x + $text_width / 3, 'y' => $most_left_y + 150],
    ['x' => $most_left_x - $text_width / 4,'y' =>  $most_left_y + 50],
    ['x' => $most_left_x + $text_width / 4,'y' =>  $most_left_y + 40],
    ['x' => $most_left_x + $text_width / 4,'y' =>  $most_left_y + 70],
  ];

  $curves_draw->bezier($points);
}

function draw_bottom_curve3() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y;

  $points = [
    ['x' => $most_right_x, 'y' => $most_right_y],
    ['x' => $most_left_x + $text_width * -0.55, 'y' => $most_right_y + 30],
    ['x' => $most_left_x + $text_width * -0.55, 'y' => $most_right_y + 30],
    ['x' => $most_right_x, 'y' => $most_right_y + 40],
    ['x' => $most_right_x + $text_width * 0.25, 'y' => $most_right_y + 50],
    ['x' => $most_right_x + $text_width * 0.25, 'y' => $most_right_y + 50],
    ['x' => $most_left_x  + $text_width * 0.1, 'y' => $most_right_y + 60],
    ['x' => $most_left_x - $text_width * 0.25, 'y' => $most_right_y + 70],
    ['x' => $most_left_x - $text_width * 0.25, 'y' => $most_right_y + 70],
    ['x' => $most_left_x + $text_width * 0.1, 'y' => $most_right_y + 80],
    ['x' => $most_right_x, 'y' => $most_right_y + 90],
    ['x' => $most_right_x, 'y' => $most_right_y + 90],
    ['x' => $most_left_x + $text_width * 0.3, 'y' => $most_right_y + 100],
    ['x' => $most_left_x + $text_width * 0.3, 'y' => $most_right_y + 90],
  ];

  $curves_draw->bezier($points);
}

function draw_bottom_curve4() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y;

  $points = [
    ['x' => $most_right_x, 'y' => $most_right_y],
    ['x' => $most_left_x + $text_width * -0.55, 'y' => $most_right_y + 10],
    ['x' => $most_left_x + $text_width * -0.55, 'y' => $most_right_y + 30],
    ['x' => $most_right_x, 'y' => $most_right_y + 40],
    ['x' => $most_right_x + $text_width * 0.25, 'y' => $most_right_y + 50],
    ['x' => $most_right_x + $text_width * 0.25, 'y' => $most_right_y + 50],
    ['x' => $most_left_x  + $text_width * 0.1, 'y' => $most_right_y + 60],
    ['x' => $most_left_x + $text_width * 0.5, 'y' => $most_right_y + 70],
    ['x' => $most_left_x + $text_width * 0.5, 'y' => $most_right_y + 70],
    ['x' => $most_left_x + $text_width, 'y' => $most_right_y + 80],
  ];

  $curves_draw->bezier($points);
}

function draw_bottom_curve5() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y;

  $points = [
    ['x' => $most_right_x, 'y' => $most_right_y],
    ['x' => $most_right_x - $text_width, 'y' => $most_right_y + $text_height / 1.75],
    ['x' => $most_right_x - $text_width, 'y' => $most_right_y + $text_height / 1.75],
    ['x' => $most_right_x, 'y' => $most_right_y + $text_height / 2],
    ['x' => $most_right_x, 'y' => $most_right_y + $text_height / 2],
    ['x' => $most_right_x, 'y' => $most_right_y + $text_height / 2],
    ['x' => $most_left_x + $text_width / 7, 'y' => $most_right_y + $text_height / 1.5],
  ];

  $curves_draw->bezier($points);
}

function draw_bottom_curve6() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y;

  $points = [
    ['x' => $most_right_x - $text_width / 10, 'y' => $text_box_bottom_y],
    ['x' => $most_right_x + $text_width / 10, 'y' => $most_right_y - $text_height * 1.5],
    ['x' => $most_right_x + $text_width / 2, 'y' => $most_right_y + $text_height / 3],
    ['x' => $most_right_x, 'y' => $most_right_y + $text_height / 2],
    ['x' => $most_left_x + $text_width / 8, 'y' => $text_box_bottom_y],
    ['x' => $most_left_x + $text_width / 8, 'y' => $text_box_bottom_y + $text_height / 10],
    ['x' => $most_left_x + $text_width / 8, 'y' => $text_box_bottom_y + $text_height / 10],
    ['x' => $most_left_x + $text_width / 1.5, 'y' => $text_box_bottom_y - $text_height / 5],
  ];

  $curves_draw->bezier($points);
}

function draw_right_line() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y;

  $points = [
    ['x' => $most_right_x + $text_width / 10, 'y' => $most_right_y - $text_height / 10],
    ['x' => $most_right_x + $text_width / 7.5, 'y' => $most_right_y - $text_height / 8],
    ['x' => $most_right_x + $text_width / 7.5, 'y' => $most_right_y - $text_height / 6],
    ['x' => $most_right_x + $text_width / 5, 'y' => $most_right_y - $text_height / 5],
  ];

  $curves_draw->bezier($points);
}

function draw_top_curve() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y;

  $y = $text_y - $text_height / 2.5;

  $points = [
    ['x' => $most_left_x - $text_width / 20, 'y' => $y],
    ['x' => $most_left_x, 'y' => $y - $text_height / 5],
    ['x' => $most_right_x, 'y' => $y - $text_height / 5],
    ['x' => $most_right_x + $text_width / 20, 'y' => $y],
  ];

  $curves_draw->bezier($points);
}

$styles_index = 0;
$text_style_index = 0;

// Написание текста
$text = 'SNikita';
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
  'text_styles_thickness' => 4
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

// Создание нового изображения
$style = $styles[$styles_index];
$font = $style['font'];
$curves = $style['curves'];
$text_style = $style['text_styles'][$text_style_index];
$thickness = $font['text_styles_thickness'];
$font_size = 240;

$imagick = new \Imagick();
$bg_color = new ImagickPixel('white');

$text_draw = new \ImagickDraw();
$text_draw->setFont($font['path']);
$text_draw->setFontSize($font_size);
$text_draw->setFillColor('black');
$metrics = $imagick->queryFontMetrics($text_draw, $text);
$text_width = $metrics['textWidth'];
$text_height = $metrics['textHeight'];

$width = round($text_width * 1.5);
$height = round($text_height * 3);

$imagick->newImage($width, $height, $bg_color);
$imagick->setImageFormat('png');

$text_x = round(($width - $text_width) / 2);
$text_y = round(($height - $text_height) / 2 + $font_size);

$text_box_bottom_y = $metrics['boundingBox']['y2'] / 2 + $text_y;

$imagick->annotateImage($text_draw, $text_x, $text_y, 0, $text);

$most_right_x = 0;
$most_left_x = $width;
$most_right_y = 0;
$most_left_y = $height;

for($y=0; $y<$height; $y++) {
  for($x=0; $x<$width; $x++) {
    $color = $imagick->getImagePixelColor($x, $y);
    $isDifferentWithBg = $bg_color->isPixelSimilar($color, 0);

    if (!$isDifferentWithBg && $most_right_x < $x) {
      $most_right_x = $x;
      $most_right_y = $y;
    }
    else if (!$isDifferentWithBg && $most_left_x > $x) {
      $most_left_x = $x;
      $most_left_y = $y;
    }
  }
}

$curves_draw = new \ImagickDraw();
$curves_draw->setFillColor('transparent');
$curves_draw->setStrokeOpacity(1);
$curves_draw->setStrokeColor('black');
$curves_draw->setStrokeWidth($thickness);

// draw_bottom_heart();
// draw_curve();
// draw_stretched_curve();
// draw_bottom_curve1();
// draw_bottom_curve2();
// draw_bottom_curve3();
// draw_bottom_curve4();
// draw_bottom_curve5();
draw_bottom_curve6();
// draw_right_line();
// draw_top_curve();

$imagick->drawImage($curves_draw);

// $imagick->rotateImage('none', -15);

header('Content-Type: image/png');
echo $imagick;