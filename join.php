<?php

include 'assets/includes/header.inc.php';
include 'assets/includes/nav.inc.php';
include 'assets/includes/login.inc.php';

?>
<form action="lobby.php" class="game-form">
        <div class="form-group">
          <label for="nickname">Nickname</label>
          <input type="text" class="form-control" id="nickname" placeholder="Ex: Scroopy Noopers">
        </div>
        <div class="form-group">
          <label for="room">Room ID</label>
          <input type="text" class="form-control" id="room" placeholder="Ex: ZX1T">
        </div>
        <button type="submit" class="btn btn-default">Play</button>
</form>