
// Toggle class active untuk hamburger menu
const navbarNav = document.querySelector('.navbar-nav');
// ketika hamburger menu di klik
document.querySelector('#hamburger-menu').onclick = () => {
  navbarNav.classList.toggle('active');
};




// Klik di luar elemen
const hm = document.querySelector('#hamburger-menu');

document.addEventListener('click', function (e) {
  if (!hm.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove('active');
  }
});


// Modal Box
const itemDetailButtons = document.querySelectorAll('.item-detail-button');
const itemDetailModal = document.querySelector('#project-modal');
const modalImage = document.querySelector('#modal-image');
const modalCaption = document.querySelector('#modal-caption');

let currentIndex = 0;
const projects = [];

itemDetailButtons.forEach((btn, index) => {
    btn.onclick = (e) => {
        e.preventDefault();
        const imgSrc = btn.getAttribute('data-img');
        const caption = btn.getAttribute('data-caption');
        currentIndex = index;
        openModal(imgSrc, caption);
        return caption;
    };
});

function openModal(imgSrc, caption) {
    modalImage.src = imgSrc;
    modalCaption.textContent = caption;
    itemDetailModal.style.display = 'flex';
}

// klik tombol close modal
document.querySelector('.modal .close-icon').onclick = (e) => {
  itemDetailModal.style.display = 'none';
  e.preventDefault();
};

// klik di luar modal
window.onclick = (e) => {
  if (e.target === itemDetailModal) {
    itemDetailModal.style.display = 'none';
  }
};



//scrol to top
// Get the button:
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


//validation
function validateForm() {
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;

  
  const nameError = document.getElementById( 
    "name-error"
  );
  const emailError = document.getElementById(
      "email-error"
  );
  const passwordError = document.getElementById(
      "password-error"
  );

  nameError.textContent = "";
  emailError.textContent = "";
  passwordError.textContent = "";

  let isValid = false;

  if (name === "" ) {
      nameError.textContent =
          "masukan nama anda dengan benar";
      isValid = false;
  }else if (email === "" || !email.includes("@")) {
    emailError.textContent =
        "masukan alamat email yang benar";
    isValid = false;
}else if (password === "" || password.length < 6) {
  passwordError.textContent =
      "Silakan masukkan pesan dengan minimal 6 karakter.";
  isValid = false;
}else {
  alert("Pesan Anda Berhasil Dikirim");
}
  return isValid;
}
