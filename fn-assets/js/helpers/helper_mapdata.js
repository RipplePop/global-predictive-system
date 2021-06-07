$(function () {

  // Get world population
  var baseUrl = $('#base_url').val();

  // Initialize select2
  $('.select2').select2({width: '100%'});

  // Query data
  $.get( baseUrl + 'home/population', { 'year': 2019 } )
  .done(function(data){
    map(data.areas);
  });

  // Filter by year
  $("#data-year").change(function () {
    $val = $(this).val();
    $.get( baseUrl + 'home/population', { 'year': $val } )
    .done(function(data){
      $(".world").trigger('update', [{
        mapOptions: data,
        animDuration: 100
      }]);
    });
  });

  // Mapael initialization
  function map(data) {
    $(".world").mapael({
      map: {
        name: "world_countries",
        defaultArea: {
          attrs: {
            fill: "#fff",
            stroke: "#0D0D0D",
            "stroke-width": 0.3
          }
        }
      },
      legend: {
        area: {
          cssClass: 'areaLegend',
          mode: 'horizontal',
          title: 'Countries population',
          marginBottom: 7,
          marginLeft: 10,
          marginLeftTitle: 20,
          slices: [{
              max: 5000000,
              attrs: {
                fill: "#A3A3A3"
              },
              label: "Less than 5M"
            },
            {
              min: 5000000,
              max: 10000000,
              attrs: {
                fill: "#787878"
              },
              label: "Between 5M and 10M"
            },
            {
              min: 10000000,
              max: 50000000,
              attrs: {
                fill: "#666666"
              },
              label: "Between 10M and 50M"
            },
            {
              min: 50000000,
              attrs: {
                fill: "#404040"
              },
              label: "More than 50M"
            }
          ]
        }
      },
      areas: data
    });
  }
});