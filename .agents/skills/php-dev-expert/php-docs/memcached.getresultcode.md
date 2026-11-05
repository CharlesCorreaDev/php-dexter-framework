# Retorna o código de resultado da última operação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.getresultcode.php

---

# Memcached::getResultCode

(PECL memcached >= 0.1.0)

Memcached::getResultCode — Retorna o código de resultado da última operação

### Descrição

public function **Memcached::getResultCode**(): [int](language.types.integer.md)

**Memcached::getResultCode()** retorna uma das constantes
**`Memcached::RES_*`** que é o resultado do último
método Memcached executado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Código de resultado da última operação do Memcached.

### Examples

**Exemplo #1 Exemplo de **Memcached::getResultCode()****

```
<?php
$m = new Memcached();
$m->addServer('localhost', 11211);

$m->add('foo', 'bar');
if ($m->getResultCode() == Memcached::RES_NOTSTORED) {
    /* ... */
}
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
