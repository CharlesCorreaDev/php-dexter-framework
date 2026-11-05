# Procura na string por um dos caracteres de um conjunto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.strpbrk.php

---

# strpbrk

(PHP 5, PHP 7, PHP 8)

strpbrk — Procura na string por um dos caracteres de um conjunto

### Descrição

function **strpbrk**([string](language.types.string.md) `$string`, [string](language.types.string.md) `$characters`): [string](language.types.string.md)|[false](language.types.singleton.md)

**strpbrk()** procura na `string`
por qualquer dos caracteres contidos em `characters`.

### Parâmetros

`string`
:   A string onde `characters` é procurado.

`characters`
:   Este parâmetro é sensível a maiúsculas/minúsculas.

### Valor Retornado

Retorna uma string iniciando do caractere encontrado, ou **`false`** se
nada for encontrado.

### Examples

**Exemplo #1 Exemplo de **strpbrk()****

```
<?php

$text = 'This is a Simple text.';

// isto mostrará "is is a Simple text." porque 'i' aparece primeiro
echo strpbrk($text, 'mi'), PHP_EOL;

// isto mostrará "Simple text." porque a função é sensível a maiúsculas/minúsculas
echo strpbrk($text, 'S'), PHP_EOL;
?>
```

### Veja também

- [strpos()](function.strpos.md) - Encontra a posição da primeira ocorrência de uma substring em uma string
- [strstr()](function.strstr.md) - Encontra a primeira ocorrência de uma string
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
