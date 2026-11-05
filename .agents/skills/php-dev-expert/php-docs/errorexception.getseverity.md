# Obtém o nível da exceção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/errorexception.getseverity.php

---

# ErrorException::getSeverity

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

ErrorException::getSeverity — Obtém o nível da exceção

### Descrição

final public function **ErrorException::getSeverity**(): [int](language.types.integer.md)

Retorna o nível da exceção.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o nível da exceção.

### Examples

**Exemplo #1 Exemplo do método **ErrorException::getSeverity()****

```
<?php
try {
    throw new ErrorException("Exception message", 0, E_USER_ERROR);
} catch(ErrorException $e) {
    echo "A severidade desta exceção é: " . $e->getSeverity();
    var_dump($e->getSeverity() === E_USER_ERROR);
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
A severidade desta exceção é: 256
bool(true)
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
