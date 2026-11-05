# Retorna a largura da string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-strwidth.php

---

# mb\_strwidth

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

mb\_strwidth — Retorna a largura da string

### Descrição

function **mb\_strwidth**([string](language.types.string.md) `$string`, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**): [int](language.types.integer.md)

Retorna a largura da [string](language.types.string.md) `string`,
onde os caracteres de meia largura contam como `1`, e os caracteres de largura total
contam como `2`.
Consulte [» https://www.unicode.org/reports/tr11/](https://www.unicode.org/reports/tr11/)
para detalhes sobre larguras de caracteres no leste asiático.

Os caracteres de largura total são:
`U+1100`-`U+115F`,
`U+11A3`-`U+11A7`,
`U+11FA`-`U+11FF`,
`U+2329`-`U+232A`,
`U+2E80`-`U+2E99`,
`U+2E9B`-`U+2EF3`,
`U+2F00`-`U+2FD5`,
`U+2FF0`-`U+2FFB`,
`U+3000`-`U+303E`,
`U+3041`-`U+3096`,
`U+3099`-`U+30FF`,
`U+3105`-`U+312D`,
`U+3131`-`U+318E`,
`U+3190`-`U+31BA`,
`U+31C0`-`U+31E3`,
`U+31F0`-`U+321E`,
`U+3220`-`U+3247`,
`U+3250`-`U+32FE`,
`U+3300`-`U+4DBF`,
`U+4E00`-`U+A48C`,
`U+A490`-`U+A4C6`,
`U+A960`-`U+A97C`,
`U+AC00`-`U+D7A3`,
`U+D7B0`-`U+D7C6`,
`U+D7CB`-`U+D7FB`,
`U+F900`-`U+FAFF`,
`U+FE10`-`U+FE19`,
`U+FE30`-`U+FE52`,
`U+FE54`-`U+FE66`,
`U+FE68`-`U+FE6B`,
`U+FF01`-`U+FF60`,
`U+FFE0`-`U+FFE6`,
`U+1B000`-`U+1B001`,
`U+1F200`-`U+1F202`,
`U+1F210`-`U+1F23A`,
`U+1F240`-`U+1F248`,
`U+1F250`-`U+1F251`,
`U+20000`-`U+2FFFD`,
`U+30000`-`U+3FFFD`.
Todos os outros caracteres são de meia largura.

### Parâmetros

`string`
:   A [string](language.types.string.md) a ser decodificada.

`encoding`
:   O parâmetro `encoding`
    é a codificação de caracteres. Se for omitido ou **`null`**, o valor da codificação
    de caracteres interna será usado.

### Valor Retornado

A largura da [string](language.types.string.md) `string`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `encoding` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de **mb\_strwidth()****

```
<?php
var_dump(
    mb_strwidth('a'),       // LATIN SMALL LETTER A
    mb_strwidth("\u{ff41}") // FULLWIDTH LATIN SMALL LETTER A
);
?>
```

O exemplo acima produzirá:

```
int(1)
int(2)
```

### Veja também

- [mb\_strimwidth()](function.mb-strimwidth.md) - Obtém string truncada com largura especificada
- [mb\_internal\_encoding()](function.mb-internal-encoding.md) - Define/Obtém a codificação de caracteres interna

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
