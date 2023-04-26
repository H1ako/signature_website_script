<?php
function _get_style($font, $text_styles, $curves) {
  return [
    'text_styles' => $text_styles,
    'font' => $font,
    'curves' => $curves
  ];
}

function draw_bottom_heart() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $height;

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
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $height;

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
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $height;

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
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $height;

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
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $height;

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
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $height;

  $points = [
    ['x' => $most_right_x, 'y' => $most_right_y],
    ['x' => $most_left_x + $text_width * -0.55, 'y' => $most_right_y + $text_height * 0.3],
    ['x' => $most_left_x + $text_width * -0.55, 'y' => $most_right_y + $text_height * 0.3],
    ['x' => $most_right_x, 'y' => $most_right_y + 40],
    ['x' => $most_right_x + $text_width * 0.25, 'y' => $most_right_y + $text_height * 0.5],
    ['x' => $most_right_x + $text_width * 0.25, 'y' => $most_right_y + $text_height * 0.5],
    ['x' => $most_left_x  + $text_width * 0.1, 'y' => $most_right_y + $text_height * 0.6],
    ['x' => $most_left_x - $text_width * 0.25, 'y' => $most_right_y + $text_height * 0.7],
    ['x' => $most_left_x - $text_width * 0.25, 'y' => $most_right_y + $text_height * 0.7],
    ['x' => $most_left_x + $text_width * 0.1, 'y' => $most_right_y + $text_height * 0.8],
    ['x' => $most_right_x, 'y' => $most_right_y + $text_height * 0.9],
    ['x' => $most_right_x, 'y' => $most_right_y + $text_height * 0.9],
    ['x' => $most_left_x + $text_width * 0.3, 'y' => $most_right_y + $text_height],
    ['x' => $most_left_x + $text_width * 0.3, 'y' => $most_right_y + $text_height * 0.9],
  ];

  $curves_draw->bezier($points);
}

function draw_bottom_curve4() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $height;

  $points = [
    ['x' => $most_right_x, 'y' => $most_right_y],
    ['x' => $most_left_x + $text_width * -0.55, 'y' => $most_right_y + $text_height * 0.1],
    ['x' => $most_left_x + $text_width * -0.55, 'y' => $most_right_y + $text_height * 0.3],
    ['x' => $most_right_x, 'y' => $most_right_y + $text_height * 0.4],
    ['x' => $most_right_x + $text_width * 0.25, 'y' => $most_right_y + $text_height * 0.5],
    ['x' => $most_right_x + $text_width * 0.25, 'y' => $most_right_y + $text_height * 0.5],
    ['x' => $most_left_x  + $text_width * 0.1, 'y' => $most_right_y + $text_height * 0.6],
    ['x' => $most_left_x + $text_width * 0.5, 'y' => $most_right_y + $text_height * 0.7],
    ['x' => $most_left_x + $text_width * 0.5, 'y' => $most_right_y + $text_height * 0.7],
    ['x' => $most_left_x + $text_width, 'y' => $most_right_y + $text_height * 0.8],
  ];

  $curves_draw->bezier($points);
}

function draw_bottom_curve5() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $height;

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
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $height;

  $points = [
    ['x' => $most_right_x - $text_width / 10, 'y' => $text_box_bottom_y],
    ['x' => $most_right_x + $text_width / 10, 'y' => $most_right_y - $text_height * 1.5],
    ['x' => $most_right_x + $text_width / 2, 'y' => $most_right_y + $text_height / 3],
    ['x' => $most_right_x, 'y' => $most_right_y + $text_height / 2],
    ['x' => $most_left_x + $text_width / 8, 'y' => $text_box_bottom_y],
    ['x' => $most_left_x + $text_width / 8, 'y' => $text_box_bottom_y + $text_height / 10],
    ['x' => $most_left_x + $text_width / 8, 'y' => $text_box_bottom_y + $text_height / 10],
    ['x' => $most_left_x + $text_width / 1.5, 'y' => $text_box_bottom_y + 10],
  ];

  $curves_draw->bezier($points);
}

