<!-- views/index/profile.php  -->
<?php
		$li_class = array();
		$li_class['first'] = '';
		$li_class['second'] = '';
		$li_class['third'] = '';
		$li_class['forth'] = '';
		switch ($tab) {
			case 1:
				$li_class['first'] = 'active';
				break;
			case 2:
				$li_class['second'] = 'active';
				break;
			case 3:
				$li_class['third'] = 'active';
				break;
			case 4:
				$li_class['forth'] = 'active';
				break;
					
			default:
				$li_class['first'] = 'active';
				break;
		}
?>
<div id="page-content-wrapper">
    <div class="container-fluid">
      <ul class="nav nav-tabs nav-tabs-responsive profile-tab" role="tablist">
        <li role="presentation" class="<?php echo $li_class['first']; ?>">
          <a href="#basicinfo" data-toggle="tab" aria-controls="basicinfo">
            <span class="text">Basic info</span>
          </a>
        </li>
        <li role="presentation" class="next <?php echo $li_class['second']; ?>">
          <a href="#host" role="tab" data-toggle="tab" aria-controls="host">
            <span class="text">About the host</span>
          </a>
        </li>
        <li role="presentation" class="<?php echo $li_class['third']; ?>">
          <a href="#preferences" role="tab" data-toggle="tab" aria-controls="preferences">
            <span class="text">Preferences</span>
          </a>
        </li>
        <li role="presentation" class="<?php echo $li_class['forth']; ?>">
          <a href="#document" role="tab" data-toggle="tab" aria-controls="document">
            <span class="text">Document</span>
          </a>
        </li>
      </ul>
      <div class="tab-content profile-tab-content">
        <div role="tabpanel" class="tab-pane <?php echo $li_class['first']; ?>" id="basicinfo">
          <div class="row">
          	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          		<img src="<?php echo base_url('assets/img/family.png'); ?>" class="img-responsive">
          	</div>
          	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          		<div class="row">
          			<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10"><h1><b>Family of <?php echo $parents[0]['lastname']; ?></b></h1></div>
          			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <a href="<?php echo base_url('index.php/index/edit_profile/1'); ?>">
                <img src="<?php echo base_url('assets/img/pen.png'); ?>" class='img-pen'></a></div>
          		</div>          		
          		<div class="row profile-row">
          			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	          			<div class="row">
	          				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="<?php echo base_url('assets/img/dad.png'); ?>" class="img-responsive"></div>
	          				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                    <h4><?php echo $parents[0]['firstname'].' '.$parents[0]['lastname'] ?></h4></div>	
	          			</div>
	          		</div>
	          		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	          			<div class="row">
	          				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="<?php echo base_url('assets/img/mom.png'); ?>" class="img-responsive"></div>
	          				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                    <h4><?php echo $parents[1]['firstname'].' '.$parents[1]['lastname'] ?></h4></div>	
	          			</div>
	          		</div>
          		</div>
          		<div class="row profile-row">
             <?php  
              foreach ($kids as $key => $value) { ?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <img src="<?php echo base_url('assets/img/kid-'.$value['gender'].'.png'); ?>" class="img-responsive"></div>
                    <div class="col-xs-9 col-sm-9 col-md-8 col-lg-9"><h4 class="kid-name"><?php echo $value['name']; ?></h4></div>  
                  </div>
                </div>
             <?php 
              }
             ?>          			
          		</div>
          		<div class="row profile-row">
          			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	          			<div class="row">
	          				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="<?php echo base_url('assets/img/location.png'); ?>" class="img-responsive"></div>
	          				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"><h4 class="kid-name"><?php echo $family['place']; ?></h4></div>	
	          			</div>
	          		</div>
	          		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	          			<div class="row">
	          				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><img src="<?php echo base_url('assets/img/cat.png'); ?>" class="img-responsive"></div>
	          				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"><h4 class="kid-name"><?php echo $family['pets']; ?></h4></div>	
	          			</div>
	          		</div>
          		</div>
          	</div>
          	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          		<div class="row">
          			<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                <h2><b><i>Hi, we are family of <?php echo $parents[0]['lastname']; ?></i></b></h2></div>
          			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <a href="<?php echo base_url('index.php/index/edit_profile/1'); ?>">
                <img src="<?php echo base_url('assets/img/pen.png'); ?>" class='img-pen'></a></div>
          		</div>          		
          		<p class="profile-description"><?php echo $family['overview']; ?></p>
          	</div>         	
          </div>
          <div class="row">
          	<div class="col-lg-4 col-lg-offset-4">
          		<input type="submit" name="" class="btn next-button" value="ABOUT THE HOST">
          	</div>          		
          </div>
        </div>

        <div role="tabpanel" class="tab-pane <?php echo $li_class['second']; ?>" id="host">
          <div class="row">
  			<div class="col-xs-10 col-sm-10 col-md-8 col-lg-8"><h1><b>Family of <?php echo $parents[0]['lastname']; ?></b></h1></div>
  			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <a href="<?php echo base_url('index.php/index/edit_profile/2'); ?>">
        <img src="<?php echo base_url('assets/img/pen.png'); ?>" class='img-pen'></a></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Job description father</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $parents[0]['job_description']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Company name father</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $parents[0]['company_name']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Location job father</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $parents[0]['location_job']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Father works on the following days</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $parents[0]['work_days']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Father travels for work</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $parents[0]['travel_work']; ?></div>
  		  </div>  		  
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Sports and interests father</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $parents[0]['sport_interest']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Character/traits father (?)</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $parents[0]['characteristics']; ?></div>
  		  </div>  		  
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Job description mother</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $parents[1]['job_description']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Company name mother</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $parents[1]['company_name']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Location job mother</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $parents[1]['location_job']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Mother works on the following days</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $parents[1]['work_days']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Mother travels for work</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $parents[1]['travel_work']; ?></div>  		  	
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Sports and interests mother</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $parents[1]['sport_interest']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Character/traits mother (?)</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $parents[1]['characteristics']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Number of kids</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['number_kids']; ?></div>
  		  </div>
      <?php foreach ($kids as $key => $kid) {
      ?>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Name child <?php echo ($key + 1); ?></div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $kid['name']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Gender child <?php echo ($key + 1); ?></div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $kid['gender']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Birth date child <?php echo ($key + 1); ?></div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $kid['birthday']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Age child <?php echo ($key + 1); ?></div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $kid['age']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">School/daycare child <?php echo ($key + 1); ?></div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $kid['school']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Monday</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $kid['monday']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Tuesday</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $kid['tuesday']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Wednesday</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $kid['wednesday']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Thursday</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $kid['thursday']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Friday</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $kid['friday']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">How does the kid go to school?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $kid['commute']; ?></div>
  		  </div>
        <?php } ?>
  		  <!-- <div class="row">          	
          		<input type="submit" name="" class="btn next-button" value="Add a child">          		
          </div> -->
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">House</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['living_situation']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Description of your home and surroundings</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting.</div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Hoeveel slaapkamers telt het huis?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['number_bedrooms']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Hoeveel badkamers telt het huis?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['number_bathrooms']; ?></div>
  		  </div> 
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Religion</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['religion']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Practising</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['practising']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Pets</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['pets']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">How many hours do you have a housekeeper?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['household_help']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Does anyone smoke in the house?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['cooking']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Who cooks most of the time?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['cook']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Do you dinner together?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['eating']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Are there any family members with an allergy, chronic illness or a physical/mental handicap?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['ilness']; ?></div>
  		  </div>
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">If yes, does this have an effect on the au-pair duties?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['illness_influence']; ?></div>
  		  </div> 
		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Main reason for welcoming an au-pair?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['reason']; ?></div>
  		  </div>
  		  <div class="row">          	
          		<input type="submit" name="" class="btn next-button" value="PREFERENCES">          		
          </div>
        </div>

        <div role="tabpanel" class="tab-pane <?php echo $li_class['third']; ?>" id="preferences">
          <div class="row">
  			<div class="col-xs-10 col-sm-10 col-md-8 col-lg-8"><h1><b><i>Family of <?php echo $parents[0]['lastname']; ?></i></b></h1></div>
  			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <a href="<?php echo base_url('index.php/index/edit_profile/3'); ?>">
        <img src="<?php echo base_url('assets/img/pen.png'); ?>" class='img-pen'></a></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Au-pair needs to be available from</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['aupair_from']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Until</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['aupair_until']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Which culture/country do you have affinity with?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['culture_country']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Whch characteristics do you find most important?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['aupair_characteristics']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Which skills do you find most important?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['aupair_skills']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Would you accept a vegetarian au-pair or other diet?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['aupair_diet']; ?></div>
  		  </div> 
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Do you accept a smoker?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['aupair_smoker']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Does the au-pair need to have a driverslicense?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['aupair_drivers_license']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Did you have an au-pair before?</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['aupair_experience']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Possible tasks regarding the kids:</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['aupair_responsibilities']; ?></div>
  		  </div>
  		  <div class="row">
  		  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Possible tasks regarding the household:</div>
  		  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php echo $family['aupair_household']; ?></div>
  		  </div>
        </div>
