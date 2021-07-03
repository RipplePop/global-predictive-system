<div class="container auth theme-one">
  <div class="row pt-5 pb-5">
    <div class="col-12 text-center">
      <h2 class="display-3 text-center"><strong>Global Predictive System</strong></h2>
      <p class="text-center">A Stability and Mobilization Platform</p>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 auto-form-wrapper">
      <div class="card shadow-0 rounded-0 border mt-4">
        <div class="card-body">
          <div class="pb-4 m-0 col-lg-3 col-md-12 col-sm-12 pl-0 pr-0">
            <select name="data-year" id="data-year" class="select2">
              <option value="">Select Year</option>
              <?php $year = date('Y') - 1; for ( $i = 1; $i <= 50; $i++ ): ?>
                <option value="<?php echo ( $year - $i ); ?>"><?php echo ( $year - $i ); ?></option>
              <?php endfor; ?>
            </select>
          </div>
          <div class="world">
            <div class="map"></div>
            <div class="areaLegend pt-4 pb-3" style="overflow-x: auto;"></div>
          </div>
        </div>
      </div>

      <div class="card shadow-0 rounded-0 border mt-4">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table text-left">
              <thead>
                <tr>
                  <th>Countries</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $i = 0;
                  $data["on"] = $data["tw"] = [];

                  foreach ( $countries as $key => $val ) {
                    if ( $i < 122 )  array_push( $data["on"], $val );
                    if ( $i > 122 )  array_push( $data["tw"], $val );
                    $i++;
                  }
                ?>
                  
                <?php for ( $i = 0; $i < 122; $i++ ): ?>
                  <?php 
                    if ( count( $data['on'] ) > $i ) $on    = $data['on'][$i]->name; else $on = '';
                    if ( count( $data['on'] ) > $i ) $on_id = 'country/' . $data['on'][$i]->code; else $on_id = '#';

                    if ( count( $data['tw'] ) > $i ) $tw    = $data['tw'][$i]->name; else $tw = '';
                    if ( count( $data['tw'] ) > $i ) $tw_id = 'country/' . $data['tw'][$i]->code; else $tw_id = '#';
                  ?>
                  <tr>
                    <td><a href="<?php echo base_url() . $on_id; ?>" title="<?php echo $on; ?>"><?php echo $on; ?></a></td>
                    <td><a href="<?php echo base_url() . $tw_id; ?>" title="<?php echo $tw; ?>"><?php echo $tw; ?></a></td>
                  </tr>
                <?php endfor; ?>

              </tbody>
            </table>
          </div>
        </div>
        
      </div>

      <p class="mt-5 text-center">&copy; <?php echo date('Y'); ?> Global Predictive System</p>
    </div>
  </div>
</div>