function draw_bottom_curve7() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $thickness;

  $points = [
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y - $thickness / 2],
    ['x' => $most_right_x + 140, 'y' => $most_right_y - $text_height * .85],
    ['x' => $most_right_x + 10, 'y' => $most_right_y - $text_height * .85],
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y - $thickness / 2],
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y - $thickness / 2],
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y - $thickness / 2],
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y - $thickness / 2],
    ['x' => $most_right_x, 'y' => $text_box_bottom_y],
    // ['x' => $most_right_x, 'y' => $text_box_bottom_y],
    // ['x' => $most_right_x, 'y' => $text_box_bottom_y],
    // ['x' => $most_right_x, 'y' => $text_box_bottom_y],
    // ['x' => $most_right_x, 'y' => $text_box_bottom_y],
    // ['x' => $most_right_x, 'y' => $text_box_bottom_y],
    // ['x' => $most_right_x - $text_width * .05, 'y' => $text_box_bottom_y - $text_height * 0.4],
    // ['x' => $most_right_x + $thickness / 2, 'y' => $text_box_bottom_y],
    // ['x' => $most_right_x - $text_width * 0.25, 'y' => $text_box_bottom_y - $text_height * 0.4],
    // ['x' => $most_left_x, 'y' => $text_box_bottom_y + $text_height * 0.45],
    // ['x' => $most_left_x - $text_width * 0, 'y' => $text_box_bottom_y - $text_height * 0.15],
    // ['x' => $most_left_x - $text_width * 0.15, 'y' => $text_box_bottom_y + $text_height * 0.25],
    // ['x' => $most_left_x, 'y' => $text_box_bottom_y - $text_height * 0.55],
    // ['x' => $most_left_x + $text_width * 0.15, 'y' => $text_box_bottom_y + $text_height * 0.15],
  ];
  $second_points = [
    ['x' => $most_right_x + $thickness / 2, 'y' => $text_box_bottom_y + $thickness / 2],
    ['x' => $most_right_x - $text_width * 0.25, 'y' => $text_box_bottom_y - $text_height * 0.4],
    ['x' => $most_left_x, 'y' => $text_box_bottom_y + $text_height * 0.45],
    ['x' => $most_left_x - $text_width * 0, 'y' => $text_box_bottom_y - $text_height * 0.15],
    ['x' => $most_left_x - $text_width * 0.15, 'y' => $text_box_bottom_y + $text_height * 0.25],
    ['x' => $most_left_x, 'y' => $text_box_bottom_y - $text_height * 0.35],
    ['x' => $most_left_x + $text_width * 0.15, 'y' => $text_box_bottom_y + $text_height * 0.25],
  ];
  
  $curves_draw->bezier($points);
  $curves_draw->bezier($second_points);
}

function draw_bottom_curve7_long() { // $font_size = 120;
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $thickness;

  $points = [
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y - $thickness / 2],
    ['x' => $most_right_x + 140, 'y' => $most_right_y - $text_height * .85],
    ['x' => $most_right_x + 10, 'y' => $most_right_y - $text_height * .85],
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y - $thickness / 2],
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y - $thickness / 2],
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y - $thickness / 2],
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y - $thickness / 2],
    ['x' => $most_right_x, 'y' => $text_box_bottom_y],
  ];
  $second_points = [
    ['x' => $most_right_x + $thickness / 2, 'y' => $text_box_bottom_y + $thickness / 2],
    ['x' => $most_right_x - $text_width * 0.25, 'y' => $text_box_bottom_y - $text_height * 0.4],
    ['x' => $most_left_x - $text_width * 0.5, 'y' => $text_box_bottom_y + $text_height * 0.45],
    ['x' => $most_left_x - $text_width * 0.5, 'y' => $text_box_bottom_y - $text_height * 0.15],
    ['x' => $most_left_x - $text_width * 0.85, 'y' => $text_box_bottom_y + $text_height * 0.25],
    ['x' => $most_left_x - $text_width * 0.25, 'y' => $text_box_bottom_y - $text_height * 0.75],
    ['x' => $most_left_x - $text_width * 0.25, 'y' => $text_box_bottom_y + $text_height * 0.45],
  ];
  
  $curves_draw->bezier($points);
  $curves_draw->bezier($second_points);
}

function draw_bottom_curve8() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $thickness;

  $points = [
    ['x' => $most_right_x, 'y' => $most_right_y],
    ['x' => $most_right_x, 'y' => $most_right_y + $text_height * 0.7],
    ['x' => $most_right_x + $text_width * 0.5, 'y' => $most_right_y - $text_height * 1.2],
    ['x' => $most_right_x + $text_height * 0.05, 'y' => $most_right_y - $text_height * 1.2],
    ['x' => $most_right_x - $text_height * 0.6, 'y' => $most_right_y - $text_height * 0.1],
    ['x' => $most_right_x + $text_height * 0.85, 'y' => $most_right_y - $text_height * 0.1],
    ['x' => $most_right_x + $text_height * 0.5, 'y' => $most_right_y - $text_height * 0.2],
    ['x' => $most_right_x + $text_height * 0.5, 'y' => $most_right_y - $text_height * 0.3],
    ['x' => $most_right_x + $text_height * 0.5, 'y' => $most_right_y + $text_height * 0.1],
    // ['x' => $most_right_x + 150, 'y' => $most_right_y - $text_height * 0.2],
    ['x' => $most_left_x + $text_width * 0.5, 'y' => $most_right_y - $text_height * 0.2],
    // ['x' => $most_left_x + $text_width * 0.3, 'y' => $most_right_y - $text_height * 0.2],
    ['x' => $most_left_x + $text_width * 0.2, 'y' => $most_left_y + $text_height * 0.1],
  ];

  $curves_draw->bezier($points);
}

