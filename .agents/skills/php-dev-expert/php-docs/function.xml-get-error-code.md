# Obtém um código de erro do analisador XML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xml-get-error-code.php

---

# xml\_get\_error\_code

(PHP 4, PHP 5, PHP 7, PHP 8)

xml\_get\_error\_code — Obtém um código de erro do analisador XML

### Descrição

function **xml\_get\_error\_code**([XMLParser](class.xmlparser.md) `$parser`): [int](language.types.integer.md)

Obtém o código de erro do analisador XML.

### Parâmetros

`parser`
:   Uma referência para o analisador XML obter código de erro.

### Valor Retornado

Retorna um dos códigos de
erro listados na [seção de código
de erros](xml.error-codes.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `parser` agora espera uma instância de [XMLParser](class.xmlparser.md); anteriormente, um [resource](language.types.resource.md) `xml` válido era esperado. |

### Veja também

- [xml\_error\_string()](function.xml-error-string.md) - Obtém uma string de erro do analisador XML

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
