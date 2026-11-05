# Lê e analisa um arquivo MIB na árvore MIB ativa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.snmp-read-mib.php

---

# snmp\_read\_mib

(PHP 5, PHP 7, PHP 8)

snmp\_read\_mib — 
Lê e analisa um arquivo MIB na árvore MIB ativa

### Descrição

function **snmp\_read\_mib**([string](language.types.string.md) `$filename`): [bool](language.types.boolean.md)

Esta função é usada para carregar MIBs adicionais, por exemplo, específicos do fornecedor, para que
OIDs legíveis por humanos, como `VENDOR-MIB::foo.1`, em vez de OIDs numéricos propensos a erros,
possam ser usados.

A ordem em que os MIBs são carregados importa, pois a biblioteca Net-SNMP
subjacente imprimirá avisos se os objetos referenciados não puderem ser resolvidos.

### Parâmetros

`filename`
:   O nome do arquivo do MIB.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Usando **snmp\_read\_mib()****

```
<?php
 print_r( snmprealwalk('localhost', 'public', '.1.3.6.1.2.1.2.3.4.5') );

 snmp_read_mib('./FOO-BAR-MIB.txt');
 print_r( snmprealwalk('localhost', 'public', 'FOO-BAR-MIB::someTable') );
?>
```

O exemplo acima é inventado, mas os resultados seriam assim:

```
Array
(
    [iso.3.6.1.2.1.2.3.4.5.0] => Gauge32: 6
)
Array
(
    [FOO-BAR-MIB::someTable.0] => Gauge32: 6
)
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
