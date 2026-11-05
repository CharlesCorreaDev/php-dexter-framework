# Converte todos os caracteres aplicáveis em entidades HTML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.htmlentities.php

---

# htmlentities

(PHP 4, PHP 5, PHP 7, PHP 8)

htmlentities — Converte todos os caracteres aplicáveis em entidades HTML

### Descrição

function **htmlentities**(  
    [string](language.types.string.md) `$string`,  
    [int](language.types.integer.md) `$flags` = ENT\_QUOTES | ENT\_SUBSTITUTE | ENT\_HTML401,  
    [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**,  
    [bool](language.types.boolean.md) `$double_encode` = **`true`**  
): [string](language.types.string.md)

Esta função é idêntica à [htmlspecialchars()](function.htmlspecialchars.md) em todas as
maneiras, exceto que com **htmlentities()**, todos os caracteres que
têm equivalentes em HTML são traduzidos para essas entidades.
A função [get\_html\_translation\_table()](function.get-html-translation-table.md) pode ser usada
para retornar a tabela de tradução usada dependendo das constantes fornecidas
em `flags`.

Se for desejada a decodificação (operação reversa) pode-se usar
[html\_entity\_decode()](function.html-entity-decode.md).

### Parâmetros

`string`
:   A string de entrada.

`flags`
:   Uma máscara de bits de uma ou mais das opções a seguir, que especificam como lidar com aspas,
    sequências inválidas de unidades de código e tipos de documentos usados. O padrão é
    `ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401`.

    **Constantes disponíveis para `flags`**

    | Nome da Constante | Descrição |
    | --- | --- |
    | **`ENT_COMPAT`** | Converte aspas duplas e não converte aspas simples. |
    | **`ENT_QUOTES`** | Converte tanto aspas duplas quanto simples. |
    | **`ENT_NOQUOTES`** | Não converte aspas duplas ou simples. |
    | **`ENT_IGNORE`** | Descarta silenciosamente sequências de unidades de código inválidas ao invés de retornar uma string vazia. O uso desta opção é desencorajado pois [» pode ter implicações de segurança](https://unicode.org/reports/tr36/#Deletion_of_Noncharacters). |
    | **`ENT_SUBSTITUTE`** | Substitui sequências de unidade de código inválidas com um Caractere de Substituição Unicode U+FFFD (UTF-8) ou &#xFFFD; ao invés de retornar uma string vazia. |
    | **`ENT_DISALLOWED`** | Substitui pontos de código inválidos para o tipo de documento informado por um Caractere de Substituição Unicode U+FFFD (UTF-8) ou &#FFFD; ao invés de não converter. Isto pode ser útil, por exemplo, para garantir boa formatação de documentos XML com conteúdo externo embutido. |
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

`double_encode`
:   Quando `double_encode` estiver desligado, o PHP não irá
    codificar entidades HTML existentes. O padrão é converter tudo.

### Valor Retornado

Retorna a string codificada.

Se a `string` de entrada contiver uma sequência de unidade de código
inválida na condificação informada em `encoding`, uma string vazia
será retornada, a menos que uma das opções **`ENT_IGNORE`** ou
**`ENT_SUBSTITUTE`** esteja definida.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O padrão de `flags` mudou de **`ENT_COMPAT`** para **`ENT_QUOTES`** | **`ENT_SUBSTITUTE`** | **`ENT_HTML401`**. |
| 8.0.0 | `encoding` agora pode ser nulo. |

### Examples

**Exemplo #1 Um exemplo de **htmlentities()****

```
<?php
$str = "Uma 'palavra' em <b>negrito</b>";

echo htmlentities($str);
echo "\n\n";
echo htmlentities($str, ENT_COMPAT);
?>
```

O exemplo acima produzirá:

```
Uma &#039;palavra&#039; em &lt;b&gt;negrito&lt;/b&gt;

Uma 'palavra' em &lt;b&gt;negrito&lt;/b&gt;
```

**Exemplo #2 Uso de **`ENT_IGNORE`****

```
<?php
$str = "\x8F!!!";

// Saída: uma string vazia
echo htmlentities($str, ENT_QUOTES, "UTF-8");

// Saída: "!!!"
echo htmlentities($str, ENT_QUOTES | ENT_IGNORE, "UTF-8");
?>
```

### Veja também

- [html\_entity\_decode()](function.html-entity-decode.md) - Converte entidades HTML aos seus caracteres correspondentes
- [get\_html\_translation\_table()](function.get-html-translation-table.md) - Retorna a tabela de tradução usada por htmlspecialchars e htmlentities
- [htmlspecialchars()](function.htmlspecialchars.md) - Converte caracteres especiais para entidades HTML
- [nl2br()](function.nl2br.md) - Insere quebras de linha HTML antes de todos os caracteres de nova linha em um string
- [urlencode()](function.urlencode.md) - Codifica uma string no formato URL

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
