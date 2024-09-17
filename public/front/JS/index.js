// JavaScript to change content when hovering over options
document
  .querySelector(".left-div a:nth-child(1)")
  .addEventListener("mouseover", function () {
    document.getElementById("content-option1").style.display = "block";
    document.getElementById("content-option2").style.display = "none";
    document.getElementById("content-option3").style.display = "none";
  });

document
  .querySelector(".left-div a:nth-child(2)")
  .addEventListener("mouseover", function () {
    document.getElementById("content-option1").style.display = "none";
    document.getElementById("content-option2").style.display = "block";
    document.getElementById("content-option3").style.display = "none";
  });

document
  .querySelector(".left-div a:nth-child(3)")
  .addEventListener("mouseover", function () {
    document.getElementById("content-option1").style.display = "none";
    document.getElementById("content-option2").style.display = "none";
    document.getElementById("content-option3").style.display = "block";
  });
