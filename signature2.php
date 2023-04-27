<?php
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
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $thickness;

  $points = [
    ['x' => $most_left_x - $text_width * 0.5, 'y' => $most_left_y + $text_height * 0.2],
    ['x' => $most_left_x + $text_width * 0.5, 'y' => $most_left_y - $text_height * 0.15],
    ['x' => $most_right_x + $text_width * 0.5, 'y' => $most_right_y + $text_height * 0.2],
    ['x' => $most_right_x + $text_width * 0.5, 'y' => $most_right_y + $text_height * 0.2],
    ['x' => $most_right_x + $text_width * 0.1, 'y' => $most_right_y + $text_height * 0.19],
    // ['x' => $most_right_x, 'y' => $most_right_y],
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

function draw_bottom_curve13() {
  global $most_left_x, $most_left_y, $most_right_x, $most_right_y, $curves_draw, $text_y, $text_height, $text_width, $text_box_bottom_y, $thickness;

  $points = [
    ['x' => $most_right_x, 'y' => $most_right_y],
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
    ['x' => $most_right_x, 'y' => $most_right_y],
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
    ['x' => $most_right_x, 'y' => $most_right_y],
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
    ['x' => $most_right_x, 'y' => $most_right_y],
    // ['x' => $most_right_x, 'y' => $most_right_y],
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

$styles_index = 19;

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
  'thickness_index' => 60
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
  _get_style($font_southam, $text_style_1, 'add_style_1', -15),
  _get_style($font_southam, $text_style_7, 'add_style_2', -15),
  _get_style($font_southam, $text_style_4, 'add_style_3', -15, 120),
  _get_style($font_southam, $text_style_1, 'add_style_4', -15),
  _get_style($font_southam, $text_style_1, 'add_style_5'),
  _get_style($font_southam, $text_style_5, 'add_style_6'),
  _get_style($font_southam, $text_style_5, 'add_style_7'),
  _get_style($font_southam, $text_style_3, 'add_style_8'),
  _get_style($font_southam, $text_style_1, 'add_style_9'),
  _get_style($font_southam, $text_style_4, 'add_style_10'),
  _get_style($font_southam, $text_style_3, 'add_style_11'),
  _get_style($font_southam, $text_style_6, 'add_style_12'),
  _get_style($font_southam, $text_style_4, 'add_style_13'),
  _get_style($font_southam, $text_style_4, 'add_style_14'),
  _get_style($font_southam, $text_style_5, 'add_style_15'),
  _get_style($font_southam, $text_style_3, 'add_style_16', -15),
  _get_style($font_southam, $text_style_2_short, 'add_style_17'),
  _get_style($font_southam, $text_style_1, 'add_style_18', -15),
  _get_style($font_southam, $text_style_2, 'add_style_19', -15),
  _get_style($font_southam, $text_style_4, 'add_style_20'),
];

function add_style_1() {
  draw_bottom_curve8();
}

function add_style_2() {
  draw_bottom_curve2();
  draw_right_line();
}

function add_style_3() {
  draw_top_sun();
  draw_bottom_curve7_long();
  draw_right_line();
}

function add_style_4() {
  draw_bottom_curve6();
}

function add_style_5() {
  draw_bottom_curve5();
  draw_right_line();
}

function add_style_6() {
  draw_bottom_curve5();
  draw_top_curve();
}

function add_style_7() {
  draw_bottom_curve4();
  draw_right_line();
}

function add_style_8() {
  draw_bottom_curve3();
}

function add_style_9() {
  draw_bottom_curve7();
  draw_right_line();
}

function add_style_10() {
  draw_stretched_curve();
  draw_right_line();
}

function add_style_11() {
  draw_curve();
  draw_top_curve();
}

function add_style_12() {
  draw_bottom_heart();
}

function add_style_13() {
  draw_bottom_curve9();
}

function add_style_14() {
  draw_bottom_curve10();
  draw_right_line();
}

function add_style_15() {
  draw_bottom_curve11();
}

function add_style_16() {
  draw_bottom_curve12();
}

function add_style_17() {
  draw_bottom_curve13();
}

function add_style_18() {
  draw_bottom_curve14();
}

function add_style_19() {
  draw_bottom_curve15();
  draw_right_line();
}

function add_style_20() {
  draw_bottom_curve16();
}

// Создание нового изображения
$style = $styles[$styles_index];
$font = $style['font'];
$text = $style['text_style'];
$font_size = $style['font_size'];
$angle = $style['angle'];
$draw_styles = $style['draw_styles'];
$thickness = max(1, round($font_size / $font['thickness_index']));

$imagick = new \Imagick();
$bg_color = new ImagickPixel('white');

$text_draw = new \ImagickDraw();
$text_draw->setFont($font['path']);
$text_draw->setFontSize($font_size);
$text_draw->setFillColor('black');
$text_draw->setTextInterlineSpacing(-$font_size / 1.25);

$metrics = $imagick->queryFontMetrics($text_draw, $text);
$text_width = $metrics['textWidth'];
$text_height = $metrics['textHeight'];

$width = round($text_width * 3);
$height = round($text_height * 3);

$imagick->newImage($width, $height, $bg_color);
$imagick->setImageFormat('png');

$text_x = round(($width - $text_width) / 2);
$text_y = round(($height - $text_height) / 2 + $font_size);
$text_box_bottom_y = $metrics['boundingBox']['y2'] / 2 + $text_y;
$text_box_top_y = $metrics['boundingBox']['y1'] + $text_y / 2;

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

$curves_draw = new \ImagickDraw();
$curves_draw->setFillColor('transparent');
$curves_draw->setStrokeOpacity(1);
$curves_draw->setStrokeColor('black');
$curves_draw->setStrokeWidth($thickness);
$curves_draw->setStrokeAntialias(true);
$curves_draw->setStrokeLinecap(\imagick::LINECAP_ROUND);
$curves_draw->setStrokeLinejoin(\imagick::LINEJOIN_ROUND);
$curves_draw->setStrokeMiterLimit(2);
$curves_draw->setStrokeAntialias(true);

// draw_bottom_heart();
// draw_curve();
// draw_stretched_curve();
// draw_bottom_curve1();
// draw_bottom_curve2();
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
$draw_styles();
$imagick->drawImage($curves_draw);
$imagick->rotateImage('white', $angle);
$imagick->trimImage(0);

header('Content-Type: image/png');
echo $imagick;