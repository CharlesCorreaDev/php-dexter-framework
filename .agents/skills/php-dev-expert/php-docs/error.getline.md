# Recupera a linha onde o erro ocorreu

> **Fonte / Source:** https://www.php.net/manual/pt_BR/error.getline.php

---

# Error::getLine

(PHP 7, PHP 8)

Error::getLine — Recupera a linha onde o erro ocorreu

### Descrição

final public function **Error::getLine**(): [int](language.types.integer.md)

Recupera o número da linha onde o erro ocorreu.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o número da linha onde o erro ocorreu.

### Examples

**Exemplo #1 Exemplo do método **Error::getLine()****

```
<?php
try {
    throw new Error("Mensagem de erro");
} catch(Error $e) {
    echo "O erro foi criado na linha: " . $e->getLine();
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
O erro foi criado na linha: 3
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
