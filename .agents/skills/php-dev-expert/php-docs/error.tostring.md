# Representação em string do erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/error.tostring.php

---

# Error::\_\_toString

(PHP 7, PHP 8)

Error::\_\_toString — Representação em string do erro

### Descrição

public function **Error::\_\_toString**(): [string](language.types.string.md)

Retorna a representação em [string](language.types.string.md) do erro.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a representação do erro em [string](language.types.string.md).

### Examples

**Exemplo #1 Exemplo do método **Error::\_\_toString()****

```
<?php
try {
    throw new Error("Mensagem de erro.");
} catch(Error $e) {
    echo $e;
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Error: Mensagem de erro. in /home/bjori/tmp/ex.php:3
Stack trace:
#0 {main}
```

### Veja também

- [Throwable::\_\_toString()](throwable.tostring.md) - Obtém uma representação em string do objeto disparado

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
