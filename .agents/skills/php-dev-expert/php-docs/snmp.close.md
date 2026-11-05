# Fecha a sessão SNMP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/snmp.close.php

---

# SNMP::close

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

SNMP::close — Fecha a sessão SNMP

### Descrição

public function **SNMP::close**(): [bool](language.types.boolean.md)

Libera objeto de sessão SNMP alocado anteriormente.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SNMP::close()****

```
<?php
  $session = new SNMP(SNMP::VERSION_1, "127.0.0.1", "public");
  # ...
  # get, walk, etc vêm aqui
  # ...
  $session->close();
?>
```

### Veja também

- [SNMP::\_\_construct()](snmp.construct.md) - Cria uma instância SNMP representando a sessão para o agente SNMP remoto

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
