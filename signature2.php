<?php
function draw_bottom_heart() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $height, $thickness;

  $points = [
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y],
    ['x' => $text_width, 'y' => $most_right_y + 45],
    ['x' => $text_width / 1, 'y' => $most_right_y + 60],
    ['x' => $most_right_x, 'y' => $most_right_y + 80],
    ['x' => $most_right_x, 'y' => $most_right_y - 60],
    ['x' => $most_right_x, 'y' => $most_right_y + 80],
    ['x' => $text_width, 'y' => $most_right_y + 80],
    ['x' => $most_right_x, 'y' => $most_right_y + 100],
    ['x' => $most_right_x + 100, 'y' => $most_right_y + 100],
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y],
  ];

  $curves_draw->bezier($points);
}

function draw_curve() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $height, $thickness;

  $points = [
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y],
    ['x' => $most_right_x - $text_width / 3, 'y' => $most_right_y * 0.7],
    ['x' => $most_left_x - $text_width, 'y' => $most_right_y],
    ['x' => $most_right_x - $text_width / 1.5, 'y' => ($height - $text_height) / 2 + $text_height],
    ['x' => $most_right_x - $text_width / 1.5 + 20, 'y' => ($height - $text_height) / 2 + $text_height - 20],
  ];

  $curves_draw->bezier($points);
}

function draw_stretched_curve() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $height, $thickness;

  $points = [
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y],
    ['x' => $most_right_x - $text_width / 3, 'y' => $most_right_y * 0.7],
    ['x' => $most_left_x - $text_width, 'y' => $most_right_y],
    ['x' => $most_right_x - $text_width, 'y' => ($height - $text_height) / 2 + $text_height],
    ['x' => $most_right_x - $text_width + 20, 'y' => ($height - $text_height) / 2 + $text_height - 20],
  ];

  $curves_draw->bezier($points);
}

function draw_bottom_curve1() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $height, $thickness;

  $points = [
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y],
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
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $thickness;

  $points = [
    ['x' => $most_left_x - $text_width * 0.5, 'y' => $most_left_y + $text_height * 0.2],
    ['x' => $most_left_x + $text_width * 0.5, 'y' => $most_left_y - $text_height * 0.15],
    ['x' => $most_right_x + $text_width * 0.5, 'y' => $most_right_y + $text_height * 0.2],
    ['x' => $most_right_x + $text_width * 0.5, 'y' => $most_right_y + $text_height * 0.2],
    ['x' => $most_right_x + $text_width * 0.1, 'y' => $most_right_y + $text_height * 0.19],
  ];

  $curves_draw->bezier($points);
}

function draw_bottom_curve3() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $height, $thickness;

  $points = [
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y],
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
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $height, $thickness;

  $points = [
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y],
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
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $height, $thickness;

  $points = [
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y],
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
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y],
    ['x' => $most_right_x + 140, 'y' => $most_right_y - $text_height * .85],
    ['x' => $most_right_x + 10, 'y' => $most_right_y - $text_height * .85],
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y],
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y],
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y],
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y],
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
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y],
    ['x' => $most_right_x + 140, 'y' => $most_right_y - $text_height * .85],
    ['x' => $most_right_x + 10, 'y' => $most_right_y - $text_height * .85],
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y],
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y],
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y],
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y],
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
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y],
    ['x' => $most_right_x, 'y' => $most_right_y + $text_height * 0.7],
    ['x' => $most_right_x + $text_width * 0.5, 'y' => $most_right_y - $text_height * 1.2],
    ['x' => $most_right_x + $text_height * 0.05, 'y' => $most_right_y - $text_height * 1.2],
    ['x' => $most_right_x - $text_height * 0.6, 'y' => $most_right_y - $text_height * 0.1],
    ['x' => $most_right_x + $text_height * 0.85, 'y' => $most_right_y - $text_height * 0.1],
    ['x' => $most_right_x + $text_height * 0.5, 'y' => $most_right_y - $text_height * 0.2],
    ['x' => $most_right_x + $text_height * 0.5, 'y' => $most_right_y - $text_height * 0.3],
    ['x' => $most_right_x + $text_height * 0.5, 'y' => $most_right_y + $text_height * 0.1],
    ['x' => $most_left_x + $text_width * 0.5, 'y' => $most_right_y - $text_height * 0.2],
    ['x' => $most_left_x + $text_width * 0.2, 'y' => $most_left_y + $text_height * 0.1],
  ];

  $curves_draw->bezier($points);
}

