# Retorna o método como os valores SNMP serão retornados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.snmp-get-valueretrieval.php

---

# snmp\_get\_valueretrieval

(PHP 4 >= 4.3.3, PHP 5, PHP 7, PHP 8)

snmp\_get\_valueretrieval — 
Retorna o método como os valores SNMP serão retornados

### Descrição

function **snmp\_get\_valueretrieval**(): [int](language.types.integer.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Combinação OR de constantes (**`SNMP_VALUE_LIBRARY`** ou
**`SNMP_VALUE_PLAIN`**) com
possível conjunto SNMP\_VALUE\_OBJECT.

### Examples

**Exemplo #1 Usando **snmp\_get\_valueretrieval()****

```
<?php
 $ret = snmpget('localhost', 'public', 'IF-MIB::ifName.1');
 if (snmp_get_valueretrieval() & SNMP_VALUE_OBJECT) {
   echo $ret->value;
 } else {
   echo $ret;
 }
?>
```

### Veja também

- [snmp\_set\_valueretrieval()](function.snmp-set-valueretrieval.md) - Especifica o método como os valores SNMP serão retornados
- [Constantes predefinidas](snmp.constants.md)

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
