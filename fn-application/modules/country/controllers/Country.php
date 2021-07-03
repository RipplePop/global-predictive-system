<?php if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

class Country extends MY_Controller 
{

  var $js;
  var $css;

  function __construct() {
    parent:: __construct();
    $this->load->driver( 'cache' );
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
   * Country
   */
  public function index() {

    $config['title'] = 'Global Predictive System';
    $config['view'] = 'view_country';
    $config['js'] = $this->js;
    $config['code'] = $this->uri->segment(2);

    $data = json_decode( file_get_contents( 'fn-uploads/json/media.json' ) );
    foreach ( $data as $key => $val ) {
      if ( $val->code == $config['code'] ) {
        $config['media'] = $val->media;
      }
    }

    $data = json_decode( file_get_contents( 'fn-uploads/json/parties.json' ) );
    foreach ( $data as $key => $val ) {
      if ( $val->code == $config['code'] ) {
        $config['parties'] = $val->parties;
      }
    }

    $this->content->view( $config, false, false );
  }

  /**
   * Country GDP
   */
  public function gdp() {
    if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
      $gdp['values'] = [];
      $gdp['dates']  = [];
      $year = intval(date('Y')) - 2;
      
      $country_code = $this->uri->segment(3);
      if ( $country_code ) {

        $name = 'GDP-' . $country_code;
        if ( $this->cache->file->get( $name ) ) {
          $gdp = $this->cache->file->get( $name );
        } else {
          $datas = json_decode( file_get_contents( PUBLIC_API_URL_1 . 'country/'. $country_code .'/indicator/ny.gdp.mktp.cd?date=1975:'. $year .'&format=json&per_page=400' )  );
          if ( isset( $datas[1] ) ) {
            foreach ( $datas[1] as $data) {
              array_push( $gdp['dates'], $data->date );
              array_push( $gdp['values'], $data->value ? $data->value : 0 );
            }
            $this->cache->file->save( $name, $gdp, 2592000 );
          }
        }
        response( [ 'gdp' => $gdp ] );
      }
    }
  }

  /**
   * Country Population
   */
  public function population() {
    if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
      $population['values'] = [];
      $population['dates']  = [];
      $year = intval(date('Y')) - 2;
      
      $country_code = $this->uri->segment(3);
      if ( $country_code ) {

        $name = 'POP-' . $country_code;
        if ( $this->cache->file->get( $name ) ) {
          $population = $this->cache->file->get( $name );
        } else {
          $datas = json_decode( file_get_contents( PUBLIC_API_URL_1 . 'country/'. $country_code .'/indicator/SP.POP.TOTL?date=1975:'. $year .'&format=json&per_page=400' )  );
          if ( isset( $datas[1] ) ) {
            foreach ( $datas[1] as $data) {
              array_push( $population['dates'], $data->date );
              array_push( $population['values'], $data->value ? $data->value : 0 );
            }
            $this->cache->file->save( $name, $population, 2592000 );
          }
        }
        response( [ 'pop' => $population ] );
      }
    }
  }

} 
