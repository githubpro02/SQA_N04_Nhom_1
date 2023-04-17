
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

// style="transform: translate3d(0px, 0px, 0px); transform:all 0s ease 0s; width: 2080px;"
/*
const bigImg = document.querySelector(".product-content-left-big-img")
const smalImg = document.querySelectorAll(".product-constent-left-smalll-img img")
smalImg.forEach(function(imgItem,X){
    imgItem.addEventListener("click", function(){
        bigImg.src = imgItem.src
    })
})
*/
 