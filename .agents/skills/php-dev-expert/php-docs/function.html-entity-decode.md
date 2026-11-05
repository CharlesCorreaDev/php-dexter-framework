# Converte entidades HTML aos seus caracteres correspondentes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.html-entity-decode.php

---

# html\_entity\_decode

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

html\_entity\_decode — Converte entidades HTML aos seus caracteres correspondentes

### Descrição

function **html\_entity\_decode**([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$flags` = ENT\_QUOTES | ENT\_SUBSTITUTE | ENT\_HTML401, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**): [string](language.types.string.md)

**html\_entity\_decode()** é oposta a
[htmlentities()](function.htmlentities.md) porque converte entidades HTML
na `string` aos seus caracteres correspondentes.

Mais precisamente, esta função decodifica todas as entidades (incluindo as
numéricas): a) que são necessariamente válidas para o tipo de documento escolhido, isto é,
para XML esta função não decodifica entidades nomeadas que possam ser definidas
em algum DTD; e b) cujos caracteres estejam no conjunto de caracteres da codificação
associados com a codificação escolhida e sejam permitidos no tipo de
documento escolhido. Todas as outras entidades ficarão inalteradas.

### Parâmetros

`string`
:   A string de entrada.

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

`encoding`
:   Um argumento opcional que define a codificação usada na conversão de caracteres.

    Se omitido, `encoding` assume como padrão o valor da
    opção de configuração [default\_charset](ini.core.md#ini.default-charset).

    Embora este argumento seja tecnicamente opcional, especificar o valor correto
    para o código é altamente recomendável
    se a opção de configuração [default\_charset](ini.core.md#ini.default-charset)
    puder ser definida incorretamente para a entrada fornecida.

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

Retorna a string decodificada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O padrão de `flags` mudou de **`ENT_COMPAT`** para **`ENT_QUOTES`** | **`ENT_SUBSTITUTE`** | **`ENT_HTML401`**. |
| 8.0.0 | `encoding` agora pode ser nulo. |

### Examples

**Exemplo #1 Decodificando entidades HTML**

```
<?php
$orig = "I'll \"walk\" the <b>dog</b> now";

$a = htmlentities($orig);

$b = html_entity_decode($a);

echo $a, PHP_EOL; // I'll &quot;walk&quot; the &lt;b&gt;dog&lt;/b&gt; now

echo $b, PHP_EOL; // I'll "walk" the <b>dog</b> now
?>
```

### Notas

> **Nota**:
>
> Pode-se perguntar por que trim(html\_entity\_decode('&nbsp;')); não
> reduz a string a uma string vazia, e isso acontece porque a entidades
> '&nbsp;' não tem código ASCII 32 (que é o código removido por
> [trim()](function.trim.md)) mas sim 160 (0xa0) na codificação padrão
> ISO 8859-1.

### Veja também

- [htmlentities()](function.htmlentities.md) - Converte todos os caracteres aplicáveis em entidades HTML
- [htmlspecialchars()](function.htmlspecialchars.md) - Converte caracteres especiais para entidades HTML
- [get\_html\_translation\_table()](function.get-html-translation-table.md) - Retorna a tabela de tradução usada por htmlspecialchars e htmlentities
- [urldecode()](function.urldecode.md) - Decodifica uma URL codificada

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
