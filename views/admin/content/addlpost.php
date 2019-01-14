<article class="content item-editor-page" id="addlpost">
                    <div class="title-block">
                        <h3 class="title"> Thêm một truyện mới
                            <span class="sparkline bar" data-type="bar"></span>
                        </h3>
                    </div>
                    <form name="item" method='post' action="<?=baseurl?>" enctype="multipart/form-data">
                        <div class="card card-block">
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Tên truyện: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder="" name="name"> </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Tác giả: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" placeholder=""name="author"> </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Mô tả: </label>
                                <div class="col-sm-10">
                                    <textarea name="mota" id="mota" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Category: </label>
                                <div class="col-sm-10">
                                    <select class="c-select form-control boxed">
                                        <?php foreach($data['cate'] as $item){?>
                                        <option value="<?=$item['id']?>"><?=$item['name']?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Ảnh bìa: </label>
                                <div class="col-sm-10">
                                    <input type="file" name="biasach">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Thêm </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </article>