function draw_bottom_curve9() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $thickness;

  $points = [
    ['x' => $most_right_x, 'y' => $most_right_y],
    ['x' => $most_right_x + $text_width * 0.1, 'y' => $most_right_y],
    ['x' => $most_right_x + $text_width * 0.1, 'y' => $most_right_y - $text_height * 0.2],
    ['x' => $most_right_x - $text_width * 0.1, 'y' => $most_right_y - $text_height * 0.7],
    ['x' => $most_right_x - $text_width * 0.2, 'y' => $most_right_y - $text_height * 0.7],
    ['x' => $most_right_x - $text_width * 0.5, 'y' => $most_right_y - $text_height * 0.7],
    ['x' => $most_right_x - $text_width * 0.7, 'y' => $most_right_y - $text_height * 0.6],
    ['x' => $most_right_x - $text_width * 0.8, 'y' => $most_right_y + $text_height * 0.5],
    ['x' => $most_right_x - $text_width * 0.8, 'y' => $most_right_y + $text_height * 0.5],
    ['x' => $most_right_x - $text_width * 0.4, 'y' => $most_right_y + $text_height * 0.3],
    ['x' => $most_right_x - $text_width * 0.1, 'y' => $most_right_y + $text_height * 0.2],
    ['x' => $most_right_x, 'y' => $most_right_y + $text_height * 0.2],
    ['x' => $most_right_x, 'y' => $most_right_y + $text_height * 0.25],
    ['x' => $most_right_x + 100, 'y' => $most_right_y + $text_height * 0.2],
    ['x' => $most_right_x + 100, 'y' => $most_right_y + $text_height * 0.4],
    ['x' => $most_right_x + 80, 'y' => $most_right_y + $text_height * 0.4],
  ];

  $points_2 = [
    ['x' => $most_right_x - $text_width * 0.4 + $text_width * 0.1, 'y' => $most_right_y - $text_height * 0.2],
    ['x' => $most_right_x - $text_width * 0.4 - $text_width * 0.1, 'y' => $most_right_y - $text_height * 0.7],
    ['x' => $most_right_x - $text_width * 0.4 - $text_width * 0.2, 'y' => $most_right_y - $text_height * 0.7],
    ['x' => $most_right_x - $text_width * 0.4 - $text_width * 0.5, 'y' => $most_right_y - $text_height * 0.7],
    ['x' => $most_right_x - $text_width * 0.4 - $text_width * 0.7, 'y' => $most_right_y - $text_height * 0.6],
    ['x' => $most_right_x - $text_width * 0.4 - $text_width * 0.8, 'y' => $most_right_y + $text_height * 0.5],
    ['x' => $most_right_x - $text_width * 0.4 - $text_width * 0.8, 'y' => $most_right_y + $text_height * 0.5],
    ['x' => $most_right_x - $text_width * 0.4, 'y' => $most_right_y + $text_height * 0.3],
    ['x' => $most_right_x - $text_width * 0.1, 'y' => $most_right_y + $text_height * 0.2],
    ['x' => $most_right_x, 'y' => $most_right_y + $text_height * 0.25],
  ];

  $curves_draw->bezier($points);
  $curves_draw->bezier($points_2);
}

function draw_bottom_curve10() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $thickness;

  $points = [
    ['x' => $most_right_x, 'y' => $most_right_y],
    ['x' => $most_left_x - $text_width * 0.1, 'y' => $most_right_y],
    ['x' => $most_left_x - $text_width * 0.1, 'y' => $most_right_y + $text_height * 0.1],
  ];

  $curves_draw->bezier($points);
}

