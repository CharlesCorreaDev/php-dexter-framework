# Retorna a tabela de tradução usada por htmlspecialchars e htmlentities

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.get-html-translation-table.php

---

# get\_html\_translation\_table

(PHP 4, PHP 5, PHP 7, PHP 8)

get\_html\_translation\_table — Retorna a tabela de tradução usada por [htmlspecialchars()](function.htmlspecialchars.md) e [htmlentities()](function.htmlentities.md)

### Descrição

function **get\_html\_translation\_table**([int](language.types.integer.md) `$table` = **`HTML_SPECIALCHARS`**, [int](language.types.integer.md) `$flags` = ENT\_QUOTES | ENT\_SUBSTITUTE | ENT\_HTML401, [string](language.types.string.md) `$encoding` = "UTF-8"): [array](language.types.array.md)

**get\_html\_translation\_table()** retorna a
tabela de tradução usada internamente para
[htmlspecialchars()](function.htmlspecialchars.md) e
[htmlentities()](function.htmlentities.md).

> **Nota**:
>
> Caracteres especiais podem ser codificados de diversas maneiras. Por exemplo,
> `"` pode ser codificado como `&quot;`,
> `&#34;` ou `&#x22;`.
> **get\_html\_translation\_table()** retorna apenas a forma usada
> por [htmlspecialchars()](function.htmlspecialchars.md) e
> [htmlentities()](function.htmlentities.md).

### Parâmetros

`table`
:   Informa que tabela deve ser retornada. Pode ser **`HTML_ENTITIES`** ou
    **`HTML_SPECIALCHARS`**.

`flags`
:   Uma máscara de bits de uma ou mais das opções abaixo, que especificam que tipo de aspas a
    tabela conterá, assim como para que tipo de documento a tabela serve. O padrão é
    `ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401`.

    **Constantes de `flags` disponíveis**

    | Nome da Constante | Descrição |
    | --- | --- |
    | **`ENT_COMPAT`** | A tabela conterá entidades para aspas duplas, mas não para aspas simples. |
    | **`ENT_QUOTES`** | A tabela conterá entitades tanto para aspas duplas quanto para aspas simples. |
    | **`ENT_NOQUOTES`** | A tabela não conterá entidades nem para aspas simples nem para aspas duplas. |
    | **`ENT_SUBSTITUTE`** | Substitui sequências de unidade de código inválidas com um Caractere de Substituição Unicode U+FFFD (UTF-8) ou &#xFFFD; ao invés de retornar uma string vazia. |
    | **`ENT_HTML401`** | Tabela para HTML 4.01. |
    | **`ENT_XML1`** | Tabela para XML 1. |
    | **`ENT_XHTML`** | Tabela para XHTML. |
    | **`ENT_HTML5`** | Tabela para HTML 5. |

`encoding`
:   A codificação a ser usada.
    Se omitida, o valor padrão para este argumento é UTF-8.

    Os seguintes conjuntos de caracteres são suportados:

    **Conjuntos de caracteres suportados**

    | Conjunto de caracteres | Apelidos | Descrição |
    | --- | --- | --- |
    | ISO-8859-1 | ISO8859-1 | Western European, Latin-1. |
    | ISO-8859-5 | ISO8859-5 | Conjunto de caracteres cirílicos, pouco usado (latim/cirílico). |
    | ISO-8859-15 | ISO8859-15 | Western European, Latin-9. Adiciona o símbolo do Euro, letras francesas e finlandesas faltantes no Latin-1 (ISO-8859-1). |
    | UTF-8 |  | Código de multi-byte 8-bits Unicode compatível com ASCII. |
    | cp866 | ibm866, 866 | Conjunto de caracteres do DOS específico para o russo. |
    | cp1251 | Windows-1251, win-1251, 1251 | Conjunto de caracteres do Windows específico para o russo. |
    | cp1252 | Windows-1252, 1252 | Conjunto de caracteres do Windows específico para a Europa Ocidental. |
    | KOI8-R | koi8-ru, koi8r | Russo. |
    | BIG5 | 950 | Chinês tradicional, usado principalmente em Taiwan. |
    | GB2312 | 936 | Chinês simplificado, conjunto de caracteres padrão nacional. |
    | BIG5-HKSCS |  | Big5 com extensões de Hong Kong, chinês tradicional. |
    | Shift\_JIS | SJIS, SJIS-win, cp932, 932 | Japonês |
    | EUC-JP | EUCJP, eucJP-win | Japonês |
    | MacRoman |  | Conjunto de caracteres que era usado pelo Mac OS. |
    | `''` |  | Uma string vazia ativa a detecção a partir de codificação de script (multibyte Zend), [conjunto padrão de caracteres](ini.core.md#ini.default-charset) e localidade atual (consulte [nl\_langinfo()](function.nl-langinfo.md) e [setlocale()](function.setlocale.md)), nesta ordem. Não recomendado. |

    > **Nota**:
    >
    > Nenhum outro conjunto de caracteres é reconhecido. A codificação padrão será
    > usada no lugar e um alerta será emitido.

### Valor Retornado

Retorna a tabela de tradução como um array, com os caracteres originais
como chaves e as entidades como valores.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | `flags` mudou de **`ENT_COMPAT`** para **`ENT_QUOTES`** | **`ENT_SUBSTITUTE`** | **`ENT_HTML401`**. |

### Examples

**Exemplo #1 Exemplo de Tabela de Tradução**

```
<?php
var_dump(get_html_translation_table(HTML_ENTITIES, ENT_QUOTES | ENT_HTML5));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(1510) {
  ["
"]=>
  string(9) "&NewLine;"
  ["!"]=>
  string(6) "&excl;"
  ["""]=>
  string(6) "&quot;"
  ["#"]=>
  string(5) "&num;"
  ["$"]=>
  string(8) "&dollar;"
  ["%"]=>
  string(8) "&percnt;"
  ["&"]=>
  string(5) "&amp;"
  ["'"]=>
  string(6) "&apos;"
  // ...
}
```

### Veja também

- [htmlspecialchars()](function.htmlspecialchars.md) - Converte caracteres especiais para entidades HTML
- [htmlentities()](function.htmlentities.md) - Converte todos os caracteres aplicáveis em entidades HTML
- [html\_entity\_decode()](function.html-entity-decode.md) - Converte entidades HTML aos seus caracteres correspondentes

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
