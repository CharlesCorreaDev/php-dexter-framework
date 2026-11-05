# Construtor de Vtiful\Kernel\Excel

> **Fonte / Source:** https://www.php.net/manual/pt_BR/vtiful-kernel-excel.construct.php

---

# Vtiful\Kernel\Excel::\_\_construct

(PECL xlswriter >= 1.2.1)

Vtiful\Kernel\Excel::\_\_construct — Construtor de Vtiful\Kernel\Excel

### Descrição

public function **Vtiful\Kernel\Excel::\_\_construct**([array](language.types.array.md) `$config`)

Construtor, cria um objeto da classe [Vtiful\Kernel\Excel](class.vtiful-kernel-excel.md).

### Parâmetros

`config`
:   Configuração de exportação do arquivo XLSX.

### Examples

**Exemplo #1 Exemplo**

```
<?php
$config = [
  'path' => '/home/viest'
];

$excelObject = new \Vtiful\Kernel\Excel($config);
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
