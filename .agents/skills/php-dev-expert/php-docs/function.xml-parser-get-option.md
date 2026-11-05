# Obtém as opções de um analisador XML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xml-parser-get-option.php

---

# xml\_parser\_get\_option

(PHP 4, PHP 5, PHP 7, PHP 8)

xml\_parser\_get\_option — Obtém as opções de um analisador XML

### Descrição

function **xml\_parser\_get\_option**([XMLParser](class.xmlparser.md) `$parser`, [int](language.types.integer.md) `$option`): [string](language.types.string.md)|[int](language.types.integer.md)|[bool](language.types.boolean.md)

Obtém um valor de opção de um analisador XML.

### Parâmetros

`parser`
:   Uma referência para o analisador XML do qual a opção será obtida.

`option`
:   Qual opção buscar. **`XML_OPTION_CASE_FOLDING`**,
    **`XML_OPTION_PARSE_HUGE`**,
    **`XML_OPTION_SKIP_TAGSTART`**, **`XML_OPTION_SKIP_WHITE`**
    e **`XML_OPTION_TARGET_ENCODING`** estão disponíveis.
    Consulte [xml\_parser\_set\_option()](function.xml-parser-set-option.md) para suas descrições.

### Valor Retornado

Retorna o valor da opção.

### Erros/Exceções

Lança uma exceção [ValueError](class.valueerror.md) quando um valor inválido é passado
em `option`.

Antes do PHP 8.0.0, passar um valor inválido em
`option` gerava um erro de nível **`E_WARNING`**
e também fazia a função retornar **`false`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | A função agora retorna um booleano para opções booleanas. |
| 8.0.0 | O parâmetro `parser` agora espera uma instância de [XMLParser](class.xmlparser.md); anteriormente, um [resource](language.types.resource.md) `xml` válido era esperado. |
| 8.0.0 | Uma exceção [ValueError](class.valueerror.md) agora é lançada se `option` for inválido. |
| 7.1.24, 7.2.12, 7.3.0 | `options` agora suporta **`XML_OPTION_SKIP_TAGSTART`** e **`XML_OPTION_SKIP_WHITE`**. |

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
