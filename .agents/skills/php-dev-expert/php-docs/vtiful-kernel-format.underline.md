# Vtiful\Kernel\Format sublinhado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/vtiful-kernel-format.underline.php

---

# Vtiful\Kernel\Format::underline

(PECL xlswriter >= 1.2.1)

Vtiful\Kernel\Format::underline — Vtiful\Kernel\Format sublinhado

### Descrição

public function **Vtiful\Kernel\Format::underline**([resource](language.types.resource.md) `$handle`, [int](language.types.integer.md) `$style`)

Formato sublinhado de [Vtiful\Kernel\Format](class.vtiful-kernel-format.md).

### Parâmetros

`handle`
:   Identificador do arquivo xlsx.

`style`
:   Constante de [Vtiful\Kernel\Format](class.vtiful-kernel-format.md).

### Valor Retornado

Recurso

### Examples

**Exemplo #1 Exemplo de estilo sublinhado**

```
<?php
$config = [
    'path' => './tests'
];

$excel = new \Vtiful\Kernel\Excel($config);
$excel->fileName('tutorial01.xlsx');

$format = new \Vtiful\Kernel\Format($excel->getHandle());
$underlineStyle = $format->underline(\Vtiful\Kernel\Format::UNDERLINE_SINGLE)->toResource();

$excel->header(['name', 'age'])
    ->data([['viest', 21]])
    ->setColumn('A:A', 200, $underlineStyle)
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
