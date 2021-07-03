<div class="container">
  <div class="row pt-5 pb-5">
    <div class="col-12 text-center">
      <h2 class="display-3 text-center"><strong>Global Predictive System</strong></h2>
      <p class="text-center">A Stability and Mobilization Platform</p>
      <input type="hidden" id="country_code" value="<?php echo $code; ?>">
    </div>
    
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="card shadow-0 rounded-0 border mt-4">
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
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="card shadow-0 rounded-0 border mt-4">
        <div class="card-header">
          Economics
        </div>
        <div class="card-body">
          <canvas id="economics_chart"></canvas>
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="card shadow-0 rounded-0 border mt-4">
        <div class="card-header">
          Population
        </div>
        <div class="card-body">
          <canvas id="population_chart"></canvas>
        </div>
      </div>
    </div>

    <?php if ( $media ): ?>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card shadow-0 rounded-0 border mt-4">
          <div class="card-body">
            <h4>Party Visual Media Affiliate Density</h4>
            <p><?php echo ucfirst( $media . '.' ); ?></p>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php if ( $parties ): ?>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card shadow-0 rounded-0 border mt-4">
          <div class="card-body">
            <h4>Political parties and leaders</h4>
            <p><?php echo ucfirst( $parties . '.' ); ?></p>
          </div>
        </div>
      </div>
    <?php endif; ?>
       
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="card shadow-0 rounded-0 border mt-4">
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
