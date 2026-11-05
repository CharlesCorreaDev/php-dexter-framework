# Adiciona valores ao conjunto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-set.add.php

---

# Ds\Set::add

(PECL ds >= 1.0.0)

Ds\Set::add — Adiciona valores ao conjunto

### Descrição

public function **Ds\Set::add**([mixed](language.types.mixed.md) `...$values`): [void](language.types.void.md)

Adiciona todos os valores fornecidos ao conjunto que ainda não foram adicionados anteriormente.

> **Nota**:
>
> Valores do tipo [object](language.types.object.md) são suportados.
> Se um objeto implementar [Ds\Hashable](class.ds-hashable.md),
> a igualdade será determinada pela função `equals` do objeto.
> Se um objeto não implementar [Ds\Hashable](class.ds-hashable.md),
> objetos devem ser referências à mesma instância para serem considerados iguais.

**Cuidado**

Todas as comparações são estritas (tipo e valor).

### Parâmetros

`values`
:   Valores a serem adicionados ao conjunto.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Set::add()** usando inteiros**

```
<?php
$set = new \Ds\Set();

$set->add(1);
$set->add(1);
$set->add(2);
$set->add(3);

// A comparação estrita não trataria esses como iguais a int(1)
$set->add("1");
$set->add(true);

var_dump($set);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Set)#1 (5) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
  [3]=>
  string(1) "1"
  [4]=>
  bool(true)
}
```

**Exemplo #2 Exemplo de **Ds\Set::add()** usando objetos**

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

$set = new \Ds\Set();

$obj = new \ArrayIterator([]);

// Adicionar a mesma instância várias vezes só adicionará a primeira.
$set->add($obj);
$set->add($obj);

// Adicionar várias instâncias do mesmo objeto adicionará todas.
$set->add(new \stdClass());
$set->add(new \stdClass());

// Adicionar várias instâncias de objetos hasháveis iguais só adicionará a primeira.
$set->add(new \HashableObject(1));
$set->add(new \HashableObject(1));
$set->add(new \HashableObject(2));
$set->add(new \HashableObject(2));

var_dump($set);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Set)#1 (5) {
  [0]=>
  object(ArrayIterator)#2 (1) {
    ["storage":"ArrayIterator":private]=>
    array(0) {
    }
  }
  [1]=>
  object(stdClass)#3 (0) {
  }
  [2]=>
  object(stdClass)#4 (0) {
  }
  [3]=>
  object(HashableObject)#5 (1) {
    ["value":"HashableObject":private]=>
    int(1)
  }
  [4]=>
  object(HashableObject)#6 (1) {
    ["value":"HashableObject":private]=>
    int(2)
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
