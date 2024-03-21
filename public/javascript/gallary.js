
let gallery = document.getElementById('photos')

for(let i = 0; i < 10; i++) {
    let createDiv = document.createElement('div')
   createDiv.classList.add('photo-card')
   
    gallery.appendChild(createDiv)
}