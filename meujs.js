const slidesdp = document.getElementById("slidesdp")
const numeroslides = 4
const cores = ["green","purple","blue","yellow","grey"]
const ul = document.createElement("ul")
slidesdp.appendChild(ul)
for(ind = 0; ind <= numeroslides; ind++){
    const lis = document.createElement("li")
    ul.appendChild(lis)
    lis.classList.add(`sdp`)
    lis.classList.add(`slidesdp${ind}`)
    lis.style.background = `url(slide${ind}.jpg)no-repeat`
    lis.textContent = `Slide${ind}`
    lis.style.display = "none"
}
let passarslides = -1
const slidedp1 = document.querySelector(".slidesdp0")
const slidedp2 = document.querySelector(".slidesdp1")
const slidedp3 = document.querySelector(".slidesdp2")
const slidedp4 = document.querySelector(".slidesdp3")
const slidedp5 = document.querySelector(".slidesdp4")

    slidedp5.style.display = "block"

setInterval(()=>{
if(passarslides === 0){
    slidedp5.style.display = "none"
    slidedp1.style.display = "block"
  slidedp1.textContent += "para ver se rende junto com o slide e imagem"
}else if(passarslides === 1){
  slidedp1.style.display = "none"
    slidedp2.style.display = "block"
}else if(passarslides === 2){
  slidedp2.style.display = "none"
    slidedp3.style.display = "block"
}else if(passarslides === 3){
  slidedp3.style.display = "none"
    slidedp4.style.display = "block"
}else if(passarslides === 4){
  slidedp4.style.display = "none"
    slidedp5.style.display = "block"
    passarslides = -1
}
passarslides++

}, 3000)


