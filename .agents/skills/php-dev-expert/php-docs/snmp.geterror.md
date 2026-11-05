# Obtém a última mensagem de erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/snmp.geterror.php

---

# SNMP::getError

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

SNMP::getError — Obtém a última mensagem de erro

### Descrição

public function **SNMP::getError**(): [string](language.types.string.md)

Retorna string com erro da última solicitação SNMP.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

String descrevendo o erro da última solicitação SNMP.

### Examples

**Exemplo #1 Exemplo de **SNMP::getError()****

```
<?php
$session = new SNMP(SNMP::VERSION_2c, '127.0.0.1', 'boguscommunity');
var_dump(@$session->get('.1.3.6.1.2.1.1.1.0'));
var_dump($session->getError());
?>
```

O exemplo acima produzirá:

```
bool(false)
string(26) "No response from 127.0.0.1"
```

### Veja também

- [SNMP::getErrno()](snmp.geterrno.md) - Obtém o último código de erro

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
