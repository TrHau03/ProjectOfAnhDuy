
{/* SearchBar */}
const searchItem = document.querySelector('.js-search-item')
const searchBox = document.querySelector('.js-search-box')
const container = document.querySelector('#container')
function openSearchBox() {
    searchBox.classList.add('open')
}
function closeSearchBox() {
    searchBox.classList.remove('open')
}

searchItem.addEventListener('click', openSearchBox)
container.addEventListener('click',closeSearchBox)

{/* UserSubnav */}

const userItem = document.querySelector('.js-user-item')
const userSubnav = document.querySelector('.js-user-subnav')
const userSubnavTmp = document.querySelector('.js-user-subnav-tmp')
function openUserSubnav() {
    userSubnav.classList.add('open-user')
}
function closeUserSubnav() {
    userSubnav.classList.remove('open-user')
}
userItem.addEventListener('mouseover', openUserSubnav)
userSubnav.addEventListener('mouseover', openUserSubnav)
container.addEventListener('mouseover',closeUserSubnav)

