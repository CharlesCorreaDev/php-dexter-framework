# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/json.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

As seguintes constantes indicam o tipo de erro retornado pela
função [json\_last\_error()](function.json-last-error.md) ou armazenadas no code
de uma [JsonException](class.jsonexception.md)

**`JSON_ERROR_NONE`** ([int](language.types.integer.md))
:   Sem erros.

**`JSON_ERROR_DEPTH`** ([int](language.types.integer.md))
:   O limite de pilha de chamadas foi ultrapassado.

**`JSON_ERROR_STATE_MISMATCH`** ([int](language.types.integer.md))
:   Ocorre em underflows ou com incongruência de modos.

**`JSON_ERROR_CTRL_CHAR`** ([int](language.types.integer.md))
:   Erro em caracter de controle, possivelmente erro de codificação.

**`JSON_ERROR_SYNTAX`** ([int](language.types.integer.md))
:   Erro de sintaxe.

**`JSON_ERROR_UTF8`** ([int](language.types.integer.md))
:   Caracteres UTF-8 mal formados, possivelmente erro de codificação.

**`JSON_ERROR_RECURSION`** ([int](language.types.integer.md))
:   O objeto ou array passado para [json\_encode()](function.json-encode.md) inclui
    referências recursivas, e não pode ser formatada.
    Se a opção **`JSON_PARTIAL_OUTPUT_ON_ERROR`** foi
    informada, **`null`** será substituído no lugar da referência recursiva.

**`JSON_ERROR_INF_OR_NAN`** ([int](language.types.integer.md))
:   Um valor passado para [json\_encode()](function.json-encode.md) inclui
    [**`NAN`**](language.types.float.md#language.types.float.nan)
    ou [**`INF`**](function.is-infinite.md).
    Se a opção **`JSON_PARTIAL_OUTPUT_ON_ERROR`** foi
    informada, `0` será substituído no lugar do número
    especial.

**`JSON_ERROR_UNSUPPORTED_TYPE`** ([int](language.types.integer.md))
:   Um valor de um tipo não suportado foi informado para
    [json\_encode()](function.json-encode.md), por exemplo um [resource](language.types.resource.md).
    Se a opção **`JSON_PARTIAL_OUTPUT_ON_ERROR`** foi
    informada, **`null`** será substituída ao invés do valor não suportado.

**`JSON_ERROR_INVALID_PROPERTY_NAME`** ([int](language.types.integer.md))
:   Uma chave começando com caracter \u0000 estava na chave string foi passada para
    [json\_decode()](function.json-decode.md) quando decodificando um objeto JSON para um objeto
    PHP.

**`JSON_ERROR_UTF16`** ([int](language.types.integer.md))
:   Substituto UTF-16 único não pareado em escape unicode contido na
    string JSON passada para [json\_decode()](function.json-decode.md).

**`JSON_ERROR_NON_BACKED_ENUM`** ([int](language.types.integer.md))
:   O valor passado para [json\_encode()](function.json-encode.md)
    inclui uma enumeração não apoiada que não pode ser serializada.
    Disponível a partir do PHP 8.1.0.

As constantes a seguir podem ser combinadas para formar opções na função
[json\_decode()](function.json-decode.md).

**`JSON_BIGINT_AS_STRING`** ([int](language.types.integer.md))
:   Decodifica inteiros grandes como suas strings originais.

**`JSON_OBJECT_AS_ARRAY`** ([int](language.types.integer.md))
:   Decodifica objetos JSON como arrays PHP. Esta opção pode ser adicionada automaticamente
    quando chamando [json\_decode()](function.json-decode.md) com o segundo parâmetro
    igual a **`true`**.

As seguintes constantes podem ser combinadas para formar opções para a função
[json\_encode()](function.json-encode.md).

**`JSON_HEX_TAG`** ([int](language.types.integer.md))
:   Todos os caracteres < e > serão convertidos para \u003C e \u003E.

**`JSON_HEX_AMP`** ([int](language.types.integer.md))
:   Todos os caracteres & serão convertidos para \u0026.

**`JSON_HEX_APOS`** ([int](language.types.integer.md))
:   Todos os caracteres ' serão convertidos para \u0027.

**`JSON_HEX_QUOT`** ([int](language.types.integer.md))
:   Todos os caracteres " serão convertidos para \u0022.

**`JSON_FORCE_OBJECT`** ([int](language.types.integer.md))
:   Imprime um objeto em vez de um array quando um array não recursivo é
    usado. Muito útil quando o chamador espera
    um objeto mas o array está vazio.

**`JSON_NUMERIC_CHECK`** ([int](language.types.integer.md))
:   Codifica strings numéricas como números.

**`JSON_PRETTY_PRINT`** ([int](language.types.integer.md))
:   Formata os dados retornados com espaços em branco.

**`JSON_UNESCAPED_SLASHES`** ([int](language.types.integer.md))
:   Não escapa o caracter `/`.

**`JSON_UNESCAPED_UNICODE`** ([int](language.types.integer.md))
:   Codifica caracteres Unicode multibyte literalmente (default é formatar como
    \uXXXX).

**`JSON_PARTIAL_OUTPUT_ON_ERROR`** ([int](language.types.integer.md))
:   Substitui valores não identificados ao invés de falhar.

**`JSON_PRESERVE_ZERO_FRACTION`** ([int](language.types.integer.md))
:   Garante que [float](language.types.float.md) sempre são codificados como um número float.

**`JSON_UNESCAPED_LINE_TERMINATORS`** ([int](language.types.integer.md))
:   Os fins de linha são preservados não escapados quando
    **`JSON_UNESCAPED_UNICODE`** é informado. Este é o mesmo
    comportamento existente anteriormente ao PHP 7.1 sem essa constante.
    Disponível desde o PHP 7.1.0.

As constantes a seguir podem ser combinadas para formar opções para a função
[json\_decode()](function.json-decode.md) e [json\_encode()](function.json-encode.md).

**`JSON_INVALID_UTF8_IGNORE`** ([int](language.types.integer.md))
:   Ignora caracteres inválidos UTF-8.
    Disponível desde o 7.2.0.

**`JSON_INVALID_UTF8_SUBSTITUTE`** ([int](language.types.integer.md))
:   Converte caracteres inválidos UTF-8 para \0xfffd
    (Caracter Unicode 'REPLACEMENT CHARACTER')
    Disponível desde o 7.2.0.

**`JSON_THROW_ON_ERROR`** ([int](language.types.integer.md))
:   Lança um [JsonException](class.jsonexception.md) se ocorrer um erro ao invés
    de carregar o erro global que pode ser obtido com
    [json\_last\_error()](function.json-last-error.md) e [json\_last\_error\_msg()](function.json-last-error-msg.md).
    **`JSON_PARTIAL_OUTPUT_ON_ERROR`** tem precedência sobre
    **`JSON_THROW_ON_ERROR`**.
    Disponível desde o PHP 7.3.0.

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
