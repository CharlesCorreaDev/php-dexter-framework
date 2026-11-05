# Obtém o prefixo do método de hash preferido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.crypt-preferred-method.php

---

# crypt\_preferred\_method

(PECL xpass >= 1.1.0)

crypt\_preferred\_method — Obtém o prefixo do método de hash preferido

### Descrição

function **crypt\_preferred\_method**(): [?](language.types.null.md)[string](language.types.string.md)

Obtém o prefixo do método de hash preferido.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string com o prefixo, ou **`null`** em caso de erro.

### Examples

**Exemplo #1 Um exemplo de **crypt\_preferred\_method()****

```
<?php
var_dump(crypt_preferred_method());
?>
```

O exemplo acima produzirá:

```
string(3) "$y$"
```

### Veja também

- [crypt\_gensalt()](function.crypt-gensalt.md) - Compila uma string para uso como argumento salt para crypt

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
