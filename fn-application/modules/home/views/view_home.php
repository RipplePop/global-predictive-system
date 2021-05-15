<div class="container auth theme-one">
  <div class="row d-flex align-items-center flex-column pt-5 pb-5">
    <h2 class="display-3 text-center">Global Predictive System</h2>
    <p>A Stability and Mobilization Platform</p>
    <div class="col-lg-12 col-md-12 col-sm-12 auto-form-wrapper">

      <div class="card shadow-0 rounded border mt-4">
        <div class="card-body">
          <div class="mapeal-container">
            <div class="map"></div>
          </div>
        </div>
      </div>

      <div class="card shadow-0 rounded border mt-4">
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <select name="countries" id="countries" class="select2">
                <option value="">Select Country</option>
                <?php foreach( $countries as $key ): ?>
                  <option value="<?php echo $key; ?>"><?php echo $key; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </form>
          <div class="table-responsive">
            <table class="table shadow-0 ctm-table bg-white data-table text-center">
              <thead>
                <tr>
                  <th>Economics</th>
                  <th>Religion</th>
                  <th>Ethnicity</th>
                  <th>Population</th>
                  <th>Polarity</th>
                  <th>Party Visual Media Affiliate Density</th>
                  <th>Paryt Authority Discipline</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>2.3</td>
                  <td>5.9</td>
                  <td>4.2</td>
                  <td>9.2</td>
                  <td>7.3</td>
                  <td>3.9</td>
                  <td>5.2</td>
                </tr>
              </tbody>
              <tfoot class="">
                  <tr>
                    <td colspan="7" class="text-center"><strong>Output Measure of System Stability: </strong><strong class="text-success">40.21%</strong></td>
                  </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>

      <h2 class="display-4 mt-5 text-center">Chart Illustrations</h2>
      <div class="card shadow-0 rounded border mt-4">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <canvas id="barChart"></canvas>
            </div>
            <div class="col-lg-6">
              <canvas id="pieChart"></canvas>
            </div>
          </div>
        </div>
      </div>

      <p class="mt-4 text-center">&copy; <?php echo date('Y'); ?> Global Predictive System</p>
    </div>
  </div>
</div>
