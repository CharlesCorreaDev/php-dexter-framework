# Dada uma string multibyte, retorna um array de seus caracteres

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-str-split.php

---

# mb\_str\_split

(PHP 7 >= 7.4.0, PHP 8)

mb\_str\_split — Dada uma string multibyte, retorna um array de seus caracteres

### Descrição

function **mb\_str\_split**([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$length` = 1, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**): [array](language.types.array.md)

Esta função retornará um array de strings, sendo uma versão de [str\_split()](function.str-split.md) com suporte para codificações de tamanho de caractere variável, bem como codificações de tamanho fixo de caracteres de 1, 2 ou 4 bytes.
Se o parâmetro `length` for especificado, a string será dividida em partes do comprimento especificado em caracteres (não bytes).
O parâmetro `encoding` pode ser especificado opcionalmente e é uma boa prática fazê-lo.

### Parâmetros

`string`
:   A [string](language.types.string.md) para dividir em caracteres ou partes.

`length`
:   Se especificado, cada elemento do array retornado será composto por vários caracteres em vez de um único caractere.

`encoding`
:   O parâmetro `encoding`
    é a codificação de caracteres. Se for omitido ou **`null`**, o valor da codificação
    de caracteres interna será usado.

    Uma string especificando uma das [codificações suportadas](mbstring.supported-encodings.md).

### Valor Retornado

**mb\_str\_split()** retorna um array de strings.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `encoding` agora pode ser nulo. |
| 8.0.0 | Esta função não retorna mais **`false`** em caso de falha. |

### Veja também

- [str\_split()](function.str-split.md) - Converte uma string em um array
- [grapheme\_str\_split()](function.grapheme-str-split.md) - Separa uma string em um array
- [explode()](function.explode.md) - Divide uma string com base em outra string

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
