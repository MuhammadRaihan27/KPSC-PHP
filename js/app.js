// Navbar Change Logo

const Logo = document.getElementById("nav-brand");
const Image = "./assets/img/Logo-Kpsc-Kujang.png";
if (window.innerWidth < 935) {
  Logo.innerHTML = `<img src="${Image}" alt="Logo Kujang" />`;
}

// Navbar Toggler Mobile

const btnOpenNav = document.getElementById("btn-mobile");
const btnCloseNav = document.getElementById("btn-close-mobile");
const navbarGroup = document.getElementById("nav");

btnOpenNav.addEventListener("click", () => {
  navbarGroup.classList.add("active");
});

btnCloseNav.addEventListener("click", () => {
  navbarGroup.classList.remove("active");
});

const nav = document.querySelector(".navbar");
if (window.innerWidth < 526) {
  nav.classList.add("shadow");
}

// Change Image Section 2
// const imageSec2 = document.getElementById("img-area2");
// const Image2 = "./assets/img/Home/Section2/mobile.png";
// if (window.innerWidth < 992) {
//   imageSec2.innerHTML = `<img src="${Image2}" alt="Image Mesin" />`;
// }

// How We Work

if ((window.Location.href = "index.html")) {
  const btnBullet1 = document.querySelector(".bullet1");
  const btnBullet2 = document.querySelector(".bullet2");
  const btnBullet3 = document.querySelector(".bullet3");
  const content1 = document.querySelector(".content1");
  const content2 = document.querySelector(".content2");
  const content3 = document.querySelector(".content3");

  content1.classList.add("active");
  btnBullet1.addEventListener("click", () => {
    content1.classList.add("active");
    content2.classList.remove("active");
    content3.classList.remove("active");

    btnBullet1.classList.add("active");
    btnBullet2.classList.remove("active");
    btnBullet3.classList.remove("active");
  });

  btnBullet2.addEventListener("click", () => {
    content2.classList.add("active");
    content1.classList.remove("active");
    content3.classList.remove("active");

    btnBullet2.classList.add("active");
    btnBullet1.classList.remove("active");
    btnBullet3.classList.remove("active");
  });

  btnBullet3.addEventListener("click", () => {
    content3.classList.add("active");
    content1.classList.remove("active");
    content2.classList.remove("active");

    btnBullet3.classList.add("active");
    btnBullet1.classList.remove("active");
    btnBullet2.classList.remove("active");
  });
}
