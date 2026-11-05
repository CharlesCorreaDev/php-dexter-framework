# Converte caracteres especiais para entidades HTML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.htmlspecialchars.php

---

# htmlspecialchars

(PHP 4, PHP 5, PHP 7, PHP 8)

htmlspecialchars — Converte caracteres especiais para entidades HTML

### Descrição

function **htmlspecialchars**(  
    [string](language.types.string.md) `$string`,  
    [int](language.types.integer.md) `$flags` = ENT\_QUOTES | ENT\_SUBSTITUTE | ENT\_HTML401,  
    [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**,  
    [bool](language.types.boolean.md) `$double_encode` = **`true`**  
): [string](language.types.string.md)

Certos caracteres têm significado especial em HTML, e devem
ser representados por entidades HTML se for necessário preservar seus
significados. Esta função retorna uma string com estas
conversões realizadas. Se for necessário traduzir todas as substrings de entrada
que têm entidades nomeadas associadas, use [htmlentities()](function.htmlentities.md)
no lugar desta função.

Se a string de entrada passada para esta função e o documento final compartilham o
mesmo conjunto de caracteres, esta função é suficiente para preparar a entrada para
inclusão na maioria dos contextos de um documento HTML. Se, por outro lado, a entrada puder
representar caracteres que não são codificados no conjunto de caracteres do documento final,
e for necessário reter esses caracteres (como entidades numéricas ou nomeadas),
tanto esta funçã quanto [htmlentities()](function.htmlentities.md) (que apenas codifica
substrings que têm entidades nomeadas equivalentes) podem ser insuficientes.
Pode ser necessário usar [mb\_encode\_numericentity()](function.mb-encode-numericentity.md) no lugar desta função.

**Traduções realizadas**

| Caractere | Substituição |
| --- | --- |
| `&` (e comercial) | `&amp;` |
| `"` (asplas duplas) | `&quot;`, a menos que **`ENT_NOQUOTES`** esteja definida |
| `'` (aspas simples) | `&#039;` (para **`ENT_HTML401`**) ou `&apos;` (para **`ENT_XML1`**, **`ENT_XHTML`** ou **`ENT_HTML5`**), mas apenas quando **`ENT_QUOTES`** estiver definida |
| `<` (menor que) | `&lt;` |
| `>` (maior que) | `&gt;` |

### Parâmetros

`string`
:   A [string](language.types.string.md) a ser convertida.

`flags`
:   Uma máscara de bits de uma ou mais das opções a seguir, que especificam como lidar com aspas,
    com sequências de unidade de código inválidas e o tipo de documento usado. O padrão é
    `ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401`.

    **Constantes disponíveis para `flags`**

    | Nome da Constante | Descrição |
    | --- | --- |
    | **`ENT_COMPAT`** | Converte aspas duplas e não converte aspas simples. |
    | **`ENT_QUOTES`** | Converte tanto aspas duplas quanto simples. |
    | **`ENT_NOQUOTES`** | Não converte aspas duplas ou simples. |
    | **`ENT_IGNORE`** | Descarta silenciosamente as sequências de unidade de código inválidas ao invés de retornar uma string vazia. É desencorajado o uso desta já que [» podem haver implicações em segurança](https://unicode.org/reports/tr36/#Deletion_of_Noncharacters). |
    | **`ENT_SUBSTITUTE`** | Substitui sequências de unidade de código inválidas com um Caractere de Substituição Unicode U+FFFD (UTF-8) ou &#xFFFD; ao invés de retornar uma string vazia. |
    | **`ENT_DISALLOWED`** | Substitui pontos de código inválidos para o tipo de documento fornecido com um Caractere de Substituição Unicode U+FFFD (UTF-8) ou &#xFFFD; ao invés de deixá-lo inalterado. Isto pode ser útil, por exemplo, para garantir a boa formatação de documentos XML com conteúdo externo incluído. |
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

    Para os propósitos desta função, as codificações
    `ISO-8859-1`, `ISO-8859-15`,
    `UTF-8`, `cp866`,
    `cp1251`, `cp1252` e
    `KOI8-R` são efetivamente equivalentes, desde que o parâmetro
    `string` em si seja válido para a codificação, já que
    os caracteres afetados por **htmlspecialchars()** ocupam
    as mesmas posições em todas estas codificações.

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
:   Quando `double_encode` estiver desligada, o PHP não
    codificará entidades HTML existentes, o padrão é converter tudo.

### Valor Retornado

A [string](language.types.string.md) convertida.

Se a `string` de entrada contiver uma sequência de unidade de código
inválida na codificação informada em `encoding`, uma string vazia
será retornada, a menos que **`ENT_IGNORE`** ou
**`ENT_SUBSTITUTE`** esteja definida.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O padrão para `flags` mudou de **`ENT_COMPAT`** para **`ENT_QUOTES`** | **`ENT_SUBSTITUTE`** | **`ENT_HTML401`**. |

### Examples

**Exemplo #1 Exemplo de **htmlspecialchars()****

```
<?php
$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;
?>
```

### Notas

> **Nota**:
>
> Observe que esta função não traduz nada além do que
> está listado acima. Para tradução completa de entidade, consulte
> [htmlentities()](function.htmlentities.md).

> **Nota**:
>
> Em caso de um valor ambíguo no parâmetro `flags`, as seguintes regras se aplicam:
>
> - Quando nenhuma das constantes **`ENT_COMPAT`**, **`ENT_QUOTES`** ou
>   **`ENT_NOQUOTES`** estiver presente, o padrão é **`ENT_NOQUOTES`**.
> - Quando mais que uma das constantes **`ENT_COMPAT`**, **`ENT_QUOTES`** ou
>   **`ENT_NOQUOTES`** estiverem presentes, **`ENT_QUOTES`** tem a
>   maior precedência, seguida por **`ENT_COMPAT`**.
> - Quando nenhuma das constantes **`ENT_HTML401`**, **`ENT_HTML5`**,
>   **`ENT_XHTML`** ou **`ENT_XML1`** estiver presente, o padrão é
>   **`ENT_HTML401`**.
> - Quando mais que uma das constantes **`ENT_HTML401`**, **`ENT_HTML5`**,
>   **`ENT_XHTML`** ou **`ENT_XML1`** estiverem presentes,
>   **`ENT_HTML5`** tem a maior precedência,
>   seguida por **`ENT_XHTML`**, **`ENT_XML1`** e **`ENT_HTML401`**.
> - Quando mais que uma das constantes **`ENT_DISALLOWED`**, **`ENT_IGNORE`** ou
>   **`ENT_SUBSTITUTE`** estiverem presentes, **`ENT_IGNORE`** tem a
>   maior precedência, seguida por **`ENT_SUBSTITUTE`**.

### Veja também

- [get\_html\_translation\_table()](function.get-html-translation-table.md) - Retorna a tabela de tradução usada por htmlspecialchars e htmlentities
- [htmlspecialchars\_decode()](function.htmlspecialchars-decode.md) - Converte entidades especiais HTML de volta para caracteres
- [strip\_tags()](function.strip-tags.md) - Retira as tags HTML e PHP de uma string
- [htmlentities()](function.htmlentities.md) - Converte todos os caracteres aplicáveis em entidades HTML
- [nl2br()](function.nl2br.md) - Insere quebras de linha HTML antes de todos os caracteres de nova linha em um string

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
