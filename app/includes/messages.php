<?php if (isset($_SESSION['message'])): ?>
    <div class="msg <?=$_SESSION['type'];?>">
        <li><?=$_SESSION['message'];?></li>
    </div>
    <?php unset($_SESSION['message']);  unset($_SESSION['type']); ?>
<?php endif; ?>
