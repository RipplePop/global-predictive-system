$(function () {
  /* ChartJS */

  'use strict';
  var ChartColor = ["#2057B7", "#848484", "#B4B4B4", "#707070", "#E1E1E1", "#0F0F0F", "#8E8E8E", "#474747"];
  var chartFontcolor = '#6c757d';
  var chartGridLineColor = 'rgba(0,0,0,0.08)';
  var code = $('#country_code').val();
  var base_url = $('#base_url').val();

  if ($("#economics_chart").length) {
    var url = base_url + 'country/gdp/' + code;
    $.get(url)
    .done(function(r){
      var max = searchMax(r.gdp.values);
      initChart($("#economics_chart"), r.gdp.dates, r.gdp.values, max, 'GDP');
    });
  }

  if ($("#population_chart").length) {
    var url = base_url + 'country/population/' + code;
    $.get(url)
    .done(function(r){
      var max = searchMax(r.pop.values);
      initChart($("#population_chart"), r.pop.dates, r.pop.values, max, 'Population');
    });
  }

  if ($("#ethicity_chart").length) {
    initChart($("#ethicity_chart"));
  }

  if ($("#religion_chart").length) {
    initChart($("#religion_chart"));
  }

  if ($("#media_chart").length) {
    initChart($("#media_chart"));
  }

  if ($("#polarity_chart").length) {
    initChart($("#polarity_chart"));
  }

  if ($("#authority_chart").length) {
    initChart($("#authority_chart"));
  }

  function searchMax(data) {
    var max = 0;
    $.each(data, function(i, v) {
      if (v > max) {
        if (parseInt(v).toString().length == 6)
          max = (v + 10000);
        else if (parseInt(v).toString().length == 7)
          max = (v + 200000);
        else if (parseInt(v).toString().length == 8)
          max = (v + 3000000);
        else if (parseInt(v).toString().length == 9)
          max = (v + 40000000);
        else if (parseInt(v).toString().length == 10)
          max = (v + 500000000);
        else if (parseInt(v).toString().length == 11)
          max = (v + 6000000000);
        else if (parseInt(v).toString().length == 12)
          max = (v + 70000000000);
        else if (parseInt(v).toString().length == 13)
          max = (v + 800000000000);
        else if (parseInt(v).toString().length == 14)
          max = (v + 9000000000000);
        
        return false;
      } 
    });
    return max;
  }

  function initChart(obj, labels = [], data = [], max, title) {
    var barChartCanvas = obj.get(0).getContext("2d");
    var barChart = new Chart(barChartCanvas, {
      type: 'bar',
      data: {
        labels: labels,
        datasets: [{
          label: title,
          data: data ? data : "No data available",
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
            display: false,
            scaleLabel: {
              display: true,
              labelString: '',
              fontColor: chartFontcolor,
              fontSize: 12,
              lineHeight: 2
            },
            ticks: {
              fontColor: chartFontcolor,
              stepSize: 1000000000,
              min: 0,
              max: max,
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
            display: false
          }]
        },
        legend: {
          display: false
        }
      }
    });
  }
});