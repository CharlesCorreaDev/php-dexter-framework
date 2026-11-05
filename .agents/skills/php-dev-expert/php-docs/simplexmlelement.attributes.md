# Identifica um atributo de um elemento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/simplexmlelement.attributes.php

---

# SimpleXMLElement::attributes

(PHP 5, PHP 7, PHP 8)

SimpleXMLElement::attributes — Identifica um atributo de um elemento

### Descrição

public function **SimpleXMLElement::attributes**([?](language.types.null.md)[string](language.types.string.md) `$namespaceOrPrefix` = **`null`**, [bool](language.types.boolean.md) `$isPrefix` = **`false`**): [?](language.types.null.md)[SimpleXMLElement](class.simplexmlelement.md)

Esta função provê os atributos e valores definidos dentro de uma tag XML.

> **Nota**:
>
> Na SimpleXML foi comum adicionar
> propriedades iterativas à maioria dos métodos. Elas não podem ser visualizadas usando [var\_dump()](function.var-dump.md)
> ou qualquer outra coisa que possa examinar objetos.

### Parâmetros

`namespaceOrPrefix`
:   Um namespace opcional para os atributos retornados

`isPrefix`
:   **`false`** por padrão

### Valor Retornado

Retorna um objeto [SimpleXMLElement](class.simplexmlelement.md) que pode
iterar os atributos da tag.

Retornará **`null`** se chamado em um objeto [SimpleXMLElement](class.simplexmlelement.md)
que já represente um atributo e não uma tag.

### Examples

**Exemplo #1 Interpretando uma string XML**

```
<?php
$string = <<<XML
<a xmlns:b>
 <foo name="one" game="lonely">1</foo>
</a>
XML;

$xml = simplexml_load_string($string);
foreach($xml->foo[0]->attributes() as $a => $b) {
    echo $a,'="',$b,"\"\n";
}
?>
```

O exemplo acima produzirá:

```
name="one"
game="lonely"
```

### Veja também

- [Uso Básico de SimpleXML](simplexml.examples-basic.md)

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
