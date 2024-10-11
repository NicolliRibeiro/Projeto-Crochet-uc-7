document.addEventListener("DOMContentLoaded", function () {
    const produtos = document.querySelectorAll('.card');
    document.getElementById('totalProdutos').textContent = `Encontrados: ${produtos.length}`;
});

