let donnees = [];
    fetch("./models/HomeGroup.php")
    .then(response => response.json())
    .then(data => {
      myChart(data);
      console.log(data)
    }).catch(err => console.log('hello',err))
function myChart(data){
  console.log(data['count'])
  const ctx = document.getElementById('myChart').getContext('2d');
  const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
    labels: ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-' ,'O+', 'O-'],
    datasets: [{
      label: 'of Votes',
      data: [data['N1'], data['N2'], data['N3'], data['N4'], data['N5'], data['N6'], data['N7'], data['N8']],
      backgroundColor: [
        'rgba(255, 33, 86,0.2)',
        'rgba(246,191,159,0.2)',
        'rgba(220, 233, 233, 0.2)',
        'rgba(233, 220, 220, 0.2)',
        'rgba(220, 140, 219, 0.2)',
        'rgba(196, 197, 176, 0.2)',
        'rgba(202, 130, 130, 0.2)',
        'rgba(224, 224, 65, 0.2)'
      ],
      borderColor: [
        'rgba(255, 33, 86, 1)',
        'rgba(246,191,159,1)',
        'rgba(220, 233, 233, 1)',
        'rgba(233, 220, 220, 1)',
        'rgba(220, 140, 219, 1)',
        'rgba(196, 197, 176, 1)',
        'rgba(202, 130, 130, 1)',
        'rgba(224, 224, 65, 1)'
      ],
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
  
}