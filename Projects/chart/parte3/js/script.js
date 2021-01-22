$(document).ready(function (){
    $.ajax({
        type: "POST",
        url: "chart.php",
        dataType: "json",
        success: function(data){
            // for(var i in data){
            //     console.log(data[i]);
            // }
            var nomearray = [];
            var vendasarray = [];
            for(var i = 0; i < data.length; i++){

                nomearray.push(data[i].nome);
                vendasarray.push(data[i].vendas);

            }

            chartjs(nomearray, vendasarray);
        }
    });
})


function chartjs(nome, vendas){
    var ctx = document.getElementById('myChart').getContext('2d');

    var chart = new Chart(ctx, {
        type: 'line',
        data:{
            labels: nome,
            datasets:[{
                label: 'vendas',
                backgroundColor: ['green', 'blue', 'yellow'],
                borderColor:'rgb(255,99,132)',
                data: vendas
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
}