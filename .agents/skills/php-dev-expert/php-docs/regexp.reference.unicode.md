# Propriedades de caracteres Unicode

> **Fonte / Source:** https://www.php.net/manual/pt_BR/regexp.reference.unicode.php

---

## Propriedades de caracteres Unicode

Desde a versão 5.1.0, três
sequências de escape adicionais para corresponder a tipo de caracteres genéricos estão disponíveis
quando o *modo UTF-8* é selecionado. Elas são:

*\p{xx}*
:   um caractere com a propriedade xx

*\P{xx}*
:   um caractere sem a propriedade xx

*\X*
:   uma sequência Unicode estendida

Os nomes de propriedade representados por `xx` acima são limitados
às propriedades de categoria geral do Unicode. Cada caractere tem exatamente uma
propriedade deste tipo, especificada por uma abreviação de duas letras. Para compatibilidade com
o Perl, uma negação pode ser especificada incluindo um circunflexo "^" entre a
chave de abertura e o nome da propriedade. Por exemplo, `\p{^Lu}`
é o mesmo que `\P{Lu}`.

Se somente uma letra for especificada com `\p` ou
`\P`, serão incluídas todas as propriedades que iniciam com
essa letra. Neste caso, na ausência de negação, as chaves na
sequência de escape são opcionais; estes dois exemplos têm o mesmo efeito:

```
\p{L}
\pL
```

**Códigos de propriedade suportados**

| Propriedade | Correspondências | Observações |
| --- | --- | --- |
| `C` | Outro |  |
| `Cc` | Controle |  |
| `Cf` | Formato |  |
| `Cn` | Não atribuído |  |
| `Co` | Uso privado |  |
| `Cs` | Substituto |  |
| `L` | Letra | Inclui as seguintes propriedades: `Ll`, `Lm`, `Lo`, `Lt` e `Lu`. |
| `Ll` | Letra minúscula |  |
| `Lm` | Letra modificadora |  |
| `Lo` | Outra letra |  |
| `Lt` | Letra de título |  |
| `Lu` | Letra maiúscula |  |
| `M` | Marca |  |
| `Mc` | Marca especial |  |
| `Me` | Marca de envolvimento |  |
| `Mn` | Marca de largura zero |  |
| `N` | Número |  |
| `Nd` | Número decimal |  |
| `Nl` | Letra numérica |  |
| `No` | Outro número |  |
| `P` | Pontuação |  |
| `Pc` | Pontuação de conexão |  |
| `Pd` | Pontuação de traço |  |
| `Pe` | Pontuação de fechamento |  |
| `Pf` | Pontuação final |  |
| `Pi` | Pontuação inicial |  |
| `Po` | Outra pontuação |  |
| `Ps` | Pontuação aberta |  |
| `S` | Símbolo |  |
| `Sc` | Símbolo de moeda |  |
| `Sk` | Símbolo modificador |  |
| `Sm` | Símbolo matemático |  |
| `So` | Outro símbolo | Inclui emojis |
| `Z` | Separador |  |
| `Zl` | Separador de linha |  |
| `Zp` | Separador de parágrafo |  |
| `Zs` | Separador de espaço |  |

Propriedades estendidas tais como `InMusicalSymbols` (símbolos musicais) não são
suportadas pelo PCRE.

Especificar correspondência insensível a maiúsculas/minúsculas não afeta estas sequências de escape.
Por exemplo, `\p{Lu}` sempre irá corresponder somente a letras maiúsculas.

Conjuntos de caracteres Unicode são definidos como pertencentes a certos tipos de escrita (ou tipo de alfabeto). Um
caractere de um destes conjuntos pode ser correspondido usando um nome de tipo de escrita. Por
exemplo:

- `\p{Greek}`
- `\P{Han}`

Aqueles que não são parte de um tipo de escrita identificado são agrupados como
`Common` (comuns). A lista atual de tipos de escrita é:

**Tipos de escrita suportados (nomes em inglês)**

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| `Arabic` | `Armenian` | `Avestan` | `Balinese` | `Bamum` |
| `Batak` | `Bengali` | `Bopomofo` | `Brahmi` | `Braille` |
| `Buginese` | `Buhid` | `Canadian_Aboriginal` | `Carian` | `Chakma` |
| `Cham` | `Cherokee` | `Common` | `Coptic` | `Cuneiform` |
| `Cypriot` | `Cyrillic` | `Deseret` | `Devanagari` | `Egyptian_Hieroglyphs` |
| `Ethiopic` | `Georgian` | `Glagolitic` | `Gothic` | `Greek` |
| `Gujarati` | `Gurmukhi` | `Han` | `Hangul` | `Hanunoo` |
| `Hebrew` | `Hiragana` | `Imperial_Aramaic` | `Inherited` | `Inscriptional_Pahlavi` |
| `Inscriptional_Parthian` | `Javanese` | `Kaithi` | `Kannada` | `Katakana` |
| `Kayah_Li` | `Kharoshthi` | `Khmer` | `Lao` | `Latin` |
| `Lepcha` | `Limbu` | `Linear_B` | `Lisu` | `Lycian` |
| `Lydian` | `Malayalam` | `Mandaic` | `Meetei_Mayek` | `Meroitic_Cursive` |
| `Meroitic_Hieroglyphs` | `Miao` | `Mongolian` | `Myanmar` | `New_Tai_Lue` |
| `Nko` | `Ogham` | `Old_Italic` | `Old_Persian` | `Old_South_Arabian` |
| `Old_Turkic` | `Ol_Chiki` | `Oriya` | `Osmanya` | `Phags_Pa` |
| `Phoenician` | `Rejang` | `Runic` | `Samaritan` | `Saurashtra` |
| `Sharada` | `Shavian` | `Sinhala` | `Sora_Sompeng` | `Sundanese` |
| `Syloti_Nagri` | `Syriac` | `Tagalog` | `Tagbanwa` | `Tai_Le` |
| `Tai_Tham` | `Tai_Viet` | `Takri` | `Tamil` | `Telugu` |
| `Thaana` | `Thai` | `Tibetan` | `Tifinagh` | `Ugaritic` |
| `Vai` | `Yi` |  |  |  |

O escape `\X` corresponde a um agrupamento de grafema estendido
Unicode. Um agrupamento de grafema estendido consiste em um ou mais caracteres Unicode que
se combinam para formar um único glifo. Na verade, isso pode ser considerado como o
equivalente Unicode de `.`, já que irá corresponder a um
caractere composto, independente de quantos caracteres individuais são
realmente usados para gerá-lo.

Em versões do PCRE mais antigas que 8.32 (que corresponde às versões do PHP
antes da 5.4.14 que usavam a biblioteca PCRE interna), `\X`
é equivalente a `(?>\PM\pM*)`. Isto é, corresponde a
um caractere sem a propriedade de "marca", seguida por zero ou mais caracteres
com a propriedadede "marca", e trata a sequência como um grupo atômico (veja
abaixo). Caracteres com a propriedade de "marca" são tipicamente acentuações que
afetam o caractere precedente.

A correspondência de caracteres por propriedade Unicode não é rápida porque o PCRE precisa
pesquisar uma estrutura que contenha dados para mais que quinze mil
caracteres. É por isso que as sequências de escape tradicionais como
`\d` e `\w` não usam as propriedades Unicode
no PCRE.

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