function draw_bottom_curve11() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $thickness;

  $points = [
    ['x' => $most_right_x, 'y' => $most_right_y],
    ['x' => $most_right_x + 50, 'y' => $most_right_y + $text_height * 0.5],
    ['x' => $most_right_x + 100, 'y' => $most_right_y + $text_height * 0.8],
    ['x' => $most_right_x + 110, 'y' => $most_right_y + $text_height * 0.5],
    ['x' => $most_right_x + 110, 'y' => $most_right_y + $text_height * 0.2],
    ['x' => $most_right_x, 'y' => $most_right_y + $text_height * 0.2],
    ['x' => $most_left_x - $text_width * 0.1, 'y' => $most_right_y + $text_height * 0.6],
  ];

  $curves_draw->bezier($points);
}

function draw_bottom_curve12() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $thickness;

  $points = [
    ['x' => $most_right_x, 'y' => $most_right_y],
    ['x' => $most_right_x + $text_width * 0.5 , 'y' => $most_right_y + $text_height * 0.025],
    ['x' => $most_right_x + $text_width * 0.5 , 'y' => $most_right_y + $text_height * 0.025],
    ['x' => $most_left_x - $text_width * 1.3, 'y' => $most_right_y + $text_height * 1],
    ['x' => $most_left_x - $text_width * 1.3, 'y' => $most_right_y + $text_height * 0.5],
    ['x' => $most_right_x - $text_width * 0.4, 'y' => $most_right_y + $text_height * 0.15],
    ['x' => $most_right_x - $text_width * 0.4 + 20, 'y' => $most_right_y + $text_height * 0.15 + 5],
  ];

  $curves_draw->bezier($points);
}

function draw_right_line() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $height;

  $points = [
    ['x' => $most_right_x + $text_width / 10, 'y' => $most_right_y - $text_height / 10],
    ['x' => $most_right_x + $text_width / 7.5, 'y' => $most_right_y - $text_height / 8],
    ['x' => $most_right_x + $text_width / 7.5, 'y' => $most_right_y - $text_height / 6],
    ['x' => $most_right_x + $text_width / 5, 'y' => $most_right_y - $text_height / 5],
  ];

  $curves_draw->bezier($points);
}

function draw_top_curve() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $height;

  $y = $text_y - $text_height / 2.5;

  $points = [
    ['x' => $most_left_x - $text_width / 20, 'y' => $y],
    ['x' => $most_left_x, 'y' => $y - $text_height / 5],
    ['x' => $most_right_x, 'y' => $y - $text_height / 5],
    ['x' => $most_right_x + $text_width / 20, 'y' => $y],
  ];

  $curves_draw->bezier($points);
}

function draw_top_sun() {
  global $imagick, $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $height, $most_top_y;

  $overlay = new \Imagick();
  // $overlay->readImage('C:\Apache24\htdocs\signature_script\images\sun.png');
  $overlay->readImage('C:\php_projects\signature\images\sun.png');
  $overlay_width = $overlay->getImageWidth();
  $overlay_height = $overlay->getImageHeight();
  $degrees = -20;
  $overlay->rotateImage('none', $degrees);

  $x = round($most_right_x - $overlay_width / 2 - ($overlay_height * cos(deg2rad($degrees)) / 2)); // значение координаты X
  $y = round($most_top_y - $overlay_height - ($overlay_height * sin(deg2rad($degrees)) / 4) - 20); // значение координаты Y

  $imagick->compositeImage($overlay, \Imagick::COMPOSITE_DEFAULT, $x, $y);
}

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

$styled_text_1 = "$first_letter_of_last_name$first_name"; // SNikita
$styled_text_2 = "$first_letter_of_first_name$last_name"; // NSobolev
$styled_text_3 = "$first_letter_of_last_name$first_letter_of_middle_name$first_name"; // SANikita
$styled_text_4 = "$first_letter_of_first_name$first_letter_of_middle_name$last_name"; // NASobolev
$styled_text_5 = "$last_name"; // Sobolev
$styled_text_6 = "$first_name"; // Nikita

$styled_text_1_short = "$first_letter_of_last_name$first_name"; // SNikita
$styled_text_2_short = "$first_letter_of_first_name$last_name"; // NSobolev
$styled_text_3_short = "$first_letter_of_last_name$first_letter_of_middle_name$first_name"; // SANikita
$styled_text_4_short = "$first_letter_of_first_name$first_letter_of_middle_name$last_name"; // NASobolev
$styled_text_5_short = $styled_text_5; // Sobolev
$styled_text_6_short = "$first_name"; // Nikita


