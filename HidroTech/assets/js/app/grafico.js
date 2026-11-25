
const horarios = dadosMedicoes.map(item => {
    return item.data_hora;
});

const percentuais = dadosMedicoes.map(item => {
    return item.percentual;
});

const grafico = document.getElementById('graficoMedicoes');

new Chart(grafico, {
    type: 'line',

    data: {
        labels: horarios,

        datasets: [{
            label: 'Nível de água (%)',
            data: percentuais,
            borderColor: '#275673',
            backgroundColor: 'rgba(39, 86, 115, 0.15)',
            fill: true,
            tension: 0.3
        }]
    },

    options: {
        responsive: true,
        maintainAspectRatio: false,

        scales: {
            y: {
                min: 0,
                max: 100
            }
        }
    }
});
