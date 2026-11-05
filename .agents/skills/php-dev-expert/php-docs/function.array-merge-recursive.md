# Mescla um ou mais arrays recursivamente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-merge-recursive.php

---

# array\_merge\_recursive

(PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8)

array\_merge\_recursive — Mescla um ou mais arrays recursivamente

### Descrição

function **array\_merge\_recursive**([array](language.types.array.md) `...$arrays`): [array](language.types.array.md)

**array\_merge\_recursive()** mescla os elementos de
um ou mais arrays de forma que os elementos de um são colocados
no final do array anterior. Retorna o array resultante da fusão.

Se os arrays dados tem as mesmas chaves string, então os valores para
uma chave são mesclados em um array, e isso é feito recursivamente,
sendo que, se um dos valores for um array também, este função irá mesclá-lo
com os valores correspondentes no array resultante também. Se, no
entanto, os arrays tem as mesmas chaves numéricas, o último valor para
uma chave não sobrescreverá o valor original, e sim adicionado ao array resultante.

### Parâmetros

`arrays`
:   Lista variável de arrays para mesclar recursivamente.

### Valor Retornado

Um array de valores resultados da mesclagem dos argumentos.
Se chamada sem nenhum argumento, retorna um [array](language.types.array.md) vazio.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.4.0 | Essa função agora pode ser chamada sem nenhum parâmetro. Anteriormente, pelo menos um parâmetro era necessário. |

### Examples

**Exemplo #1 Exemplo de **array\_merge\_recursive()****

```
<?php
$ar1 = array("cor" => array ("favorita" => "vermelho"), 5);
$ar2 = array(10, "cor" => array ("favorita" => "verde", "azul"));
$result = array_merge_recursive($ar1, $ar2);
print_r($result);
?>
```

O exemplo acima produzirá:

```
Array
(
    [cor] => Array
        (
            [favorita] => Array
                (
                    [0] => vermelho
                    [1] => verde
                )

            [0] => azul
        )

    [0] => 5
    [1] => 10
)
```

### Veja também

- [array\_merge()](function.array-merge.md) - Combina um ou mais arrays
- [array\_replace\_recursive()](function.array-replace-recursive.md) - Substitui elementos de arrays passado no primeiro array recursivamente

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
