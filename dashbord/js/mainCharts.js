const chartOne = document.getElementById('myChart');


new Chart(chartOne, {
    type: 'bar',
    data: {
        labels: ['1', '2', '3', '4', '5', '6' ,'7' , '8' , '9' , '10' , '11' , '12'],
        datasets: [{
            label: '',
            data: [5, 10, 15, 20, 30, 40 ,50 ,60 ,70 , 80 , 90 , 100],
            borderWidth: 1,
            backgroundColor: ['#ccc' , '#0CA057']
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

const chartTow = document.getElementById('myChartt');
new Chart(chartTow, {
    type: 'line',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '',
            data: [12, 19, 3, 5, 2, 3],
            borderWidth: 1 ,
            backgroundColor: ['red' , 'green']
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

const chartThree = document.getElementById('doughnut');
new Chart(chartThree, {
    type: 'doughnut',
    data: {
        labels: ['تمت صيانتها', 'قيد الإنتظار', 'تم الطلب'],
        datasets: [{
            label: 'نسبة التذاكر',
            data: [25, 25, 25],
            borderWidth: 0 ,
            backgroundColor: ['#0CA057' , '#ccc' , '#5f8dca']

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
const chartFour = document.getElementById('pie');
new Chart(chartFour, {
    type: 'pie',
    data: {
        labels: ['تمت صيانتها', 'قيد الإنتظار', 'تم الطلب'],
        datasets: [{
            // label: 'نسبة التذاكر',
            data: [25, 25, 25],
            borderWidth: 0 ,
            backgroundColor: ['#0CA057' , '#ccc' , '#5f8dca']

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

