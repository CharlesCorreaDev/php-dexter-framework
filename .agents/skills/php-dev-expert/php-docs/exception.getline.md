# Obtém a linha na qual a exceção foi criada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/exception.getline.php

---

# Exception::getLine

(PHP 5, PHP 7, PHP 8)

Exception::getLine — Obtém a linha na qual a exceção foi criada

### Descrição

final public function **Exception::getLine**(): [int](language.types.integer.md)

Retorna o número da linha onde a exceção foi disparada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o número da linha onde a exceção foi disparada.

### Examples

**Exemplo #1 Exemplo da **Exception::getLine()****

```
<?php
try {
    throw new Exception("Alguma mensagem de erro");
} catch(Exception $e) {
    echo "A exceção foi criada na linha: " . $e->getLine();
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
A exceção foi criada na linha: 3
```

### Veja também

- [Throwable::getLine()](throwable.getline.md) - Obtém a linha na qual o objeto foi instanciado

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
