var ctx = document.getElementById('myChart2').getContext('2d');
var myChart2 = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['$1', '$2', '$3', '$4', '$5', '$6', '$7', '$8', '$9'],
        datasets: [{
            label: '',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.4)',
                
            ],
            
        }]
    },
		options: {
			scales: {
				yAxes: [{
				  scaleLabel: {
					display: true,
					fontSize: 16,
					fontColor: '#D0D0D0',
					labelString: 'New visitors'
				  },
				gridLines: {
					color: 'rgba(208, 208, 208, 0.3)',
				},
				ticks: {
					fontColor: '#D0D0D0',
				}
				}],
				xAxes: [{
				  scaleLabel: {
					display: true,
					fontSize: 16,
					fontColor: '#D0D0D0',
					labelString: 'Spend'
				  },
				gridLines: {
					color: 'rgba(208, 208, 208, 0.3)',
				},
				ticks: {
					fontColor: '#D0D0D0',
				}
				}],
				y: {
					beginAtZero: true
				}
				
			},
			legend: {
				display: false,
				
			}
        }
    
});