# Arredonda frações para cima

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ceil.php

---

# ceil

(PHP 4, PHP 5, PHP 7, PHP 8)

ceil — Arredonda frações para cima

### Descrição

function **ceil**([int](language.types.integer.md)|[float](language.types.float.md) `$num`): [float](language.types.float.md)

Retorna o próximo maior valor inteiro arredondando-se
`num` para cima, se necessário.

### Parâmetros

`num`
:   O valor a ser arredondado

### Valor Retornado

`num` arredondado pra o próximo
inteiro.
O valor retornado de **ceil()** ainda será do tipo
[float](language.types.float.md) porque a faixa de valores suportados por [float](language.types.float.md)
é normalmente maior do que o do tipo [int](language.types.integer.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `num` não mais aceita objetos internos que suportam conversão numérica. |

### Examples

**Exemplo #1 Exemplo de **ceil()****

```
<?php
echo ceil(4.3), PHP_EOL;    // 5
echo ceil(9.999), PHP_EOL;  // 10
echo ceil(-3.14), PHP_EOL; // -3
?>
```

### Veja também

- [floor()](function.floor.md) - Arredonda frações para baixo
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
