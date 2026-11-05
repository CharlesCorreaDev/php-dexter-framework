# Obtém o último código de erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/snmp.geterrno.php

---

# SNMP::getErrno

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

SNMP::getErrno — Obtém o último código de erro

### Descrição

public function **SNMP::getErrno**(): [int](language.types.integer.md)

Retorna o código de erro da última solicitação SNMP.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um dos valores de código de erro SNMP descritos na seção sobre as constantes.

### Examples

**Exemplo #1 Exemplo de **SNMP::getErrno()****

```
<?php
$session = new SNMP(SNMP::VERSION_2c, '127.0.0.1', 'boguscommunity');
var_dump(@$session->get('.1.3.6.1.2.1.1.1.0'));
var_dump($session->getErrno() == SNMP::ERRNO_TIMEOUT);
?>
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
```

### Veja também

- [SNMP::getError()](snmp.geterror.md) - Obtém a última mensagem de erro

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
