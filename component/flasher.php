<?php if (isset($_SESSION['_flash']['error'])): ?>
    <div class="w-2/3 mx-auto bg-red-500 px-4 py-2 rounded">
        <ul class="text-white">
            <?php foreach ($_SESSION['_flash']['error'] as $message): ?>
                <li><?php echo $message ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<?php if (isset($_SESSION['_flash']['success'])): ?>
    <div class="w-2/3 mx-auto bg-green-500 px-4 py-2 rounded">
        <ul class="text-white">
            <?php foreach ($_SESSION['_flash']['success'] as $message): ?>
                <li><?php echo $message ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<?php unset($_SESSION['_flash']); ?>
