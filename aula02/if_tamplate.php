<?php

$erro = null;
$advertencia = 'cuidado';

?>

<!-- if simples // -->

<?php if (isset($erro)): ?>
<div><p><?=$erro?></p></div>
<?php endif ?>

<hr>

<!-- if else // -->

<?php if (isset($erro)): ?>
<div><p><?=$erro?></p></div>
<?php else: ?>
<div><p>Sucesso!</p></div>
<?php endif ?>

<hr>

<!-- if elseif else // -->
<?php if (isset($erro)): ?>
<div><p><?=$erro?></p></div>
<?php elseif (isset($advertencia)): ?>
<div><p><?=$advertencia?></p></div>
<?php else: ?>
<div><p>Sucesso!</p></div>
<?php endif ?>