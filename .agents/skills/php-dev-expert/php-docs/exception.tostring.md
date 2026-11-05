# Representação em string da exceção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/exception.tostring.php

---

# Exception::\_\_toString

(PHP 5, PHP 7, PHP 8)

Exception::\_\_toString — Representação em string da exceção

### Descrição

public function **Exception::\_\_toString**(): [string](language.types.string.md)

Retorna a representação [string](language.types.string.md) da exceção.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a representação [string](language.types.string.md) da exceção.

### Examples

**Exemplo #1 Exemplo da **Exception::\_\_toString()****

```
<?php
try {
    throw new Exception("Alguma mensagem de erro.");
} catch(Exception $e) {
    echo $e;
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
exception 'Exception' with message 'Alguma mensagem de erro.' in /home/bjori/tmp/ex.php:3
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
