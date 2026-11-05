# A classe SplFixedArray

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.splfixedarray.php

---

# A classe SplFixedArray

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

## Introdução

A classe SplFixedArray fornece as principais funcionalidades de um array. A
principal diferença entre um SplFixedArray e um array PHP normal é que
o SplFixedArray deve ser redimensionado manualmente e permite apenas inteiros dentro
do intervalo como índices. A vantagem é que ele usa menos memória do que
um [array](language.types.array.md) padrão.

## Resumo da classe

class ****SplFixedArray****
implements
[IteratorAggregate](class.iteratoraggregate.md),
[ArrayAccess](class.arrayaccess.md),
[Countable](class.countable.md),
[JsonSerializable](class.jsonserializable.md) {

/\* Métodos \*/

public function [\_\_construct](splfixedarray.construct.md)([int](language.types.integer.md) `$size` = 0)

public function [count](splfixedarray.count.md)(): [int](language.types.integer.md)

public function [current](splfixedarray.current.md)(): [mixed](language.types.mixed.md)

public static function [fromArray](splfixedarray.fromarray.md)([array](language.types.array.md) `$array`, [bool](language.types.boolean.md) `$preserveKeys` = **`true`**): [SplFixedArray](class.splfixedarray.md)

public function [getIterator](splfixedarray.getiterator.md)(): [Iterator](class.iterator.md)

public function [getSize](splfixedarray.getsize.md)(): [int](language.types.integer.md)

public function [jsonSerialize](splfixedarray.jsonserialize.md)(): [array](language.types.array.md)

public function [key](splfixedarray.key.md)(): [int](language.types.integer.md)

public function [next](splfixedarray.next.md)(): [void](language.types.void.md)

public function [offsetExists](splfixedarray.offsetexists.md)([int](language.types.integer.md) `$index`): [bool](language.types.boolean.md)

public function [offsetGet](splfixedarray.offsetget.md)([int](language.types.integer.md) `$index`): [mixed](language.types.mixed.md)

public function [offsetSet](splfixedarray.offsetset.md)([int](language.types.integer.md) `$index`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function [offsetUnset](splfixedarray.offsetunset.md)([int](language.types.integer.md) `$index`): [void](language.types.void.md)

public function [rewind](splfixedarray.rewind.md)(): [void](language.types.void.md)

public function [\_\_serialize](splfixedarray.serialize.md)(): [array](language.types.array.md)

public function [setSize](splfixedarray.setsize.md)([int](language.types.integer.md) `$size`): [true](language.types.singleton.md)

public function [toArray](splfixedarray.toarray.md)(): [array](language.types.array.md)

public function [\_\_unserialize](splfixedarray.unserialize.md)([array](language.types.array.md) `$data`): [void](language.types.void.md)

public function [valid](splfixedarray.valid.md)(): [bool](language.types.boolean.md)

#[[\Deprecated](class.deprecated.md)]  
public function [\_\_wakeup](splfixedarray.wakeup.md)(): [void](language.types.void.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Acessos fora dos limites em **SplFixedArray** agora lançam exceções do tipo [OutOfBoundsException](class.outofboundsexception.md) em vez de [RuntimeException](class.runtimeexception.md). Como [OutOfBoundsException](class.outofboundsexception.md) é uma classe filha de [RuntimeException](class.runtimeexception.md), nenhuma mudança de comportamento é exibida ao tentar capturar essas exceções. |
| 8.2.0 | Os métodos mágicos [SplFixedArray::\_\_serialize()](splfixedarray.serialize.md) e [SplFixedArray::\_\_unserialize()](splfixedarray.unserialize.md) foram adicionados à classe **SplFixedArray**. |
| 8.1.0 | **SplFixedArray** implementa [JsonSerializable](class.jsonserializable.md) agora. |
| 8.0.0 | **SplFixedArray** implementa [IteratorAggregate](class.iteratoraggregate.md) agora. Anteriormente, implementava [Iterator](class.iterator.md). |

## Examples

**Exemplo #1 Exemplo de uso de **SplFixedArray****

```
<?php
// Inicialize o array com um comprimento fixo
$array = new SplFixedArray(5);

$array[1] = 2;
$array[4] = "foo";

var_dump($array[0]); // NULL
var_dump($array[1]); // int(2)

var_dump($array["4"]); // string(3) "foo"

// Aumenta o tamanho do array para 10
$array->setSize(10);

$array[9] = "asdf";

// Reduz o array para um tamanho de 2
$array->setSize(2);

// As seguintes linhas lançam uma RuntimeException: Índice inválido ou fora do intervalo
try {
    var_dump($array["non-numeric"]);
} catch(RuntimeException $re) {
    echo "RuntimeException: ".$re->getMessage()."\n";
}

try {
    var_dump($array[-1]);
} catch(RuntimeException $re) {
    echo "RuntimeException: ".$re->getMessage()."\n";
}

try {
    var_dump($array[5]);
} catch(RuntimeException $re) {
    echo "RuntimeException: ".$re->getMessage()."\n";
}
?>
```

O exemplo acima produzirá:

```
NULL
int(2)
string(3) "foo"
RuntimeException: Index invalid or out of range
RuntimeException: Index invalid or out of range
RuntimeException: Index invalid or out of range
```

## Índice

- [SplFixedArray::\_\_construct](splfixedarray.construct.md) — Constrói um novo array fixo
- [SplFixedArray::count](splfixedarray.count.md) — Retorna o tamanho do array
- [SplFixedArray::current](splfixedarray.current.md) — Retorna a entrada atual do array
- [SplFixedArray::fromArray](splfixedarray.fromarray.md) — Importa um array PHP em uma instância SplFixedArray
- [SplFixedArray::getIterator](splfixedarray.getiterator.md) — Recupera o iterador para percorrer o array
- [SplFixedArray::getSize](splfixedarray.getsize.md) — Obtém o tamanho do array
- [SplFixedArray::jsonSerialize](splfixedarray.jsonserialize.md) — Retorna uma representação que pode ser convertida em JSON
- [SplFixedArray::key](splfixedarray.key.md) — Retorna o índice atual do array
- [SplFixedArray::next](splfixedarray.next.md) — Move para a próxima entrada
- [SplFixedArray::offsetExists](splfixedarray.offsetexists.md) — Retorna se o índice solicitado existe
- [SplFixedArray::offsetGet](splfixedarray.offsetget.md) — Retorna o valor no índice especificado
- [SplFixedArray::offsetSet](splfixedarray.offsetset.md) — Define um novo valor em um índice especificado
- [SplFixedArray::offsetUnset](splfixedarray.offsetunset.md) — Remove o valor no $index especificado
- [SplFixedArray::rewind](splfixedarray.rewind.md) — Rebobina o iterador de volta ao início
- [SplFixedArray::\_\_serialize](splfixedarray.serialize.md) — Serializa o objeto SplFixedArray
- [SplFixedArray::setSize](splfixedarray.setsize.md) — Altera o tamanho de um array
- [SplFixedArray::toArray](splfixedarray.toarray.md) — Retorna um array PHP do array fixo
- [SplFixedArray::\_\_unserialize](splfixedarray.unserialize.md) — Desserializa o parâmetro data em um objeto SplFixedArray
- [SplFixedArray::valid](splfixedarray.valid.md) — Verifica se o array contém mais elementos
- [SplFixedArray::\_\_wakeup](splfixedarray.wakeup.md) — Reinicializa o array após ser desserializado

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
