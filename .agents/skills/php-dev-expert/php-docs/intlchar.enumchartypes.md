# Enumera todos os pontos de código com suas categorias gerais Unicode

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.enumchartypes.php

---

# IntlChar::enumCharTypes

(PHP 7, PHP 8)

IntlChar::enumCharTypes — Enumera todos os pontos de código com suas categorias gerais Unicode

### Descrição

public static function **IntlChar::enumCharTypes**([callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

Enumera de maneira eficiente todos os pontos de código com suas categorias gerais Unicode. É útil para construir
estruturas de dados, para enumerar todos os pontos de código atribuídos, etc.

Para cada invervalo contíguo de pontos de código com uma categoria geral fornecida ("tipo de caractere"), a
função `callback` é chamada. Intervalos adjacentes têm tipos diferentes. O Padrão Unicode
garante que o valor numérico do tipo esteja na faixa 0..31.

### Parâmetros

`callback`
:   A função que deve er chamada para cada intervalo contíguo de pontos de código com a mesma categoria geral.
    Os três argumentos a seguir serão passadoa à função:

    - [int](language.types.integer.md) `$start` - O ponto de código inicial do intervalo
    - [int](language.types.integer.md) `$end` - O ponto de código final do intervalo
    - [int](language.types.integer.md) `$name` - O tipo da categoria (uma das constantes `IntlChar::CHAR_CATEGORY_*`)

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de enumeração de um intervalo de pontos de código**

```
<?php
IntlChar::enumCharTypes(function($start, $end, $type) {
    printf("U+%04x até U+%04x estão na categoria %d\n", $start, $end, $type);
});
?>
```

O exemplo acima produzirá:

```
U+0000 até U+0020 estão na categoria 15
U+0020 até U+0021 estão na categoria 12
U+0021 até U+0024 estão na categoria 23
U+0024 até U+0025 estão na categoria 25
U+0025 até U+0028 estão na categoria 23
U+0028 até U+0029 estão na categoria 20
U+0029 até U+002a estão na categoria 21
U+002a até U+002b estão na categoria 23
U+002b até U+002c estão na categoria 24
U+002c até U+002d estão na categoria 23
U+002d até U+002e estão na categoria 19
U+002e até U+0030 estão na categoria 23
U+0030 até U+003a estão na categoria 9
...
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
