function joinWhatsAppGroup1() {
  window.open("https://chat.whatsapp.com/BNHX7vpFUJ5FZm7zsKeWzL", "_blank");
}   
function joinWhatsAppGroup2() {
  window.open("https://chat.whatsapp.com/DFKmCUFd0C5DuUyNeoV05M", "_blank");
} 
function joinWhatsAppGroup3() {
  window.open("https://chat.whatsapp.com/Kk9pEO3IyaHEzNdYlNdIUD", "_blank");
}


const chatButton = document.querySelector('#chat-btn');
chatButton.addEventListener('click', () => {
window.location.href = 'chat.php';
});


var submitBtn = document.querySelector('.crow-s');

// Add event listener to the submit button
submitBtn.addEventListener('click', function(e) {
  e.preventDefault(); // Prevent form submission

  // Get the form data
  var name = document.getElementById('name').value;
  var email = document.getElementById('email').value;
  var country = document.getElementById('country').value;
  var remarks = document.getElementById('remarks').value;

  // Send the form data to the server
  sendData(name, email, country, remarks);

  // Clear the input fields
  document.getElementById('name').value = '';
  document.getElementById('email').value = '';
  document.getElementById('country').value = '';
  document.getElementById('remarks').value = '';
});

function sendData(name, email, country, remarks) {
  // Create a new AJAX request
  var xhr = new XMLHttpRequest();

  // Set the request URL and method
  xhr.open('POST', 'submit-form.php');

  // Set the request header
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  // Define the data to send
  var data = 'name=' + encodeURIComponent(name) +
             '&email=' + encodeURIComponent(email) +
             '&country=' + encodeURIComponent(country) +
             '&remarks=' + encodeURIComponent(remarks);

  // Send the request with the data
  xhr.send(data);

  // Handle the server response
  xhr.onload = function() {
    if (xhr.status === 200) {
      console.log(xhr.responseText);
      // Reload the page
      location.reload();
    } else {
      console.log('Error: ' + xhr.statusText);
      // Show an error message to the user
    }
  };
}

    






const reviewsBtn = document.getElementById("reviews-btn");
reviewsBtn.addEventListener("click", function() {
window.location.href = "review-display.php";
});


const images = document.querySelectorAll('.image-grid img');

images.forEach((image) => {
image.addEventListener('click', () => {
const link = image.parentElement.href;
window.open(link, '_blank');
 });
});


const menuBtn = document.querySelector('.menu-btn')
const navlinks = document.querySelector('.nav-links')

menuBtn.addEventListener('click',()=>{
navlinks.classList.toggle('mobile-menu')
})



function removeall() {
  $(".cir_border").css("border", "none");
}
$("#sec").on("click", function () {
  removeall();
  $("#sec").css("border", "2px solid whitesmoke");
  $("#sec").css("border-radius", "20px");
});
$("#pri").on("click", function () {
  removeall();
  $("#pri").css("border", "2px solid whitesmoke");
  $("#pri").css("border-radius", "20px");
});
$("#tri").on("click", function () {
  removeall();
  $("#tri").css("border", "2px solid whitesmoke");
  $("#tri").css("border-radius", "20px");
});
$("#quad").on("click", function () {
  removeall();
  $("#quad").css("border", "2px solid whitesmoke");
  $("#quad").css("border-radius", "20px");
});
$("#quint").on("click", function () {
  removeall();
  $("#quint").css("border", "2px solid whitesmoke");
  $("#quint").css("border-radius", "20px");
});
$("#hex").on("click", function () {
  removeall();
  $("#hex").css("border", "2px solid whitesmoke");
  $("#hex").css("border-radius", "20px");
});


const checkbox = document.getElementById('checkbox');

function checkDarkMode(){
  if (localStorage.getItem("tourism_website_darkmode") !== null && localStorage.getItem("tourism_website_darkmode") === "true") {
    document.body.classList.add('dark');
    checkbox.checked = true;
  }
};
checkDarkMode();

checkbox.addEventListener('change', () => {
  document.body.classList.toggle('dark');
  document.body.classList.contains('dark') ? 
    localStorage.setItem("tourism_website_darkmode", true) :
    localStorage.setItem("tourism_website_darkmode", false); 
});




let mybutton = document.getElementById("upbtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0; 
}