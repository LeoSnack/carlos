<?php
require($_SERVER['DOCUMENT_ROOT']."/admin/template/header.php");

require($_SERVER['DOCUMENT_ROOT']."/backend/db.php");

$query = "SELECT * FROM articles";
$res = mysqli_query($link, $query);

?>   
<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="/admin/search.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Поисковик
                            </a>
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h3 class="mt-4">Добавить статью</h3>
                                <div class="alert alert-success" id="successAddUser" role="alert" style="display: none;">
                                    </div>
                                <div class="row">
                                    <form action="" method="POST" id="addOfferForm">
                                      <div class="form-group">
                                        <input type="text" class="form-control" name="link" aria-describedby="emailHelp" placeholder="Ссылку донора">
                                      </div>
                                      <div class="form-group">
                                        <input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="Заголовок статьи">
                                      </div>
                                      <div class="form-group">
                                        <input type="text" class="form-control" name="desc" aria-describedby="emailHelp" placeholder="Дискрипшен">
                                      </div>
                                      <div class="form-group">
                                        <input type="text" class="form-control" name="infoFill" aria-describedby="emailHelp" placeholder="Инфа для напол.">
                                      </div>
                                      <div class="form-group">
                                        <input type="text" class="form-control" name="img" aria-describedby="emailHelp" placeholder="Картинку">
                                      </div>
                                      <button type="submit" class="btn btn-primary" id="buttonAddOffer">Добавить</button>
                                    </form>
                                </div>
                            </br>
                        <table class="table table-bordered" id="myOffer"cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Донор</th>
                                            <th>Заголовок</th>
                                            <th>Дискрипшен</th>
                                            <th>Картинка</th>
                                            <th>Инфа для напол.</th>
                                            <th>Редактировать</th>
                                            <th>Комментарий от Р1ЗВ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while($row=mysqli_fetch_array($res)){

                                            if($row['comment']==NULL){
                                                $text = "в обработке";
                                            }
                                            elseif($row['comment']=="1"){
                                                $text = "Одобрено";
                                            }
                                            else{
                                                $text = $row['comment'];
                                            }

                                            echo "<tr>
                                                    <td>".$row['link']."</td>
                                                    <td>".$row['title']."</td>
                                                    <td>".$row['descr']."</td>
                                                    <td>".$row['img']."</td>
                                                    <td>".$row['infoFill']."</td>
                                                    <td><a href='sEdit.php?id=".$row['id']."'>Редактировать</a></td>
                                                    <td>".$text."</td>
                                                </tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                    </div>
                </main>
<?php
require($_SERVER['DOCUMENT_ROOT']."/template/footer.php");
?>                