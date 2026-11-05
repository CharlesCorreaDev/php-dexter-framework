# Obtém o código da exceção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/exception.getcode.php

---

# Exception::getCode

(PHP 5, PHP 7, PHP 8)

Exception::getCode — Obtém o código da exceção

### Descrição

final public function **Exception::getCode**(): [int](language.types.integer.md)

Retorna o código da exceção.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o código da Exceção como um [int](language.types.integer.md) da
[Exception](class.exception.md) mas possivelmente outros tipos descendentes
de [Exception](class.exception.md) ([PDOException](class.pdoexception.md),
por exemplo, retorna como [string](language.types.string.md)).

### Examples

**Exemplo #1 Exemplo da **Exception::getCode()****

```
<?php
try {
    throw new Exception("Alguma mensagem de erro.", 30);
} catch(Exception $e) {
    echo "O código da exceção é: " . $e->getCode();
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
O código da exceção é: 30
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
