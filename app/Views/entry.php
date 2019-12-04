<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<?php

helper('form');

echo form_open(site_url('entry'), array('id'=>'entryform','class'=>'form'));

echo form_label('Place', 'place');
echo form_input('place', $entry['place'], array('id'=>'place','class'=>'form-control'));

echo form_label('Country', 'country');
echo form_input('country', $entry['country'], array('id'=>'country','class'=>'form-control'));

echo form_label('Review', 'review');
echo form_input('review', $entry['review'], array('id'=>'review','class'=>'form-control'));

echo form_hidden('id', $entry['id']);

echo form_submit('submit', 'Submit', array('id'=>'submit_btn','class'=>'btn btn-success'));

echo form_close();

?>

<a href="<?php echo site_url(); ?>">Cancel</a>
