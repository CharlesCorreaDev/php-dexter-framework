# Cria novo nó de elemento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domdocument.createelement.php

---

# DOMDocument::createElement

(PHP 5, PHP 7, PHP 8)

DOMDocument::createElement — Cria novo nó de elemento

### Descrição

public function **DOMDocument::createElement**([string](language.types.string.md) `$localName`, [string](language.types.string.md) `$value` = ""): [DOMElement](class.domelement.md)|[false](language.types.singleton.md)

Esta função cria uma nova instância da classe
[DOMElement](class.domelement.md). Este nó não aparecerá no documento a menos que
seja inserido, por exemplo, com [DOMNode::appendChild()](domnode.appendchild.md).

### Parâmetros

`localName`
:   O nome da tag do elemento.

`value`
:   O valor do elemento. Por padrão, um elemento vazio será criado.
    O valor também pode ser definido posteriormente com [DOMElement::$nodeValue](class.domnode.md#domnode.props.nodevalue).

    O valor é utilizado literalmente, exceto que as referências de entidade < e > serão escapadas.
    Note que & precisa ser escapado manualmente;
    caso contrário, é considerado como o início de uma referência de entidade. Além disso " não será
    escapado.

### Valor Retornado

Retorna uma nova instância da classe [DOMElement](class.domelement.md) ou **`false`**
se ocorrer um erro.

### Erros/Exceções

Pode lançar um [DOMException](class.domexception.md) com os
seguintes códigos de erro:

**`DOM_INVALID_CHARACTER_ERR`**
:   Gerado se `localName` contiver um caractere inválido.

### Examples

**Exemplo #1 Criando um novo elemento e inserindo-o como raiz**

```
<?php

$dom = new DOMDocument('1.0', 'utf-8');

$element = $dom->createElement('test', 'Este é o elemento raiz!');

// Inserimos o novo elemento como raiz (filho do documento)
$dom->appendChild($element);

echo $dom->saveXML();
?>
```

O exemplo acima produzirá:

```
<?xml version="1.0" encoding="utf-8"?>
<test>Este é o elemento raiz!</test>
```

**Exemplo #2 Passando texto contendo um & não escapado como `value`**

```
<?php
$dom = new DOMDocument('1.0', 'utf-8');
$element = $dom->createElement('foo', 'me & you');
$dom->appendChild($element);
echo $dom->saveXML();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Warning: DOMDocument::createElement(): unterminated entity reference             you in /in/BjTCg on line 4
<?xml version="1.0" encoding="utf-8"?>
<foo/>
```

### Notas

> **Nota**:
>
> O `value` *não* será escapado.
> Use [DOMDocument::createTextNode()](domdocument.createtextnode.md) para criar um
> nó de texto com *suporte a escapamento*.

### Veja também

- [DOMNode::appendChild()](domnode.appendchild.md) - Adiciona um novo filho ao final dos filhos
- [DOMDocument::createAttribute()](domdocument.createattribute.md) - Cria um novo attribute
- [DOMDocument::createAttributeNS()](domdocument.createattributens.md) - Cria um novo nó de atributo com um namespace associado
- [DOMDocument::createCDATASection()](domdocument.createcdatasection.md) - Cria um novo nó de CDATA
- [DOMDocument::createComment()](domdocument.createcomment.md) - Cria novo nó de comentárioe
- [DOMDocument::createDocumentFragment()](domdocument.createdocumentfragment.md) - Cria novo fragmento de documento
- [DOMDocument::createElementNS()](domdocument.createelementns.md) - Cria novo nó de elemento com um namespace associado
- [DOMDocument::createEntityReference()](domdocument.createentityreference.md) - Cria novo nó de referência de entidade
- [DOMDocument::createProcessingInstruction()](domdocument.createprocessinginstruction.md) - Cria novo nó PI (Processing Instruction)
- [DOMDocument::createTextNode()](domdocument.createtextnode.md) - Cria novo nó de texto

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
