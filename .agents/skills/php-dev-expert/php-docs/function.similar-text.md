# Calcula a similaridade entre duas strings

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.similar-text.php

---

# similar\_text

(PHP 4, PHP 5, PHP 7, PHP 8)

similar\_text — Calcula a similaridade entre duas strings

### Descrição

function **similar\_text**([string](language.types.string.md) `$string1`, [string](language.types.string.md) `$string2`, [float](language.types.float.md) `&$percent` = **`null`**): [int](language.types.integer.md)

Calcula a similaridade entre duas strings como descrito em
Programming Classics: Implementing the World's Best Algorithms by Oliver (ISBN 0-131-00413-1). Note que esta implementação não usa uma
pilha como no pseudo-código de Oliver, mas chamadas recursivas que podem ou não
acelerar todo o processo. Note também que a complexidade deste algoritmo
é O(N\*\*3) onde N é o tamanho da string mais longa.

### Parâmetros

`string1`
:   A primeira string.

`string2`
:   A segunda string.

    > **Nota**:
    >
    > Trocar a `string1` de lugar com
    > a `string2` pode gerar um resultado diferente; veja o
    > exemplo abaixo.

`percent`
:   Ao passar referência como terceiro argumento,
    **similar\_text()** irá calcular a similaridade em
    percentual, dividindo o resultado de **similar\_text()** percentual
    média de comprimentos das strings fornecidas vezes
    `100`.

### Valor Retornado

Retorna o número de caracteres correspondentes em ambas as strings.

O número de caracteres correspondentes é calculado encontrando-se a primeira substring
comum mais longa, e depois fazendo o mesmo para os prefixos e sufixos,
recursivamente. Os comprimentos de todas as substrings comuns encontradas são somados.

### Examples

**Exemplo #1 Exemplo de **similar\_text()** com inversão de ordem de argumentos**

Este exemplo mostra que a inversão da ordem de `string1` e
`string2` pode gerar resultados diferentes.

```
<?php
$sim = similar_text('bafoobar', 'barfoo', $perc);
echo "similarity: $sim ($perc %)\n";
$sim = similar_text('barfoo', 'bafoobar', $perc);
echo "similarity: $sim ($perc %)\n";
```

O exemplo acima produzirá
algo semelhante a:

```
similarity: 5 (71.428571428571 %)
similarity: 3 (42.857142857143 %)
```

### Veja também

- [levenshtein()](function.levenshtein.md) - Calcula a distância Levenshtein entre duas strings
- [metaphone()](function.metaphone.md) - Calcula a chave de Metaphone de uma string
- [soundex()](function.soundex.md) - Calcula a chave soundex de uma string

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
