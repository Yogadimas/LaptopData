<div class="content-wrapper pt-3">
    <section class="content">
        <h4>DETAIL <span class="text-uppercase"><?= $detail->title; ?></span></h4>
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>Title</th>
                    <td><?= $detail->title ?></td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td><?= $detail->price ?></td>
                </tr>
                <tr>
                    <th>CPU</th>
                    <td><?= $detail->cpu ?></td>
                </tr>
                <tr>
                    <th>RAM</th>
                    <td><?= $detail->ram ?></td>
                </tr>
                <tr>
                    <th>STORAGE</th>
                    <td><?= $detail->storage ?></td>
                </tr>
                <tr>
                    <th>GRAPHIC</th>
                    <td><?= $detail->grafis ?></td>
                </tr>
                <tr>
                    <th>DISPLAY</th>
                    <td><?= $detail->display ?></td>
                </tr>
                <tr>
                    <th>OS</th>
                    <td><?= $detail->os ?></td>
                </tr>
                <tr>
                    <th>PICTURE</th>
                    <td><img src="<?= base_url('assets/img/asus/') . $detail->picture; ?>" alt="<?= $detail->picture; ?>" width="100"></td>
                </tr>
            </table>
            <a href="<?= base_url('Asus/index'); ?>">
                <button class="btn btn-info mb-2">
                    <i class="fa-solid fa-arrow-left"></i>&nbsp;&nbsp;Back
                </button>
            </a>
        </div>
    </section>
</div>