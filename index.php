<?php
require($_SERVER['DOCUMENT_ROOT']."/template/header.php");
require($_SERVER['DOCUMENT_ROOT']."/template/left-bar.php");
?>  
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Главная</h1>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    
                                    <div class="card-body">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class=""></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                        <canvas class="chartjs-render-monitor" height="193" id="myAreaChart" style="display: block; width: 484px; height: 193px;" width="484"></canvas>
                                    </div>
                                </div>
                            </div>

                        </div>
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

                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Дата создания</th>
                                                <th>Оффер</th>
                                                <th>IP</th>
                                                <th>Устройство</th>
                                                <th>Статус</th>
                                                <th>Доход</th>
                                                <th>Название цели</th>
                                                <th>Sub 1</th>
                                                <th>Sub 2</th>
                                                <th>Sub 3</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                <td>61</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                <td>61</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
<?php
require($_SERVER['DOCUMENT_ROOT']."/template/footer.php");
?>                