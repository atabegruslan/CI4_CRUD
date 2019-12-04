<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<table class="table">
	<thead>
		<tr>
			<th scope="col">Place</th>
			<th scope="col">Country</th>
			<th scope="col">Review</th>
			<th scope="col"></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($entries as $entry): ?>
			<tr>
				<td>
					<a href="<?php echo site_url('entry/' . $entry['id']); ?>">
						<?php echo $entry['place']; ?>
					</a>
				</td>
				<td><?php echo $entry['country']; ?></td>
				<td><?php echo $entry['review']; ?></td>
				<td>
					<form class="form-inline" action="<?php echo site_url('entry/' . $entry['id']) . '?_method=DELETE'; ?>" method="POST">
						<input type="hidden" name="id" value="<?php echo $entry['id']; ?>">
						<input type="hidden" name="_method" value="DELETE">
						<button type="submit" class="btn btn-error">Delete</button>
					</form>
				</td>
			</tr>
		<?php endforeach; ?>
		<form class="form-inline" action="<?php echo site_url('entry'); ?>" method="POST">
			<tr>
				<td><input type="text" class="form-control" id="place" name="place"></td>
				<td><input type="text" class="form-control" id="country" name="country"></td>
				<td><input type="text" class="form-control" id="review" name="review"></td>
				<td><button type="submit" class="btn btn-success" id="submit_btn">New</button></td>
			</tr>
		</form>
 	</tbody>
</table>
