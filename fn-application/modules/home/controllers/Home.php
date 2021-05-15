<?php if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

class Home extends MY_Controller 
{

  var $js;
  var $css;

  function __construct() {
    parent:: __construct();
    $this->js = [
      'fn-assets/vendors/raphael/raphael.min.js',
      'fn-assets/vendors/chart.js/Chart.min.js',
      'fn-assets/vendors/jquery-mapael/jquery.mapael.min.js',
      'fn-assets/vendors/jquery-mapael/world_countries.min.js',
      'fn-assets/js/shared/mapeal.js',
      'fn-assets/js/helpers/helper_chart.js'
    ];
  }

  public function index() {
    $countries = [];

    if ( $this->session->has_userdata( 'countries' ) ) {
      $countries = $this->session->userdata( 'countries' );
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
        $this->session->set_userdata( [ 'countries' => $countries] );
      }
    }

    $config['title'] = 'Global Predictive System';
    $config['view'] = 'view_home';
    $config['js'] = $this->js;
    $config['countries'] = $countries;

    $this->content->view( $config, false, false );
  }
} 
