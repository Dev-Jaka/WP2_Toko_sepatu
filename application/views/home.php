<div class="header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="display-4">Store Shoe Skuyy</h1>
				<p class="lead">Kepuasaan pelanggan adalah kepuasaan kami , No 1 Service Customer</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<img src="<?= base_url() ?>assets\image\b.png" alt="">
			</div>
			<div class="col-md-4">
				<div class="transparent">
					<legend>Kasir Store</legend>
					<form action="<?= site_url() ?>Transaksi/proses" method="POST">
						<table>
							<tr>
								<td>
									<div class="input-group mb-2">
										<div class="input-group-prepend">
											<div class="input-group-text"><i class="bi bi-person-check-fill"> </i></div>
										</div>
										<input type="text" class="form-control" name="nama" placeholder="Masukan Nama ...">
									</div>
									<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
								</td>
							</tr>
							<tr>
								<td>
									<div class="input-group mb-2">
										<div class="input-group-prepend">
											<div class="input-group-text"><i class="bi bi-telephone-plus"> </i></div>
										</div>
										<input type="text" class="form-control" name="telephone" placeholder="Masukan Telephone ...">
									</div>

								</td>
							</tr>
							<tr>
								<td><select name="merk" class="custom-select my-1 mr-sm-2">
										<option>Choose</option>
										<?php foreach ($kirim as $m) : ?>
											<option value="<?php echo $m ?>"><?php echo $m ?></option>
										<?php endforeach; ?>
									</select>

								</td>
							</tr>
							<tr>
								<td><select name="ukuran" class="custom-select my-1 mr-sm-2">
										<?php for ($i = 32; $i <= 44; $i++) { ?>
											<option value="<?php echo $i ?>"><?php echo $i; ?> </option>
										<?php } ?>
									</select></td>
							</tr>
							<tr>
								<td><input type="submit" value="Proses" class="btn btn-outline-primary"></td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>

	</div>
</div>