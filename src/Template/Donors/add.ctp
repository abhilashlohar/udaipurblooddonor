<br/><br/><br/><br/><br/>
<section class="mbr-section mbr-section--relative mbr-parallax-background" id="msg-box5-25" >
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(229, 52, 58);"></div>
    <div class="mbr-section__container mbr-section__container--isolated container">
        <div class="row">
            <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                <div class="mbr-box__magnet mbr-class-mbr-box__magnet--center-left col-sm-12 mbr-section__right">
                    <div class="mbr-section__container mbr-section__container--middle">
                        <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                            <h3 class="mbr-header__text">Registration for Donor</h3>
                            
                        </div>
                    </div>
					<?= $this->Form->create($donor) ?>
                    <div class="mbr-section__container mbr-section__container--middle">
                        <div class="mbr-article mbr-article--auto-align mbr-article--wysiwyg">
							<div class="row">
								<div class="col-md-6">
									<?php echo $this->Form->input('name',['class'=>'form-control','placeholder'=>'LOCATION']); ?>
								</div>
								<div class="col-md-6">
									<label>Gender</label>
									<div class="radio-list">
										<?php $options=['male'=>'MALE','female'=>'FEMALE'];
										echo $this->Form->input('gender',['options'=>$options,'class'=>'form-control','type'=>'radio','label'=>false]); ?>
									</div>
								</div>
							</div><br/>
							<div class="row">
								<div class="col-md-6">
									<?php echo $this->Form->input('age',['class'=>'form-control','placeholder'=>'AGE']); ?>
								</div>
								<div class="col-md-6">
									<?php echo $this->Form->input('weight',['class'=>'form-control','placeholder'=>'WEIGHT']); ?>
								</div>
							</div><br/>
							<div class="row">
								<div class="col-md-6">
									<?php echo $this->Form->input('email',['class'=>'form-control','placeholder'=>'EMAIL']); ?>
								</div>
								<div class="col-md-6">
									<?php echo $this->Form->input('mobile',['class'=>'form-control','placeholder'=>'MOBILE']); ?>
								</div>
							</div><br/>
							<div class="row">
								<div class="col-md-6">
									<?php echo $this->Form->input('landmark',['class'=>'form-control','placeholder'=>'LANDMARK']); ?>
								</div>
								<div class="col-md-6">
									
									<?php $options=['A+'=>'A+','A-'=>'A-','B+'=>'B+','B-'=>'B-','AB+'=>'AB+','AB-'=>'AB-','O+'=>'O+','O-'=>'O-'];
										echo $this->Form->input('blood_group',['options'=>$options,'class'=>'form-control']); ?>
								</div>
							</div><br/>
							<div class="row">
								<div class="col-md-6">
									<?php echo $this->Form->input('previous_blood_donation_date',['class'=>'form-control','placeholder'=>'PREVIOUS BLOOD DONATION DATE','type'=>'text']); ?>
								</div>
								<div class="col-md-6">
									<label>PREFERRED REMINDER SERVICE</label>
									<div class="radio-list">
										<?php $options=['email'=>'EMAIL','sms'=>'SMS'];
										echo $this->Form->input('preferred_remider',['options'=>$options,'class'=>'form-control','type'=>'radio','label'=>false,'multiple']); ?>
									</div>
								</div>
							</div><br/>
							<div class="mbr-buttons ">
							 <?= $this->Form->button(__('BECOME A DONOR'),['class'=>'mbr-buttons__btn btn btn-lg btn-warning']) ?>
							 </div>
						</div>
                    </div>
					<?= $this->Form->end() ?>
                </div>
                
            </div>
        </div>
    </div>
</section>
