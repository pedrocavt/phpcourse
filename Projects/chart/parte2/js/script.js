var ctx = document.getElementById('myChart').getContext('2d');

var chart = new Chart(ctx, {
    type: 'bar',
    data:{
        labels: ['January', 'February', 'March'],
        datasets:[{
            label: 'My first dataset',
            backgroundColor: ['green', 'blue', 'yellow'],
            borderColor:'rgb(255,99,132)',
            data: [10, 40, 20]
        }]
    },

    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});