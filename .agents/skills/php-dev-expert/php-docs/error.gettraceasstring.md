# Recupera a pilha de rastreio como uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/error.gettraceasstring.php

---

# Error::getTraceAsString

(PHP 7, PHP 8)

Error::getTraceAsString — Recupera a pilha de rastreio como uma string

### Descrição

final public function **Error::getTraceAsString**(): [string](language.types.string.md)

Recupera a pilha de rastreio como uma string.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Recupera a pilha de rastreio como uma string.

### Examples

**Exemplo #1 Exemplo do método **Error::getTraceAsString()****

```
<?php
function test() {
    throw new Error;
}

try {
    test();
} catch(Error $e) {
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
