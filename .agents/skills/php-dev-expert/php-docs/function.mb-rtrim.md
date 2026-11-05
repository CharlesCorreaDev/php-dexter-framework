# Remove espaços em branco (ou outros caracteres) do final de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-rtrim.php

---

# mb\_rtrim

(PHP 8 >= 8.4.0)

mb\_rtrim — Remove espaços em branco (ou outros caracteres) do final de uma string

### Descrição

function **mb\_rtrim**([string](language.types.string.md) `$string`, [?](language.types.null.md)[string](language.types.string.md) `$characters` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**): [string](language.types.string.md)

Realiza uma operação [rtrim()](function.rtrim.md) regura para strings multi-byte,
e retorna uma string com espaços em branco (ou outros caracteres) removidos do
final da `string`.

Sem o segundo parâmetro,
**mb\_rtrim()** removerá estes caracteres:

- `" "` (Unicode U+0020), um espaço em branco normal.
- `"\t"` (Unicode U+0009), uma tabulação horizontal.
- `"\n"` (Unicode U+000A), uma nova linha (alimentação de linha).
- `"\r"` (Unicode U+000D), um retorno de carro.
- `"\0"` (Unicode U+0000), o byte NUL.
- `"\v"` (Unicode U+000B), uma tabulação vertical.
- `"\f"` (Unicode U+000C), uma alimentação de formulário.
- `"\u00A0"` (Unicode U+00A0), um espaço sem quebra de palavra (NO-BREAK SPACE).
- `"\u1680"` (Unicode U+1680), uma marca de espaço Ogham.
- `"\u2000"` (Unicode U+2000), um EN QUAD.
- `"\u2001"` (Unicode U+2001), um EM QUAD.
- `"\u2002"` (Unicode U+2002), um EN SPACE.
- `"\u2003"` (Unicode U+2003), um EM SPACE.
- `"\u2004"` (Unicode U+2004), um THREE-PER-EM SPACE.
- `"\u2005"` (Unicode U+2005), um FOUR-PER-EM SPACE.
- `"\u2006"` (Unicode U+2006), um SIX-PER-EM SPACE.
- `"\u2007"` (Unicode U+2007), um FIGURE SPACE.
- `"\u2008"` (Unicode U+2008), um PUNCTUATION SPACE.
- `"\u2009"` (Unicode U+2009), um THIN SPACE.
- `"\u200A"` (Unicode U+200A), um HAIR SPACE.
- `"\u2028"` (Unicode U+2028), um LINE SEPARATOR.
- `"\u2029"` (Unicode U+2029), um PARAGRAPH SEPARATOR.
- `"\u202F"` (Unicode U+202F), um NARROW NO-BREAK SPACE.
- `"\u205F"` (Unicode U+205F), um MEDIUM MATHEMATICAL SPACE.
- `"\u3000"` (Unicode U+3000), um IDEOGRAPHIC SPACE.
- `"\u0085"` (Unicode U+0085), um NEXT LINE (NEL).
- `"\u180E"` (Unicode U+180E), um MONGOLIAN VOWEL SEPARATOR.

### Parâmetros

`string`
:   A string de entrada.

`characters`
:   Opcionalmente, os caracteres a serem removidos também podem ser especificados usando
    o parâmetro `characters`.
    Simplesmente liste todos os caracteres que precisam ser removidos.

`encoding`
:   O parâmetro `encoding`
    é a codificação de caracteres. Se for omitido ou **`null`**, o valor da codificação
    de caracteres interna será usado.

### Valor Retornado

Retorna a string modificada.

### Veja também

- [mb\_trim()](function.mb-trim.md) - Remove espaços em branco (ou outros caracteres) do início e do final de uma string
- [mb\_ltrim()](function.mb-ltrim.md) - Remove espaços em branco (ou outros caracteres) do início de uma string
- [rtrim()](function.rtrim.md) - Retira espaços em branco (ou outros caracteres) do final de uma string

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
