<?php
$this->Html->addCrumb (__('Registration', true));
$this->Html->addCrumb ($payment['Registration']['Person']['full_name']);
$this->Html->addCrumb ($payment['Registration']['Event']['name']);
$this->Html->addCrumb (sprintf(__('%s Payment', true), __('Credit', true)));
?>

<div class="registrations form">
<h2><?php printf(__('%s Payment', true), __('Credit', true)); ?></h2>
<?php echo $this->Form->create('Payment', array('url' => Router::normalize($this->here)));?>

	<fieldset>
		<legend><?php __('Credit Details'); ?></legend>
	<?php
		echo $this->ZuluruForm->input('amount', array(
				'default' => $payment['Payment']['payment_amount'] - $payment['Payment']['refunded_amount'],
		));

		if (!in_array($payment['Registration']['payment'], Configure::read('registration_cancelled'))) {
			echo $this->ZuluruForm->input('mark_refunded', array(
					'label' => __('Mark this registration as refunded?', true),
					'type' => 'checkbox',
					'checked' => true,
			));
		} else {
			echo $this->ZuluruForm->hidden('mark_refunded', array('value' => 0));
		}

		echo $this->ZuluruForm->input('payment_notes', array(
				'type' => 'textbox',
				'cols' => 72,
				'default' => $payment['Payment']['notes'],
				'after' => $this->Html->para(null, __('These notes will be preserved with the original registration, and are only visible to admins.', true)),
		));

		echo $this->ZuluruForm->input('credit_notes', array(
				'type' => 'textbox',
				'cols' => 72,
				'default' => sprintf(__('Credit for registration for %s', true), $payment['Registration']['Event']['name']),
				'after' => $this->Html->para(null, __('These notes will be attached to the new credit record, and will be visible by the person in question.', true)),
		));
	?>
	</fieldset>

<?php echo $this->Form->end(__('Submit', true));?>
</div>
