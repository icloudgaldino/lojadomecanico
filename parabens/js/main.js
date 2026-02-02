document.addEventListener('DOMContentLoaded', () => {
    const urls = {
        produto1: 'https://pay.pagamentomecanico.shop/4KovG1ey9wYGyDE',
        produto2: 'https://pay.pagamentomecanico.shop/521rZJ2Av4QZeaX',
        produto3: 'https://pay.pagamentomecanico.shop/2wq7GrlE1eM3BAN',
        produto4: 'https://pay.pagamentomecanico.shop/QqyLgqx7DY0GvkE',
        produto5: 'https://pay.pagamentomecanico.shop/lqv130AbLAWZxbj',
        produto6: 'https://pay.pagamentomecanico.shop/DPXw3XxJ88D3zmp',
        produto7: 'https://pay.pagamentomecanico.shop/rn4RgQVK7dA3wBV',
        produto8: 'https://pay.pagamentomecanico.shop/N1nVZpa5D0VGlM6',
        produto9: 'https://pay.pagamentomecanico.shop/xQBPZvaJo9Y3mVq'
    };

    const productId = document.body.dataset.productId || new URLSearchParams(window.location.search).get('id');

    if (urls[productId]) {
        const buttons = document.querySelectorAll('.pergunta-botao');
        buttons.forEach(button => {
            button.onclick = (event) => {
                event.preventDefault();
                window.location.href = urls[productId] + window.location.search;
            };
        });
    }
});
