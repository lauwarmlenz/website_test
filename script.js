function toggleMenu() {
    const menu = document.querySelector(".menu-links");
    const icon = document.querySelector(".hamburger-icon");
    
    menu.classList.toggle("open")
    icon.classList.toggle("open")
}

document.getElementById('signup-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const firstName = document.getElementById('first-name').value;
    const email = document.getElementById('email').value;

    // Implement form submission functionality here
    // Send data to server or Mailchimp service
});