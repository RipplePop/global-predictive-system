$(function () {
  /* ChartJS */

  'use strict';
  var ChartColor = ["#1E1E1E", "#848484", "#B4B4B4", "#707070", "#E1E1E1", "#0F0F0F", "#8E8E8E", "#474747"];
  var chartFontcolor = '#6c757d';
  var chartGridLineColor = 'rgba(0,0,0,0.08)';

  if ($("#barChart").length) {
    var barChartCanvas = $("#barChart").get(0).getContext("2d");
    var barChart = new Chart(barChartCanvas, {
      type: 'bar',
      data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: 'Profit',
          data: [15, 28, 14, 22, 38, 30, 40, 70, 85, 50, 23, 20],
          backgroundColor: ChartColor[0],
          borderColor: ChartColor[0],
          borderWidth: 0
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: true,
        layout: {
          padding: {
            left: 0,
            right: 0,
            top: 0,
            bottom: 0
          }
        },
        scales: {
          xAxes: [{
            display: true,
            scaleLabel: {
              display: true,
              labelString: 'Sales by year',
              fontColor: chartFontcolor,
              fontSize: 12,
              lineHeight: 2
            },
            ticks: {
              fontColor: chartFontcolor,
              stepSize: 50,
              min: 0,
              max: 150,
              autoSkip: true,
              autoSkipPadding: 15,
              maxRotation: 0,
              maxTicksLimit: 10
            },
            gridLines: {
              display: false,
              drawBorder: false,
              color: chartGridLineColor,
              zeroLineColor: chartGridLineColor
            }
          }],
          yAxes: [{
            display: true,
            scaleLabel: {
              display: true,
              labelString: 'revenue by sales',
              fontColor: chartFontcolor,
              fontSize: 12,
              lineHeight: 2
            },
            ticks: {
              display: true,
              autoSkip: false,
              maxRotation: 0,
              fontColor: chartFontcolor,
              stepSize: 50,
              min: 0,
              max: 150
            },
            gridLines: {
              drawBorder: false,
              color: chartGridLineColor,
              zeroLineColor: chartGridLineColor
            }
          }]
        },
        legend: {
          display: false
        },
        legendCallback: function (chart) {
          var text = [];
          text.push('<div class="chartjs-legend"><ul>');
          for (var i = 0; i < chart.data.datasets.length; i++) {
            console.log(chart.data.datasets[i]); // see what's inside the obj.
            text.push('<li>');
            text.push('<span style="background-color:' + chart.data.datasets[i].backgroundColor + '">' + '</span>');
            text.push(chart.data.datasets[i].label);
            text.push('</li>');
          }
          text.push('</ul></div>');
          return text.join("");
        },
        elements: {
          point: {
            radius: 0
          }
        }
      }
    });
    //document.getElementById('bar-traffic-legend').innerHTML = barChart.generateLegend();
  }

  if ($("#pieChart").length) {
    var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: {
        datasets: [{
          data: [15, 10, 5, 20, 10, 25, 15],
          backgroundColor: [
            ChartColor[3],
            ChartColor[1],
            ChartColor[2],
            ChartColor[4],
            ChartColor[5],
            ChartColor[6],
            ChartColor[7]
          ],
          borderColor: [
            ChartColor[3],
            ChartColor[1],
            ChartColor[2],
            ChartColor[4],
            ChartColor[5],
            ChartColor[6],
            ChartColor[7]
          ],
        }],
        labels: [
          'Economics', 
          'Religion',	
          'Ethnicity',
          'Population',
          'Polarity',
          'Party Visual Media Affiliate Density',
          'Paryt Authority Discipline'
        ]
      },
      options: {
        responsive: true,
        animation: {
          animateScale: true,
          animateRotate: true
        },
        legend: {
          display: false
        },
        legendCallback: function (chart) {
          var text = [];
          text.push('<div class="chartjs-legend"><ul>');
          for (var i = 0; i < chart.data.datasets[0].data.length; i++) {
            text.push('<li><span style="background-color:' + chart.data.datasets[0].backgroundColor[i] + '">');
            text.push('</span>');
            if (chart.data.labels[i]) {
              text.push(chart.data.labels[i]);
            }
            text.push('</li>');
          }
          text.push('</div></ul>');
          return text.join("");
        }
      }
    });
    //document.getElementById('pie-chart-legend').innerHTML = pieChart.generateLegend();
  }
});