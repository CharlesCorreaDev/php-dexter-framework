# Vtiful\Kernel\Format negrito

> **Fonte / Source:** https://www.php.net/manual/pt_BR/vtiful-kernel-format.bold.php

---

# Vtiful\Kernel\Format::bold

(PECL xlswriter >= 1.2.1)

Vtiful\Kernel\Format::bold — Vtiful\Kernel\Format negrito

### Descrição

public function **Vtiful\Kernel\Format::bold**([resource](language.types.resource.md) `$handle`)

Formato negrito de [Vtiful\Kernel\Format](class.vtiful-kernel-format.md).

### Parâmetros

`handle`
:   Identificador do arquivo xlsx.

### Valor Retornado

Recurso

### Examples

**Exemplo #1 Exemplo de estilo negrito**

```
<?php
$config = [
    'path' => './tests'
];

$excel = new \Vtiful\Kernel\Excel($config);
$excel->fileName('tutorial01.xlsx');

$format = new \Vtiful\Kernel\Format($excel->getHandle());
$boldStyle = $format->bold()->toResource();

$excel->header(['name', 'age'])
    ->data([['viest', 21]])
    ->setColumn('A:A', 200, $boldStyle)
    ->output();
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
