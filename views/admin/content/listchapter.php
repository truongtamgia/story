<article class="content responsive-tables-page" id="p_listchapter">
    <div class="title-block">
        <h1 class="title"> Danh sách tập truyện <a href="<?=baseurl?>index.php?controller=admin&action=addchapter&id=<?=$_GET['id']?>&tap=<?=$data['lastchap']?>" class="btn btn-primary btn-sm">Thêm tập</a> </h1>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-block">
                        <div class="card-title-block">
                            <h3 class="title"> <?=$data['post'][0]['ten']?> </h3>
                        </div>
                        <section class="example">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Số tập</th>
                                        <th>Người đăng truyện</th>
                                        <th>Ngày đăng tập</th>
                                        <th>Người đăng tập</th>
                                        <th>Lần sửa chữa cuối cùng</th>
                                        <th>Tác vụ</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($data['post'] as $item){?>
                                        <tr>
                                            <th scope="row"><?=$item['ps_tentap']?></th>
                                            <td><?=$item['nguoidang']?></td>
                                            <td><?=$item['ps_ngaydang']?></td>
                                            <td><?=$item['ps_nguoidang']?></td>
                                            <?php if($item['ps_lastedit']!=""){?>
                                            <td><?=$item['ps_lastedit']?></td>
                                            <?php }else{ ?>
                                            <td>Chưa</td>
                                            <?php } ?>
                                            <td>
                                                <ul class="">
                                                    <li>
                                                        <a class="remove" href="">
                                                            <i class="fa fa-trash-o "></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="edit" href="<?=baseurl?>index.php?controller=admin&action=editchapter&id=<?=$item['postid']?>&idtd=<?=$_GET['id']?>">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>