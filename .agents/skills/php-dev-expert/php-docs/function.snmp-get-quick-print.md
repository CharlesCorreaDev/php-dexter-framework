# Busca o valor atual da configuração quick_print da biblioteca NET-SNMP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.snmp-get-quick-print.php

---

# snmp\_get\_quick\_print

(PHP 4, PHP 5, PHP 7, PHP 8)

snmp\_get\_quick\_print — 
Busca o valor atual da configuração quick\_print da biblioteca NET-SNMP

### Descrição

function **snmp\_get\_quick\_print**(): [bool](language.types.boolean.md)

Retorna o valor atual armazenado na Biblioteca NET-SNMP para quick\_print.
quick\_print é desativado por padrão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se quick\_print estiver ativado, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **snmp\_get\_quick\_print()****

```
<?php
$quickprint = snmp_get_quick_print();
?>
```

### Veja também

- [snmp\_set\_quick\_print()](function.snmp-set-quick-print.md) - Define o valor de enable dentro da biblioteca NET-SNMP para uma descrição completa
  do que o quick\_print faz.

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
