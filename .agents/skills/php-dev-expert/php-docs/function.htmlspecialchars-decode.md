# Converte entidades especiais HTML de volta para caracteres

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.htmlspecialchars-decode.php

---

# htmlspecialchars\_decode

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

htmlspecialchars\_decode — 
Converte entidades especiais HTML de volta para caracteres

### Descrição

function **htmlspecialchars\_decode**([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$flags` = ENT\_QUOTES | ENT\_SUBSTITUTE | ENT\_HTML401): [string](language.types.string.md)

Esta função é oposta a [htmlspecialchars()](function.htmlspecialchars.md). Ela
converte de volta entidade especiais HTML em caracteres.

As entidades convertidas são: `&amp;`,
`&quot;` (quando **`ENT_NOQUOTES`** não estiver definida),
`&#039;` (quando **`ENT_QUOTES`** estiver definida),
`&lt;` e `&gt;`.

### Parâmetros

`string`
:   A string a ser decodificada.

`flags`
:   Uma máscara de bits de uma ou mais das opções a seguir, que especificam como lidar com aspas e
    que tipos de documentos são usados. O padrão é `ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401`.

    **Constantes disponíveis para `flags`**

    | Nome da Constante | Descrição |
    | --- | --- |
    | **`ENT_COMPAT`** | Converte aspas duplas e não converte aspas simples. |
    | **`ENT_QUOTES`** | Converte tanto aspas duplas quanto simples. |
    | **`ENT_NOQUOTES`** | Não converte aspas duplas ou simples. |
    | **`ENT_SUBSTITUTE`** | Substitui sequências de unidade de código inválidas com um Caractere de Substituição Unicode U+FFFD (UTF-8) ou &#xFFFD; ao invés de retornar uma string vazia. |
    | **`ENT_HTML401`** | Lida com o código como HTML 4.01. |
    | **`ENT_XML1`** | Lida com o código como XML 1. |
    | **`ENT_XHTML`** | Lida com o código como XHTML. |
    | **`ENT_HTML5`** | Lida com o código como HTML 5. |

### Valor Retornado

Retorna a string decodificada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O padrão de `flags` mudou de **`ENT_COMPAT`** para **`ENT_QUOTES`** | **`ENT_SUBSTITUTE`** | **`ENT_HTML401`**. |

### Examples

**Exemplo #1 Um exemplo de **htmlspecialchars\_decode()****

```
<?php
$str = "<p>this -&gt; &quot;</p>\n";

echo htmlspecialchars_decode($str);

// observe que aqui as aspas não são convertidas
echo htmlspecialchars_decode($str, ENT_NOQUOTES);
?>
```

O exemplo acima produzirá:

```
<p>this -> "</p>
<p>this -> &quot;</p>
```

### Veja também

- [htmlspecialchars()](function.htmlspecialchars.md) - Converte caracteres especiais para entidades HTML
- [html\_entity\_decode()](function.html-entity-decode.md) - Converte entidades HTML aos seus caracteres correspondentes
- [get\_html\_translation\_table()](function.get-html-translation-table.md) - Retorna a tabela de tradução usada por htmlspecialchars e htmlentities

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
