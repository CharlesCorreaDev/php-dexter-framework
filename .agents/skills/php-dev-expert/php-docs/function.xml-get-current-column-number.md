# Obtém o número da coluna atual para um analisador XML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xml-get-current-column-number.php

---

# xml\_get\_current\_column\_number

(PHP 4, PHP 5, PHP 7, PHP 8)

xml\_get\_current\_column\_number — 
Obtém o número da coluna atual para um analisador XML

### Descrição

function **xml\_get\_current\_column\_number**([XMLParser](class.xmlparser.md) `$parser`): [int](language.types.integer.md)

Obtém o número da coluna atual do analisador XML fornecido.

### Parâmetros

`parser`
:   Uma referência ao analisador XML para obter o número da coluna.

### Valor Retornado

Retorna em qual coluna
da linha atual (conforme fornecido por
[xml\_get\_current\_line\_number()](function.xml-get-current-line-number.md)) o analisador está
atualmente.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `parser` agora espera uma instância de [XMLParser](class.xmlparser.md); anteriormente, um [resource](language.types.resource.md) `xml` válido era esperado. |

### Veja também

- [xml\_get\_current\_byte\_index()](function.xml-get-current-byte-index.md) - Obtém índice de bytes atual para um analisador XML
- [xml\_get\_current\_line\_number()](function.xml-get-current-line-number.md) - Obtém o número da linha atual para um analisador XML

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
