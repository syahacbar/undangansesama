<div class="pull-right">
	<a href="<?php echo site_url('logdownload/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Idlog</th>
		<th>Nopeserta</th>
		<th>Datetime</th>
		<th>Actions</th>
    </tr>
	<?php foreach($logdownload as $l){ ?>
    <tr>
		<td><?php echo $l['idlog']; ?></td>
		<td><?php echo $l['nopeserta']; ?></td>
		<td><?php echo $l['datetime']; ?></td>
		<td>
            <a href="<?php echo site_url('logdownload/edit/'.$l['idlog']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('logdownload/remove/'.$l['idlog']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
