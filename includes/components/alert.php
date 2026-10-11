<?php
$type = $type ?? 'success';
$message = $message ?? '';

if ($message !== ''):
?>
    <div class="alert alert-<?= htmlspecialchars($type) ?>"
         role="alert">
        <?= htmlspecialchars($message) ?>
    </div>
<?php endif; ?> 