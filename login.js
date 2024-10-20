document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.getElementById("loginForm");
    const signupForm = document.getElementById("signupForm");
    const showSignupBtn = document.getElementById("showSignup");
    const showLoginBtn = document.getElementById("showLogin");
  
    // Event listeners to toggle between forms
    showSignupBtn.addEventListener("click", (e) => {
      e.preventDefault();
      loginForm.classList.remove("active");
      loginForm.classList.add("hide");
      signupForm.classList.add("active");
    });
  
    showLoginBtn.addEventListener("click", (e) => {
      e.preventDefault();
      signupForm.classList.remove("active");
      loginForm.classList.remove("hide");
      loginForm.classList.add("active");
    });
  });
  