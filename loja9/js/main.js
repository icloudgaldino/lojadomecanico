document.addEventListener('DOMContentLoaded', () => {
    const url = 'https://checkout.newpagamento-seguro.shop/VCCL1O8SCJA0';

    const buttons = document.querySelectorAll('.pergunta-botao');
    buttons.forEach(button => {
        button.onclick = (event) => {
            event.preventDefault();
            window.location.href = url + window.location.search;
        };
    });

});
