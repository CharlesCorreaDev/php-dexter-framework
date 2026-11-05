# Obtém a stack trace como uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/exception.gettraceasstring.php

---

# Exception::getTraceAsString

(PHP 5, PHP 7, PHP 8)

Exception::getTraceAsString — Obtém a stack trace como uma string

### Descrição

final public function **Exception::getTraceAsString**(): [string](language.types.string.md)

Retorna a stack trace da exceção como uma string.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a stack trace da exceção como uma string.

### Examples

**Exemplo #1 Exemplo da **Exception::getTraceAsString()****

```
<?php
function test() {
    throw new Exception;
}

try {
    test();
} catch(Exception $e) {
    echo $e->getTraceAsString();
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
#0 /home/bjori/tmp/ex.php(7): test()
#1 {main}
```

### Veja também

- [Throwable::getTraceAsString()](throwable.gettraceasstring.md) - Obtém o rastreamento de pilha como uma string

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
