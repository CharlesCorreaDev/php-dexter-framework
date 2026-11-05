# Ordena um array utilizando o algoritmo de "ordem natural"

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.natsort.php

---

# natsort

(PHP 4, PHP 5, PHP 7, PHP 8)

natsort — Ordena um array utilizando o algoritmo de "ordem natural"

### Descrição

function **natsort**([array](language.types.array.md) `&$array`): [true](language.types.singleton.md)

Essa função implementa um algoritmo que ordena strings alfanuméricas
da forma como um ser humano faria enquanto mantém associações de chave/valor.
Isto é descrito como "ordenação natural". Um exemplo da diferença entre
este algoritmo e o algoritmo de ordenação comum de strings
(usado em [sort()](function.sort.md)) pode ser visto no exemplo abaixo:

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

**Exemplo #1 Exemplo de **natsort()** demonstrando seu uso básico**

```
<?php
$array1 = $array2 = array("img12.png", "img10.png", "img2.png", "img1.png");

asort($array1);
echo "Classificação padrão\n";
print_r($array1);

natsort($array2);
echo "\nClassificação em ordem natural\n";
print_r($array2);
?>
```

O exemplo acima produzirá:

```
Classificação padrão
Array
(
    [3] => img1.png
    [1] => img10.png
    [0] => img12.png
    [2] => img2.png
)

Classificação em ordem natural
Array
(
    [3] => img1.png
    [2] => img2.png
    [1] => img10.png
    [0] => img12.png
)
```

Para mais informações, consulte a página [» Comparação de Strings em Ordem Natural](https://github.com/sourcefrog/natsort)
do autor Martin Pool.

**Exemplo #2 Exemplos de **natsort()** demonstrando potenciais ciladas**

```
<?php
echo "Números negativos\n";
$negativos = array('-5','3','-2','0','-1000','9','1');
print_r($negativos);
natsort($negativos);
print_r($negativos);

echo "Zero à esquerda\n";
$zeros = array('09', '8', '10', '009', '011', '0');
print_r($zeros);
natsort($zeros);
print_r($zeros);
?>
```

O exemplo acima produzirá:

```
Números negativos
Array
(
    [0] => -5
    [1] => 3
    [2] => -2
    [3] => 0
    [4] => -1000
    [5] => 9
    [6] => 1
)
Array
(
    [2] => -2
    [0] => -5
    [4] => -1000
    [3] => 0
    [6] => 1
    [1] => 3
    [5] => 9
)
Zero à esquerda
Array
(
    [0] => 09
    [1] => 8
    [2] => 10
    [3] => 009
    [4] => 011
    [5] => 0
)
Array
(
    [5] => 0
    [1] => 8
    [0] => 09
    [3] => 009
    [2] => 10
    [4] => 011
)
```

### Veja também

- [natcasesort()](function.natcasesort.md) - Ordena um array utilizando o algoritmo de "ordem natural" sem diferenciar maiúsculas e minúsculas
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
