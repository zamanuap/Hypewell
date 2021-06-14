function roas(){
var avgValue = parseInt(sessionStorage.getItem('avgValue'));
var cost = Math.round(avgValue * .7) ;
var noOfOrders = parseInt(sessionStorage.getItem('noOfOrders'));

var spendOnExistingCustomer = Math.round(sessionStorage.getItem('budget') * .6);

var spendArray = [];
var roas = [];
for(var i=0; i<9; i++){
	adSpendSlot = Math.round(spendOnExistingCustomer * .2 * ( i + 1 ));
	spendArray[i] = '$' + adSpendSlot;
	roas[i] = Math.round(((avgValue - cost) * noOfOrders ) / adSpendSlot );
}
	roas[i] = Math.round(((avgValue - cost) * noOfOrders ) / Math.round(spendOnExistingCustomer * 2) );


var ctx = document.getElementById('myChart1').getContext('2d');
var myChart1 = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [spendArray[0], spendArray[1], spendArray[2], spendArray[3], spendArray[4], spendArray[5], spendArray[6], spendArray[7], spendArray[8]],
        datasets: [{
            data: [roas[0], roas[1], roas[2], roas[3], roas[4], roas[5], roas[6], roas[7], roas[8], roas[9]],
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
					labelString: 'Revenue'
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
}