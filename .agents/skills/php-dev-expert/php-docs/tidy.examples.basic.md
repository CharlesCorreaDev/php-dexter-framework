# Exemplo de Tidy

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tidy.examples.basic.php

---

## Exemplo de Tidy

Este exemplo simples mostra o básico do uso do Tidy.

**Exemplo #1 Uso básico do Tidy**

```
<?php
ob_start();
?>
<html>Um documento HTML</html>
<?php
$html = ob_get_clean();

// Especifica configuração
$config = array(
           'indent'         => true,
           'output-xhtml'   => true,
           'wrap'           => 200);

// Tidy
$tidy = new tidy;
$tidy->parseString($html, $config, 'utf8');
$tidy->cleanRepair();

// Saída
echo $tidy;
?>
```

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