function draw_bottom_curve9() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $thickness;

  $points = [
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y],
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
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y],
    ['x' => $most_left_x - $text_width * 0.1, 'y' => $most_right_y],
    ['x' => $most_left_x - $text_width * 0.1, 'y' => $most_right_y + $text_height * 0.1],
  ];

  $curves_draw->bezier($points);
}

function draw_bottom_curve11() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $thickness;

  $points = [
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y],
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
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y],
    ['x' => $most_right_x + $text_width * 0.5 , 'y' => $most_right_y + $text_height * 0.025],
    ['x' => $most_right_x + $text_width * 0.5 , 'y' => $most_right_y + $text_height * 0.025],
    ['x' => $most_left_x - $text_width * 1.3, 'y' => $most_right_y + $text_height * 1],
    ['x' => $most_left_x - $text_width * 1.3, 'y' => $most_right_y + $text_height * 0.5],
    ['x' => $most_right_x - $text_width * 0.4, 'y' => $most_right_y + $text_height * 0.15],
    ['x' => $most_right_x - $text_width * 0.4 + 20, 'y' => $most_right_y + $text_height * 0.15 + 5],
  ];

  $curves_draw->bezier($points);
}

function draw_bottom_curve13() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $thickness;

  $points = [
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y],
    ['x' => $most_right_x - $text_width * 0.6, 'y' => $most_right_y - $text_height * 0.6],
    ['x' => $most_right_x + $text_width * 0.5, 'y' => $most_right_y - $text_height * 0.6],
    ['x' => $most_right_x, 'y' => $most_right_y - $text_height * 0.1],
    ['x' => $most_right_x - $text_width * 0.1, 'y' => $most_right_y - $text_height * 0.1],
    ['x' => $most_right_x - $text_width * 0.1, 'y' => $most_right_y - $text_height * 0.1],
    ['x' => $most_right_x - $text_width * 0.1, 'y' => $most_right_y - $text_height * 0.1],
    ['x' => $most_right_x - $text_width * 0.1, 'y' => $most_right_y - $text_height * 0.1],
    ['x' => $most_right_x, 'y' => $most_right_y - $text_height * 0.1],
    ['x' => $most_right_x + $text_width * 0.6, 'y' => $most_right_y + $text_height * 0.4],
    ['x' => $most_right_x + $text_width * 0.6, 'y' => $most_right_y + $text_height * 0.5],
    ['x' => $most_right_x - $text_width * 0.6, 'y' => $most_right_y + $text_height * 0.3],
    ['x' => $most_right_x - $text_width * 0.3, 'y' => $most_right_y + $text_height * 0.3],
    ['x' => $most_right_x - $text_width * 3, 'y' => $most_right_y + $text_height * 0.3],
    ['x' => $most_right_x - $text_width * 3, 'y' => $most_right_y + $text_height * 0.35],
    ['x' => $most_right_x + $text_width * 0.8, 'y' => $most_right_y + $text_height * 0.1],
    ['x' => $most_right_x + $text_width * 0.8, 'y' => $most_right_y + $text_height * 0.1],
    ['x' => $most_right_x + $text_width * 0.8, 'y' => $most_right_y + $text_height * 0.6],
    ['x' => $most_left_x - $text_width * 0.4, 'y' => $most_left_y + $text_height * 0.1],
  ];

  $curves_draw->bezier($points);
}

