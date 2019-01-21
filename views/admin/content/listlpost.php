<article class="content items-list-page">
                    <div class="title-search-block">
                        <div class="title-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="title"> Danh sách truyện
                                        <a href="<?=baseurl?>index.php?controller=admin&action=themtruyendai" class="btn btn-primary btn-sm rounded-s"> Thêm truyện </a>
                                        <!--
				 -->
                                        <div class="action dropdown">
                                            <button class="btn  btn-sm rounded-s btn-secondary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> More actions... </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-pencil-square-o icon"></i>Mark as a draft</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#confirm-modal">
                                                    <i class="fa fa-close icon"></i>Delete</a>
                                            </div>
                                        </div>
                                    </h3>
                                    <p class="title-description"> List of sample items - e.g. books, movies, events, etc... </p>
                                </div>
                            </div>
                        </div>
                        <div class="items-search">
                            <form class="form-inline">
                                <div class="input-group">
                                    <input type="text" class="form-control boxed rounded-s" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary rounded-s" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card items">
                        <ul class="item-list striped">
                            <li class="item item-list-header">
                                <div class="item-row">
                                    <div class="item-col item-col-header fixed item-col-img md">
                                        <div>
                                            <span>Ảnh bìa</span>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-header item-col-title">
                                        <div>
                                            <span>Tên truyện</span>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-header item-col-sales">
                                        <div>
                                            <span>Số tập</span>
                                        </div>
                                    </div>
                                    
                                    <div class="item-col item-col-header item-col-category">
                                        <div class="no-overflow">
                                            <span>Thể loại</span>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-header item-col-author">
                                        <div class="no-overflow">
                                            <span>Người đăng</span>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-header item-col-date">
                                        <div>
                                            <span>Ngày đăng</span>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-header fixed item-col-actions-dropdown"> </div>
                                </div>
                            </li>
                            <?php foreach($data['post']['fetch'] as $item){?>
                            <li class="item">
                                <div class="item-row">
                                    <div class="item-col fixed item-col-img md">
                                        <a href="item-editor.html">
                                            <div class="item-img rounded" style="background-image: url(<?=baseurl?>upload/story/truyendai/<?=$item['image']?>)"></div>
                                        </a>
                                    </div>
                                    <div class="item-col fixed pull-left item-col-title">
                                        <div class="item-heading">Name</div>
                                        <div>
                                            <a href="item-editor.html" class="">
                                                <h4 class="item-title"><?=$item['ten']?></h4>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-sales">
                                        <div class="item-heading">Sales</div>
                                        <div> 46323 </div>
                                    </div>
                                    <div class="item-col item-col-category no-overflow">
                                        <div class="item-heading">Category</div>
                                        <div class="no-overflow">
                                            <a href=""><?=$item['name']?></a>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-author">
                                        <div class="item-heading">Author</div>
                                        <div class="no-overflow">
                                            <a href=""><?=$item['nguoidang']?></a>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-date">
                                        <div class="item-heading">Published</div>
                                        <div class="no-overflow"> <?=date("d-m-Y",strtotime($item['ngaydang']))?> </div>
                                    </div>
                                    <div class="item-col fixed item-col-actions-dropdown">
                                        <div class="item-actions-dropdown">
                                            <a class="item-actions-toggle-btn">
                                                <span class="inactive">
                                                    <i class="fa fa-cog"></i>
                                                </span>
                                                <span class="active">
                                                    <i class="fa fa-chevron-circle-right"></i>
                                                </span>
                                            </a>
                                            <div class="item-actions-block">
                                                <ul class="item-actions-list">
                                                    <li>
                                                        <a class="remove" href="<?=baseurl?>index.php?controller=admin&action=xoatruyendai&page=<?php if(isset($_GET['page']))echo $_GET['page'];?>&id=<?=$item['id_truyendai']?>">
                                                            <i class="fa fa-trash-o "></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="edit" href="<?=baseurl?>index.php?controller=admin&action=suatruyendai&page=<?php if(isset($_GET['page']))echo $_GET['page'];?>&id=<?=$item['id_truyendai']?>">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php }?>
                        </ul>
                    </div>
                    <nav class="text-right">
                        <ul class="pagination">
                            <?php if(isset($_GET['page'])&&$_GET['page']>1){ ?>
                            <li class="page-item">
                                <a class="page-link" href="<?=baseurl?>index.php?controller=admin&action=truyendai&page=<?php echo $_GET['page']-1;?>"> Prev </a>
                            </li>
                            <?php }?>
                            <li class="page-item">
                                <a class="page-link" href="index.php?controller=admin&action=truyendai&page=1"> Trang đầu </a>
                            </li>
                            <?php for($i=$data['min'];$i<=$data['max'];$i++){?>
                            <li class="page-item <?php if(isset($_GET['page'])&&$_GET['page']==$i){echo 'active';}?>">
                                <a class="page-link" href="<?=baseurl?>index.php?controller=admin&action=truyendai&page=<?=$i?>"> <?=$i?> </a>
                            </li>
                            <?php }?>
                            <li class="page-item">
                                <a class="page-link" href="index.php?controller=admin&action=truyendai&page=<?=$data['post']['sotrang']?>"> Trang cuối </a>
                            </li>
                            <?php if(isset($_GET['page'])){
                                if($_GET['page']<$data['post']['sotrang']){?>
                            <li class="page-item">
                                <a class="page-link" href="<?=baseurl?>index.php?controller=admin&action=truyendai&page=<?php echo $_GET['page']+1;?>"> Next </a>
                            </li>
                                <?php }}else{ ?>
                            <li class="page-item">
                                <a class="page-link" href="<?=baseurl?>index.php?controller=admin&action=truyendai&page=<?php echo $_GET['page']+1;?>"> Next </a>
                            </li>
                            <?php }?>
                        </ul>
                    </nav>
                </article>