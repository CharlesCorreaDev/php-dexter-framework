# Vtiful\Kernel\Excel setColumn

> **Fonte / Source:** https://www.php.net/manual/pt_BR/vtiful-kernel-excel.setColumn.php

---

# Vtiful\Kernel\Excel::setColumn

(PECL xlswriter >= 1.2.1)

Vtiful\Kernel\Excel::setColumn — Vtiful\Kernel\Excel setColumn

### Descrição

public function **Vtiful\Kernel\Excel::setColumn**([string](language.types.string.md) `$range`, [float](language.types.float.md) `$width`, [resource](language.types.resource.md) `$format` = ?)

Define o formato da coluna.

### Parâmetros

`range`
:   String com coordenadas de célula inicial e célula final.

`width`
:   Largura da coluna.

`format`
:   Recurso de formato da célula.

### Valor Retornado

Instância de [Vtiful\Kernel\Excel](class.vtiful-kernel-excel.md).

### Examples

**Exemplo #1 Exemplo de setColumn**

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
