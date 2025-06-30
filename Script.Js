document.getElementById("btn").addEventListener('click', function(event) {
    event.preventDefault();
    const ppp = document.getElementById('texto');
    ppp.scrollIntoView({ behavior: 'smooth' });
});
