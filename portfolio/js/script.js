var sidemenu = document.getElementById("sidemenu");
function openmenu(){
  sidemenu.style.right = "0";

}
function closemenu(){
  sidemenu.style.right = "-200px";
}

var tablinks = document.getElementsByClassName("tab-links");
	var tabcontents = document.getElementsByClassName("tab-contents");
	
	function opentab(tabname){
	  for(tablink of tablinks){
	     tablink.classList.remove("active-link");
	
	}
	for(tabcontent of tabcontents){
	   tabcontent.classList.remove("active-tab");
	   }
	    event.currentTarget.classList.add("active-link");
		document.getElementById(tabname).classList.add("active-tab");
	}


 // slider

 const wrapper = document.querySelector(".wrapper");
 const carousel = document.querySelector(".carousel");
 const firstCardWidth = carousel.querySelector(".card").offsetWidth;
 const arrowBtns = document.querySelectorAll(".wrapper i");
 const carouselChildrens = [...carousel.children];
 
 let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;
 
 // Get the number of cards that can fit in the carousel at once
 let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);
 
 // Insert copies of the last few cards to beginning of carousel for infinite scrolling
 carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
     carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
 });
 
 // Insert copies of the first few cards to end of carousel for infinite scrolling
 carouselChildrens.slice(0, cardPerView).forEach(card => {
     carousel.insertAdjacentHTML("beforeend", card.outerHTML);
 });
 
 // Scroll the carousel at appropriate postition to hide first few duplicate cards on Firefox
 carousel.classList.add("no-transition");
 carousel.scrollLeft = carousel.offsetWidth;
 carousel.classList.remove("no-transition");
 
 // Add event listeners for the arrow buttons to scroll the carousel left and right
 arrowBtns.forEach(btn => {
     btn.addEventListener("click", () => {
         carousel.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
     });
 });
 
 const dragStart = (e) => {
     isDragging = true;
     carousel.classList.add("dragging");
     // Records the initial cursor and scroll position of the carousel
     startX = e.pageX;
     startScrollLeft = carousel.scrollLeft;
 }
 
 const dragging = (e) => {
     if(!isDragging) return; // if isDragging is false return from here
     // Updates the scroll position of the carousel based on the cursor movement
     carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
 }
 
 const dragStop = () => {
     isDragging = false;
     carousel.classList.remove("dragging");
 }
 
 const infiniteScroll = () => {
     // If the carousel is at the beginning, scroll to the end
     if(carousel.scrollLeft === 0) {
         carousel.classList.add("no-transition");
         carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
         carousel.classList.remove("no-transition");
     }
     // If the carousel is at the end, scroll to the beginning
     else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
         carousel.classList.add("no-transition");
         carousel.scrollLeft = carousel.offsetWidth;
         carousel.classList.remove("no-transition");
     }
 
     // Clear existing timeout & start autoplay if mouse is not hovering over carousel
     clearTimeout(timeoutId);
     if(!wrapper.matches(":hover")) autoPlay();
 }
 
 const autoPlay = () => {
     if(window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
     // Autoplay the carousel after every 2500 ms
     timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500);
 }
 autoPlay();
 
 carousel.addEventListener("mousedown", dragStart);
 carousel.addEventListener("mousemove", dragging);
 document.addEventListener("mouseup", dragStop);
 carousel.addEventListener("scroll", infiniteScroll);
 wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
 wrapper.addEventListener("mouseleave", autoPlay);


//  form validation

document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("#contact-form");
  
    form.addEventListener("submit", function(event) {
      event.preventDefault();
  
      if (validateForm()) {
        form.submit();
      }
    });
  
    function validateForm() {
      const nameInput = document.querySelector('input[name="Name"]');
      const emailInput = document.querySelector('input[name="email"]');
      const messageInput = document.querySelector('textarea[name="Message"]');
  
      const nameValue = nameInput.value.trim();
      const emailValue = emailInput.value.trim();
      const messageValue = messageInput.value.trim();
  
      let isValid = true;
  
      if (nameValue === "") {
        setError(nameInput, "Name is required");
        isValid = false;
      } else {
        clearError(nameInput);
      }
  
      if (emailValue === "") {
        setError(emailInput, "Email is required");
        isValid = false;
      } else if (!isValidEmail(emailValue)) {
        setError(emailInput, "Invalid email format");
        isValid = false;
      } else {
        clearError(emailInput);
      }
  
      if (messageValue === "") {
        setError(messageInput, "Message is required");
        isValid = false;
      } else {
        clearError(messageInput);
      }
  
      return isValid;
    }
  
    function setError(input, message) {
      const errorElement = document.createElement("div");
      errorElement.classList.add("error-message");
      errorElement.innerText = message;
  
      input.classList.add("error");
      input.parentNode.appendChild(errorElement);
    }
  
    function clearError(input) {
      const errorElement = input.parentNode.querySelector(".error-message");
  
      if (errorElement) {
        errorElement.remove();
      }
  
      input.classList.remove("error");
    }
  
    function isValidEmail(email) {
      // Regular expression for email validation
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailRegex.test(email);
    }
  });

  
//   dynamic content


// Get all the "Learn more" links and additional details
const learnMoreLinks = document.querySelectorAll('.learn-more');

// Add click event listeners to each link
learnMoreLinks.forEach(link => {
  link.addEventListener('click', function(event) {
    event.preventDefault();

    // Get the parent element of the clicked link
    const parent = this.parentNode;

    // Toggle the visibility of the additional details for the corresponding link
    const additionalDetails = parent.querySelector('.additional-details');
    additionalDetails.classList.toggle('show');
  });
});

