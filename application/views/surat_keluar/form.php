<div class="card">
    <div class="card-body">
    	<form method="post" action="<?= site_url('surat_keluar/add') ?>" enctype="multipart/form-data">
    		<div class="form-group">
    			<label>Tanggal Surat</label>
    			<input type="date" name="tgl_surat" class="form-control <?= form_error('tgl_surat') ? 'is-invalid' : '' ?>" value="<?= set_value('tgl_surat') ?>">
    			<div class="invalid-feedback">
					<?= form_error('tgl_surat') ?>
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
    			<select name="sifat" id="sifat" class="form-control <?= form_error('sifat') ? 'is-invalid' : '' ?>">
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
            <div id="content"></div>
    		<div class="form-group">
    			<button type="submit" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Simpan data"><i class="fa fa-save"> </i> Simpan</button>
    			<button type="reset" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Kosongkan form"><i class="fa fa-refresh"> </i> Batal input</button>
    		</div>
    	</form>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sifat').on('change', function () {
            var sifat = $('#sifat').val();
            
            $.ajax({
                url     : '<?= site_url('surat_keluar/ajaxDetail/') ?>' + sifat,
                type    : 'POST',
                success : function (ajaxData) {
                    $('#content').html(ajaxData);
                }
            })
        }); 
    });
</script>