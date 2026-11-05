# Verifica se uma string começa com uma substring fornecida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.str-starts-with.php

---

# str\_starts\_with

(PHP 8)

str\_starts\_with — Verifica se uma string começa com uma substring fornecida

### Descrição

function **str\_starts\_with**([string](language.types.string.md) `$haystack`, [string](language.types.string.md) `$needle`): [bool](language.types.boolean.md)

Realiza uma verificação sensível a maiúsculas/minúsculas indicando se
`haystack` começa com `needle`.

### Parâmetros

`haystack`
:   A string onde será feita a busca.

`needle`
:   A substring para procurar em `haystack`.

### Valor Retornado

Retorna **`true`** se `haystack` começa com
`needle`, **`false`** caso contrário.

### Examples

**Exemplo #1 Usando uma string vazia `''`**

```
<?php
if (str_starts_with('abc', '')) {
    echo "Toda string começa com uma string vazia";
}
?>
```

O exemplo acima produzirá:

```
Toda string começa com uma string vazia
```

**Exemplo #2 Mostrando a sensibilidade a maiúsculas/minúsculas**

```
<?php
$string = 'Uma raposa preguiçosa pulou a cerca';

if (str_starts_with($string, 'Uma')) {
    echo "A string começa com 'Uma'\n";
}

if (str_starts_with($string, 'uma')) {
    echo 'A string começa com "uma"';
} else {
    echo '"uma" não foi encontrada porque a letra maiúscula não corresponde';
}

?>
```

O exemplo acima produzirá:

```
A string começa com 'Uma'
"uma" não foi encontrada porque a letra maiúscula não corresponde
```

### Notas

> **Nota**:
>
> Esta função é
> compatível com dados binários.

### Veja também

- [str\_contains()](function.str-contains.md) - Determina se uma string contém uma substring fornecida
- [str\_ends\_with()](function.str-ends-with.md) - Verifica se uma string termina com uma substring fornecida
- [stripos()](function.stripos.md) - Encontra a posição da primeira ocorrência de uma substring em uma string, de forma insensível a maiúsculas/minúsculas
- [strrpos()](function.strrpos.md) - Encontra a posição da última ocorrência de uma substring em uma string
- [strripos()](function.strripos.md) - Encontra a posição da última ocorrência de uma substring em uma string, insensível a maiúsculas/minúsculas
- [strstr()](function.strstr.md) - Encontra a primeira ocorrência de uma string
- [strpbrk()](function.strpbrk.md) - Procura na string por um dos caracteres de um conjunto
- [substr()](function.substr.md) - Retorna parte de uma string
- [preg\_match()](function.preg-match.md) - Realiza uma correspondência com expressão regular

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
