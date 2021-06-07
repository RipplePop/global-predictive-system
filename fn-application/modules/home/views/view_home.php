<div class="container auth theme-one">
  <div class="row d-flex align-items-center flex-column pt-5 pb-5">
    <h2 class="display-3 text-center"><strong>Global Predictive System</strong></h2>
    <p>A Stability and Mobilization Platform</p>
    <div class="col-lg-12 col-md-12 col-sm-12 auto-form-wrapper">
  
      <div class="card shadow-0 rounded border mt-4">
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

      <div class="card shadow-0 rounded border mt-5">
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group col-lg-3 col-md-12 col-sm-12 pl-0 pr-0">
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
                  <th>Party Authority Discipline</th>
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
      
      <div class="card shadow-0 rounded border mt-5">
        <div class="card-body">
          <h4>Wisdom's Story line: As a means to managing results</h4>
          <p>
            <ol>
              <li>Display of Authority (Power and Permission)</li>
              <li>1st person  of Authority seated vulnerable  and naked on relief seat</li>
              <li>Servant comes in</li>
              <li>1st person of Authority shouted for servant to get out</li>
              <li>Poor servant leaves, and comes back with a senior person of more senior Authority. (This second person of Authority has more knowledge and influence)</li>
              <li>The second (2nd) person of Authority did not like the way the poor servant was treated and made this known to the previous person of Authority</li>
            </ol>
          </p>
          <h4>Central to the Story</h4>
          <p>Variables of inclusion:</p>
          <p>
            <ol>
            <li>Following</li>
            <li>Leadership and leadership banner</li>
            <li>Political parties and members</li>
            <li>Relief</li>
            <li>Laws</li>
            <li>Beliefs</li>
            <li>Disparate elements uniting around a common theme</li>
            </ol> 
          </p>
          <p>The laws are important. However, the elements or variables focus more on parties and party leadership(s) as primary affects of law based on functional tradability of power. These variables can be used independently depending on purpose.</p>
        </div>      
      </div>

      <div class="card shadow-0 rounded border mt-5">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 pb-4">
              <canvas id="barChart"></canvas>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
              <canvas id="pieChart"></canvas>
            </div>
          </div>
        </div>
      </div>
      
      <div class="card shadow-0 rounded border mt-5">
        <div class="card-body">
          <h4>Leader Means Factor</h4>
          <p>Real/perceived individual leadership strength is based on individual wealth. This is significant with respect to overall party leadership coercion.If elements a) to e) remain unchanged, party leadership coercion may have a disproportionate (infinite) impact on stability in times of national emergency.</p>
          <h4>Legend</h4>
          <p>These considerations apply to ideologically driven political parties.Non-principled parties are by definition unstable. In less developed countries, "Leader Means Factor" is often determined by the "Party" in power. The dictator or Leader basically appropriates or personally assumes ownership of the State treasury. Yet in this latter context, there are degrees.</p>
          <p>This political model system functions better with two political parties or parties merged into two main opposing camps (majority/minority party).Authority deals with power(means) and permission</p>
          <p class="text-danger">Disclaimer: The web-app is geared toward peaceful use.</p>
          <p>(Integrative aspects are important when global alliances and State Amalgamation are considered).</p>
        </div>
      </div>

      <p class="mt-5 text-center">&copy; <?php echo date('Y'); ?> Global Predictive System</p>
    </div>
  </div>
</div>
