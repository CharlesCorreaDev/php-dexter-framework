# Registra uma classe estendida usada para criar um tipo de nó base

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domdocument.registernodeclass.php

---

# DOMDocument::registerNodeClass

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

DOMDocument::registerNodeClass — Registra uma classe estendida usada para criar um tipo de nó base

### Descrição

public function **DOMDocument::registerNodeClass**([string](language.types.string.md) `$baseClass`, [?](language.types.null.md)[string](language.types.string.md) `$extendedClass`): [true](language.types.singleton.md)

Este método permite registrar uma classe DOM estendida própria para ser usada
posteriormente pela extensão PHP DOM.

Este método não faz parte do padrão DOM.

**Cuidado**

O construtor dos objetos das classes de nó registradas não é chamado.

### Parâmetros

`baseClass`
:   A classe DOM a ser estendida. Pode-se encontrar uma lista dessas
    classes na [introdução ao capítulo](book.dom.md).

`extendedClass`
:   O nome da classe estendida. Se **`null`** for fornecido, qualquer classe
    previamente registrada estendendo `baseClass` será
    removida.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | **DOMDocument::registerNodeClass()** agora tem um tipo de retorno provisório de [true](language.types.singleton.md). |

### Examples

**Exemplo #1 Adicionando um novo método a DOMElement para facilitar nosso código**

```
<?php

class myElement extends DOMElement {
   function appendElement($name) {
      return $this->appendChild(new myElement($name));
   }
}

class myDocument extends DOMDocument {
   function setRoot($name) {
      return $this->appendChild(new myElement($name));
   }
}

$doc = new myDocument();
$doc->registerNodeClass('DOMElement', 'myElement');

// A partir de agora, adicionar um elemento a outro custa apenas uma chamada de método!
$root = $doc->setRoot('root');
$child = $root->appendElement('child');
$child->setAttribute('foo', 'bar');

echo $doc->saveXML();

?>
```

O exemplo acima produzirá:

```
<?xml version="1.0"?>
<root><child foo="bar"/></root>
```

**Exemplo #2 Recuperando elementos como uma classe personalizada**

```
<?php
class myElement extends DOMElement {
    public function __toString() {
        return $this->nodeValue;
    }
}

$doc = new DOMDocument;
$doc->loadXML("<root><element><child>text in child</child></element></root>");
$doc->registerNodeClass("DOMElement", "myElement");

$element = $doc->getElementsByTagName("child")->item(0);
var_dump(get_class($element));

// E aproveite o método __toString..
echo $element;
?>
```

O exemplo acima produzirá:

```
string(9) "myElement"
text in child
```

**Exemplo #3 Recuperando o documento proprietário**

Ao instanciar um [DOMDocument](class.domdocument.md) personalizado, a
propriedade ownerDocument se referirá à classe instanciada.
No entanto, se todas as referências a essa classe forem removidas,
ela será destruída e um novo [DOMDocument](class.domdocument.md) será
criado. Por esse motivo, pode-se usar
**DOMDocument::registerNodeClass()** com
[DOMDocument](class.domdocument.md)

```
<?php
class MyDOMDocument extends DOMDocument {
}

class MyOtherDOMDocument extends DOMDocument {
}

// Crie MyDOMDocument com algum XML
$doc = new MyDOMDocument;
$doc->loadXML("<root><element><child>text in child</child></element></root>");

$child = $doc->getElementsByTagName("child")->item(0);

// O proprietário atual do nó é MyDOMDocument
var_dump(get_class($child->ownerDocument));
// MyDOMDocument é destruído
unset($doc);
// E uma nova instância DOMDocument é criada
var_dump(get_class($child->ownerDocument));

// Importe um nó de MyDOMDocument
$newdoc = new MyOtherDOMDocument;
$child = $newdoc->importNode($child);

// Registre DOMDocument personalizado
$newdoc->registerNodeClass("DOMDocument", "MyOtherDOMDocument");

var_dump(get_class($child->ownerDocument));
unset($doc);
// Nova instância MyOtherDOMDocument é criada
var_dump(get_class($child->ownerDocument));
?>
```

O exemplo acima produzirá:

```
string(13) "MyDOMDocument"
string(11) "DOMDocument"
string(18) "MyOtherDOMDocument"
string(18) "MyOtherDOMDocument"
```

**Exemplo #4 Objetos personalizados são transitórios**

**Cuidado**

Objetos das classes de nó registradas são transitórios, ou seja, eles são
destruídos quando não são mais referenciados pelo código PHP e recriados
ao serem recuperados novamente. Isso implica que os valores das propriedades personalizadas serão
perdidos após a recriação.

```
<?php
class MyDOMElement extends DOMElement
{
    public $myProp = 'default value';
}

$doc = new DOMDocument();
$doc->registerNodeClass('DOMElement', 'MyDOMElement');

$node = $doc->createElement('a');
$node->myProp = 'modified value';
$doc->appendChild($node);

echo $doc->childNodes[0]->myProp, PHP_EOL;
unset($node);
echo $doc->childNodes[0]->myProp, PHP_EOL;
?>
```

O exemplo acima produzirá:

```
modified value
default value
```

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
