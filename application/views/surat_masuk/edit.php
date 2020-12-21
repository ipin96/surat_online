<?php 
    $id_surat       = isset($find_data->id_surat) ? $find_data->id_surat : '';
    $tgl_surat      = isset($find_data->id_surat) ? $find_data->tgl_surat : '';
    $tgl_diterima   = isset($find_data->id_surat) ? $find_data->tgl_diterima : '';
    $perihal        = isset($find_data->id_surat) ? $find_data->perihal : '';
    $sifat          = isset($find_data->id_surat) ? $find_data->sifat : '';
?>
<div class="card">
    <div class="card-body">
    	<form method="post" action="<?= site_url('surat_masuk/update/').$id_surat ?>" enctype="multipart/form-data">
    		<div class="form-group">
    			<label>Tanggal Surat</label>
    			<input type="date" name="tgl_surat" class="form-control <?= form_error('tgl_surat') ? 'is-invalid' : '' ?>" value="<?= $tgl_surat ? $tgl_surat : set_value('tgl_surat') ?>">
    			<div class="invalid-feedback">
					<?= form_error('tgl_surat') ?>
				</div>
    		</div>
    		<div class="form-group">
    			<label>Tanggal Diterima</label>
    			<input type="date" name="tgl_diterima" class="form-control <?= form_error('tgl_diterima') ? 'is-invalid' : '' ?>" value="<?= $tgl_diterima ? $tgl_diterima : set_value('tgl_diterima') ?>">
    			<div class="invalid-feedback">
					<?= form_error('tgl_diterima') ?>
				</div>
    		</div>
    		<div class="form-group">
    			<label>Perihal</label>
    			<input type="text" name="perihal" class="form-control <?= form_error('perihal') ? 'is-invalid' : '' ?>" value="<?= $perihal ? $perihal : set_value('perihal') ?>" placeholder="Perihal surat">
    			<div class="invalid-feedback">
					<?= form_error('perihal') ?>
				</div>
    		</div>
    		<div class="form-group">
    			<label>Sifat</label>
    			<select name="sifat" class="form-control">
    				<option selected="" disabled="">-- Pilih Sifat Surat --</option>
    				<option <?= isset($id_surat) && $sifat == 'BIASA' ? 'selected' : '' ?> value="BIASA">BIASA</option>
    				<option <?= isset($id_surat) && $sifat == 'RAHASIA' ? 'selected' : '' ?> value="RAHASIA">RAHASIA</option>
    				<option <?= isset($id_surat) && $sifat == 'SANGAT RAHASIA' ? 'selected' : '' ?> value="SANGAT RAHASIA">SANGAT RAHASIA</option>
    				<option <?= isset($id_surat) && $sifat == 'SEGERA' ? 'selected' : '' ?> value="SEGERA">SEGERA</option>
    			</select>
    		</div>
    		<input type="hidden" name="date_entry" value="<?= date('Y-m-d H:i:s') ?>">
    		<div class="form-group">
    			<button type="submit" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Ubah data"><i class="fa fa-save"> </i> Ubah</button>
    			<a href="<?= site_url('surat_masuk') ?>" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Kembali"><i class="fa fa-arrow-left"> </i> Kembali</a>
    		</div>
    	</form>
    </div>
</div>