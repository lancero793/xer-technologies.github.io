const navBar = document.getElementById("navbar");
const toggleMenu = document.querySelector(".nav-toggle");
const closeMenu = document.querySelector(".nav-close");
const links = document.querySelectorAll(".links");

const headerActive = document.querySelectorAll(".skill-arrow");
const header = document.getElementById("header");

toggleMenu.addEventListener("click", activeMenu);
closeMenu.addEventListener("click", activeMenu);


function activeMenu(){
	navBar.classList.toggle("active");
}

links.forEach(link=> link.addEventListener("click", addActiveLink));

function addActiveLink(){
	links.forEach(link=>{
		link.classList.remove("active");
		this.classList.add("active");
	})
	navBar.classList.toggle("active");
}

headerActive.forEach(active=> {
	active.addEventListener("click", (e)=>{
		activeSkill(e);
	});
});


function activeSkill(e){
	headerActive.forEach(active=>{
		let target = e.target;
		let parent = target.parentElement.parentElement;
		parent.classList.toggle("close");
		target.classList.toggle("skill-active");
	});
}


/*function activeSkill(){
	let itemClass = this.parentNode.className;
	for(let i =0; i < skillsContent.length; i++){
		skillsContent[i].className = "skill-content open";
		if(itemClass === "skill-content close"){
			this.parentNode.className = "skill-content open";
		}
	}
}



skillHeader.forEach(element=> element.addEventListener("click", activeSkill));*/

const tabs = document.querySelectorAll("[data-target]")
const tabsContent = document.querySelectorAll("[data-content]");

tabs.forEach(tab=>{
	tab.addEventListener("click", (e)=>{
		let target = document.querySelector(tab.dataset.target);
		tabsContent.forEach(tabContent=>{
			tabContent.classList.remove("qualification-active");
		});
		target.classList.add("qualification-active");
		tabs.forEach(tab=>{
			tab.classList.remove("btn-active");
		})
		tab.classList.add("btn-active")
	});
})


// Modal open
const modal = document.querySelectorAll(".service-modal");
const modalClose = document.querySelectorAll(".modal-close");
const modalBtns = document.querySelectorAll(".services-btn");


function activeModal(i){
	modal[i].classList.toggle("modal-active");
}
// Activamos el modal
modalBtns.forEach((btn, i)=>{
	btn.addEventListener("click",() =>{
		activeModal(i);
	})
})
//Cerramos el mod
modalClose.forEach((btn, i)=>{
	btn.addEventListener("click", ()=>{
		activeModal(i);
	})
});

$('.owl-carousel').owlCarousel({
    loop:true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:4,
            nav:true,
            loop:false
        }
    }
})

// ------------ Testimonials Carousel //
/*$(".owl-carousel").owlCarousel({
	loop:true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
})*/

const upIcon = document.querySelector(".arrow-top");


function showHideIcon(){
	if(window.scrollY > 20){
		upIcon.classList.add("active");
		header.classList.add("header-active");
	}else{
		upIcon.classList.remove("active");
		header.classList.remove("header-active");
	}
}
function topFunction(){
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}
upIcon.addEventListener("click", ()=>{
	if(navBar.classList.contains('active')){
		activeMenu();
	}
	topFunction();
});
document.onscroll = ()=>{
	showHideIcon();
}


//------------ Toggle Theme ------------ //
const body = document.querySelector("body");
const btnToggle = document.getElementById("toggle-theme");
function toggleTheme(){
	let icon = btnToggle.children[0];
	body.classList.toggle("active");
	
	// Cambiamos el icono del botón del tema
	if (icon.classList.contains("uil-moon")) {
		icon.classList.remove("uil-moon");
		icon.classList.add("uil-sun");
	}else{
		icon.classList.remove("uil-sun");
		icon.classList.add("uil-moon");
	}
	if(body.classList.contains("active")){
		localStorage.setItem("dark", "true");
	}else{
		localStorage.setItem("dark", "false");
	}
}

function saveTheme(){
	if(localStorage.getItem("dark") === "true"){
		body.classList.add("active");
	}
}
saveTheme();

btnToggle.addEventListener("click", toggleTheme);