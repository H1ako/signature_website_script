const canvas = document.querySelector('#draw-canvas')
const context = canvas.getContext('2d')

// addCurveStyle29

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
  constructor(canvas, text, curves, textX, textY, width, height, fontSize, font = 'Arial', thickness = 10, angle = 0, color = 'black') {
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
    this.drawTex();
  }

  drawTex() {
    var f = new FontFace('Humaira', `url(./${this.font})`);
    document.fonts.add(f);
    context.font = `${this.fontSize}px Humaira`;
    context.fillStyle = this.color;
    context.fillText(this.text, this.textX, this.textY);
  }

  drawCurves() {
    paper.setup('draw-canvas');
    paper.view.viewSize = new paper.Size(this.width, this.height);
    for (let l = 0; l < this.curves.length; l++) {
      const curve = this.curves[l];
      // Create a new path
      var path = new paper.Path();
      path.strokeColor = 'black';
      path.strokeWidth = this.thickness;

      // Move to the first point
      path.moveTo(curve[0]);

      // Draw the Bezier curve
      for (let j = 0; j < curve.length; j=j + 4) {
        const startPoint = curve[j];
        const controlPoint1 = curve[j + 1];
        const controlPoint2 = curve?.[j + 2] ? curve?.[j + 2] : curve?.[curve.length - 1];
        const endPoint = curve?.[j + 3] ? curve?.[j + 3] : curve?.[curve.length - 1];
        path.cubicCurveTo(startPoint, controlPoint1, controlPoint2, endPoint);
      }

      // for (var j = 0; j < curve.length; j += 3) {
        // var control1 = curve[j + 1];
        // var anchor1 = curve?.[j + 2] ? curve[j + 2] : curve[j + 1];
        // var anchor2 = curve?.[j + 3] ? curve?.[j + 3] : anchor1;
        // var control2 = anchor1.subtract(control1).add(anchor1);
        // path.cubicCurveTo(control1, control2, anchor2);
      // }
      path.smooth();

      // Update the view
      paper.view.draw();

      // this.context.strokeStyle = this.color;
      // this.context.lineWidth = this.thickness;
      // this.context.lineCap = 'round'

    }
  }
}
fetch('/signature_script/script.php')
  .then(response => response.json())
  .then(data => {
    const tCoords = []
    data.coords.forEach((coordsPack) => {
      coordsPack.forEach(coord => {
        tCoords.push(new paper.Point(coord.x, (coord.y - data.font_size / 4.25 + data.thickness / 2) + 200))
      })
    })
    
    const s = new Signature(canvas, data.text, tCoords, data.textMostLeftX, data.textMostRightY + 200, data.width, data.height, data.fontSize, data.fontPath, data.thickness,  data.angle, 'black');
    s.draw()
  })

// const s = new Signature(canvas, 'Radchenko', [tCoords], textMostLeftX, textMostRightY, width, height, 240, 'HighSummit', thickness, 0, 'black');