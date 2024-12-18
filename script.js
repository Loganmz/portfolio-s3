document.querySelectorAll('.main-navigation a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();

        // Récupérer l'ID de la section cible
        const targetId = this.getAttribute('href').substring(1); // Enlever le # du lien
        const targetElement = document.getElementById(targetId);

        // Animer le défilement
        window.scrollTo({
            top: targetElement.offsetTop - 60, // Ajuste la position (ajouter un offset si tu as un header fixe)
            behavior: 'smooth' // Comportement fluide
        });
    });
});


const sections = document.querySelectorAll('section');

const options = {
    root: null,
    threshold: 0.5,  // 50% de la section doit être visible pour être déclenchée
};

const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        } else {
            entry.target.classList.remove('visible');
        }
    });
}, options);

sections.forEach(section => {
    observer.observe(section);
});
