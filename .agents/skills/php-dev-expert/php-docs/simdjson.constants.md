# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/simdjson.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`SIMDJSON_ERR_CAPACITY`** ([int](language.types.integer.md))
:   Este analisador não suporta um documento tão grande.
    Lançado ao analisar uma string JSON com mais de 4 GiB de comprimento.

**`SIMDJSON_ERR_TAPE_ERROR`** ([int](language.types.integer.md))
:   O documento JSON tem uma estrutura imprópria: vírgulas ausentes ou supérfluas, chaves ausentes, etc.

**`SIMDJSON_ERR_DEPTH_ERROR`** ([int](language.types.integer.md))
:   O documento JSON era muito profundo (muitos objetos e arrays aninhados)

**`SIMDJSON_ERR_STRING_ERROR`** ([int](language.types.integer.md))
:   Problema ao analisar uma string

**`SIMDJSON_ERR_T_ATOM_ERROR`** ([int](language.types.integer.md))
:   Problema ao analisar um átomo que começa com a letra 't'

**`SIMDJSON_ERR_F_ATOM_ERROR`** ([int](language.types.integer.md))
:   Problema ao analisar um átomo que começa com a letra 'f'

**`SIMDJSON_ERR_N_ATOM_ERROR`** ([int](language.types.integer.md))
:   Problema ao analisar um átomo que começa com a letra 'n'

**`SIMDJSON_ERR_NUMBER_ERROR`** ([int](language.types.integer.md))
:   Problema ao analisar um número

**`SIMDJSON_ERR_UTF8_ERROR`** ([int](language.types.integer.md))
:   A entrada não é um UTF-8 válido

**`SIMDJSON_ERR_UNINITIALIZED`** ([int](language.types.integer.md))
:   O analisador usado por simdjson não foi inicializado. Isso não deveria acontecer.

**`SIMDJSON_ERR_EMPTY`** ([int](language.types.integer.md))
:   Vazio: nenhum JSON encontrado

**`SIMDJSON_ERR_UNESCAPED_CHARS`** ([int](language.types.integer.md))
:   Dentro das strings, alguns caracteres devem ser escapados, encontramos caracteres não escapados

**`SIMDJSON_ERR_UNCLOSED_STRING`** ([int](language.types.integer.md))
:   Uma string é aberta, mas nunca fechada.

**`SIMDJSON_ERR_UNSUPPORTED_ARCHITECTURE`** ([int](language.types.integer.md))
:   simdjson não tem uma implementação suportada por esta arquitetura de CPU (talvez seja uma CPU não-SIMD?).

**`SIMDJSON_ERR_INCORRECT_TYPE`** ([int](language.types.integer.md))
:   Não deveria acontecer.

**`SIMDJSON_ERR_NUMBER_OUT_OF_RANGE`** ([int](language.types.integer.md))
:   O número JSON é muito grande ou muito pequeno para caber no tipo solicitado.
    Observe que a biblioteca simdjson em C é uma bifurcação e este erro é ignorado para corresponder ao tratamento do PHP
    de números JSON muito grandes ou muito pequenos.

**`SIMDJSON_ERR_INDEX_OUT_OF_BOUNDS`** ([int](language.types.integer.md))
:   Não deveria acontecer.

**`SIMDJSON_ERR_NO_SUCH_FIELD`** ([int](language.types.integer.md))
:   Não deveria acontecer.

**`SIMDJSON_ERR_IO_ERROR`** ([int](language.types.integer.md))
:   Não deveria acontecer.

**`SIMDJSON_ERR_INVALID_JSON_POINTER`** ([int](language.types.integer.md))
:   Sintaxe de ponteiro JSON inválida em [simdjson\_key\_value()](function.simdjson-key-value.md)
    e outras funções que aceitam um ponteiro JSON $key.

**`SIMDJSON_ERR_INVALID_URI_FRAGMENT`** ([int](language.types.integer.md))
:   Sintaxe de fragmento de URI inválida.

**`SIMDJSON_ERR_UNEXPECTED_ERROR`** ([int](language.types.integer.md))
:   Erro inesperado, considere relatar este problema, pois pode ter sido encontrado um bug no simdjson PECL

**`SIMDJSON_ERR_PARSER_IN_USE`** ([int](language.types.integer.md))
:   Não deveria acontecer.

**`SIMDJSON_ERR_OUT_OF_ORDER_ITERATION`** ([int](language.types.integer.md))
:   Não deveria acontecer.

**`SIMDJSON_ERR_INSUFFICIENT_PADDING`** ([int](language.types.integer.md))
:   Não deveria acontecer.

**`SIMDJSON_ERR_INCOMPLETE_ARRAY_OR_OBJECT`** ([int](language.types.integer.md))
:   O documento JSON terminou cedo no meio de um objeto ou array.

**`SIMDJSON_ERR_SCALAR_DOCUMENT_AS_VALUE`** ([int](language.types.integer.md))
:   Não deveria acontecer.

**`SIMDJSON_ERR_OUT_OF_BOUNDS`** ([int](language.types.integer.md))
:   Tentativa de acessar o local fora do documento.

**`SIMDJSON_ERR_TRAILING_CONTENT`** ([int](language.types.integer.md))

**`SIMDJSON_ERR_KEY_COUNT_NOT_COUNTABLE`** ([int](language.types.integer.md))

**`SIMDJSON_ERR_INVALID_PROPERTY`** ([int](language.types.integer.md))
:   Nome de propriedade inválido para uma [stdClass](class.stdclass.md) ao decodificar um valor
    com [simdjson\_decode()](function.simdjson-decode.md) ou [simdjson\_key\_value()](function.simdjson-key-value.md)

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
