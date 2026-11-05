# Sintaxe de Atributo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.attributes.syntax.php

---

## Sintaxe de Atributo

A sintaxe de atributo consiste em vários componentes-chave. Uma declaração de atributo
começa com `#[` e termina com
`]`. Dentro, um ou mais atributos podem ser listados,
separados por vírgulas. O nome do atributo pode ser não qualificado, qualificado,
ou totalmente qualificado, conforme descrito em [Usando Namespaces Básicos](language.namespaces.basics.md).
Argumentos para o atributo são opcionais e colocados entre parênteses
`()`. Argumentos podem ser apenas valores literais ou expressões
constantes. Tanto a sintaxe de argumento posicional quanto a de argumento nomeado são suportadas.

Nomes de atributos e seus argumentos são resolvidos para uma classe, e os argumentos
são passados ​​para seu construtor quando uma instância do atributo é solicitada
por meio da API Reflection. Portanto, é recomendado introduzir uma classe
para cada atributo.

**Exemplo #1 Sintaxe de Atributo**

```
<?php
// a.php
namespace MyExample;

use Attribute;

#[Attribute]
class MyAttribute
{
    const VALUE = 'value';

    private $value;

    public function __construct($value = null)
    {
        $this->value = $value;
    }
}

// b.php

namespace Another;

use MyExample\MyAttribute;

#[MyAttribute]
#[\MyExample\MyAttribute]
#[MyAttribute(1234)]
#[MyAttribute(value: 1234)]
#[MyAttribute(MyAttribute::VALUE)]
#[MyAttribute(array("key" => "value"))]
#[MyAttribute(100 + 200)]
class Thing
{
}

#[MyAttribute(1234), MyAttribute(5678)]
class AnotherThing
{
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
