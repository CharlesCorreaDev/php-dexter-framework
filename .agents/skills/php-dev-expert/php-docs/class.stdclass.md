# A classe stdClass

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.stdclass.php

---

# A classe stdClass

(PHP 4, PHP 5, PHP 7, PHP 8)

## Introdução

Uma classe vazia genérica com propriedades dinâmicas.

Objetos desta classe podem ser instaciados com
o operador [new](language.oop5.basic.md#language.oop5.basic.new) ou criados por
[conversores de tipo para o objeto](language.types.object.md#language.types.object.casting).
Muitas funções do PHP também criam instâncias desta classe, ex.:
[json\_decode()](function.json-decode.md), [mysqli\_fetch\_object()](mysqli-result.fetch-object.md)
ou [PDOStatement::fetchObject()](pdostatement.fetchobject.md).

Apesar de não implementar
os métodos mágicos [\_\_get()](language.oop5.overloading.md#object.get)/[\_\_set()](language.oop5.overloading.md#object.set),
esta classe permite propriedades dinâmicas e não requer o atributo
`#[\AllowDynamicProperties]`.

Esta não é uma classe base já que o PHP não possui um conceito de uma classe base
universal. Entretanto, é possível criar uma classe customizada que se estende a partir de
**stdClass** e como resultado herda a funcionalidade
de propriedades dinâmicas.

## Resumo da classe

#[[\AllowDynamicProperties](class.allowdynamicproperties.md)]  
class ****stdClass****
{

}

Esta classe não tem métodos ou propriedades padrão.

## Examples

**Exemplo #1 Criado como resultado de uma conversão de tipo em um objeto**

```
<?php
$obj = (object) array('foo' => 'bar');
var_dump($obj);
```

O exemplo acima produzirá:

```
object(stdClass)#1 (1) {
  ["foo"]=>
  string(3) "bar"
}
```

**Exemplo #2 Criado como resultado da função [json\_decode()](function.json-decode.md)**

```
<?php
$json = '{"foo":"bar"}';
var_dump(json_decode($json));
```

O exemplo acima produzirá:

```
object(stdClass)#1 (1) {
  ["foo"]=>
  string(3) "bar"
}
```

**Exemplo #3 Declarando propriedades dinâmicas**

```
<?php
$obj = new stdClass();
$obj->foo = 42;
$obj->{1} = 42;
var_dump($obj);
```

O exemplo acima produzirá:

```
object(stdClass)#1 (2) {
  ["foo"]=>
  int(42)
  ["1"]=>
  int(42)
}
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
