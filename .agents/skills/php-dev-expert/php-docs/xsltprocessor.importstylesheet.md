# Importa folha de estilos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xsltprocessor.importstylesheet.php

---

# XSLTProcessor::importStylesheet

(PHP 5, PHP 7, PHP 8)

XSLTProcessor::importStylesheet — Importa folha de estilos

### Descrição

public function **XSLTProcessor::importStylesheet**([object](language.types.object.md) `$stylesheet`): [bool](language.types.boolean.md)

Este método importa a folha de estilos no
[XSLTProcessor](class.xsltprocessor.md) para transformações.

### Parâmetros

`stylesheet`
:   A folha de estilos importada como um objeto [Dom\Document](class.dom-document.md),
    [DOMDocument](class.domdocument.md) ou
    [SimpleXMLElement](class.simplexmlelement.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Lança uma exceção [TypeError](class.typeerror.md) se
`stylesheet` não for um objeto XML.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Adicionado suporte para [Dom\Document](class.dom-document.md). |
| 8.4.0 | Agora lança uma exceção [TypeError](class.typeerror.md) ao invés de uma exceção [ValueError](class.valueerror.md) se `stylesheet` não for um objeto XML. |

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
