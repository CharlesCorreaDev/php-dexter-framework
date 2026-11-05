# Encontra os nós filhos de um dado nó

> **Fonte / Source:** https://www.php.net/manual/pt_BR/simplexmlelement.children.php

---

# SimpleXMLElement::children

(PHP 5, PHP 7, PHP 8)

SimpleXMLElement::children — Encontra os nós filhos de um dado nó

### Descrição

public function **SimpleXMLElement::children**([?](language.types.null.md)[string](language.types.string.md) `$namespaceOrPrefix` = **`null`**, [bool](language.types.boolean.md) `$isPrefix` = **`false`**): [?](language.types.null.md)[SimpleXMLElement](class.simplexmlelement.md)

Este método encontra os nós filhos que estão dentro de um dado membro. O resultado
segue as regras normais de iteração.

> **Nota**:
>
> Na SimpleXML foi comum adicionar
> propriedades iterativas à maioria dos métodos. Elas não podem ser visualizadas usando [var\_dump()](function.var-dump.md)
> ou qualquer outra coisa que possa examinar objetos.

### Parâmetros

`namespaceOrPrefix`
:   Um namespace XML.

`isPrefix`
:   Se o parâmetro `isPrefix` for definido como **`true`**,
    `namespaceOrPrefix` será considerado um prefixo. Se definido como **`false`**,
    `namespaceOrPrefix` será considerado uma URL
    de um namespace.

### Valor Retornado

Retorna um elemento [SimpleXMLElement](class.simplexmlelement.md), não importando se o nó
tem filhos ou não, a menos que o nó represente um atributo, caso em que
**`null`** é retornado.

### Examples

**Exemplo #1 Percorrendo um pseudo-array `children()`**

```
<?php
$xml = new SimpleXMLElement(
'<person>
 <child role="son">
  <child role="daughter"/>
 </child>
 <child role="daughter">
  <child role="son">
   <child role="son"/>
  </child>
 </child>
</person>');

foreach ($xml->children() as $second_gen) {
    echo ' The person begot a ' . $second_gen['role'];

    foreach ($second_gen->children() as $third_gen) {
        echo ' who begot a ' . $third_gen['role'] . ';';

        foreach ($third_gen->children() as $fourth_gen) {
            echo ' and that ' . $third_gen['role'] .
                ' begot a ' . $fourth_gen['role'];
        }
    }
}
?>
```

O exemplo acima produzirá:

```
The person begot a son who begot a daughter; The person begot a daughter who begot a son; and that son begot a son
```

**Exemplo #2 Utilizando namespaces**

```
<?php
$xml = '<example xmlns:foo="my.foo.urn">
  <foo:a>Apple</foo:a>
  <foo:b>Banana</foo:b>
  <c>Cherry</c>
</example>';

$sxe = new SimpleXMLElement($xml);

$kids = $sxe->children('foo');
var_dump(count($kids));

$kids = $sxe->children('foo', TRUE);
var_dump(count($kids));

$kids = $sxe->children('my.foo.urn');
var_dump(count($kids));

$kids = $sxe->children('my.foo.urn', TRUE);
var_dump(count($kids));

$kids = $sxe->children();
var_dump(count($kids));
?>
```

```
int(0)
int(2)
int(2)
int(0)
int(1)
```

### Veja também

- [SimpleXMLElement::count()](simplexmlelement.count.md) - Conta os filhos de um elemento
- [count()](function.count.md) - Conta todos os elementos de um array ou de um objeto Countable

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
