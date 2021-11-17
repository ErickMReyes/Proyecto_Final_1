<?php
?>


       
            <form action="./controller/login.php" method="post">
                <div class="columns is-mobile">
                    <div class="column is-three-fifths is-offset-one-fifth">
                        <div class="box">
                            <br>
                            <figure class="image is-128x128">
                                <img src="images/user.png">
                            </figure>
                            <br>

                            <div class="field">
                                <p class="control has-icons-left has-icons-right">
                                    <label class="label">Usuario</label>
                                    <input class="input" type="text" placeholder="Usuario" name="usuario" id="usuario" autocomplete="off">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    <span class="icon is-small is-right">
                                        <i class="fas fa-check"></i>
                                    </span>
                                </p>
                            </div>
                            <div class="field">
                                <p class="control has-icons-left">
                                    <label class="label">Contraseña</label>
                                    <input class="input" type="password" placeholder="Contraseña" name="pswd" id="pswd" autocomplete="off">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                </p>
                            </div>
                            <div class="field">
                                <p class="control">
                                    <button type="submit" class="button is-success">
                                        Iniciar
                                    </button>
                                </p>
                            </div>
                            <!--</form>-->
                        </div>
                    </div>
                </div>
            </form>


      