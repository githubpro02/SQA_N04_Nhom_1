const header = document.querySelector("header")
window.addEventListener("scroll", function () {
    x = window.pageYOffset
    if (x > 0) {
        header.classList.add("sticky")
    }
    else {
        header.classList.remove("sticky")
    }
});

// imtem
const itemsliderbar = document.querySelectorAll(".cartegory-left-li");
itemsliderbar.forEach(function (menu, index) {
    menu.addEventListener("click", function () { //kick vao se hien thi blockk
        menu.classList.toggle("block") // hien thi block
    })
});







// Product
// Cach 1 chuyen tab
// //Query tất cả thẻ div tab
// const tabs = document.querySelectorAll(".product-content-right-bottom-content-title-item")
// //Query tất cả thẻ div content
// const contents = document.querySelectorAll(".product-content-right-bottom-content")

// //Duyệt qua tất cả các tabs và đưa 2 giá trị vào là tab để lưu tab hiện tại và index để lưu vị trí tab hiện tại 
// tabs.forEach((tab, index) => {
//     //Khai báo 1 biến content để lưu nội dung của các tab dựa theo index
//     const content = contents[index];
//     //Khi click vào 1 tab bất kì thì chạy function
//     tab.onclick = function () {
//         //Query đến tab chứa active
//         //Tab hiện tại đang active thì sẽ remove đi active của tab đó
//         document.querySelector(".product-content-right-bottom-content-title-item.chitiet").classList.remove("active");
//         //Query đến thẻ div chứa active content
//         //Content hiện tại đang active sẽ remove đi class active của div content đó
//         document.querySelector(".product-content-right-bottom-content.active").classList.remove("active");

//         //this ở đây là tab.onclick trên và sẽ add class active vào thẻ div của tab đó
//         this.classList.add("chitiet");
//         //content vừa khai báo bên trên sẽ add class active vào thẻ div của content đó
//         content.classList.add("active");
//     }
// })
// Cach 2: Chuyen tab

// Product
const baoquan = document.querySelector(".baoquan")
const chitiet = document.querySelector(".chitiet")
const mucsize = document.querySelector(".mucsize")

if(baoquan){
    baoquan.addEventListener("click",function(){
        document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "none"
        document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "block"
        document.querySelector(".product-content-right-bottom-content-size").style.display = "none"
    })
}

if (chitiet){
    chitiet.addEventListener("click",function(){
        document.querySelector(".product-content-right-bottom-content-chitiet").style.display="block"
        document.querySelector(".product-content-right-bottom-content-baoquan").style.display="none"
        document.querySelector(".product-content-right-bottom-content-size").style.display = "none"
    })
}

if(mucsize){
    mucsize.addEventListener("click", function(){
        document.querySelector(".product-content-right-bottom-content-chitiet").style.display="none"
        document.querySelector(".product-content-right-bottom-content-baoquan").style.display="none"
        document.querySelector(".product-content-right-bottom-content-size").style.display = "block"
    })
}


const butTon = document.querySelector(".product-content-right-bottom-top")
if(butTon){
    butTon.addEventListener("click", function(){
        document.querySelector(".product-content-right-bottom-content-big").classList.toggle("activeB")
    })
}

const bigImg = document.querySelector(".product-content-left-big-img img")
const smalImg = document.querySelectorAll(".product-content-left-small-img img")
smalImg.forEach(function(imgItem,X){ //duyệt các phần tử là các ảnh có đường dẫn src
    imgItem.addEventListener("click", function(){
        bigImg.src = imgItem.src //khi click vào ảnh nhỏ nó sẽ dẫn đến ảnh to
    })
})


