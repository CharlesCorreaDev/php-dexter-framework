# Retorna um array de nomes únicos e valores das propriedades do objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.get-mangled-object-vars.php

---

# get\_mangled\_object\_vars

(PHP 7 >= 7.4.0, PHP 8)

get\_mangled\_object\_vars — Retorna um array de nomes únicos e valores das propriedades do objeto

### Descrição

function **get\_mangled\_object\_vars**([object](language.types.object.md) `$object`): [array](language.types.array.md)

Retorna um [array](language.types.array.md) cujos elementos são as propriedades de `object`.
As chaves são os nomes das variáveis membras, com algumas exceções
notáveis: variáveis privadas têm o nome da classe prefixada ao nome da variável,
e variáveis protegidas têm um `*` prefixado ao nome da variável.
Estes valores prefixados têm bytes `NUL` de cada um dos lados.
[Propriedades tipadas](language.oop5.properties.md#language.oop5.properties.typed-properties)
não inicializadas são silenciosamente descartadas.

### Parâmetros

`object`
:   Uma instância de objeto.

### Valor Retornado

Retorna um [array](language.types.array.md) contendo todas as propriedades de `object`, independente da visibilidade.

### Examples

**Exemplo #1 Exemplo de **get\_mangled\_object\_vars()****

```
<?php

class A
{
    public $public = 1;

    protected $protected = 2;

    private $private = 3;
}

class B extends A
{
    private $private = 4;
}

$object = new B;
$object->dynamic = 5;
$object->{'6'} = 6;

var_dump(get_mangled_object_vars($object));

class AO extends ArrayObject
{
    private $private = 1;
}

$arrayObject = new AO(['x' => 'y']);
$arrayObject->dynamic = 2;

var_dump(get_mangled_object_vars($arrayObject));
```

O exemplo acima produzirá:

```
array(6) {
  ["Bprivate"]=>
  int(4)
  ["public"]=>
  int(1)
  ["*protected"]=>
  int(2)
  ["Aprivate"]=>
  int(3)
  ["dynamic"]=>
  int(5)
  [6]=>
  int(6)
}
array(2) {
  ["AOprivate"]=>
  int(1)
  ["dynamic"]=>
  int(2)
}
```

### Veja também

- [get\_class\_vars()](function.get-class-vars.md) - Obtém as propriedades padrão da classe
- [get\_object\_vars()](function.get-object-vars.md) - Obtém as propriedades de um objeto

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
