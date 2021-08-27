<?php
require($_SERVER['DOCUMENT_ROOT']."/backend/db.php");
require($_SERVER['DOCUMENT_ROOT']."/backend/function.php");

$id = getUrlQuery($_SERVER['REQUEST_URI'], 'id');

$query = "SELECT * FROM articles WHERE id='$id'";
$res = mysqli_query($link, $query);

    $name = "";
while($row=mysqli_fetch_array($res)){
        $name = $row['comment'];
    }

if(!empty($_POST["comm"])){
        
        $comm = trim($_POST["comm"]);
        
        $query ="UPDATE articles SET comment='$comm' WHERE id='$id'";
        $result_sql = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
        header("Refresh:0");
    }
    mysqli_close($link);

    require($_SERVER['DOCUMENT_ROOT']."/admin/template/header.php");
    require($_SERVER['DOCUMENT_ROOT']."/admin/template/left-bar.php");
?>   
                <main>
                    <div class="container-fluid">
                        <a href="/admin/sendmoney.php">Вернуться к статьям</a>
                        <h1 class="mt-4">Комментировать статью</h1>
                                <div class="alert alert-success" id="successAddUser" role="alert" style="display: none;">
                                    </div>
                                
                                    <form action="" method="POST" id="editOfferForm" autocomplete="off" enctype="multipart/form-data">
                                      
                                      <div class="form-group">
                                        <?php echo "<textarea class='form-control' id='exampleFormControlTextarea1' rows='3' name='comm'>".$name."</textarea>";?>
                                      </div>
                                      <button type="submit" class="btn btn-primary" id="buttonEditOffer">Комментировать
                                    </button>
                                    </form>
                                
                            </br>
                    </div>
                </main>
<?php
require($_SERVER['DOCUMENT_ROOT']."/template/footer.php");
?>                