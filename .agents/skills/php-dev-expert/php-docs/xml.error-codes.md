# Códigos de Erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xml.error-codes.php

---

# Códigos de Erro

As seguintes constantes são definidas para erros no código XML
(conforme retornado por [xml\_parse()](function.xml-parse.md)):

- **`XML_ERROR_NONE`**
- **`XML_ERROR_NO_MEMORY`**
- **`XML_ERROR_SYNTAX`**
- **`XML_ERROR_NO_ELEMENTS`**
- **`XML_ERROR_INVALID_TOKEN`**
- **`XML_ERROR_UNCLOSED_TOKEN`**
- **`XML_ERROR_PARTIAL_CHAR`**
- **`XML_ERROR_TAG_MISMATCH`**
- **`XML_ERROR_DUPLICATE_ATTRIBUTE`**
- **`XML_ERROR_JUNK_AFTER_DOC_ELEMENT`**
- **`XML_ERROR_PARAM_ENTITY_REF`**
- **`XML_ERROR_UNDEFINED_ENTITY`**
- **`XML_ERROR_RECURSIVE_ENTITY_REF`**
- **`XML_ERROR_ASYNC_ENTITY`**
- **`XML_ERROR_BAD_CHAR_REF`**
- **`XML_ERROR_BINARY_ENTITY_REF`**
- **`XML_ERROR_ATTRIBUTE_EXTERNAL_ENTITY_REF`**
- **`XML_ERROR_MISPLACED_XML_PI`**
- **`XML_ERROR_UNKNOWN_ENCODING`**
- **`XML_ERROR_INCORRECT_ENCODING`**
- **`XML_ERROR_UNCLOSED_CDATA_SECTION`**
- **`XML_ERROR_EXTERNAL_ENTITY_HANDLING`**

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
