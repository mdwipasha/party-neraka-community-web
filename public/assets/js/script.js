//MEMBER-CARD MOBILE
document.querySelectorAll('.member-card').forEach(card => {
  card.addEventListener('click', function () {  
    this.classList.toggle('flip');
  });
});


//CAROUSEL MERCH
const swiper = new Swiper('.merch-swiper', {
    slidesPerView: 3,
    spaceBetween: 20,
    centeredSlides: true,
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
        centeredSlides: true
      },
      576: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 3,
      },
    },
  });


//CAROUSEL LIVE
  const liveSwiper = new Swiper('.live-swiper', {
    slidesPerView: 3,
    spaceBetween: 20,
    centeredSlides: true,
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
        centeredSlides: true
      },
      576: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 3,
      },
    },
  });

//SHOWMORE MEMBER
document.addEventListener("DOMContentLoaded", function () {
  const showMoreBtn = document.getElementById("showMoreBtn");

  if (showMoreBtn) {
    showMoreBtn.addEventListener("click", function () {
      document.querySelectorAll(".extra-member").forEach(function (card) {
        card.classList.remove("d-none");
      });
      showMoreBtn.style.display = "none";
    });
  }
});

//SHOWMORE GALLERY
document.addEventListener("DOMContentLoaded", function () {
  const showMoreBtn = document.getElementById("showMoreBtns");

  if (showMoreBtn) {
    showMoreBtn.addEventListener("click", function () {
      document.querySelectorAll(".extra-gallery").forEach(function (card) {
        card.classList.remove("d-none");
      });
      showMoreBtn.style.display = "none";
    });
  }
});


//MODAL GALLERY
const modal = document.getElementById("imageModal");
const modalImg = document.getElementById("modalImage");
const closeBtn = document.querySelector(".close");

document.querySelectorAll(".gallery-grid img").forEach(img => {
  img.addEventListener("click", () => {
    modal.style.display = "flex";
    modalImg.src = img.dataset.full;
  });
});

closeBtn.onclick = function () {
  modal.style.display = "none";
};

window.onclick = function (e) {
  if (e.target === modal) {
    modal.style.display = "none";
  }
};

