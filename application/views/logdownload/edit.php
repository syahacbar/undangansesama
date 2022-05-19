<?php echo form_open('logdownload/edit/'.$logdownload['idlog'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="nopeserta" class="col-md-4 control-label">Nopeserta</label>
		<div class="col-md-8">
			<input type="text" name="nopeserta" value="<?php echo ($this->input->post('nopeserta') ? $this->input->post('nopeserta') : $logdownload['nopeserta']); ?>" class="form-control" id="nopeserta" />
		</div>
	</div>
	<div class="form-group">
		<label for="datetime" class="col-md-4 control-label">Datetime</label>
		<div class="col-md-8">
			<input type="text" name="datetime" value="<?php echo ($this->input->post('datetime') ? $this->input->post('datetime') : $logdownload['datetime']); ?>" class="form-control" id="datetime" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>