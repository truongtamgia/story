<article class="content item-editor-page">
    <div class="title-block">
        <h3 class="title"> Thêm một tập
            <span class="sparkline bar" data-type="bar"></span>
        </h3>
    </div>
    <form name="item" method="post" action="<?=baseurl?>index.php?controller=admin&action=addchapter">
        <div class="card card-block">
            <div class="form-group row">
                <label class="control-label col-sm-10"><?=$data['cat']['ten']?></label>
                <div class="col-sm-2">
                    <input type="text" readonly="readonly" class="form-control boxed" value="<?=$data['cat']['id_truyendai']?>" name="id_td"> 
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-10">Tập</label>
                <div class="col-sm-2">
                    <input type="text" readonly="readonly" class="form-control boxed" value="<?=$_GET['tap']?>" name="tap"> 
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 form-control-label text-xs-right"> Nội dung: </label>
                <div class="col-sm-12">
                    <textarea name="noidung" id="noidung" require="on"></textarea>
                    <script>CKEDITOR.replace( 'noidung' );</script>
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