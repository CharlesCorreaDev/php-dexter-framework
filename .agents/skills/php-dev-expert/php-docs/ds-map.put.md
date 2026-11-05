# Associa uma chave a um valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.put.php

---

# Ds\Map::put

(PECL ds >= 1.0.0)

Ds\Map::put — Associa uma chave a um valor

### Descrição

public function **Ds\Map::put**([mixed](language.types.mixed.md) `$key`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

Associa uma `key` a um `value`,
sobrescrevendo uma associação anterior, caso exista.

> **Nota**:
>
> Chaves do tipo [object](language.types.object.md) são suportadas.
> Se um objeto implementar [Ds\Hashable](class.ds-hashable.md),
> a igualdade será determinada pela função `equals` do objeto.
> Se um objeto não implementar [Ds\Hashable](class.ds-hashable.md),
> os objetos devem ser referências à mesma instância para serem considerados iguais.

> **Nota**:
>
> Pode-se também pode usar a sintaxe de array para associar valores pela chave, por exemplo, `$map["key"] = $value`.

**Cuidado**

Tenha cuidado ao usar a sintaxe de array. Chaves escalares serão convertidas para
inteiros pelo interpretador. Por exemplo, `$map["1"]` tentará
acessar `int(1)`, enquanto `$map->get("1")` procurará
corretamente a chave de string.

Veja [Arrays](language.types.array.md).

### Parâmetros

`key`
:   A chave para associar ao valor.

`value`
:   O valor a ser associado à chave.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Map::put()****

```
<?php
$map = new \Ds\Map();

$map->put("a", 1);
$map->put("b", 2);
$map->put("c", 3);

print_r($map);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Map Object
(
    [0] => Ds\Pair Object
        (
            [key] => a
            [value] => 1
        )

    [1] => Ds\Pair Object
        (
            [key] => b
            [value] => 2
        )

    [2] => Ds\Pair Object
        (
            [key] => c
            [value] => 3
        )

)
```

**Exemplo #2 Exemplo de **Ds\Map::put()** usando objetos como chave**

```
<?php
class HashableObject implements \Ds\Hashable
{
    /**
     * Um valor arbitrário a ser usado como valor de hash. Não define igualdade.
     */
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function hash()
    {
        return $this->value;
    }

    public function equals($obj): bool
    {
        return $this->value === $obj->value;
    }
}

$map = new \Ds\Map();

$obj = new \ArrayIterator([]);

// Usar a mesma instância várias vezes sobrescreverá o valor anterior.
$map->put($obj, 1);
$map->put($obj, 2);

// Usar várias instâncias do mesmo objeto criará novas associações.
$map->put(new \stdClass(), 3);
$map->put(new \stdClass(), 4);

// Usar várias instâncias de objetos hasháveis iguais sobrescreverá valores anteriores.
$map->put(new \HashableObject(1), 5);
$map->put(new \HashableObject(1), 6);
$map->put(new \HashableObject(2), 7);
$map->put(new \HashableObject(2), 8);

var_dump($map);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Map)#1 (5) {
  [0]=>
  object(Ds\Pair)#7 (2) {
    ["key"]=>
    object(ArrayIterator)#2 (1) {
      ["storage":"ArrayIterator":private]=>
      array(0) {
      }
    }
    ["value"]=>
    int(2)
  }
  [1]=>
  object(Ds\Pair)#8 (2) {
    ["key"]=>
    object(stdClass)#3 (0) {
    }
    ["value"]=>
    int(3)
  }
  [2]=>
  object(Ds\Pair)#9 (2) {
    ["key"]=>
    object(stdClass)#4 (0) {
    }
    ["value"]=>
    int(4)
  }
  [3]=>
  object(Ds\Pair)#10 (2) {
    ["key"]=>
    object(HashableObject)#5 (1) {
      ["value":"HashableObject":private]=>
      int(1)
    }
    ["value"]=>
    int(6)
  }
  [4]=>
  object(Ds\Pair)#11 (2) {
    ["key"]=>
    object(HashableObject)#6 (1) {
      ["value":"HashableObject":private]=>
      int(2)
    }
    ["value"]=>
    int(8)
  }
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
