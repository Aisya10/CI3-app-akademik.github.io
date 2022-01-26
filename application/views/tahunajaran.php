<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <?php if ($this->session->flashdata('info')) : ?>
                <div class="alert alert-success">
                    <?= $this->session->flashdata('info'); ?>
                </div>
            <?php endif; ?>
            <h4 class="header-title">
                <!-- 
                    Didik Nur Hidayat
                    catatan: kalau hanya membuat tag gk perlu pakai bantuan helpernya Codeigniter
                    cukup pakai tag <a href=""></a> biasa hehe
                -->
                <a href="tambah_th" class="btn btn-danger mb-3 fa fa-database"> Add School Year Data</a>
            </h4>
            <div class="single-table">
                <div class="table-responsive">
                    <table class="table table-hover progress-table text-center">
                        <thead class="text-uppercase">
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">Tahun Pelajaran</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($th->num_rows() > 0) {
                                $no = 1;
                                //    foreach ($th->result_object() as $r)
                                // reault_object biasanya digunakan framework
                                // foreach ($th->result_array() as $r) <td><['tahun_pelajaran']
                                //    {
                                #data ada
                            ?>
                                <?php foreach ($th->result_object() as $r) : ?>
                                    <tr>
                                        <th scope="row"><?= $no ?></th>
                                        <td><?= $r->tahun_pelajaran ?></td>

                                        <td>
                                            <ul class="d-flex justify-content-center">
                                                <li class="mr-3"><a hrefclass="text-secondary"><i classfa-edit"></i></a></li>
                                                <li><a href="#" class="text-danonclick=" return confirm('Do You WanDelate this?')"><i class="ti-trasi"></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php
                                $no++;
                            } else {

                            ?>
                                <tr>
                                    <td colspan=" 3" align="center"> Data Kostd>
                                </tr>
                            <?php
                            }


                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</div>