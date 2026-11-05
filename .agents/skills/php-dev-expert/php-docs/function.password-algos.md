# Obtém IDs de algoritmos disponíveis de hash de senhas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.password-algos.php

---

# password\_algos

(PHP 7 >= 7.4.0, PHP 8)

password\_algos — Obtém IDs de algoritmos disponíveis de hash de senhas

### Descrição

function **password\_algos**(): [array](language.types.array.md)

Retorna uma lista completa de todos os IDs de algoritmos registrados de hash de senhas como um [array](language.types.array.md) de [string](language.types.string.md)s.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna os IDs de algoritmos disponíveis de hash de senhas.

### Examples

**Exemplo #1 Uso básico de **password\_algos()****

```
<?php
print_r(password_algos());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => 2y
    [1] => argon2i
    [2] => argon2id
)
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
