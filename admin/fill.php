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
                                Наполнитель
                            </a>
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                            </br>
                        <table class="table table-bordered" id="myOffer"cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Донор</th>
                                            <th>Заголовок</th>
                                            <th>Дискрипшен</th>
                                            <th>Картинка</th>
                                            <th>Инфа от поиск.</th>
                                            <th>На какой сайт</th>
                                            <th>Статус</th>
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

                                            if($row['flagFill']=="1"){
                                                $statusFill = "<td>Залил</td>";
                                            }
                                            else{
                                                $statusFill = "<td><a href='fillSec.php?id=".$row['id']."'>Залил</a></td>";
                                            }

                                            if($row['commFill']==NULL){
                                                $textF = "В обработке";
                                            }
                                            elseif($row['commFill']=="1"){
                                                $textF = "Одобрено";
                                            }
                                            else{
                                                $textF = $row['commFill'];
                                            }


                                            echo "<tr>
                                                    <td>".$row['link']."</td>
                                                    <td>".$row['title']."</td>
                                                    <td>".$row['descr']."</td>
                                                    <td>".$row['img']."</td>
                                                    <td>".$row['infoFill']."</td>
                                                    <td>htps://vk.com</td>
                                                    ".$statusFill."
                                                    <td>".$textF."</td>
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