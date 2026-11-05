# Arredonda frações para baixo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.floor.php

---

# floor

(PHP 4, PHP 5, PHP 7, PHP 8)

floor — Arredonda frações para baixo

### Descrição

function **floor**([int](language.types.integer.md)|[float](language.types.float.md) `$num`): [float](language.types.float.md)

Retorna o próximo menor valor inteiro (como float), arredondando
`num` para baixo, se necessário.

### Parâmetros

`num`
:   O valor numérico a ser arredondado

### Valor Retornado

`num` arredondado para o inteiro menor mais próximo.
O valor retornado por **floor()** ainda será do tipo
[float](language.types.float.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `num` não mais aceita tipos internos que suportam conversão numérica. |

### Examples

**Exemplo #1 Exemplos de **floor()****

```
<?php
echo floor(4.3), PHP_EOL;   // 4
echo floor(9.999), PHP_EOL; // 9
echo floor(-3.14), PHP_EOL; // -4
?>
```

### Veja também

- [ceil()](function.ceil.md) - Arredonda frações para cima
- [round()](function.round.md) - Arredonda um float

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
