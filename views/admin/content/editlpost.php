<article class="content item-editor-page" id="addlpost">
    <div class="title-block">
        <h3 class="title"> Thêm một truyện mới
            <span class="sparkline bar" data-type="bar"></span>
        </h3>
    </div>
    <form name="item" method='post' action="<?=baseurl?>index.php?controller=admin&action=suatruyendai&page=<?php if($_GET['page']!="") echo $_GET['page'];?>&id=<?=$_GET['id']?>" enctype="multipart/form-data">
        <div class="card card-block">
            <?php if(isset($data['error'])){
                   foreach($data['error'] as $loi){    
                ?>
            <div class="form-group row">
                <p class="text-danger col-sm-12 form-control-label text-xs-right">
                    <?=$loi?>
                </p>
            </div>
            <?php }}?>
            <div class="form-group row">
                <label class="col-sm-2 form-control-label text-xs-right"> Tên truyện: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control boxed" placeholder="" name="name" value="<?=$data['info']['ten']?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 form-control-label text-xs-right"> Tác giả: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control boxed" placeholder="" name="author" value="<?=$data['info']['tacgia']?>"> </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 form-control-label text-xs-right"> Mô tả: </label>
                <div class="col-sm-10">
                    <textarea name="mota" id="mota" cols="30" rows="10"><?=$data['info']['mota']?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 form-control-label text-xs-right"> Category: </label>
                <div class="col-sm-10">
                    <select class="c-select form-control boxed" name="category">
                        <?php foreach($data['cate'] as $item){?>
                        <option value="<?=$item['id']?>" <?php if($item['id']==$data['info']['id_cat'])echo"selected=selected"?>>
                            <?=$item['name']?>
                        </option>
                        <?php }?>
                    </select>
                </div>

            </div>
            <div class="form-group row">
                <label class="col-sm-2 form-control-label text-xs-right"> Ảnh bìa: </label>
                <div class="image-container">
                    <div class="col-sm-10">
                        <div class="images-container">
                            <div class="image-container">
                                <div class="controls">
                                    <a href="" class="control-btn move">
                                        <i class="fa fa-arrows"></i>
                                    </a>
                                    <a href="" class="control-btn star">
                                        <i class="fa"></i>
                                    </a>
                                    <a href="#" class="control-btn remove" data-toggle="modal" data-target="#confirm-modal">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </div>
                                <div class="image" style="background-image:url('<?=baseurl?>upload/story/truyendai/<?=$data["info"]["image"]?>')"></div>
                            </div>
                            <a href="#" class="add-image" data-toggle="" data-target="">
                                <div class="image-container new">
                                    <input type="file" name='biasach'>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary" name="ok"> Sửa chữa </button>
                </div>
            </div>

        </div>
    </form>
</article>