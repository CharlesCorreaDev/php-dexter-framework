# Ordena um array utilizando o algoritmo de "ordem natural" sem diferenciar maiúsculas e minúsculas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.natcasesort.php

---

# natcasesort

(PHP 4, PHP 5, PHP 7, PHP 8)

natcasesort — Ordena um array utilizando o algoritmo de "ordem natural" sem diferenciar maiúsculas e minúsculas

### Descrição

function **natcasesort**([array](language.types.array.md) `&$array`): [true](language.types.singleton.md)

**natcasesort()** é uma versão insensível a
maiúsculas/minúsculas de [natsort()](function.natsort.md).

Essa função implementa o algoritmo de ordenação que classifica
strings alfanuméricas da forma que humanos fariam mantendo associação de
chave/valor. Essa forma de ordenação é denominada "ordenação natural".

> **Nota**:
>
> Se dois elementos são comparados como iguais, eles mantêm sua ordem original.
> Antes do PHP 8.0.0, sua ordem relativa no array ordenado era indefinida.

> **Nota**:
>
> Redefine o ponteiro interno do array para o primeiro elemento.

### Parâmetros

`array`
:   O array de entrada.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | O tipo do retorno agora é **`true`**; anteriormente, era [bool](language.types.boolean.md). |

### Examples

**Exemplo #1 Exemplo de **natcasesort()****

```
<?php
$array1 = $array2 = array('IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png');

sort($array1);
echo "Ordenação padrão\n";
print_r($array1);

natcasesort($array2);
echo "\nOrdenação natural (insensível a maiúsculas/minúsculas)\n";
print_r($array2);
?>
```

O exemplo acima produzirá:

```
Ordenação padrão
Array
(
    [0] => IMG0.png
    [1] => IMG3.png
    [2] => img1.png
    [3] => img10.png
    [4] => img12.png
    [5] => img2.png
)

Ordenação natural (insensível a maiúsculas/minúsculas)
Array
(
    [0] => IMG0.png
    [4] => img1.png
    [3] => img2.png
    [5] => IMG3.png
    [2] => img10.png
    [1] => img12.png
)
```

Para mais informação, consulte a página [» Natural Order String Comparison](https://github.com/sourcefrog/natsort)
de Martin Pool.

### Veja também

- [natsort()](function.natsort.md) - Ordena um array utilizando o algoritmo de "ordem natural"
- [Comparação entre as funções de ordenação de array](array.sorting.md)
- [strnatcmp()](function.strnatcmp.md) - Comparações de strings usando um algoritmo de "ordem natural"
- [strnatcasecmp()](function.strnatcasecmp.md) - Comparação de strings insensível a maiúsculas/minúsculas usando o algoritmo de "ordem natural"

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