$text_styles = [
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

$fonts = [
  $font_aerotis,
  $font_funky,
  $font_southam,
  $font_honeymoon,
  $font_holimount,
  $font_creation,
];

$styles = [
  _get_style($font_southam, $text_styles, [])
];

// Создание нового изображения
$style = $styles[$styles_index];
$font = $style['font'];
$curves = $style['curves'];
$text_style = $style['text_styles'][$text_style_index];
$thickness = 2; //$font['text_styles_thickness'];
$font_size = 240; // 240

$imagick = new \Imagick();
$bg_color = new ImagickPixel('white');

$text_draw = new \ImagickDraw();
$text_draw->setFont($font['path']);
$text_draw->setFontSize($font_size);
$text_draw->setFillColor('black');
$metrics = $imagick->queryFontMetrics($text_draw, $text);
$text_width = $metrics['textWidth'];
$text_height = $metrics['textHeight'];

$width = round($text_width * 2);
$height = round($text_height * 3);

$imagick->newImage($width, $height, $bg_color);
$imagick->setImageFormat('png');

$text_x = round(($width - $text_width) / 2);
$text_y = round(($height - $text_height) / 2 + $font_size);

$text_box_bottom_y = $metrics['boundingBox']['y2'] / 2 + $text_y;
$text_box_top_y = $metrics['boundingBox']['y1'] + $text_y / 2;

$imagick->annotateImage($text_draw, $text_x, $text_y, -0, $text); // -15

$most_right_x = 0;
$most_left_x = $width;
$most_right_y = 0;
$most_left_y = $height;
$most_top_y = $height;

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

    if (!$isDifferentWithBg && $most_top_y > $y) {
      $most_top_y = $y;
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
// draw_bottom_curve2(); //---
// draw_bottom_curve3();
// draw_bottom_curve4();
// draw_bottom_curve5();
// draw_bottom_curve6();
// draw_bottom_curve7();
// draw_bottom_curve8();
// draw_bottom_curve9();
// draw_bottom_curve10();
// draw_top_sun();
// draw_bottom_curve7_long();
// draw_right_line();
// draw_top_curve();

function add_style1() {
  $angle = -15;

  draw_bottom_curve8();
}

function add_style2() { // TODO: Change, it's copy of 3
  global $styled_text_2;

  $angle = -15;
  $text_style = $styled_text_2;

  draw_top_sun();
  draw_bottom_curve7_long();
  draw_right_line();
}

function add_style3() {
  global $styled_text_4;

  $text_style = $styled_text_4;
  $angle = -15;
  $font_size = 120;

  draw_top_sun();
  draw_bottom_curve7_long();
  draw_right_line();
}

function add_style4() {
  global $styled_text_1;

  $angle = -15;
  $text_style = $styled_text_1;

  draw_bottom_curve6();
}

function add_style5() {
  global $styled_text_1;

  $angle = 0;
  $text_style = $styled_text_1;

  draw_bottom_curve5();
  draw_right_line();
}

function add_style6() {
  global $styled_text_5;

  $angle = 0;
  $text_style = $styled_text_5;

  draw_bottom_curve5();
  draw_top_curve();
}

function add_style7() {
  global $styled_text_5;

  $angle = 0;
  $text_style = $styled_text_5;

  draw_bottom_curve4();
  draw_right_line();
}

function add_style8() {
  global $styled_text_3;

  $angle = 0;
  $text_style = $styled_text_3;

  draw_bottom_curve3();
  draw_top_sun();
}

function add_style9() {
  global $styled_text_1;

  $angle = 0;
  $text_style = $styled_text_1;

  draw_bottom_curve7();
  draw_right_line();
}

function add_style10() {
  global $styled_text_4;

  $angle = 0;
  $text_style = $styled_text_4;

  draw_stretched_curve();
  draw_right_line();
}

function add_style11() {
  global $styled_text_3;

  $angle = 0;
  $text_style = $styled_text_3;

  draw_curve();
  draw_top_curve();
}

function add_style12() {
  global $styled_text_6;

  $angle = 0;
  $text_style = $styled_text_6;

  draw_bottom_heart();
}

function add_style13() {
  global $styled_text_6;

  $angle = 0;
  $text_style = $styled_text_6;

  draw_bottom_curve9();
}

function add_style14() {
  global $styled_text_4;

  $angle = 0;
  $text_style = $styled_text_4;

  draw_bottom_curve10();
  draw_right_line();
}

function add_style15() {
  global $styled_text_5;

  $angle = 0;
  $text_style = $styled_text_5;

  draw_bottom_curve11();
}

function add_style16() {
  global $styled_text_3;

  $angle = -15;
  $text_style = $styled_text_3;

  draw_bottom_curve12();
}

add_style1();

$imagick->drawImage($curves_draw);
// $imagick->trimImage(0);
// $imagick->rotateImage('white', -15);

// print_r($most_top_y);
header('Content-Type: image/png');
echo $imagick;