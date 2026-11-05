# Comprime uma string em dados codificados com bzip2

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.bzcompress.php

---

# bzcompress

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

bzcompress — Comprime uma string em dados codificados com bzip2

### Descrição

function **bzcompress**([string](language.types.string.md) `$data`, [int](language.types.integer.md) `$block_size` = 4, [int](language.types.integer.md) `$work_factor` = 0): [string](language.types.string.md)|[int](language.types.integer.md)

**bzcompress()** comprime a string fornecida e retorna-a
como dados codificados com bzip2.

### Parâmetros

`data`
:   A string a comprimir.

`block_size`
:   Especifica o tamanho de bloco usado durante a compressão e deve ser um número
    de 1 a 9, sendo 9 a melhor compressão mas usando mais
    recursos para fazê-la.

`work_factor`
:   Controla como a fase de compressão se comporta quando apresentada com o pior
    caso, dados de entrada altamente repetitivos. O valor pode ser entre 0 e
    250, sendo 0 um caso especial.

    Independente do parâmetro `work_factor`, a saída
    gerada é a mesma.

### Valor Retornado

A string comprimida, ou um número de erro se um erro ocorrer.

### Examples

**Exemplo #1 Comprimindo dados**

```
<?php
$str = "dado de exemplo";
$bzstr = bzcompress($str, 9);
echo $bzstr;
?>
```

### Veja também

- [bzdecompress()](function.bzdecompress.md) - Descomprime dados codificados com bzip2

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
