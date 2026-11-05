# Obtém o status do documento especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tidy.getstatus.php

---

# tidy::getStatus

# tidy\_get\_status

(PHP 5, PHP 7, PHP 8, PECL tidy >= 0.5.2)

tidy::getStatus -- tidy\_get\_status — Obtém o status do documento especificado

### Descrição

Estilo orientado a objetos

public function **tidy::getStatus**(): [int](language.types.integer.md)

Estilo procedural

function **tidy\_get\_status**([tidy](class.tidy.md) `$tidy`): [int](language.types.integer.md)

Retorna o status do `tidy` especificado.

### Parâmetros

`tidy`
:   Um objeto [Tidy](class.tidy.md).

### Valor Retornado

Retorna 0 se nenhum erro/aviso foi gerado, 1 para avisos ou erros de
acessibilidade ou 2 para erros.

### Examples

**Exemplo #1 Exemplo de **tidy::getStatus()****

```
<?php
$html = '<p>paragraph</i>';
$tidy = new tidy();
$tidy->parseString($html);

$tidy2 = new tidy();
$html2 = '<bogus>test</bogus>';
$tidy2->parseString($html2);

echo $tidy->getStatus();  // 1

echo $tidy2->getStatus(); // 2
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
