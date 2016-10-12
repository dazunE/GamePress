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

function goDashboard() {   
    window.location = document.getElementsByTagName('body')[0].attributes['data-homeurl'] + '/dashboard';
}

function openNav() {
    var w = window,
    d = document,
    e = d.documentElement,
    g = d.getElementsByTagName('body')[0],
    x = w.innerWidth || e.clientWidth || g.clientWidth,
    y = w.innerHeight|| e.clientHeight|| g.clientHeight;

    if(x < 768){
        document.getElementById("sidenav").style.display = "block";
        document.getElementById("sidenav").style.width = "100vw";
        // document.getElementsByClassName("dashboard-content")[0].style.left = "100px";
        // document.getElementsByClassName("dashboard-content")[0].style.width = "100vw";
        document.getElementsByClassName("dashboard-content")[0].style.display = "none";
    }
    
}

function closeNav() {
    var w = window,
    d = document,
    e = d.documentElement,
    g = d.getElementsByTagName('body')[0],
    x = w.innerWidth || e.clientWidth || g.clientWidth,
    y = w.innerHeight|| e.clientHeight|| g.clientHeight;

    if(x < 768){
        document.getElementById("sidenav").style.display = "none";
        document.getElementsByClassName("dashboard-content")[0].style.left = "0px";
        document.getElementsByClassName("dashboard-content")[0].style.display = "block";
        document.getElementsByClassName("dashboard-content")[0].style.width = "100vw";
    }
}

jQuery('aside').ready(function(){
    var w = window,
    d = document,
    e = d.documentElement,
    g = d.getElementsByTagName('body')[0],
    x = w.innerWidth || e.clientWidth || g.clientWidth,
    y = w.innerHeight|| e.clientHeight|| g.clientHeight;

    if(x < 768){
        document.getElementById("sidenav").style.display = "none";   
    }
});
