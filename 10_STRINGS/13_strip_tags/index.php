<?php

$textohtml = "<p>Testando parágrafo.</p><div>Uma div</div><p>Outro parágrafo</p>";

echo $textohtml;

$salvarTextoBanco = strip_tags($textohtml);

echo $salvarTextoBanco;