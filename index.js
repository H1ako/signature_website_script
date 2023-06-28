const canvas = document.querySelector('#draw-canvas')
const context = canvas.getContext('2d')

const textMostRightX = 1370
const textMostRightY = 567
const textMostLeftX = 587
const textMostLeftY = 0
const textWidth = 790
const textHeight = 483
const width = 1975
const height = 1208
const thickness = 6
const textBoxBottomY = 737.90625
const textMostTopY = 603

// addCurveStyle29
const coords = [{x:1370,y:567},{x:1844,y:422.1},{x:1607,y:-12.600000000000023},{x:1607,y:-12.600000000000023},{x:975,y:-12.600000000000023},{x:975,y:373.79999999999995},{x:1054,y:470.4},{x:1212,y:470.4},{x:1962.5,y:-12.600000000000023},{x:824,y:180.59999999999997},{x:587,y:325.5},{x:587,y:567},{x:-45,y:760.2},{x:587,y:905.0999999999999},{x:1370,y:567}]

const tCoords = []
coords.forEach((coord) => {
  tCoords.push(new paper.Point(coord.x, coord.y + 200))
})

// function drawText(text) {
//   context.font = `{textHeight}px Arial`;
//   context.fillStyle = 'black';
//   context.fillText(text, textMostRightX, textMostRightY);
// }

// function drawBezier(points) {
//   const startPoint = coords[0];
//   context.moveTo(startPoint.x, startPoint.y);

//   // Draw the curve
//   for (let i = 1; i < coords.length; i += 2) {
//     const controlPoint = coords[i];
//     const endPoint = coords[i + 1];
//     context.quadraticCurveTo(controlPoint.x, controlPoint.y, endPoint.x, endPoint.y);
//   }

//   // Set the stroke style and draw the curve
//   context.strokeStyle = 'blue';
//   context.lineWidth = 2;
//   context.stroke();
// }

class Signature {
  constructor(canvas, text, curves, textX, textY, width, height, fontSize, font='Arial', thickness=10, angle=0, color='black') {
    this.text = text;
    this.curves = curves;
    this.textX = textX;
    this.textY = textY;
    this.width = width;
    this.height = height;
    this.thickness = thickness;
    this.fontSize = fontSize;
    this.font = font;
    this.color = color;
    this.angle = angle;
    
    this.canvas = canvas;
    this.context = canvas.getContext('2d');

    this.canvas.width = width;
    this.canvas.height = height;
  }

  draw() {
    this.drawCurves();
    // this.drawTex();
  }

  drawTex() {
    var f = new FontFace('HighSummit', 'url(./assets/fonts/Humaira.otf)');
    document.fonts.add(f);
    context.font = `${this.fontSize}px ${this.font}`;
    context.fillStyle = this.color;
    context.fillText(this.text, this.textX, this.textY);
  }

  drawCurves() {
    paper.setup('draw-canvas');
    paper.view.viewSize = new paper.Size(this.width, this.height);
    for (let i = 0; i < this.curves.length; i++) {
      const curve = this.curves[i];
      // Create a new path
      var path = new paper.Path();
      path.strokeColor = 'black';
      path.strokeWidth = this.thickness;

      // Move to the first point
      path.moveTo(curve[0]);

      // Draw the Bezier curve
      // for (let j = 0; j < tCoords.length; j=j + 4) {
      //   const startPoint = tCoords[j];
      //   const controlPoint1 = tCoords[j + 1];
      //   const controlPoint2 = tCoords[j + 2];
      //   const endPoint = tCoords[j + 3];
      //   path.cubicCurveTo(startPoint, controlPoint1, controlPoint2, endPoint);
      // }

      for (var j = 0; j < tCoords.length - 3; j += 2) {
        var control1 = tCoords[j + 1];
        var anchor1 = tCoords[j + 2];
        var anchor2 = tCoords[j + 3];
        var control2 = anchor1.subtract(control1).add(anchor1);
  
        path.cubicCurveTo(control1, control2, anchor2);
      }

      // Update the view
      paper.view.draw();
      
      // this.context.strokeStyle = this.color;
      // this.context.lineWidth = this.thickness;
      // this.context.lineCap = 'round'

    }
  }
}

const s = new Signature(canvas, 'Radchenko', [coords], textMostLeftX, textMostRightY, width, height, 240, 'HighSummit', thickness, 0, 'black');
s.draw()