# Calcula a chave de Metaphone de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.metaphone.php

---

# metaphone

(PHP 4, PHP 5, PHP 7, PHP 8)

metaphone — Calcula a chave de Metaphone de uma string

### Descrição

function **metaphone**([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$max_phonemes` = 0): [string](language.types.string.md)

Calcula a chave de Metaphone da `string`.

Parecida com a função [soundex()](function.soundex.md), metaphone cria a mesma chave para
palavras que soam de forma similar. É mais precisa que
[soundex()](function.soundex.md) já que ela conhece as regras básicas de pronúncia
em inglês. As chaves geradas têm comprimento variável.

Metaphone foi desenvolvido por Lawrence Philips
<lphilips at verity dot com>. É descrita em ["Practical
Algorithms for Programmers", Binstock & Rex, Addison Wesley,
1995].

### Parâmetros

`string`
:   A string de entrada.

`max_phonemes`
:   Este parâmetro restringe o comprimento da chave retornada ao número máximo de
    *characters* especificado em `max_phonemes`.
    Entretanto, os fonemas resultantes são sempre transcritos completamente, portanto o
    comprimento resultante da string pode ser um pouco maior que `max_phonemes`.
    O valor padrão de `0` significa sem restrição.

### Valor Retornado

Retorna a chave de Metaphone como uma string.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função retornava **`false`** em caso de falha. |

### Examples

**Exemplo #1 Exemplo básico de **metaphone()****

```
<?php
var_dump(metaphone('programming'));
var_dump(metaphone('programmer'));
?>
```

O exemplo acima produzirá:

```
string(7) "PRKRMNK"
string(6) "PRKRMR"
```

**Exemplo #2 Usando o parâmetro `max_phonemes`**

```
<?php
var_dump(metaphone('programming', 5));
var_dump(metaphone('programmer', 5));
?>
```

O exemplo acima produzirá:

```
string(5) "PRKRM"
string(5) "PRKRM"
```

**Exemplo #3 Usando o parâmetro `max_phonemes`**

Neste exemplo, **metaphone()** é instruída a produzir uma string
de cinco caracteres, mas isso iria separar o fonema final
(`'x'` deve ser transcrito para `'KS'`),
portanto a função retorna uma string com seis caracteres.

```
<?php
var_dump(metaphone('Asterix', 5));
?>
```

O exemplo acima produzirá:

```
string(6) "ASTRKS"
```

### Veja também

- [levenshtein()](function.levenshtein.md) - Calcula a distância Levenshtein entre duas strings
- [similar\_text()](function.similar-text.md) - Calcula a similaridade entre duas strings
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
