<div class="card">
    <div class="card-body">
        <a href="<?= site_url('surat_keluar/form') ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Tambah data"><i class="fa fa-plus" ></i> Tambah data</a><br><br>
        <table class='table table-striped' id="table1">
        	<thead>
        		<tr>
        			<th>No</th>
        			<th width="200">Tanggal Surat</th>
                    <th>Perihal</th>
                    <th>Sifat</th>
                    <th>Perihal Surat Masuk</th>
                    <th width="150" class="text-center">Aksi</th>
        		</tr>
        	</thead>
        	<tbody>
                <?php $no = 1; ?>
                <?php foreach($surat_keluar as $row) : ?>
                    <?php 
                        $perihal_surat_masuk = get_column('surat_masuk', ['id_surat' => $row->id_surat_id])->perihal;
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= tanggal_indo($row->tgl_surat) ?></td>
                        <td><?= $row->perihal ?></td>
                        <td><?= $row->sifat ?></td>
                        <td><?= $perihal_surat_masuk ?></td>
                        <td class="text-center">
                            <a href="<?= site_url('surat_keluar/find/').$row->id_surat ?>" class="btn btn-success icon" data-toggle="tooltip" data-placement="top" title="Edit data"><i class="fa fa-edit"></i></a>
                            <a onclick="return confirm('Apakah data akan dihapus?')" href="<?= site_url('surat_keluar/delete/').$row->id_surat ?>" class="btn btn-danger icon" data-toggle="tooltip" data-placement="top" title="Hapus data"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>   
            </tbody>
        </table>
    </div>
</div>
