# Vtiful\Kernel\Format itálico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/vtiful-kernel-format.italic.php

---

# Vtiful\Kernel\Format::italic

(PECL xlswriter >= 1.2.1)

Vtiful\Kernel\Format::italic — Vtiful\Kernel\Format itálico

### Descrição

public function **Vtiful\Kernel\Format::italic**([resource](language.types.resource.md) `$handle`)

Formato itálico de [Vtiful\Kernel\Format](class.vtiful-kernel-format.md).

### Parâmetros

`handle`
:   Identificador do arquivo xlsx.

### Valor Retornado

Recurso

### Examples

**Exemplo #1 Exemplo de estilo itálico**

```
<?php
$config = [
    'path' => './tests'
];

$excel = new \Vtiful\Kernel\Excel($config);
$excel->fileName('tutorial01.xlsx');

$format = new \Vtiful\Kernel\Format($excel->getHandle());
$italicStyle = $format->italic()->toResource();

$excel->header(['name', 'age'])
    ->data([['viest', 21]])
    ->setColumn('A:A', 200, $italicStyle)
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
