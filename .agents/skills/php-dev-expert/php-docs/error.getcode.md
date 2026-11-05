# Recupera o código do erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/error.getcode.php

---

# Error::getCode

(PHP 7, PHP 8)

Error::getCode — Recupera o código do erro

### Descrição

final public function **Error::getCode**(): [int](language.types.integer.md)

Retorna o código do erro.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o código do erro como um [int](language.types.integer.md)

### Examples

**Exemplo #1 Exemplo do método **Error::getCode()****

```
<?php
try {
    throw new Error("Mensagem de erro", 30);
} catch(Error $e) {
    echo "O código do erro é: " . $e->getCode();
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
O código do erro é: 30
```

### Veja também

- [Throwable::getCode()](throwable.getcode.md) - Obtém o código da exceção

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
