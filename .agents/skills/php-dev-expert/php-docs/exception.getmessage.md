# Obtém a mensagem da exceção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/exception.getmessage.php

---

# Exception::getMessage

(PHP 5, PHP 7, PHP 8)

Exception::getMessage — Obtém a mensagem da exceção

### Descrição

final public function **Exception::getMessage**(): [string](language.types.string.md)

Retorna a mensagem da exceção.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a mensagem da exceção como uma string.

### Examples

**Exemplo #1 Exemplo da **Exception::getMessage()****

```
<?php
try {
    throw new Exception("Alguma mensagem de erro.");
} catch(Exception $e) {
    echo $e->getMessage();
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Alguma mensagem de erro.
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
