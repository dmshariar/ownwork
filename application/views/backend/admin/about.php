<?php
  $curl_enabled = function_exists('curl_version');
?>
  <!-- start page title -->
  <div class="row ">
    <div class="col-xl-12">
      <div class="card">
        <div class="card-body">
          <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> <?php echo get_phrase('about_this_application'); ?></h4>
        </div> <!-- end card body-->
      </div> <!-- end card -->
    </div><!-- end col-->
  </div>

  <div class="row justify-content-center">
    <div class="col-xl-8">
      <div class="card cta-box">
        <div class="card-body">
          <div class="media align-items-center">
            <div class="media-body">
              <div class="chart-widget-list">
                <h4 align='center'>Editor : DM. Shahriyer Bashar</h4>
                <h4 align='center'>ID : 181-35-2485</h4>
                <h4 align='center'>Email : shahriyer35-2485@diu.edu.bd</h4>
              </div>
            </div>
            <img class="ml-3" src="<?php echo base_url('assets/backend/images/report.svg'); ?>" width="120" alt="Generic placeholder image">
          </div>
        </div>
      </div>
    </div>
  </div>
