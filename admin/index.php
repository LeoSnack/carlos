<?php
require($_SERVER['DOCUMENT_ROOT']."/admin/template/header.php");
require($_SERVER['DOCUMENT_ROOT']."/admin/template/left-bar.php");
?>  
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Главная</h1>
                        <div class="row mb-4">
                            <div class="card col-md-3">
                              <div class="card-body">
                                <h5 class="card-title">Рег за сегодня</h4>
                                <h6 class="card-subtitle mb-2 text-muted">100</h6>
                              </div>
                            </div>
                            <div class="card col-md-3">
                              <div class="card-body">
                                <h5 class="card-title">Депов за вчера</h4>
                                <h6 class="card-subtitle mb-2 text-muted">10</h6>
                              </div>
                            </div>
                            <div class="card col-md-3">
                              <div class="card-body">
                                <h5 class="card-title">Денег сегодня</h4>
                                <h6 class="card-subtitle mb-2 text-muted">10000$</h6>
                              </div>
                            </div>
                            <div class="card col-md-3">
                              <div class="card-body">
                                <h5 class="card-title">Конверсий за сегодня</h4>
                                <h6 class="card-subtitle mb-2 text-muted">10</h6>
                              </div>
                            </div>
                        </div>
                    </div>
                </main>
<?php
require($_SERVER['DOCUMENT_ROOT']."/template/footer.php");
?>                