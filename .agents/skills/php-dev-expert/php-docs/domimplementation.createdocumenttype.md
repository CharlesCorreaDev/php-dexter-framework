# Cria um objeto DOMDocumentType vazio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domimplementation.createdocumenttype.php

---

# DOMImplementation::createDocumentType

(PHP 5, PHP 7, PHP 8)

DOMImplementation::createDocumentType — 
Cria um objeto DOMDocumentType vazio

### Descrição

public function **DOMImplementation::createDocumentType**([string](language.types.string.md) `$qualifiedName`, [string](language.types.string.md) `$publicId` = "", [string](language.types.string.md) `$systemId` = ""): [DOMDocumentType](class.domdocumenttype.md)|[false](language.types.singleton.md)

Cria um objeto [DOMDocumentType](class.domdocumenttype.md) vazio. Declarações de entidade
e notações não são disponibilizadas. Expansões de referências de entidade
e adições de atributos padrão não ocorrem.

### Parâmetros

`qualifiedName`
:   O nome qualificado do tipo de documento a ser criado.

`publicId`
:   O identificador público do conjunto externo.

`systemId`
:   O identificador do sistema do conjunto externo.

### Valor Retornado

Um novo nó [DOMDocumentType](class.domdocumenttype.md) com seu
`ownerDocument` definido como **`null`** ou **`false`** em caso de erro.

### Erros/Exceções

Pode lançar um [DOMException](class.domexception.md) com os
seguintes códigos de erro:

**`DOM_NAMESPACE_ERR`**
:   Gerado se houver um erro com o namespace, conforme determinado por
    `qualifiedName`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Chamar esta função estaticamente agora lançará um [Error](class.error.md). Anteriormente, era gerado um **`E_DEPRECATED`**. |

### Examples

**Exemplo #1 Criando um documento com um DTD anexado**

```
<?php

// Cria uma instância da classe DOMImplementation
$imp = new DOMImplementation;

// Cria uma instância DOMDocumentType
$dtd = $imp->createDocumentType('graph', '', 'graph.dtd');

// Cria uma instância DOMDocument
$dom = $imp->createDocument("", "", $dtd);

// Define outras propriedades
$dom->encoding = 'UTF-8';
$dom->standalone = false;

// Cria um elemento vazio
$element = $dom->createElement('graph');

// Anexa o elemento
$dom->appendChild($element);

// Recupera e imprime o documento
echo $dom->saveXML();

?>
```

O exemplo acima produzirá:

```
<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<!DOCTYPE graph SYSTEM "graph.dtd">
<graph/>
```

### Veja também

- [DOMImplementation::createDocument()](domimplementation.createdocument.md) - Cria um objeto DOMDocument do tipo especificado com seu elemento de documento

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