<!-- start document tab -->
        <div role="tabpanel" class="tab-pane <?php echo $li_class['forth']; ?>" id="document">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-7 col-lg-9">
            <h1 class="profile-caption"><b>Family of <?php echo $parents[0]['lastname']; ?></b></h1></div>
            <div class="col-xs-12 col-sm-6 col-md-5 col-lg-3">
              <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                  <a href="#" class="add-doc">&plus;</a>
                </div>
                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                  <div class="input-group doc-search">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                      <button class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>              
            </div>            
          </div>

          
          <div class="panel-group profile-document" id="accordion">
            <div class="profile-document-heading">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">DOCUMENT</div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">UPLOADED BY</div>    
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">UPLOAD DATE</div>  
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 last">APPROVAL DATE</div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading doc-approved">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">AGREEMENT HBN</div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">SYSTEM</div>    
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">12-01-2017</div>  
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">12-01-2017</div>                    
                  </a>          
              </div>
              <div id="collapse1" class="panel-collapse collapse">
                <div class="panel-body">
                  <a href="#" class="btn next-button approved-button">APPEOVED</a>
                  <a href="#" class="btn next-button">DOWNLOAD</a>
                  <a href="#" class="btn next-button">NEW VERSION</a>
                  <a href="#" class="btn next-button delete-button">DELETE</a>
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">PASSPORT</div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">MARIA GONZALEZ</div>    
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">26-12-2016</div>  
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">06-01-2017</div>
                  </a>          
              </div>
              <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat.</div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading doc-review">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">VISA PROCEDURE DOC</div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">MARIA GONZALEZ</div>    
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">12-12-2016</div>  
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">-</div>
                  </a> 
              </div>
              <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body">
                  <a href="#" class="btn next-button review-button">REVIEW</a>
                  <a href="#" class="btn next-button">DOWNLOAD</a>
                  <a href="#" class="btn next-button">NEW VERSION</a>
                  <a href="#" class="btn next-button delete-button">DELETE</a>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">LOREM IPSUM DOCUMENT</div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">MARIA GONZALEZ</div>    
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">17-11-2016</div>  
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">12-01-2017</div>
                  </a>          
              </div>
              <div id="collapse4" class="panel-collapse collapse">
                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat.</div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">LOREM IPSUM DOCUMENT</div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">HBN</div>    
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">12-11-2016</div>  
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">12-11-2016</div>
                  </a>          
              </div>
              <div id="collapse5" class="panel-collapse collapse">
                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat.</div>
              </div>
            </div>

          </div>
        </div>  
        <!--end document tab  -->
    </div>
  </div>
</div>
