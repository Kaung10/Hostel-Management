const navLinks = document.querySelectorAll('.navbar ul li');


navLinks.forEach(link => {
    link.addEventListener('click', function() {
        navLinks.forEach(item => item.classList.remove('active'));
        console.log("good Job");
        this.classList.add('active');

    });
});
