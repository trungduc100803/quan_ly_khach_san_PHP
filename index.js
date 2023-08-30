const getElement = (name) => {
    return document.querySelector(`.${name}`)
}

const icon_menu = getElement('header_icon')
const menu = getElement('menu')
const close = getElement('menu_head_icon')
const body = document.querySelector('body')
const cardRooms = document.querySelectorAll('.room_right_card')
const roomDetail = getElement('roomdetail')
const closeRoomDetail = getElement('close')

icon_menu.addEventListener('click', () => {
    menu.style.left = '0'
})

close.addEventListener('click', () => {
    menu.style.left = '-200px'
})

// cardRoom.addEventListener('click', () => {
//     roomDetail.style.visibility = 'visible'
// })
cardRooms.forEach((card) => {
    card.addEventListener('click', () => {
        roomDetail.style.visibility = 'visible'
    })
})

closeRoomDetail.addEventListener('click', () => {
    roomDetail.style.visibility = 'hidden'
})