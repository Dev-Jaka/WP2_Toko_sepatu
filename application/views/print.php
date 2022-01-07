<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Transaksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= site_url() ?>/verifikasi/cek" method="post">
                <div class="modal-body">
                    <div class="card-body">
                        <h5 class="card-title">Pesanan Transaksi , atas nama <?= $nama ?></h5>
                        <p class="card-text">
                        <table>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td><?= $nama ?></td>
                            <tr>
                                <td>No Hanphone</td>
                                <td>:</td>
                                <td><?= $telephone ?></td>
                            </tr>
                            <tr>
                                <td>Merk</td>
                                <td>:</td>
                                <td><?= $merk ?></td>
                            </tr>
                            <tr>
                                <td>Ukuran</td>
                                <td>:</td>
                                <td><?= $ukuran ?></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>:</td>
                                <td><?= $harga ?></td>
                            </tr>

                            </tr>
                        </table>
                        </p>

                    </div>
                    <div class="modal-footer">
                        <a href="<?= site_url() ?>/transaksi/proses" type="submit" class="btn btn-primary">Kembali</a>

                    </div>
            </form>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {

        $('#myModal').modal('show');


    });
</script>