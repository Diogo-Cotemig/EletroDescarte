document.getElementById("btn").addEventListener('click', function(event) {
    event.preventDefault();
    const ppp = document.getElementById('texto');
    ppp.scrollIntoView({ behavior: 'smooth' });
});

 function mudarFavicon() {
      const favicon = document.getElementById("favicon");

      // Substitua pelo caminho do seu novo ícone
      favicon.href = "favicon2.ico";
    }
