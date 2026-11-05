# Conta o número de ocorrências de substring

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-substr-count.php

---

# mb\_substr\_count

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

mb\_substr\_count — Conta o número de ocorrências de substring

### Descrição

function **mb\_substr\_count**([string](language.types.string.md) `$haystack`, [string](language.types.string.md) `$needle`, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**): [int](language.types.integer.md)

Conta o número de vezes que a substring
`needle` ocorre na
`haystack` [string](language.types.string.md).

### Parâmetros

`haystack`
:   A [string](language.types.string.md) sendo verificada.

`needle`
:   A [string](language.types.string.md) sendo procurada.

`encoding`
:   O parâmetro `encoding`
    é a codificação de caracteres. Se for omitido ou **`null`**, o valor da codificação
    de caracteres interna será usado.

### Valor Retornado

O número de vezes que a substring
`needle` ocorre na
`haystack` [string](language.types.string.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `encoding` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de **mb\_substr\_count()****

```
<?php
echo mb_substr_count("This is a test", "is"); // Imprime 2
?>
```

### Veja também

- [mb\_strpos()](function.mb-strpos.md) - Encontra a posição da primeira ocorrência de uma string em outra
- [mb\_substr()](function.mb-substr.md) - Obtém parte da string
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
