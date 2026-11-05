# Recupera a mensagem de erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/error.getmessage.php

---

# Error::getMessage

(PHP 7, PHP 8)

Error::getMessage — Recupera a mensagem de erro

### Descrição

final public function **Error::getMessage**(): [string](language.types.string.md)

Recupera a mensagem de erro.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Recupera a mensagem de erro como uma string.

### Examples

**Exemplo #1 Exemplo do método **Error::getMessage()****

```
<?php
try {
    throw new Error("Mensagem de erro");
} catch(Error $e) {
    echo $e->getMessage();
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Mensagem de erro
```

### Veja também

- [Throwable::getMessage()](throwable.getmessage.md) - Obtém a mensagem

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
