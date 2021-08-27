<?php
require($_SERVER['DOCUMENT_ROOT']."/admin/template/header.php");
require($_SERVER['DOCUMENT_ROOT']."/admin/template/left-bar.php");
?>   
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Пользователи</h1>
                        <div class="row">
                        <div class="alert alert-danger" role="alert" id="errorAddUser" style="display: none;">
                        </div>
                        <div class="alert alert-success" id="successAddUser" role="alert" style="display: none;">
                        </div>
                        </div>
                        <div class="row">
                        <form action="" method="POST" id="addUserForm">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Введите роль юзера</label>
                                <br>
                                <select name="roleWorker">
                                  <option>Выберите из списка</option>
                                  <option value='4'>Поисковик</option>
                                  <option value='3'>Наполнитель</option>
                                  <option value='2'>Контент-менеджер</option>
                                </select>
                            </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Введите название работника</label>
                            <input type="email" class="form-control" name="nickWorker" aria-describedby="emailHelp" placeholder="Введите ник">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Введите Login для авторизации</label>
                            <input type="text" class="form-control" name="loginWorker" placeholder="Введите логин">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Введите пароль</label>
                            <input type="text" class="form-control" name="passWorker" placeholder="Введите пароль">
                          </div>
                          <button type="submit" class="btn btn-primary" id="buttonAddUser">Добавить</button>
                        </form>
                        </div>
                    </div>
                </main>
<?php
require($_SERVER['DOCUMENT_ROOT']."/template/footer.php");
?>                