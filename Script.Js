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

    // Botão do Descarte
      function openGoogleMaps() {
      window.open("https://www.google.com/maps", "_blank");
    }

    // Leia Mais - DashBoards

  document.addEventListener("DOMContentLoaded", function () {
  const fullText = `A Eletro-Descarte tem como missão fornecer uma solução eficiente e responsável para o descarte de produtos eletrônicos que, muitas vezes, acabam sendo descartados de forma inadequada, causando poluição e desperdício de recursos valiosos. A empresa oferece um serviço completo de coleta e reciclagem de equipamentos como computadores, celulares e outros aparelhos eletrônicos.
  A empresa também tem um compromisso com a educação e a conscientização. A Eletro-Descarte desenvolve programas de sensibilização para consumidores e empresas, mostrando a importância do descarte correto e os benefícios da reciclagem de lixo eletrônico. Além disso, oferece soluções práticas para empresas que desejam adotar práticas sustentáveis em seus processos, com serviços personalizados de coleta e gestão de resíduos eletrônicos.`;

  const previewText = fullText.substring(0, 100);
  const remainingText = fullText.substring(100);

  const previewSpan = document.getElementById("preview-text");
  const moreSpan = document.getElementById("more-text");
  const toggleBtn = document.getElementById("toggle-text");

  previewSpan.textContent = previewText;

  let expanded = false;

  function animateText(text, element, callback) {
    let index = 0;
    element.textContent = "";

    const interval = setInterval(() => {
      element.textContent += text.charAt(index);
      index++;
      if (index === text.length) {
        clearInterval(interval);
        if (callback) callback();
      }
    }, 5); // velocidade da escrita
  }

  toggleBtn.addEventListener("click", function (e) {
    e.preventDefault();
    if (!expanded) {
      animateText(remainingText, moreSpan);
      toggleBtn.textContent = "Mostrar menos";
    } else {
      moreSpan.textContent = "";
      toggleBtn.textContent = "Leia mais";
    }
    expanded = !expanded;
  });
});

 // Codigo Do Modal
document.getElementById('openModal').addEventListener('click', function() {
    // Adiciona a classe que bloqueia o scroll do body
    document.body.classList.add('no-scroll');
    
    // Aqui você pode adicionar o código para mostrar o modal
    document.getElementById('myModal').style.display = 'block';
    
});


// Abrir o modal
document.getElementById('openModal').addEventListener('click', function() {
    // Adiciona a classe que bloqueia o scroll do body
    document.body.classList.add('no-scroll');
    
    // Aqui você pode adicionar o código para mostrar o modal
    document.getElementById('myModal').style.display = 'block'; // Supondo que o modal tenha esse ID
});

// Fechar o modal (exemplo com um botão de fechar)
document.getElementById('closeModal').addEventListener('click', function() {
    // Remove a classe que bloqueia o scroll do body
    document.body.classList.remove('no-scroll');
    
    // Aqui você pode adicionar o código para esconder o modal
    document.getElementById('myModal').style.display = 'none';
});
 
  function openModal() {
    document.getElementById("loginModal").style.display = "flex";
  }

  function closeModal() {
    document.getElementById("loginModal").style.display = "none";
  }

  // Fecha ao clicar fora
  window.onclick = function(e) {
    const modal = document.getElementById("loginModal");
    if (e.target === modal) {
      modal.style.display = "none";
    }
  };


function openModal() {
  document.getElementById('loginModal').style.display = 'flex';
  document.body.classList.add('no-scroll');
  document.getElementById('registerModal').style.display = 'none';
}
function closeModal() {
  document.getElementById('loginModal').style.display = 'none';
  document.body.classList.remove('no-scroll');
}
function openRegisterModal() {
  document.getElementById('registerModal').style.display = 'flex';
  document.body.classList.add('no-scroll');
  document.getElementById('loginModal').style.display = 'none';
}
function closeRegisterModal() {
  document.getElementById('registerModal').style.display = 'none';
  document.body.classList.remove('no-scroll');
}

function openForgotModal() {
  document.getElementById('forgotModal').style.display = 'flex';
  document.body.classList.add('no-scroll');
  document.getElementById('loginModal').style.display = 'none';
  document.getElementById('registerModal').style.display = 'none';
}
function closeForgotModal() {
  document.getElementById('forgotModal').style.display = 'none';
  document.body.classList.remove('no-scroll');
}