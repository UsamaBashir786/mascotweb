<!-- Scroll to Top Button -->
<button id="scrollToTopBtn" title="Go to Top">↑</button>
<style>
  /* Scroll to Top Button */
  #scrollToTopBtn {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 1000;
    background-color: var(--e-global-color-btn-red);
    /* Button red */
    color: var(--e-global-color-white);
    /* White text */
    border: none;
    border-radius: 50%;
    padding-top: 15px;
    padding-left: 23px;
    padding-right: 23px;
    padding-bottom: 15px;
    font-size: 18px;
    cursor: pointer;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
    transition: opacity 0.3s, background-color 0.3s;
    opacity: 0;
    /* Hidden by default */
    visibility: hidden;
    /* Hidden by default */
  }

  #scrollToTopBtn:hover {
    background-color: var(--e-global-color-red-active);
    /* Hover effect */
  }

  #scrollToTopBtn.show {
    opacity: 1;
    /* Show button */
    visibility: visible;
    /* Show button */
  }
</style>
<script>
  // Scroll to Top Button Logic
  const scrollToTopBtn = document.getElementById("scrollToTopBtn");

  // Show the button when the user scrolls down 200px
  window.onscroll = function() {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
      scrollToTopBtn.classList.add("show");
    } else {
      scrollToTopBtn.classList.remove("show");
    }
  };

  // Scroll to the top when the button is clicked
  scrollToTopBtn.onclick = function() {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  };
</script>