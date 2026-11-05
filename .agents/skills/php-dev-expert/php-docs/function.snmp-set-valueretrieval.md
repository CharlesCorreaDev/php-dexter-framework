# Especifica o método como os valores SNMP serão retornados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.snmp-set-valueretrieval.php

---

# snmp\_set\_valueretrieval

(PHP 4 >= 4.3.3, PHP 5, PHP 7, PHP 8)

snmp\_set\_valueretrieval — 
Especifica o método como os valores SNMP serão retornados

### Descrição

function **snmp\_set\_valueretrieval**([int](language.types.integer.md) `$method`): [true](language.types.singleton.md)

### Parâmetros

`method`
:   **Tipos**

    |  |  |
    | --- | --- |
    | SNMP\_VALUE\_LIBRARY | Os valores de retorno serão aqueles retornados pela biblioteca Net-SNMP. |
    | SNMP\_VALUE\_PLAIN | Os valores de retorno serão o valor simples sem as informações do tipo SNMP. |
    | SNMP\_VALUE\_OBJECT | Os valores de retorno serão objetos com as propriedades `value` e `type`, onde esta última é uma das constantes **`SNMP_OCTET_STR`**, **`SNMP_COUNTER`** etc. A forma como `value` é retornado depende de qual das constantes **`SNMP_VALUE_LIBRARY`**, **`SNMP_VALUE_PLAIN`** está definida. |

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | O tipo do retorno agora é **`true`**; anteriormente, era [bool](language.types.boolean.md). |

### Examples

**Exemplo #1 Usando
**snmp\_set\_valueretrieval()****

```
<?php
 snmp_set_valueretrieval(SNMP_VALUE_LIBRARY);
 $ret = snmpget('localhost', 'public', 'IF-MIB::ifName.1');
 // $ret = "STRING: lo"

 snmp_set_valueretrieval(SNMP_VALUE_PLAIN);
 $ret = snmpget('localhost', 'public', 'IF-MIB::ifName.1');
 // $ret = "lo";

 snmp_set_valueretrieval(SNMP_VALUE_OBJECT);
 $ret = snmpget('localhost', 'public', 'IF-MIB::ifName.1');
 // stdClass Object
 // (
 //   [type] => 4        <-- SNMP_OCTET_STR, veja as constantes
 //   [value] => lo
 // )

 snmp_set_valueretrieval(SNMP_VALUE_OBJECT | SNMP_VALUE_PLAIN);
 $ret = snmpget('localhost', 'public', 'IF-MIB::ifName.1');
 // stdClass Object
 // (
 //   [type] => 4        <-- SNMP_OCTET_STR, veja as constantes
 //   [value] => lo
 // )

 snmp_set_valueretrieval(SNMP_VALUE_OBJECT | SNMP_VALUE_LIBRARY);
 $ret = snmpget('localhost', 'public', 'IF-MIB::ifName.1');
 // stdClass Object
 // (
 //   [type] => 4        <-- SNMP_OCTET_STR, veja as constantes
 //   [value] => STRING: lo
 // )

?>
```

### Veja também

- [snmp\_get\_valueretrieval()](function.snmp-get-valueretrieval.md) - Retorna o método como os valores SNMP serão retornados
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
