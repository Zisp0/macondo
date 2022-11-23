const estrellasTotales = document.getElementById('estrellas-totales');
const estrellasUltimoPost = document.getElementById('estrellas-ultimo-post');
const comentariosPorMes = document.getElementById('comentarios-por-mes');
const estrellasPorMes = document.getElementById('estrellas-por-mes');


new Chart(estrellasUltimoPost ,{
    type: 'doughnut',
    data: {
        labels: [
          '1 Estrella',
          '2 Estrella',
          '3 Estrella',
          '4 Estrella',
          '5 Estrella'
        ],
        datasets: [{
          data: [300, 50, 100, 20, 100],
          backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(255, 205, 86)',
            'rgb(75, 192, 192)',
            'rgba(153, 102, 255)'
          ],
          hoverOffset: 4
        }]
    }
});

new Chart(estrellasTotales, {
    type: 'bar',
    data: {
        labels: ['1 Estrella', '2 Estrellas', '3 Estrellas', '4 Estrellas', '5 Estrellas'],
        datasets: [{
            label: 'Mis estrellas',
            data: [12, 19, 3, 5, 2],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

new Chart(comentariosPorMes, {
    type: 'line',
    data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        datasets: [{
            label: 'Comentarios',
            data: [65, 59, 80, 81, 56, 55, 40, 12, 12, 34, 12,100],
            fill: false,
            borderColor: 'rgb(75, 192, 192)',
            tension: 0.1
        }]
    }
});

new Chart(estrellasPorMes, {
    type: 'line',
    data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        datasets: [{
            label: 'Estrellas',
            data: [65, 59, 80, 81, 56, 55, 40, 12, 12, 34, 12,100],
            fill: false,
            borderColor: 'rgba(255, 159, 64)',
            tension: 0.1
        }]
    }
});