var h;


function setup() {
  canvas = createCanvas(windowWidth, windowHeight);
  canvas.parent('maincontent');
  canvas.position(0, 0);
  canvas.style('z-index', '0');
  noLoop();
  h = hour();
}

function windowResized() {
  resizeCanvas(windowWidth, windowHeight);
}

function draw(){
  if (h>=6 && h< 8){
    background(255, 167, 130);
    noStroke()
    fill(255, 244, 222);
    ellipse(width/2.05, height/2.35, height/2, height/2);
  } else if (h>=8 && h< 18) {
    background(133, 203,223);
    noStroke()
    fill(255, 240, 157);
    ellipse(width/2.05, height/2.35, height/2, height/2);
  } else if (h>=18 && h< 20){
    background(255, 167, 130);
    noStroke()
    fill(255, 244, 222);
    ellipse(width/2.05, height/2.35, height/2, height/2);
  } else {background(18,67,102);
    noStroke()
    fill(240);
    ellipse(width/2.05, height/2.35, height/2, height/2);}

}