function draw_bottom_curve14() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $thickness;

  $points = [
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y],
    ['x' => $most_left_x - $text_width * 0.7, 'y' => $most_left_y + $text_height * 0.2],
    ['x' => $most_left_x - $text_width * 0.7, 'y' => $most_left_y + $text_height * 0.4],
    ['x' => $most_left_x - $text_width * 0.5, 'y' => $most_left_y + $text_height * 0.8],
    ['x' => $most_left_x - $text_width * 0.2, 'y' => $most_left_y - $text_height * 0.3],
    ['x' => $most_left_x + $text_width * 0.3, 'y' => $most_left_y - $text_height * 0.8],
    ['x' => $most_left_x + $text_width * 0.55, 'y' => $most_left_y - $text_height * 0.7],
    ['x' => $most_left_x + $text_width * 0.5, 'y' => $most_left_y - $text_height * 0.3],
    ['x' => $most_left_x + $text_width * 0.3, 'y' => $most_left_y - $text_height * 0.3],
    ['x' => $most_left_x + $text_width * 0.2, 'y' => $most_left_y + $text_height * 0.1],
    ['x' => $most_left_x - $text_width * 0.85, 'y' => $most_left_y - $text_height * 0.3],
    ['x' => $most_left_x + $text_width * 0.8, 'y' => $most_left_y - $text_height * 0.35],
    ['x' => $most_left_x + $text_width * 0.8, 'y' => $most_left_y - $text_height * 0.35 + 5],
  ];

  $curves_draw->bezier($points);
}

function draw_bottom_curve15() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $thickness;

  $points = [
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y],
    ['x' => $most_right_x + $text_width * 0.1, 'y' => $most_right_y - $text_height * 0.15],
    ['x' => $most_right_x + $text_width * 0.2, 'y' => $most_right_y - $text_height * 0.10],
    ['x' => $most_right_x + $text_width * 0.2, 'y' => $most_right_y + $text_height * 0.3],
    ['x' => $most_right_x - $text_width * 0.5, 'y' => $most_right_y + $text_height],
    ['x' => $most_right_x - $text_width * 1.5, 'y' => $most_right_y + $text_height * 0.4],
    ['x' => $most_right_x - $text_width * 0.5, 'y' => $most_right_y + $text_height * 0.4],
    ['x' => $most_right_x - $text_width * 0.25, 'y' => $most_right_y],
    ['x' => $most_right_x + $text_width * 0.35, 'y' => $most_right_y + $text_height * 0.2],
    ['x' => $most_right_x + $text_width * 0.05, 'y' => $most_right_y + $text_height * 0.2 + 40],
  ];

  $curves_draw->bezier($points);
}

