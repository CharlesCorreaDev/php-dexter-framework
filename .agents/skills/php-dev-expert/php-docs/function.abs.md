# Valor absoluto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.abs.php

---

# abs

(PHP 4, PHP 5, PHP 7, PHP 8)

abs — Valor absoluto

### Descrição

function **abs**([int](language.types.integer.md)|[float](language.types.float.md) `$num`): [int](language.types.integer.md)|[float](language.types.float.md)

Retorna o valor absoluto de `num`.

### Parâmetros

`num`
:   O valor numérico a processar

### Valor Retornado

O valor absoluto de `num`. Se o
argumento `num` for
do tipo [float](language.types.float.md), o número retornado também será [float](language.types.float.md),
caso contrário será [int](language.types.integer.md) (pois [float](language.types.float.md) normalmente
tem uma faixa de valores maior que [int](language.types.integer.md)).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `num` não aceita mais objetos internos que suportem conversão numérica. |

### Examples

**Exemplo #1 Exemplo de **abs()****

```
<?php
var_dump(abs(-4.2));
var_dump(abs(5));
var_dump(abs(-5));
?>
```

O exemplo acima produzirá:

```
float(4.2)
int(5)
int(5)
```

### Veja também

- [gmp\_abs()](function.gmp-abs.md) - Valor absoluto
- [gmp\_sign()](function.gmp-sign.md) - Sinal do número

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
