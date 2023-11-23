const search = document.querySelector('.search')
const search_affiche = document.querySelector('.search_icon')
search_affiche.addEventListener('click', () => {
    search.classList.toggle('active')
})
const news = document.querySelector('.new')
const notification = document.querySelector('.notification')
notification.addEventListener('click', () => {
    news.classList.toggle('active')
})

const sidebar = document.querySelector(".side")
const opens = document.querySelector('.open')
const closes = document.querySelector('.close')
opens.addEventListener('click', () => {
    sidebar.classList.toggle('menu')
})
closes.addEventListener('click', () => {
    sidebar.classList.remove('menu')
})



const delet_user = document.querySelectorAll(".delet_user")
const freelancer = document.querySelectorAll(".freelancer")
for (let i = 0; i < delet_user.length; i++) {
    delet_user[i].addEventListener('click', () => {
        freelancer[i].style.display = 'none'
        Swal.fire(
            'Deleted successfully'
        )
    })
}
const accept_task = document.querySelectorAll(".accept_task")
for (let i = 0; i < accept_task.length; i++) {
    accept_task[i].addEventListener('click', () => {
        freelancer[i].style.display = 'none'
        Swal.fire(
            'Order is accepted!',
            '',
            'success'
          )
    })
}

// edit
