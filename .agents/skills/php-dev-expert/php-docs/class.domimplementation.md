# A classe DOMImplementation

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.domimplementation.php

---

# A classe DOMImplementation

(PHP 5, PHP 7, PHP 8)

## Introdução

Esta classe fornece vários
métodos para realizar operações independentes de qualquer
instância específica do modelo de objeto de documento.

## Resumo da classe

class ****DOMImplementation****
{

/\* Métodos \*/

public function [createDocument](domimplementation.createdocument.md)([?](language.types.null.md)[string](language.types.string.md) `$namespace` = **`null`**, [string](language.types.string.md) `$qualifiedName` = "", [?](language.types.null.md)[DOMDocumentType](class.domdocumenttype.md) `$doctype` = **`null`**): [DOMDocument](class.domdocument.md)

public function [createDocumentType](domimplementation.createdocumenttype.md)([string](language.types.string.md) `$qualifiedName`, [string](language.types.string.md) `$publicId` = "", [string](language.types.string.md) `$systemId` = ""): [DOMDocumentType](class.domdocumenttype.md)|[false](language.types.singleton.md)

public function [hasFeature](domimplementation.hasfeature.md)([string](language.types.string.md) `$feature`, [string](language.types.string.md) `$version`): [bool](language.types.boolean.md)

}

## Índice

- [DOMImplementation::\_\_construct](domimplementation.construct.md) — Cria um novo objeto DOMImplementation
- [DOMImplementation::createDocument](domimplementation.createdocument.md) — Cria um objeto DOMDocument do tipo especificado com seu elemento de documento
- [DOMImplementation::createDocumentType](domimplementation.createdocumenttype.md) — Cria um objeto DOMDocumentType vazio
- [DOMImplementation::hasFeature](domimplementation.hasfeature.md) — Testa se a implementação DOM implementa um recurso específico

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
