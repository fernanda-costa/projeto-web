<?php 

session_start();

function mostraAlerta($tipo) {
    if(isset($_SESSION[$tipo])) {
?>
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4><?=$tipo?></h4>
            <p><?=$_SESSION[$tipo]?></p>
        </div>
    </div>
<?php
       unset($_SESSION[$tipo]);
    }
}
?>