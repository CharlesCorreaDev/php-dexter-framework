# Obtém índice de bytes atual para um analisador XML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xml-get-current-byte-index.php

---

# xml\_get\_current\_byte\_index

(PHP 4, PHP 5, PHP 7, PHP 8)

xml\_get\_current\_byte\_index — Obtém índice de bytes atual para um analisador XML

### Descrição

function **xml\_get\_current\_byte\_index**([XMLParser](class.xmlparser.md) `$parser`): [int](language.types.integer.md)

Obtém o índice de bytes atual do analisador XML fornecido.

### Parâmetros

`parser`
:   Uma referência ao analisador XML para obter o índice de bytes.

### Valor Retornado

Retorna em qual índice de bytes
o analisador está atualmente em seu buffer de dados (começando em 0).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `parser` agora espera uma instância de [XMLParser](class.xmlparser.md); anteriormente, um [resource](language.types.resource.md) `xml` válido era esperado. |

### Notas

**Aviso**

Esta função retorna o índice de bytes de acordo com o texto codificado em UTF-8
desconsiderando se a entrada está em outra codificação.

### Veja também

- [xml\_get\_current\_column\_number()](function.xml-get-current-column-number.md) - Obtém o número da coluna atual para um analisador XML
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
