<div class="card">
    <div class="card-body">
        <a href="<?= site_url('surat_masuk/form') ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Tambah data"><i class="fa fa-plus" ></i> Tambah data</a><br><br>
        <table class='table table-striped' id="table1">
        	<thead>
        		<tr>
        			<th>No</th>
        			<th width="200">Tanggal Surat</th>
                    <th width="200">Tanggal Diterima</th>
                    <th>Perihal</th>
                    <th>Sifat</th>
                    <th>Tanggal Entri</th>
                    <th width="150" class="text-center">Aksi</th>
        		</tr>
        	</thead>
        	<tbody>
                <?php $no = 1; ?>
                <?php foreach($surat_masuk as $row) : ?>
                    <?php 
                        $tanggal_entri  = substr($row->date_entry, 0, 10);
                        $waktu_entri    = substr($row->date_entry, 11, 8);
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= tanggal_indo($row->tgl_surat) ?></td>
                        <td><?= tanggal_indo($row->tgl_diterima) ?></td>
                        <td><?= $row->perihal ?></td>
                        <td><?= $row->sifat ?></td>
                        <td><?= tanggal_indo($tanggal_entri).' - '.$waktu_entri ?></td>
                        <td class="text-center">
                            <a href="<?= site_url('surat_masuk/find/').$row->id_surat ?>" class="btn btn-success icon" data-toggle="tooltip" data-placement="top" title="Edit data"><i class="fa fa-edit"></i></a>
                            <a onclick="return confirm('Apakah data akan dihapus?')" href="<?= site_url('surat_masuk/delete/').$row->id_surat ?>" class="btn btn-danger icon" data-toggle="tooltip" data-placement="top" title="Hapus data"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>   
            </tbody>
        </table>
    </div>
</div>
