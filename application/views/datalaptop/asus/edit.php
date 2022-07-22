<div class="content-wrapper pl-2">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="m-0">Edit Laptop Data</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">

        <a href="<?= base_url('Asus/index'); ?>">
            <button class="btn btn-info mb-2 mr-2">
                <i class="fa-solid fa-arrow-left"></i>&nbsp;&nbsp;Back
            </button>
        </a>
        <form action="" method="post" enctype="multipart/form-data" autocomplete="off">

            <div class="form-group">
                <input type="hidden" name="id" class="form-control" value="<?= $laptops['id']; ?>">
            </div>
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="<?= $laptops['title']; ?>">
                <small class="form-text text-danger"><?= form_error('title'); ?></small>
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text" name="price" class="form-control" value="<?= $laptops['price']; ?>">
                <small class="form-text text-danger"><?= form_error('price'); ?></small>
            </div>
            <div class="form-group">
                <label>CPU</label>
                <input type="text" name="cpu" class="form-control" value="<?= $laptops['cpu']; ?>">
                <small class="form-text text-danger"><?= form_error('cpu'); ?></small>
            </div>
            <div class="form-group">
                <label>RAM</label>
                <input type="text" name="ram" class="form-control" value="<?= $laptops['ram']; ?>">
                <small class="form-text text-danger"><?= form_error('ram'); ?></small>
            </div>
            <div class="form-group">
                <label>Storage</label>
                <input type="text" name="storage" class="form-control" value="<?= $laptops['storage']; ?>">
                <small class="form-text text-danger"><?= form_error('storage'); ?></small>
            </div>
            <div class="form-group">
                <label>Graphic</label>
                <input type="text" name="grafis" class="form-control" value="<?= $laptops['grafis']; ?>">
                <small class="form-text text-danger"><?= form_error('grafis'); ?></small>
            </div>
            <div class="form-group">
                <label>Display</label>
                <textarea name="display" id="display" cols="30" rows="5" class="form-control" autocomplete="off"><?= $laptops['display']; ?></textarea>
                <small class="form-text text-danger"><?= form_error('display'); ?></small>
            </div>

            <div class="form-group">
                <label class="d-block">Operating System</label>
                <div class="form-check form-check-inline">
                    <input id="os1" class="form-check-input" type="radio" name="os" value="Windows 10 Home" <?= $laptops['os'] == 'Windows 10 Home' ? 'checked' :  ''; ?>>
                    <label class="form-check-label" for="os1">Windows 10 Home</label>
                </div>
                <div class="form-check form-check-inline">
                    <input id="os2" class="form-check-input" type="radio" name="os" value="Windows 10 Pro" <?= $laptops['os'] == 'Windows 10 Pro' ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="os2">Windows 10 Pro</label>
                </div>
            </div>
            <div class="form-group mt-1">
                <label for="picture" class="d-block">Picture</label>
                <div class="row">
                    <div class="col-sm-3">
                        <img src="<?= base_url('assets/img/asus/') . $laptops['picture']; ?>" class="img-thumbnail img-preview">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="merk" class="form-control" value="<?= $laptops['merk']; ?>" readonly>
                    </div>
                    <div class="col-sm-9 mt-2">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input " id="picture" name="picture" onchange="previewImg()">
                        </div>
                        <label class="custom-file-label" for="picture"><?= $laptops['picture']; ?></label>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mb-2 px-5" style="font-weight: 700;" name="update"> <i class="fa fa-pencil-alt"></i>&nbsp;&nbsp;Update</button>

        </form>

    </section>
</div>