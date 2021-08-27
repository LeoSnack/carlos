<?php
require($_SERVER['DOCUMENT_ROOT']."/admin/template/header.php");
require($_SERVER['DOCUMENT_ROOT']."/admin/template/left-bar.php");
require($_SERVER['DOCUMENT_ROOT']."/backend/db.php");


$query = "SELECT * FROM articles";
$res = mysqli_query($link, $query);
?> 
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Данные</h1>
                        <p>
                                <table class="table table-bordered" id="myOffer"cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Донор</th>
                                            <th>Заголовок</th>
                                            <th>Дискрипшен</th>
                                            <th>Картинка</th>
                                            <th>Инфа для напол.</th>
                                            <th>Работа поисковика</th>
                                            <th>Статус наполнителя</th>
                                            <th>Статус залива</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while($row=mysqli_fetch_array($res)){

                                            if($row['comment']==NULL){
                                                $html = "<td><a href='flagSearch.php?id=".$row['id']."'>Одобрить</a>/<a href='commSearch.php?id=".$row['id']."'>Комментировать</a></td>";
                                            }
                                            elseif($row['comment']=="1"){
                                                $html = "<td>Вы ОДОБРИЛИ. <a href='commSearch.php?id=".$row['id']."'>Комментировать</a></td>";
                                            }
                                            else{
                                                $html = "<td>ДОРАБОТКА. <a href='flagSearch.php?id=".$row['id']."'>Одобрить</a>/<a href='commSearch.php?id=".$row['id']."'>Комментировать</a></td>";
                                            }

                                            if($row['commFill']=="1"){
                                                $htmls = "<td>ОДОБРИЛИ. <a href='commFill.php?id=".$row['id']."'>Комментировать</a></td>";
                                            }
                                            elseif($row['commFill']==NULL){
                                                $htmls = "<td><a href='flagFill.php?id=".$row['id']."'>Одобрить</a>/<a href='commFill.php?id=".$row['id']."'>Комментировать</a></td>";
                                            }
                                            else{
                                                $htmls = "<td>ДОРАБОТКА. <a href='commFill.php?id=".$row['id']."'>Комментировать</a></td>";
                                            }

                                            if($row['flagFill']=="1"){
                                                $statusFill = "<td>Залил</td>";
                                                
                                            }
                                            else{
                                                $statusFill = "<td>В обработке</td>";
                                                
                                            }



                                            echo "<tr>
                                                    <td>".$row['link']."</td>
                                                    <td>".$row['title']."</td>
                                                    <td>".$row['descr']."</td>
                                                    <td>".$row['img']."</td>
                                                    <td>".$row['infoFill']."</td>
                                                    ".$html."
                                                    ".$statusFill."
                                                    ".$htmls."
                                                </tr>"; 
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                </p>
                    </div>
                </main>
<style>
tfoot {
     display: table-header-group;
}
</style>
<?php
require($_SERVER['DOCUMENT_ROOT']."/template/footer.php");
?>                