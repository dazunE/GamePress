var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green"],
        datasets: [{
            label: '# of Votes',
            data: [1, 4, 3, 5],
            backgroundColor: [
                '#ff901f',
                '#fae813',
                '#08ca20',
                '#4575f6'
            ]
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

function goDashboard(){
    window.location = document.getElementsByTagName('body')[0].attributes['data-homeurl'] + '/dashboard';
}