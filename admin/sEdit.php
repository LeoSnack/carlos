<?php
require($_SERVER['DOCUMENT_ROOT']."/backend/db.php");
require($_SERVER['DOCUMENT_ROOT']."/backend/function.php");

$id = getUrlQuery($_SERVER['REQUEST_URI'], 'id');

$query = "SELECT * FROM articles WHERE id='$id'";
$res = mysqli_query($link, $query);

        $linka = "";
        $title = "";
        $desc = "";
        $infoFill = "";
        $img = "";

while($row=mysqli_fetch_array($res)){
        $linka = $row['link'];
        $title = $row['title'];
        $desc = $row['descr'];
        $infoFill = $row['infoFill'];
        $img = $row['img'];
    }

if(!empty($_POST["eLink"]) && !empty($_POST["eTitle"]) && !empty($_POST["eDesc"]) && !empty($_POST["eInfo"]) && !empty($_POST["eImg"])){
        
        $elink = $_POST["eLink"];
        $etitle = $_POST["eTitle"];
        $edesc = $_POST["eDesc"];
        $einfoFill = $_POST["eInfo"];
        $eimg = $_POST["eImg"];

            $query ="UPDATE articles SET link='$elink', title='$etitle', descr='$edesc', infoFill='$einfoFill', img='$eimg' WHERE id='$id'";
            $result_sql = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
            header("Refresh:0");
    }
    mysqli_close($link);

    require($_SERVER['DOCUMENT_ROOT']."/admin/template/header.php");
    require($_SERVER['DOCUMENT_ROOT']."/admin/template/left-bar.php");
?>   
                <main>
                    <div class="container-fluid">
                        <a href="/admin/offer.php">Вернуться к статьям</a>
                        <h1 class="mt-4">Редактировать статью</h1>
                                <div class="alert alert-success" id="successAddUser" role="alert" style="display: none;">
                                    </div>
                                <div class="row">
                                    <form action="" method="POST" id="editOfferForm" autocomplete="off" enctype="multipart/form-data">
                                      <div class="form-group">
                                        <?php echo "<input type='text' class='form-control' name='eLink' aria-describedby='emailHelp' placeholder='Ссылку донора' value='".$linka."'>";?>
                                      </div>
                                      <div class="form-group">
                                        <?php echo "<input type='text' class='form-control' name='eTitle' placeholder='Заголовок статьи' value='".$title."'>";?>
                                      </div>
                                      <div class="form-group">
                                        <?php echo "<input type='text' class='form-control' name='eDesc' placeholder='Дискрипшен' value='".$desc."'>";?>
                                      </div>
                                      <div class="form-group">
                                        <?php echo "<input type='text' class='form-control' name='eInfo' placeholder='Инфа для напол.' value='".$infoFill."'>";?>
                                      </div>
                                      <div class="form-group">
                                        <?php echo "<input type='text' class='form-control' name='eImg' aria-describedby='emailHelp' placeholder='Картинку' value='".$img."'>";?>
                                      </div>
                                      <button type="submit" class="btn btn-primary" id="buttonEditOffer">Редактировать
                                    </button>
                                    </form>
                                </div>
                            </br>
                    </div>
                </main>
<?php
require($_SERVER['DOCUMENT_ROOT']."/template/footer.php");
?>                