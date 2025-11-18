<?php require_once './layouts/head.php'?>
<body>
         <h1>My blogspot</h1>
    <?php 
    for ($1=0; $1 < 5;  $1++)
        ?>
    <ul>
    <li>
        <div class="text-align:center">My first article</div>
    <div>
        <?= date('d M Y'); ?>
    </div></li>
    <button class="btn btn-primary">tombol</button>
</body>
</html>