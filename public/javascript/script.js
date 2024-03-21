

// function to make the custome cursor

let container = document.getElementById('container')

// function to track the move of the mouse

let costomCursoe = document.getElementById('cursor')
function getCurose(e) {
    // costomCursoe.style.transition = 'all s'
    costomCursoe.style.position = 'absolute'
    costomCursoe.style.top = `${e.pageY-20}px`
    costomCursoe.style.left = `${e.pageX-20}px`
}

// mouse move event
container.addEventListener('mousemove', getCurose)






// Function to add the  animated css for sevice section

let body = document.getElementById('body')
function addAnimationForService(e) {
    let textPart =document.getElementById('serv-left')
    let imgPart =document.getElementById('serv-right')

    console.log(e.pageY)
}

body.addEventListener('scroll',addAnimationForService)
