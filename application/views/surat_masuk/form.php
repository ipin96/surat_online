<div class="card">
    <div class="card-body">
    	<form method="post" action="<?= site_url('surat_masuk/add') ?>" enctype="multipart/form-data">
    		<div class="form-group">
    			<label>Tanggal Surat</label>
    			<input type="date" name="tgl_surat" class="form-control <?= form_error('tgl_surat') ? 'is-invalid' : '' ?>" value="<?= set_value('tgl_surat') ?>">
    			<div class="invalid-feedback">
					<?= form_error('tgl_surat') ?>
				</div>
    		</div>
    		<div class="form-group">
    			<label>Tanggal Diterima</label>
    			<input type="date" name="tgl_diterima" class="form-control <?= form_error('tgl_diterima') ? 'is-invalid' : '' ?>" value="<?= set_value('tgl_diterima') ?>">
    			<div class="invalid-feedback">
					<?= form_error('tgl_diterima') ?>
				</div>
    		</div>
    		<div class="form-group">
    			<label>Perihal</label>
    			<input type="text" name="perihal" class="form-control <?= form_error('perihal') ? 'is-invalid' : '' ?>" value="<?= set_value('perihal') ?>" placeholder="Perihal surat">
    			<div class="invalid-feedback">
					<?= form_error('perihal') ?>
				</div>
    		</div>
    		<div class="form-group">
    			<label>Sifat</label>
    			<select name="sifat" class="form-control <?= form_error('sifat') ? 'is-invalid' : '' ?>">
    				<option selected="" disabled="">-- Pilih Sifat Surat --</option>
    				<option <?= set_select('sifat', 'BIASA', false) ?> value="BIASA">BIASA</option>
    				<option <?= set_select('sifat', 'RAHASIA', false) ?> value="RAHASIA">RAHASIA</option>
    				<option <?= set_select('sifat', 'SANGAT RAHASIA', false) ?> value="SANGAT RAHASIA">SANGAT RAHASIA</option>
    				<option <?= set_select('sifat', 'SEGERA', false) ?> value="SEGERA">SEGERA</option>
    			</select>
                <div class="invalid-feedback">
                    <?= form_error('sifat') ?>
                </div>
    		</div>
    		<input type="hidden" name="date_entry" value="<?= date('Y-m-d H:i:s') ?>">
    		<div class="form-group">
    			<button type="submit" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Simpan data"><i class="fa fa-save"> </i> Simpan</button>
    			<button type="reset" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Kosongkan form"><i class="fa fa-refresh"> </i> Batal input</button>
    		</div>
    	</form>
    </div>
</div>