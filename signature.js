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
      for (let j = 0; j < curve.length; j = j + 4) {
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