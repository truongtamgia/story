<article class="content item-editor-page">
    <div class="title-block">
        <h3 class="title"> Chỉnh sửa nội dung
            <span class="sparkline bar" data-type="bar"></span>
        </h3>
    </div>
    <form name="item" method="post" action="<?=baseurl?>index.php?controller=admin&action=editchapter&id=<?=$_GET['id']?>&idtd=<?=$_GET['idtd']?>">
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
                    <input type="text" readonly="readonly" class="form-control boxed" value="<?=$data['post']['ps_tentap']?>" name="tap"> 
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 form-control-label text-xs-right"> Nội dung: </label>
                <div class="col-sm-12">
                    <textarea name="noidung" id="noidung" require="on">
                        <?=$data["post"]["ps_noidung"]?>
                    </textarea>
                    <script>CKEDITOR.replace( 'noidung' );</script>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-9 col-sm-offset-3">
                    <button type="submit" class="btn btn-primary" name="ok"> Chỉnh sửa </button>
                </div>
            </div>
        </div>
    </form>
</article>