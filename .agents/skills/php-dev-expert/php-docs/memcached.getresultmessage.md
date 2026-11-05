# Retorna a mensagem descrevendo o resultado da última operação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.getresultmessage.php

---

# Memcached::getResultMessage

(PECL memcached >= 1.0.0)

Memcached::getResultMessage — Retorna a mensagem descrevendo o resultado da última operação

### Descrição

public function **Memcached::getResultMessage**(): [string](language.types.string.md)

**Memcached::getResultMessage()** retorna uma string que
descreve o código de resultado do último método Memcached executado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Mensagem descrevendo o resultado da última operação do Memcached.

### Examples

**Exemplo #1 Exemplo de **Memcached::getResultMessage()****

```
<?php
$m = new Memcached();
$m->addServer('localhost', 11211);

$m->add('foo', 'bar'); // primeira vez deve ter sucesso
$m->add('foo', 'bar');
echo $m->getResultMessage(),"\n";
?>
```

O exemplo acima produzirá:

```
NOT STORED
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
