var myImage
var myImage2

function setup() {


  createCanvas(800, 800)

  myImage = loadImage("h.jpg")
  myImage2 = loadImage("j.jpg")
}

function draw() {
  background(255, 12, 89)
  ellipse(310, 550, random(100), 500)
  ellipse(310, 550, random(1000), 100)
  ellipse()


  fill(0, 0, 0)
  stroke(99, 99, 99)

  ellipse(150, 150, 250, 50)

  fill(0, 255, 0)
  stroke(123, 99, 99)
  ellipse(290, 150, 50, 50)


  ellipse(740, 550, 100, 100)

  image(myImage, 500, 50, 300, 400)
  image(myImage2, random(800), 50, 100, 300)
  ellipse(650, 400, 20, random(798))



}