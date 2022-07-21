<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                    <img src="<?= base_url(); ?>assets/dist/img/logo_asus.svg" alt="asus logo" width="200">

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">ASUS</a></li>
                        <li class="breadcrumb-item active">Laptop Data</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <!-- flashdata for add and edit -->
        <div class="row">
            <div class="col-lg-6">
                <?= $this->session->flashdata('message'); ?>
            </div>
        </div>
        <!-- flashdata for delete -->
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-plus"></i>&nbsp;&nbsp;Add Data
        </button>
        <div class="table-responsive">
            <table class="table table-striped" id="this-table">
                <tr style="background-color: #00539B; color: white;">
                    <th>NO</th>
                    <th>PICTURE</th>
                    <th>TITLE</th>
                    <th>PRICE</th>
                    <th>CPU</th>
                    <th colspan="3" class="text-center">ACTION</th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach ($laptops as $laptop) : ?>

                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><img src="<?= base_url('assets/img/asus/') . $laptop['picture']; ?>" alt="<?= $laptop['picture']; ?>" width="100"></td>
                        <td id="title"><?= $laptop['title']; ?></td>
                        <td><?= $laptop['price']; ?></td>
                        <td><?= $laptop['cpu']; ?></td>
                        <td><a href="<?= base_url('Asus/detail/') . $laptop['id']; ?>">
                                <div class="btn btn-success btn-sm">
                                    <i class="fa fa-eye"></i>
                                </div>
                        </td>
                        <td>
                            <a href="<?= base_url('Asus/edit/') . $laptop['id']; ?>">
                                <div class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil-alt"></i>
                                </div>
                        </td>
                        <td>
                            <a class="btn-delete" href="<?= base_url('Asus/delete/') . $laptop['id']; ?>">
                                <div class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash-alt"></i>
                                </div>
                        </td>
                    </tr>

                    <?php $i++; ?>
                <?php endforeach; ?>

            </table>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Laptop Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action="<?= base_url('Asus/add') ?>" method="post" enctype="multipart/form-data" autocomplete="off">

                            <div class="form-group">
                                <label>Brand</label>
                                <input type="text" name="merk" class="form-control" readonly value="Asus">
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input id="title" type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input id="price" type="text" name="price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>CPU</label>
                                <input id="cpu" type="text" name="cpu" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>RAM</label>
                                <input id="ram" type="text" name="ram" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Storage</label>
                                <input id="storage" type="text" name="storage" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Graphic</label>
                                <input id="grafis" type="text" name="grafis" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Display</label>
                                <textarea name="display" id="display" cols="30" rows="5" class="form-control" autocomplete="off"></textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label class="d-block">Operating System</label>
                                <div class="form-check form-check-inline">
                                    <input id="os1" class="form-check-input" type="radio" name="os" value="Windows 10 Home" checked="checked">
                                    <label class="form-check-label" for="os1">Windows 10 Home</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input id="os2" class="form-check-input" type="radio" name="os" value="Windows 10 Pro">
                                    <label class="form-check-label" for="os2">Windows 10 Pro</label>
                                </div>
                            </div>

                            <div class="form-group mt-1">
                                <div>
                                    <label for="picture" class="col-sm-2 col-form-label ">Picture</label>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <img src="<?= base_url('assets/img/asus/default_asus.jpg') ?>" class="img-thumbnail img-preview">
                                    </div>
                                    <div class="col-sm-8 mt-2">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="picture" name="picture" onchange="previewImg()">
                                        </div>
                                        <label class="custom-file-label" for="picture">Select picture..</label>
                                    </div>
                                </div>
                                <small class="form-text text-danger">If no image is uploaded, it will automatically use the default image above</small>
                            </div>

                            <div id="alert-msg"></div>


                            <button type="reset" class="btn btn-danger mt-2 mr-2">Reset</button>
                            <button type="submit" class="btn btn-primary mt-2 px-5">
                                <i class="fa fa-plus"></i>&nbsp;&nbsp;Add
                            </button>
                            <button type="reset" class="btn btn-dark mt-2 float-right" data-dismiss="modal">Close</button>

                        </form>


                    </div>

                </div>
            </div>
        </div>

    </div>
</div>