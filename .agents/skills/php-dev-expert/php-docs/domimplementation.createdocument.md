# Cria um objeto DOMDocument do tipo especificado com seu elemento de documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domimplementation.createdocument.php

---

# DOMImplementation::createDocument

(PHP 5, PHP 7, PHP 8)

DOMImplementation::createDocument — 
Cria um objeto DOMDocument do tipo especificado com seu elemento de documento

### Descrição

public function **DOMImplementation::createDocument**([?](language.types.null.md)[string](language.types.string.md) `$namespace` = **`null`**, [string](language.types.string.md) `$qualifiedName` = "", [?](language.types.null.md)[DOMDocumentType](class.domdocumenttype.md) `$doctype` = **`null`**): [DOMDocument](class.domdocument.md)

Cria um objeto [DOMDocument](class.domdocument.md) do tipo especificado
com seu elemento de documento.

### Parâmetros

`namespace`
:   O URI do namespace do elemento de documento a ser criado.

`qualifiedName`
:   O nome qualificado do elemento de documento a ser criado.

`doctype`
:   O tipo de documento a ser criado ou **`null`**.

### Valor Retornado

Um novo objeto [DOMDocument](class.domdocument.md). Se
`namespace`, `qualifiedName`,
e `doctype` forem nulos, o
[DOMDocument](class.domdocument.md) retornado estará vazio, sem elemento de documento.

### Erros/Exceções

Pode lançar um [DOMException](class.domexception.md) com os
seguintes códigos de erro:

**`DOM_WRONG_DOCUMENT_ERR`**
:   Gerado se `doctype` já foi usado em um
    documento diferente ou foi criado por uma implementação diferente.

**`DOM_NAMESPACE_ERR`**
:   Gerado se houver um erro com o namespace, conforme determinado por
    `namespace` e `qualifiedName`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | A função agora tem um tipo de retorno provisório de [DOMDocument](class.domdocument.md). |
| 8.0.3 | `namespace` agora é anulável. |
| 8.0.0 | `doctype` agora é anulável. |
| 8.0.0 | Chamar esta função estaticamente agora lançará um [Error](class.error.md). Anteriormente, era gerado um **`E_DEPRECATED`**. |

### Veja também

- [DOMDocument::\_\_construct()](domdocument.construct.md) - Cria um novo objeto DOMDocument
- [DOMImplementation::createDocumentType()](domimplementation.createdocumenttype.md) - Cria um objeto DOMDocumentType vazio

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
