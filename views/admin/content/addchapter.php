<article class="content item-editor-page">
    <div class="title-block">
        <h3 class="title"> Thêm một tập
            <span class="sparkline bar" data-type="bar"></span>
        </h3>
    </div>
    <form name="item" method="post" action="<?=baseurl?>index.php?controller=admin&action=addcate">
        <div class="card card-block">
            <div class="form-group row">
                <div class="col-sm-12">
                    <p>Số tập hiện tại:</p>
                    <pre>
                        <?php print_r($data);?>
                    </pre>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 form-control-label text-xs-right"> Tên danh mục: </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control boxed" placeholder="" name="name">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-9 col-sm-offset-3">
                    <button type="submit" class="btn btn-primary" name="ok"> Thêm </button>
                </div>
            </div>
        </div>
    </form>
</article>