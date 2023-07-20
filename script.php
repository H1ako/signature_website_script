<?php

$width;
$height;
$textWidth;
$textHeight;
$textMostTopY;
$textMostRightX;
$textMostRightY;
$textMostLeftX;
$textMostLeftY;
$textBoxBottomY;
$image;
$textDraw;
$curvesDraw;
$thickness;

$styles;
$fonts;


$index = 84;


// $index += 20;
// $index *= 3;
$firstName = 'Rostislav';
$lastName = 'Radchenko';
$middleName = 'A';

include_once('draw-styles.php');

function getImageFromStyle($styleIndex, $trimImage=true) {
  global $image, $textDraw, $curvesDraw, $styles, $textWidth, $textHeight, $width, $height, $thickness, $textBoxBottomY, $textMostTopY, $textMostRightX, $textMostRightY, $textMostLeftX, $textMostLeftY;
  
  if (!array_key_exists($styleIndex, $styles)) return false;

  $style = $styles[$styleIndex];
  $font = $style['font'];
  $text = $style['text_style'];
  $fontSize = $style['font_size'];
  $angle = $style['angle'];
  $drawStyles = $style['draw_styles'];
  $thickness = max(1, round($fontSize / $font['thickness_index']));
  $bgColor = new ImagickPixel('white');

  $image = new \Imagick();

  $textDraw = new \ImagickDraw();
  setupTextDraw($textDraw, $font['path'], $fontSize);
  $textMetrics = $image->queryFontMetrics($textDraw, $text);
  $textWidth = $textMetrics['textWidth'];
  $textHeight = $textMetrics['textHeight'];
  
  $width = round($textWidth * 2.5);
  $height = round($textHeight * 2.5);
  $image->newImage($width, $height, $bgColor);
  $image->setImageFormat('png');

  $textX = round(($width - $textWidth) / 2);
  $textY = round(($height - $textHeight) / 2 + $fontSize);
  $textBoxBottomY = $textMetrics['boundingBox']['y2'] / 2 + $textY;
  $textMostTopY = $textY;
  $image->annotateImage($textDraw, $textX, $textY, 0, $text);

  $textMostRightX = floor($textWidth + $textX - $thickness * 2.1);
  $textMostRightY = null;
  $textMostLeftX = round($textX - $thickness);
  $textMostLeftY = null;

  for($y=$textY - $textHeight; $y < $textY + $textHeight / 2; $y++) {
    // $testDraw->point($textMostRightX, $y);
    $mostRightColorByY = $image->getImagePixelColor($textMostRightX, $y);
    $isDifferentWithBg = !($bgColor->isPixelSimilar($mostRightColorByY, 0));
    if ($isDifferentWithBg) {
      $textMostRightY = $y - $thickness / 2;
    }
    
    $mostLeftColorByY = $image->getImagePixelColor($textMostLeftX, $y);
    $isDifferentWithBg = !($bgColor->isPixelSimilar($mostLeftColorByY, 0));
    if ($isDifferentWithBg) {
      $textMostLeftY = $y - $thickness / 2;
    }
  }

  $coords = $drawStyles();
  // $image->drawImage($curvesDraw);
  // $image->drawImage($testDraw);
  // if ($angle) {
    // $image->rotateImage('white', $angle);
  // }
  // $trimImage && $image->trimImage(0);
  // $image->setImageAlphaChannel(\Imagick::ALPHACHANNEL_ACTIVATE);
  // $image->transparentPaintImage($bgColor, 0, 10000, false);

  // $curvesDraw->destroy();
  $textDraw->destroy();

  if (isset($_GET['image'])) {
    return $image;
  }

  return [
    'textWidth' => $textWidth,
    'textHeight' => $textHeight,
    'width' => $width,
    'height' => $height,
    'thickness' => $thickness,
    'textBoxBottomY' => $textBoxBottomY,
    'textMostTopY' => $textMostTopY,
    'textMostRightX' => $textMostRightX,
    'textMostRightY' => $textMostRightY,
    'textMostLeftX' => $textMostLeftX,
    'textMostLeftY' => $textMostLeftY,
    'text' => $text,
    'angle' => $angle,
    'fontPath' => $font['path'],
    'fontSize' => $fontSize,
    'coords' => $coords
  ];
}

function setupTextDraw($draw, $font, $fontSize) {
  $draw->setFillColor('black');
  $draw->setTextInterlineSpacing(-$fontSize / 1.25);
  $draw->setFontSize($fontSize);
  $draw->setFont($font);
}

$image = getImageFromStyle($index, false);

if (isset($_GET['image'])) {
  header('Content-type: image/png');
  echo $image;
  exit;
}
echo json_encode($image);
// print_r(json_encode($image));