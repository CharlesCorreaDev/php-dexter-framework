# Retorna uma representação de string curta, legível e analisável de uma variável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.var-representation.php

---

# var\_representation

(PECL var\_representation >= 0.1.0)

var\_representation — Retorna uma representação de string curta, legível e analisável de uma variável

### Descrição

function **var\_representation**([mixed](language.types.mixed.md) `$value`, [int](language.types.integer.md) `$flags` = 0): [string](language.types.string.md)

A função **var\_representation()** (da extensão PECL var\_representation) retorna uma string com informações estruturadas
sobre a variável fornecida. É semelhante à função [var\_export()](function.var-export.md) com diferenças em identação, escape de strings e representações de array.

### Parâmetros

`value`
:   A variável que terá uma representação gerada.

`flags`
:   Máscara de bits que consiste em
    **`VAR_REPRESENTATION_SINGLE_LINE`** e/ou
    **`VAR_REPRESENTATION_UNESCAPED`**.
    O comportamento dessas constantes é descrito na página
    [constantes de var\_representation](var-representation.constants.md).

### Valor Retornado

Retorna a representação da variável.

### Examples

**Exemplo #1 Exemplos de **var\_representation()****

```
<?php
$a = [1, 2, ['key' => 'value']];
echo var_representation($a), "\n";
echo var_representation($a, VAR_REPRESENTATION_SINGLE_LINE), "\n";
?>
```

O exemplo acima produzirá:

```
[
  1,
  2,
  [
    'key' => 'value',
  ],
]
[1, 2, ['key' => 'value']]
```

**Exemplo #2 Escapando caracteres de controle**

```
<?php
echo var_representation("Content-Length: 123\r\n");
```

O exemplo acima produzirá:

```
"Content-Length: 123\r\n"
```

**Exemplo #3 Exportando [stdClass](class.stdclass.md)**

```
<?php
$person = new stdClass;
$person->name = 'ElePHPant ElePHPantsdotter';
$person->website = 'https://php.net/elephpant.php';

echo var_representation($person);
```

O exemplo acima produzirá:

```
(object) [
  'name' => 'ElePHPant ElePHPantsdotter',
  'website' => 'https://php.net/elephpant.php',
]
```

**Exemplo #4 Exportando classes**

```
<?php
class A { public $var; }
$a = new A;
$a->var = 5;
echo var_representation($a);
?>
```

O exemplo acima produzirá:

```
\A::__set_state([
  'var' => 5,
])
```

**Exemplo #5 Usando [\_\_set\_state()](language.oop5.magic.md#object.set-state)**

```
<?php
class A
{
    public $var1;
    public $var2;

    public static function __set_state($an_array)
    {
        $obj = new A;
        $obj->var1 = $an_array['var1'];
        $obj->var2 = $an_array['var2'];
        return $obj;
    }
}

$a = new A;
$a->var1 = 5;
$a->var2 = 'foo';

eval('$b = ' . var_representation($a) . ';'); // $b = \A::__set_state([
                                              //   'var1' => 5,
                                              //   'var2' => 'foo',
                                              // ]);
var_dump($b);
?>
```

O exemplo acima produzirá:

```
object(A)#2 (2) {
  ["var1"]=>
  int(5)
  ["var2"]=>
  string(3) "foo"
}
```

### Veja também

- [var\_export()](function.var-export.md) - Mostra ou retorna uma representação string analisável de uma variável

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
