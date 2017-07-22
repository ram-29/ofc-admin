$(document).ready(() => {
  $('[data-toggle="tooltip"]').tooltip();

  let $ageChart = $('#ageChart');
  new Chart($ageChart, {
    type: 'doughnut',
    data: {
      labels: ["Age below 30", "Age 30-50", "Age above 50"],
      datasets: [{
        data: [
          $('#a30').val(),
          $('#a31_50').val(),
          $('#a51').val()  
        ],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {}
  });

  let $partyChart = $('#partyChart');
  let $party = $(".party").map(function () {
    return $(this).html();
  }).get();

  let $members = $('.members').map(function () {
    return $(this).html();
  }).get();

  new Chart($partyChart, {
    type: 'bar',
    data: {
      labels: $party,
      datasets: [{
        label: '# of Person',
        data: $members,
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
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
})