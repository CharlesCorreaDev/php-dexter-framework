# Calcula a distância Levenshtein entre duas strings

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.levenshtein.php

---

# levenshtein

(PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8)

levenshtein — Calcula a distância Levenshtein entre duas strings

### Descrição

function **levenshtein**(  
    [string](language.types.string.md) `$string1`,  
    [string](language.types.string.md) `$string2`,  
    [int](language.types.integer.md) `$insertion_cost` = 1,  
    [int](language.types.integer.md) `$replacement_cost` = 1,  
    [int](language.types.integer.md) `$deletion_cost` = 1  
): [int](language.types.integer.md)

A distância Levenshtein é definida como o número mínimo de
caracteres que devem ser substituídos, inseridos ou removidos para transformar
a `string1` na `string2`.
A complexidade do algoritmo é `O(m*n)`,
onde `n` e `m` são os
comprimentos da `string1` e da
`string2` (muito bom quando comparado com
[similar\_text()](function.similar-text.md), que é `O(max(n,m)**3)`,
mas mesmo assim é custoso).

Se `insertion_cost`, `replacement_cost`
e/ou `deletion_cost` não são iguais a `1`,
o algoritmo se adapta para escolher a transformação menos custosa.
Por exemplo, se `$insertion_cost + $deletion_cost < $replacement_cost`,
nenhuma substituição será feita, mas apenas inserções e remoções.

### Parâmetros

`string1`
:   Uma das strings a ser avaliada para a distância Levenshtein.

`string2`
:   Uma das strings a ser avaliada para a distância Levenshtein.

`insertion_cost`
:   Define o custo da inserção.

`replacement_cost`
:   Define o custo da substituição.

`deletion_cost`
:   Define o custo da remoção.

### Valor Retornado

Eta função retorna a distância Levenshtein entre as
duas strings.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Antes desta versão, **levenshtein()** tinha de ser chamada com dois ou com cinco argumentos. |
| 8.0.0 | Antes desta versão, **levenshtein()** retornaria `-1` se uma das strings fosse maior que 255 caracteres. |

### Examples

**Exemplo #1 Exemplo de **levenshtein()****

```
<?php
// palavra com erro ortográfico
$input = 'abacachi';

// array com palavras para comparação
$words  = array('maçã','abacaxi','banana','laranja',
                'rabanete','cenoura','ervilha','feijão','batata');

// nenhuma distância mais curta encontrada, ainda
$shortest = -1;

// itera pelas palavras para encontrar a mais próxima
foreach ($words as $word) {

    // calcula a distância entre a palavra de entrada
    // e a palavra atual
    $lev = levenshtein($input, $word);

    // verifica se há correspondência exata
    if ($lev == 0) {

        // a mais próxima é essa (correspondência exata)
        $closest = $word;
        $shortest = 0;

        // sai do loop; já foi encontrada a correspondência exata
        break;
    }

    // se esta distância for menor que a próxima
    // OU se se uma próxima palavra mais curta ainda não foi encontrada
    if ($lev <= $shortest || $shortest < 0) {
        // define a corrspondência mais próxima e a distância mais curta
        $closest  = $word;
        $shortest = $lev;
    }
}

echo "Palavra de entrada: $input\n";
if ($shortest == 0) {
    echo "Correspondência exata encontrada: $closest\n";
} else {
    echo "Você quis dizer: $closest?\n";
}

?>
```

O exemplo acima produzirá:

```
Palavra de entrada: abacachi
Você quis dizer: abacaxi?
```

### Veja também

- [soundex()](function.soundex.md) - Calcula a chave soundex de uma string
- [similar\_text()](function.similar-text.md) - Calcula a similaridade entre duas strings
- [metaphone()](function.metaphone.md) - Calcula a chave de Metaphone de uma string

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
