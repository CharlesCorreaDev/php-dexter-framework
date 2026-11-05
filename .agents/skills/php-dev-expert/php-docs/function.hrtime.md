# Obtém o tempo de alta resolução do sistema

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.hrtime.php

---

# hrtime

(PHP 7 >= 7.3.0, PHP 8)

hrtime — Obtém o tempo de alta resolução do sistema

### Descrição

function **hrtime**([bool](language.types.boolean.md) `$as_number` = **`false`**): [array](language.types.array.md)|[int](language.types.integer.md)|[float](language.types.float.md)|[false](language.types.singleton.md)

Retorna o tempo em alta resolução do sistema, contado a partir de um ponto arbitrário no tempo.
O timestamp fornecido é monotônico e não pode ser ajustado.

### Parâmetros

`as_number`
:   Define se o tempo em alta resolução deve ser retornado como [array](language.types.array.md)
    ou como número.

### Valor Retornado

Retorna um array de inteiros na forma [segundos, nanossegundos], se o
parâmetro `as_number` for falso. Caso contrário, os nanossegundos
são retornados como [int](language.types.integer.md) (plataformas 64 bits) ou [float](language.types.float.md)
(plataformas 32 bits).
Retorna **`false`** em caso de falha.

### Examples

**Exemplo #1 Uso de **hrtime()****

```
<?php
echo hrtime(true), PHP_EOL;
print_r(hrtime());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
10444739687370679
Array
(
    [0] => 10444739
    [1] => 687464812
)
```

### Veja também

- A extensão de [Tempo de alta resolução](book.hrtime.md)
- [microtime()](function.microtime.md) - Retorna o timestamp Unix atual com microssegundos

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