function draw_bottom_curve16() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $thickness;

  $points = [
    ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y],
    // ['x' => $most_right_x - $thickness / 2, 'y' => $most_right_y],
    ['x' => $most_right_x + $text_width * 0.3, 'y' => $most_right_y - $text_height * 0.20],
    ['x' => $most_right_x - $text_width * 0.8, 'y' => $most_right_y - $text_height * 0.4],
    ['x' => $most_right_x - $text_width * 0.6, 'y' => $most_right_y - $text_height * 0.4],
    ['x' => $most_right_x - $text_width * 1, 'y' => $most_right_y - $text_height * 0.1],
    ['x' => $most_left_x + $text_width * 0.3, 'y' => $most_right_y - $text_height * 0.15],
    ['x' => $most_right_x + $text_width * 0.9, 'y' => $most_right_y + $text_height * 0.2],
    ['x' => $most_right_x + $text_width * 0.9, 'y' => $most_right_y + $text_height * 0.25],
    ['x' => $most_right_x - $text_width * 0.5, 'y' => $most_right_y + $text_height * 0.4],
    ['x' => $most_left_x - $text_width * 0.1, 'y' => $most_right_y + $text_height * 0.3],
    ['x' => $most_left_x - $text_width * 0.9, 'y' => $most_right_y + $text_height * 0.45],
    ['x' => $most_left_x, 'y' => $most_right_y + $text_height * 0.45],
    ['x' => $most_left_x + $text_width * 0.4, 'y' => $most_right_y + $text_height * 0.45],
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
  'thickness_index' => 35 // 1
];
$font_geovana = [
  'path' => 'fonts/Geovana.otf',
  'thickness_index' => 30 // 1
];
$font_hight_summit = [
  'path' => 'fonts/HighSummit.otf',
  'thickness_index' => 45 // 1
];
$font_humaira = [
  'path' => 'fonts/Humaira.otf',
  'thickness_index' => 40 // 1
];
$font_mrs_saint_delafield = [
  'path' => 'fonts/MrsSaintDelafield-Regular.ttf',
  'thickness_index' => 50 // 1
];
$font_radith = [
  'path' => 'fonts/Radith.otf',
  'thickness_index' => 30 // 1
];
$font_rathie = [
  'path' => 'fonts/Rathie.otf',
  'thickness_index' => 120 // 1
];
$font_somelove = [
  'path' => 'fonts/Somelove.otf',
  'thickness_index' => 45 // 1
];
$font_south_town = [
  'path' => 'fonts/SouthTown.otf',
  'thickness_index' => 50 // 1
];
$font_thesignature = [
  'path' => 'fonts/Thesignature.otf',
  'thickness_index' => 50 // 1
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
  // $font_barokah,
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

$styles = [
];
$font_i = 0;
for ($i=0; $i < 20; $i++) {
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

function get_style_3($font) {
  global $text_style_4;
  
  return _get_style($font, $text_style_4, 'add_curve_style_3', -15, 120);
}

function get_style_4($font) {
  global $text_style_1;
  
  return _get_style($font, $text_style_1, 'add_curve_style_4', -15);
}

function get_style_5($font) {
  global $text_style_1;
  
  return _get_style($font, $text_style_1, 'add_curve_style_5');
}

function get_style_6($font) {
  global $text_style_5;
  
  return _get_style($font, $text_style_5, 'add_curve_style_6');
}

function get_style_7($font) {
  global $text_style_5;
  
  return _get_style($font, $text_style_5, 'add_curve_style_7');
}

function get_style_8($font) {
  global $text_style_3;
  
  return _get_style($font, $text_style_3, 'add_curve_style_8');
}

function get_style_9($font) {
  global $text_style_1;
  
  return _get_style($font, $text_style_1, 'add_curve_style_9');
}

function get_style_10($font) {
  global $text_style_4;
  
    return _get_style($font, $text_style_4, 'add_curve_style_10');
}

function get_style_11($font) {
  global $text_style_3;
  
  return _get_style($font, $text_style_3, 'add_curve_style_11');
}

function get_style_12($font) {
  global $text_style_6;
  
  return _get_style($font, $text_style_6, 'add_curve_style_12');
}

function get_style_13($font) {
  global $text_style_4;
  
  return _get_style($font, $text_style_4, 'add_curve_style_13');
}

function get_style_14($font) {
  global $text_style_4;
  
  return _get_style($font, $text_style_4, 'add_curve_style_14');
}

function get_style_15($font) {
  global $text_style_5;
  
  return _get_style($font, $text_style_5, 'add_curve_style_15');
}

function get_style_16($font) {
  global $text_style_3;
  
  return _get_style($font, $text_style_3, 'add_curve_style_16', -15);
}

function get_style_17($font) {
  global $text_style_2_short;
  
  return _get_style($font, $text_style_2_short, 'add_curve_style_17');
}

function get_style_18($font) {
  global $text_style_1;
  
  return _get_style($font, $text_style_1, 'add_curve_style_18', -15);
}

function get_style_19($font) {
  global $text_style_2;
  
  return _get_style($font, $text_style_2, 'add_curve_style_19', -15);
}

function get_style_20($font) {
  global $text_style_4;
  
  return _get_style($font, $text_style_4, 'add_curve_style_20');
}

function add_curve_style_1() {
  draw_bottom_curve8();
}

function add_curve_style_2() {
  draw_bottom_curve2();
  draw_right_line();
}

function add_curve_style_3() {
  draw_top_sun();
  draw_bottom_curve7_long();
  draw_right_line();
}

function add_curve_style_4() {
  draw_bottom_curve6();
}

function add_curve_style_5() {
  draw_bottom_curve5();
  draw_right_line();
}

function add_curve_style_6() {
  draw_bottom_curve5();
  draw_top_curve();
}

function add_curve_style_7() {
  draw_bottom_curve4();
  draw_right_line();
}

function add_curve_style_8() {
  draw_bottom_curve3();
}

function add_curve_style_9() {
  draw_bottom_curve7();
  draw_right_line();
}

function add_curve_style_10() {
  draw_stretched_curve();
  draw_right_line();
}

function add_curve_style_11() {
  draw_curve();
  draw_top_curve();
}

function add_curve_style_12() {
  draw_bottom_heart();
}

function add_curve_style_13() {
  draw_bottom_curve9();
}

function add_curve_style_14() {
  draw_bottom_curve10();
  draw_right_line();
}

function add_curve_style_15() {
  draw_bottom_curve11();
}

function add_curve_style_16() {
  draw_bottom_curve12();
}

function add_curve_style_17() {
  draw_bottom_curve13();
}

function add_curve_style_18() {
  draw_bottom_curve14();
}

function add_curve_style_19() {
  draw_bottom_curve15();
  draw_right_line();
}

function add_curve_style_20() {
  draw_bottom_curve16();
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

$imagick = new \Imagick();
$bg_color = new ImagickPixel('white');

$text_draw = new \ImagickDraw();
$text_draw->setFillColor('black');

$thickness = 0;
$curves_draw = new \ImagickDraw();
$curves_draw->setFillColor('transparent');
$curves_draw->setStrokeOpacity(1);
$curves_draw->setStrokeColor('black');
$curves_draw->setStrokeAntialias(true);
$curves_draw->setStrokeLinecap(\imagick::LINECAP_ROUND);
$curves_draw->setStrokeLinejoin(\imagick::LINEJOIN_ROUND);
$curves_draw->setStrokeMiterLimit(2);
$curves_draw->setStrokeAntialias(true);

function get_image_from_style($styles_index) {
  global $thickness, $text_draw, $imagick, $bg_color, $styles, $width, $height, $most_right_x, $most_left_x, $most_right_y, $most_left_y, $most_top_y, $text_width, $text_height, $text_box_bottom_y, $curves_draw;

  $style = $styles[$styles_index];
  $font = $style['font'];
  $text = $style['text_style'];
  $font_size = $style['font_size'];
  $angle = $style['angle'];
  $draw_styles = $style['draw_styles'];
  $thickness = max(1, round($font_size / $font['thickness_index']));

  $text_draw->setTextInterlineSpacing(-$font_size / 1.25);
  $text_draw->setFontSize($font_size);
  $text_draw->setFont($font['path']);

  $metrics = $imagick->queryFontMetrics($text_draw, $text);
  $text_width = $metrics['textWidth'];
  $text_height = $metrics['textHeight'];

  $width = round($text_width * 2.5);
  $height = round($text_height * 2.5);

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

  $curves_draw->setStrokeWidth($thickness);

  $draw_styles();
  $imagick->drawImage($curves_draw);
  $imagick->rotateImage('white', $angle);
  $imagick->trimImage(0);

  return $imagick;
}

$image = get_image_from_style($index);

header('Content-type: image/png');
echo $image;