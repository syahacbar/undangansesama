<div class="pull-right">
	<a href="<?php echo site_url('pesertum/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Nopeserta</th>
		<th>Namapeserta</th>
		<th>Prodi</th>
		<th>Jenjang</th>
		<th>Fakultas</th>
		<th>Suku</th>
		<th>Asalslta</th>
		<th>Actions</th>
    </tr>
	<?php foreach($peserta as $p){ ?>
    <tr>
		<td><?php echo $p['nopeserta']; ?></td>
		<td><?php echo $p['namapeserta']; ?></td>
		<td><?php echo $p['prodi']; ?></td>
		<td><?php echo $p['jenjang']; ?></td>
		<td><?php echo $p['fakultas']; ?></td>
		<td><?php echo $p['suku']; ?></td>
		<td><?php echo $p['asalslta']; ?></td>
		<td>
            <a href="<?php echo site_url('pesertum/edit/'.$p['nopeserta']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('pesertum/remove/'.$p['nopeserta']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
