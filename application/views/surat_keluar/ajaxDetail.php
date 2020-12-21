<div class="form-group">
	<label>Perihal Surat Masuk</label>
	<select name="id_surat_id" class="form-control">
        <?php foreach($surat_masuk as $sm) : ?>
            <option value="<?= $sm->id_surat ?>"><?= $sm->perihal.' - '.$sm->sifat ?></option>
        <?php endforeach ?>    
	</select>
</div>