document.addEventListener("DOMContentLoaded", function() {
    const signUpButton = document.getElementById("signUp");
    const signInButton = document.getElementById("signIn");
    const container = document.getElementById("container");
    const signUpForm = document.getElementById("signUp-form");
    const signInForm = document.getElementById("signIn-form");

    signUpButton.addEventListener("click", () => {
        container.classList.add("right-panel-active");
        // Store the state in sessionStorage
        sessionStorage.setItem("isSignUpActive", "true");
    });

    signInButton.addEventListener("click", () => {
        container.classList.remove("right-panel-active");
        // Remove the state from sessionStorage
        sessionStorage.removeItem("isSignUpActive");
    });

    // Check if the sign-up form was active before the refresh
    const isSignUpActive = sessionStorage.getItem("isSignUpActive");

    if (isSignUpActive === "true") {
        container.classList.add("right-panel-active");
    }

    // Handle sign-up and sign-in form submissions as needed
    signUpForm.addEventListener("submit", function(e) {
        e.preventDefault();
        // Handle sign-up form submission logic here
    });

    signInForm.addEventListener("submit", function(e) {
        e.preventDefault();
        // Handle sign-in form submission logic here
    });
});