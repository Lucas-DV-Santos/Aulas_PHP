
const banner = document.querySelector(".banner");
const canvas = document.querySelector(".particulas");
const ctx = canvas.getContext("2d");

let largura, altura;
let particulas = [];

const mouse = {
    x: null,
    y: null,
    ativo: false
};

// Configurações do efeito
const configuracoes = {
    quantidade: 65,
    distancia: 130,
    distanciaMouse: 150,
    velocidade: 0.35,
    repulsao: 0.65
};

// Criar partículas
function criarParticulas() {
    particulas = [];

    const quantidade = Math.min(
        110,
        Math.max(30, Math.floor((largura * altura) / 10000))
    );

    for (let i = 0; i < quantidade; i++) {
        particulas.push({
            x: Math.random() * largura,
            y: Math.random() * altura,
            vx: (Math.random() - 0.5) * configuracoes.velocidade,
            vy: (Math.random() - 0.5) * configuracoes.velocidade,
            raio: Math.random() * 2 + 1
        });
    }
}

// Ajustar tamanho do canvas
function ajustarCanvas() {
    const retangulo = banner.getBoundingClientRect();
    const escala = Math.min(window.devicePixelRatio || 1, 2);

    largura = retangulo.width;
    altura = retangulo.height;

    canvas.width = largura * escala;
    canvas.height = altura * escala;

    ctx.setTransform(escala, 0, 0, escala, 0, 0);

    criarParticulas();
}

ajustarCanvas();
window.addEventListener("resize", ajustarCanvas);

// Detectar posição do mouse
banner.addEventListener("pointermove", (evento) => {
    const retangulo = banner.getBoundingClientRect();

    mouse.x = evento.clientX - retangulo.left;
    mouse.y = evento.clientY - retangulo.top;
    mouse.ativo = true;
});

banner.addEventListener("pointerleave", () => {
    mouse.ativo = false;
});

// Desenhar animação
function animar() {
    ctx.clearRect(0, 0, largura, altura);

    particulas.forEach((p, i) => {

        // Interação com o mouse
        if (mouse.ativo) {
            const dx = p.x - mouse.x;
            const dy = p.y - mouse.y;

            const distancia = Math.sqrt(dx * dx + dy * dy);

            if (distancia < configuracoes.distanciaMouse && distancia > 0) {

                const intensidade =
                    (1 - distancia / configuracoes.distanciaMouse) *
                    configuracoes.repulsao;

                // Afasta os pontos do cursor
                p.vx += (dx / distancia) * intensidade;
                p.vy += (dy / distancia) * intensidade;
            }
        }

        // Movimentação e desaceleração
        p.x += p.vx;
        p.y += p.vy;

        p.vx *= 0.985;
        p.vy *= 0.985;

        // Limitar velocidade
        const velocidadeMaxima = 2.5;

        p.vx = Math.max(-velocidadeMaxima, Math.min(velocidadeMaxima, p.vx));
        p.vy = Math.max(-velocidadeMaxima, Math.min(velocidadeMaxima, p.vy));

        // Manter partículas dentro da tela
        if (p.x < 0 || p.x > largura) p.vx *= -1;
        if (p.y < 0 || p.y > altura) p.vy *= -1;

        p.x = Math.max(0, Math.min(largura, p.x));
        p.y = Math.max(0, Math.min(altura, p.y));

        // Desenhar ponto
        ctx.beginPath();
        ctx.arc(p.x, p.y, p.raio, 0, Math.PI * 2);
        ctx.fillStyle =  "#4b8bc5";
        ctx.fill();

        // Conectar pontos próximos
        for (let j = i + 1; j < particulas.length; j++) {
            const outra = particulas[j];

            const dx = p.x - outra.x;
            const dy = p.y - outra.y;

            const distancia = Math.sqrt(dx * dx + dy * dy);

            if (distancia < configuracoes.distancia) {

                const opacidade = 1 - distancia / configuracoes.distancia;

                ctx.beginPath();
                ctx.moveTo(p.x, p.y);
                ctx.lineTo(outra.x, outra.y);

                ctx.strokeStyle = `rgba(65, 130, 190, ${opacidade * 0.45})`;
                ctx.lineWidth = 1;
                ctx.stroke();
            }
        }

        // Conectar pontos próximos ao cursor (GRAB)
        if (mouse.ativo) {
            const dx = p.x - mouse.x;
            const dy = p.y - mouse.y;

            const distancia = Math.sqrt(dx * dx + dy * dy);

            if (distancia < configuracoes.distanciaMouse) {
                const opacidade =
                    1 - distancia / configuracoes.distanciaMouse;

                ctx.beginPath();
                ctx.moveTo(p.x, p.y);
                ctx.lineTo(mouse.x, mouse.y);

                ctx.strokeStyle =
                    `rgba(100, 180, 255, ${opacidade * 0.7})`;

                ctx.lineWidth = 1;
                ctx.stroke();
            }
        }
    });

    requestAnimationFrame(animar);
}

// Iniciar animação
animar();
