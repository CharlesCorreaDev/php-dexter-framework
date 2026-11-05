# Descomprime dados codificados com bzip2

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.bzdecompress.php

---

# bzdecompress

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

bzdecompress — Descomprime dados codificados com bzip2

### Descrição

function **bzdecompress**([string](language.types.string.md) `$data`, [bool](language.types.boolean.md) `$use_less_memory` = **`false`**): [string](language.types.string.md)|[int](language.types.integer.md)|[false](language.types.singleton.md)

**bzdecompress()** descomprime a string fornecida que contém
dados codificados com bzip2.

### Parâmetros

`data`
:   A string a ser descomprimida.

`use_less_memory`
:   Se **`true`**, uma algoritmo alternativo de descompressão que usa menos
    memória será usado (o requisito máximo de memória baixa para um valor em torno de 2300K)
    mas trabalha com a metade da velocidade aproximadamente.

    Consulte a [» documentação bzip2](https://www.sourceware.org/bzip2/) para mais
    informações sobre este recurso.

### Valor Retornado

A string descomprimida, ou **`false`** ou um número de erro se um erro ocorrer.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O tipo do parâmetro `use_less_memory` mudou de [int](language.types.integer.md) para [bool](language.types.boolean.md). Anteriormente, o valor padrão era `0`. |

### Examples

**Exemplo #1 Descomprimindo uma String**

```
<?php
$start_str = "O rato roeu a roupa do rei de Roma.";
$bzstr = bzcompress($start_str);

echo "String Comprimida: ";
echo $bzstr;
echo "\n<br />\n";

$str = bzdecompress($bzstr);
echo "String Descomprimida: ";
echo $str;
echo "\n<br />\n";
?>
```

### Veja também

- [bzcompress()](function.bzcompress.md) - Comprime uma string em dados codificados com bzip2

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
