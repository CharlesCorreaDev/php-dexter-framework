# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xml.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`XML_ERROR_NONE`** ([int](language.types.integer.md))

**`XML_ERROR_NO_MEMORY`** ([int](language.types.integer.md))

**`XML_ERROR_SYNTAX`** ([int](language.types.integer.md))

**`XML_ERROR_NO_ELEMENTS`** ([int](language.types.integer.md))

**`XML_ERROR_INVALID_TOKEN`** ([int](language.types.integer.md))

**`XML_ERROR_UNCLOSED_TOKEN`** ([int](language.types.integer.md))

**`XML_ERROR_PARTIAL_CHAR`** ([int](language.types.integer.md))

**`XML_ERROR_TAG_MISMATCH`** ([int](language.types.integer.md))

**`XML_ERROR_DUPLICATE_ATTRIBUTE`** ([int](language.types.integer.md))

**`XML_ERROR_JUNK_AFTER_DOC_ELEMENT`** ([int](language.types.integer.md))

**`XML_ERROR_PARAM_ENTITY_REF`** ([int](language.types.integer.md))

**`XML_ERROR_UNDEFINED_ENTITY`** ([int](language.types.integer.md))

**`XML_ERROR_RECURSIVE_ENTITY_REF`** ([int](language.types.integer.md))

**`XML_ERROR_ASYNC_ENTITY`** ([int](language.types.integer.md))

**`XML_ERROR_BAD_CHAR_REF`** ([int](language.types.integer.md))

**`XML_ERROR_BINARY_ENTITY_REF`** ([int](language.types.integer.md))

**`XML_ERROR_ATTRIBUTE_EXTERNAL_ENTITY_REF`** ([int](language.types.integer.md))

**`XML_ERROR_MISPLACED_XML_PI`** ([int](language.types.integer.md))

**`XML_ERROR_UNKNOWN_ENCODING`** ([int](language.types.integer.md))

**`XML_ERROR_INCORRECT_ENCODING`** ([int](language.types.integer.md))

**`XML_ERROR_UNCLOSED_CDATA_SECTION`** ([int](language.types.integer.md))

**`XML_ERROR_EXTERNAL_ENTITY_HANDLING`** ([int](language.types.integer.md))

**`XML_OPTION_CASE_FOLDING`** ([int](language.types.integer.md))

**`XML_OPTION_PARSE_HUGE`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.4.0.
    Quando a libxml2 < 2.7.0 é usada (ex.: no PHP 7.x),
    esta opção é habilitado por padrão e não pode ser desabilitada.

**`XML_OPTION_TARGET_ENCODING`** ([int](language.types.integer.md))

**`XML_OPTION_SKIP_TAGSTART`** ([int](language.types.integer.md))

**`XML_OPTION_SKIP_WHITE`** ([int](language.types.integer.md))

**`XML_SAX_IMPL`** ([string](language.types.string.md))
:   Mantém o método de implementação SAX.
    Pode ser `libxml` ou `expat`.

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
