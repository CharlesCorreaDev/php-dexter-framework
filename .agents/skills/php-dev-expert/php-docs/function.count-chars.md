# Retorna informação sobre caracteres usados em uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.count-chars.php

---

# count\_chars

(PHP 4, PHP 5, PHP 7, PHP 8)

count\_chars — Retorna informação sobre caracteres usados em uma string

### Descrição

function **count\_chars**([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$mode` = 0): [array](language.types.array.md)|[string](language.types.string.md)

Conta o número de ocorrências de cada valor de byte (0..255) em
`string` e retorna de diversas formas.

### Parâmetros

`string`
:   A string examinada.

`mode`
:   Veja em valores de retorno.

### Valor Retornado

Dependendo do parâmetro `mode`
**count\_chars()** retorna um dos valores a seguir:

- 0 - um array com valores de byte como chaves e a frequência de
  cada byte como valor.
- 1 - o mesmo que 0 mas apenas valores de byte com uma frequência maior
  que zero são listados.
- 2 - o mesmo que 0 mas apenas valores de byte com uma frequência igual a
  zero são listados.
- 3 - uma string contendo todos os caracteres únicos.
- 4 - uma string contendo todos os caracteres não utilizados.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Antes desta versão, a função retornava **`false`** em caso de falha. |

### Examples

**Exemplo #1 Exemplo de **count\_chars()****

```
<?php
$data = "Dois Ps e um H.";

foreach (count_chars($data, 1) as $i => $val) {
   echo "Há $val instância(s) de \"" , chr($i) , "\" na string.\n";
}
?>
```

O exemplo acima produzirá:

```
Há 4 instância(s) de " " na string.
Há 1 instância(s) de "." na string.
Há 1 instância(s) de "D" na string.
Há 1 instância(s) de "H" na string.
Há 1 instância(s) de "P" na string.
Há 1 instância(s) de "e" na string.
Há 1 instância(s) de "i" na string.
Há 1 instância(s) de "m" na string.
Há 1 instância(s) de "o" na string.
Há 2 instância(s) de "s" na string.
Há 1 instância(s) de "u" na string.
```

### Veja também

- [strpos()](function.strpos.md) - Encontra a posição da primeira ocorrência de uma substring em uma string
- [substr\_count()](function.substr-count.md) - Conta o número de ocorrências de uma substring

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
