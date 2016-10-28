<br/><br/><br/><br/><br/>
<section class="mbr-section mbr-section--relative mbr-parallax-background" id="msg-box5-25" >
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(229, 52, 58);"></div>
    <div class="mbr-section__container mbr-section__container--isolated container">
        <div class="row">
            <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                <div class="mbr-box__magnet mbr-class-mbr-box__magnet--center-left col-sm-12 mbr-section__right">
                    <div class="mbr-section__container mbr-section__container--middle">
                        <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                            <h3 class="mbr-header__text">Donor's List</h3>
                            
                        </div>
                    </div>
                    <div class="mbr-section__container mbr-section__container--middle">
                        <div class="mbr-article mbr-article--auto-align mbr-article--wysiwyg">
						<div style="color:#d20e15;background-color:#FFF;">
						<table class="table table-bordered table-advance">
							<thead>
								<tr>
									<th scope="col"><?= $this->Paginator->sort('id') ?></th>
									<th scope="col"><?= $this->Paginator->sort('name') ?></th>
									<th scope="col"><?= $this->Paginator->sort('gender') ?></th>
									<th scope="col"><?= $this->Paginator->sort('age') ?></th>
									<th scope="col"><?= $this->Paginator->sort('weight') ?></th>
									<th scope="col"><?= $this->Paginator->sort('email') ?></th>
									<th scope="col"><?= $this->Paginator->sort('mobile') ?></th>
									<th scope="col"><?= $this->Paginator->sort('landmark') ?></th>
									<th scope="col"><?= $this->Paginator->sort('blood_group') ?></th>
									<th scope="col"><?= $this->Paginator->sort('previous_blood_donation_date') ?></th>
									<th scope="col"><?= $this->Paginator->sort('preferred_remider') ?></th>
									
								</tr>
							</thead>
							<tbody>
								<?php $i=0; foreach ($donors as $donor): $i++ ?>
								<tr>
									<td><?= h($i); ?></td>
									<td><?= h($donor->name) ?></td>
									<td><?= h($donor->gender) ?></td>
									<td><?= $this->Number->format($donor->age) ?></td>
									<td><?= $this->Number->format($donor->weight) ?></td>
									<td><?= h($donor->email) ?></td>
									<td><?= h($donor->mobile) ?></td>
									<td><?= h($donor->landmark) ?></td>
									<td><?= h($donor->blood_group) ?></td>
									<td><?= h($donor->previous_blood_donation_date) ?></td>
									<td><?= h($donor->preferred_remider) ?></td>
									
								</tr>
								<?php endforeach; ?>
							</tbody>
						  </table>
							<div class="paginator">
							<ul class="pagination">
								<?= $this->Paginator->prev('< ' . __('previous')) ?>
								<?= $this->Paginator->numbers() ?>
								<?= $this->Paginator->next(__('next') . ' >') ?>
							</ul>
							<p><?= $this->Paginator->counter() ?></p>
							</div>
						  </div>
						</div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>