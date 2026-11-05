# Retorna todos os valores que são enumerações com seus valores de enumeração em vez do inteiro bruto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.snmp-set-enum-print.php

---

# snmp\_set\_enum\_print

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

snmp\_set\_enum\_print — 
Retorna todos os valores que são enumerações com seus valores de enumeração em vez do inteiro bruto

### Descrição

function **snmp\_set\_enum\_print**([bool](language.types.boolean.md) `$enable`): [true](language.types.singleton.md)

Esta função alterna se snmpwalk/snmpget etc. devem procurar automaticamente valores de enumeração
na MIB e retorná-los junto com sua string legível.

### Parâmetros

`enable`
:   Como o valor é interpretado como booleano pela biblioteca Net-SNMP, ele só pode ser "0" ou "1".

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | O tipo do retorno agora é **`true`**; anteriormente, era [bool](language.types.boolean.md). |

### Examples

**Exemplo #1 Usando **snmp\_set\_enum\_print()****

```
<?php
 snmp_set_enum_print(0);
 echo snmpget('localhost', 'public', 'IF-MIB::ifOperStatus.3') . "\n";
 snmp_set_enum_print(1);
 echo snmpget('localhost', 'public', 'IF-MIB::ifOperStatus.3') . "\n";
?>
```

O exemplo acima retornaria

```
INTEGER: up(1)
 INTEGER: 1
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
