# Vtiful\Kernel\Excel setRow

> **Fonte / Source:** https://www.php.net/manual/pt_BR/vtiful-kernel-excel.setRow.php

---

# Vtiful\Kernel\Excel::setRow

(PECL xlswriter >= 1.2.1)

Vtiful\Kernel\Excel::setRow — Vtiful\Kernel\Excel setRow

### Descrição

public function **Vtiful\Kernel\Excel::setRow**([string](language.types.string.md) `$range`, [float](language.types.float.md) `$height`, [resource](language.types.resource.md) `$format` = ?)

Define o formato da linha.

### Parâmetros

`range`
:   String com coordenadas de célula inicial e célula final.

`height`
:   Altura da linha.

`format`
:   Recurso de formato da célula.

### Valor Retornado

Instância de [Vtiful\Kernel\Excel](class.vtiful-kernel-excel.md).

### Examples

**Exemplo #1 Exemplo de setRow**

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
    ->setRow('A1', 20, $boldStyle)
    ->output();
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
