<article class="content static-tables-page">
                    <div class="title-block">
                        <h1 class="title"> Tất cả chuyên mục </h1>
                    </div>
                    <section class="section">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Striped rows </h3>
                                        </div>
                                        <section class="example">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Tên danh mục</th>
                                                        <th>Sửa</th>
                                                        <th>Xoá</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if($data["cate"]!=0){foreach($data["cate"] as $item){?>
                                                    <tr>
                                                        <th scope="row"><?=$item["id"]?></th>
                                                        <td><?=$item["name"]?></td>
                                                        <td><a href="<?=baseurl?>index.php?controller=admin&action=editcate">
                                                            <em class="fa fa-certificate"></em>
                                                        </a></td>
                                                        <td><a href="<?=baseurl?>index.php?controller=admin&action=delcate&id=<?=$item["id"]?>">
                                                        <em class="fa fa-ban"></em>
                                                        </a></td>
                                                    </tr>
                                                    <?php }} ?>
                                                </tbody>
                                            </table>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </article>