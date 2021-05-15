<?php if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

class Home extends MY_Controller 
{

  var $js;
  var $css;

  function __construct() {
    parent:: __construct();
    $this->js = [
      'fn-assets/js/plugins/mousewheel.js',
      'fn-assets/vendors/raphael/raphael.min.js',
      'fn-assets/vendors/chart.js/Chart.min.js',
      'fn-assets/vendors/jquery-mapael/jquery.mapael.min.js',
      'fn-assets/vendors/jquery-mapael/world_countries.min.js',
      'fn-assets/js/helpers/helper_chart.js',
      'fn-assets/js/helpers/helper_mapdata.js'
    ];
  }

  /**
   * Homepage
   */
  public function index() {
    $countries = [];

    if ( isset( $_SESSION['countries'] ) ) {
      $countries = $_SESSION['countries'];
    } else {
      $datas = json_decode( file_get_contents( PUBLIC_API_URL_1 . 'country/all?format=json&page=1&per_page=300' )  );
      if ( isset( $datas[1] ) ) {
        foreach ( $datas[1] as $data) {
          foreach ( $data as $key => $val ) {
            if ( $key == 'name' ) {
              array_push( $countries, $val );
            }
          }
        }
        $_SESSION['countries'] = $countries;
      }
    }

    $config['title'] = 'Global Predictive System';
    $config['view'] = 'view_home';
    $config['js'] = $this->js;
    $config['countries'] = $countries;

    $this->content->view( $config, false, false );
  }

  /**
   * Get world population
   */
  public function population() {
    if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
      if ( isset( $_GET['year'] ) ) {
        $date = $this->input->get('year');
        $population[] = [];

        if ( isset( $_SESSION['year-'. $date] ) ) {
          $population = $_SESSION['year-'. $date];
        } else {
          $datas = json_decode( file_get_contents( PUBLIC_API_URL_1 . 'country/indicator/SP.POP.1564.TO?format=json&per_page=400&date='. $date ) );
          if ( isset( $datas[1] ) ) {
            foreach ( $datas[1] as $data) {
              $population[ $data->country->id ] = [
                'value' => $data->value,
                'href' => '#',
                'tooltip' => [
                  'content' => '<span style="font-weight:bold;">'. $data->country->value .'</span><br />Population : '. $data->value
                ]
              ];
            }
      
            foreach ( $population as $key => $val ) {
              if ( ! $val ) unset( $population[ $key ] );
              if ( ! $key ) unset( $population[ $key ] );

              foreach ( $val as $value => $child ) {
                if ( ! $child ) unset( $population[ $key ] );
              }
            } 
          }
          $_SESSION['year-'. $date] = $population;
        }
        response( [ 'areas' => $population ] );
      }
    }
  }

} 
