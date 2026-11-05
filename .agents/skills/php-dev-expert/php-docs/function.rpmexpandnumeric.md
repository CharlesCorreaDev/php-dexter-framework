# Recupera o valor numérico de uma macro RPM

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rpmexpandnumeric.php

---

# rpmexpandnumeric

(PECL rpminfo >= 1.2.0)

rpmexpandnumeric — Recupera o valor numérico de uma macro RPM

### Descrição

function **rpmexpandnumeric**([string](language.types.string.md) `$text`): [int](language.types.integer.md)

Recupera o valor numérico de uma macro RPM.

### Parâmetros

`text`
:   Texto com macros RPM para expandir.

### Valor Retornado

Expansão de macro como [int](language.types.integer.md).
Valores booleanos (`Y` ou `y` retorna 1,
`N` ou `n` retorna `0`)
também são permitidos.
Uma macro indefinida retorna `0`.

### Examples

**Exemplo #1 Um exemplo de **rpmexpandnumeric()****

```
<?php
$bits = rpmexpandnumeric("%__isa_bits");
print_r($bits);
?>
```

O exemplo acima produzirá:

```
64
```

### Veja também

- [rpmexpand()](function.rpmexpand.md) - Recupera o valor expandido de uma macro RPM

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
