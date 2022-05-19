<?php echo form_open('pesertum/edit/'.$pesertum['nopeserta'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="namapeserta" class="col-md-4 control-label">Namapeserta</label>
		<div class="col-md-8">
			<input type="text" name="namapeserta" value="<?php echo ($this->input->post('namapeserta') ? $this->input->post('namapeserta') : $pesertum['namapeserta']); ?>" class="form-control" id="namapeserta" />
		</div>
	</div>
	<div class="form-group">
		<label for="prodi" class="col-md-4 control-label">Prodi</label>
		<div class="col-md-8">
			<input type="text" name="prodi" value="<?php echo ($this->input->post('prodi') ? $this->input->post('prodi') : $pesertum['prodi']); ?>" class="form-control" id="prodi" />
		</div>
	</div>
	<div class="form-group">
		<label for="jenjang" class="col-md-4 control-label">Jenjang</label>
		<div class="col-md-8">
			<input type="text" name="jenjang" value="<?php echo ($this->input->post('jenjang') ? $this->input->post('jenjang') : $pesertum['jenjang']); ?>" class="form-control" id="jenjang" />
		</div>
	</div>
	<div class="form-group">
		<label for="fakultas" class="col-md-4 control-label">Fakultas</label>
		<div class="col-md-8">
			<input type="text" name="fakultas" value="<?php echo ($this->input->post('fakultas') ? $this->input->post('fakultas') : $pesertum['fakultas']); ?>" class="form-control" id="fakultas" />
		</div>
	</div>
	<div class="form-group">
		<label for="suku" class="col-md-4 control-label">Suku</label>
		<div class="col-md-8">
			<input type="text" name="suku" value="<?php echo ($this->input->post('suku') ? $this->input->post('suku') : $pesertum['suku']); ?>" class="form-control" id="suku" />
		</div>
	</div>
	<div class="form-group">
		<label for="asalslta" class="col-md-4 control-label">Asalslta</label>
		<div class="col-md-8">
			<input type="text" name="asalslta" value="<?php echo ($this->input->post('asalslta') ? $this->input->post('asalslta') : $pesertum['asalslta']); ?>" class="form-control" id="asalslta" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>