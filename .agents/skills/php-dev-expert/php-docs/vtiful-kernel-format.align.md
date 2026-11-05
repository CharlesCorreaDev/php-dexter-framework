# Alinhamento de Vtiful\Kernel\Format

> **Fonte / Source:** https://www.php.net/manual/pt_BR/vtiful-kernel-format.align.php

---

# Vtiful\Kernel\Format::align

(PECL xlswriter >= 1.2.1)

Vtiful\Kernel\Format::align — Alinhamento de Vtiful\Kernel\Format

### Descrição

public function **Vtiful\Kernel\Format::align**([resource](language.types.resource.md) `$handle`, [int](language.types.integer.md) `$style`)

Define o alinhamento das células

### Parâmetros

`handle`
:   Identificador do arquivo xlsx.

`style`
:   Constante de [Vtiful\Kernel\Format](class.vtiful-kernel-format.md).

### Valor Retornado

Recurso

### Examples

**Exemplo #1 Exemplo de estilo de alinhamento**

```
<?php
$config = [
    'path' => './tests'
];

$excel = new \Vtiful\Kernel\Excel($config);
$excel->fileName('tutorial01.xlsx');

$format = new \Vtiful\Kernel\Format($excel->getHandle());
$alignStyle = $format->align(\Vtiful\Kernel\Format::FORMAT_ALIGN_LEFT)->toResource();

$excel->header(['name', 'age'])
    ->data([['viest', 21]])
    ->setColumn('A:A', 200, $alignStyle)
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
