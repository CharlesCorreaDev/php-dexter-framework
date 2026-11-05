# Retorna o elemento atual em um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.current.php

---

# current

(PHP 4, PHP 5, PHP 7, PHP 8)

current — Retorna o elemento atual em um array

### Descrição

function **current**([array](language.types.array.md)|[object](language.types.object.md) `$array`): [mixed](language.types.mixed.md)

Todo array tem um ponteiro interno para o elemento "atual",
o qual é inicializado para apontar para o primeiro elemento inserido em
um array.

### Parâmetros

`array`
:   O array.

### Valor Retornado

A função **current()** simplesmente retorna
o valor do elemento do array que está sendo apontado pelo
ponteiro interno. Ela não move o ponteiro de forma alguma. Se o
ponteiro interno aponta para além do final da lista de elementos ou o array está
vazio, **current()** retorna **`false`**.

**Aviso**

Esta função pode
retornar o valor booleano **`false`**, mas também pode retornar um valor não booleano que pode ser
avaliado como **`false`**. Leia a seção sobre [Booleanos](language.types.boolean.md) para mais
informações. Use o [operador
===](language.operators.comparison.md) para testar o valor retornado por esta
função.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Chamar esta função em [object](language.types.object.md)s foi descontinuado. Converta o [object](language.types.object.md) para um [array](language.types.array.md) usando [get\_mangled\_object\_vars()](function.get-mangled-object-vars.md) primeiro ou, em vez disso, use os métodos fornecidos por uma classe que implementa [Iterator](class.iterator.md), como [ArrayIterator](class.arrayiterator.md). |
| 7.4.0 | Instâncias de classes [SPL](book.spl.md) agora são tratadas como objetos vazios que não possuem propriedades em vez de chamar o método da interface [Iterator](class.iterator.md) com o mesmo nome desta função. |

### Examples

**Exemplo #1 Exemplo do uso de **current()** e amigos**

```
<?php
$transport = array('foot', 'bike', 'car', 'plane');
echo $mode = current($transport), PHP_EOL; // $mode = 'foot';
echo $mode = next($transport), PHP_EOL;    // $mode = 'bike';
echo $mode = current($transport), PHP_EOL; // $mode = 'bike';
echo $mode = prev($transport), PHP_EOL;    // $mode = 'foot';
echo $mode = end($transport), PHP_EOL;     // $mode = 'plane';
echo $mode = current($transport), PHP_EOL; // $mode = 'plane';

$arr = array();
var_dump(current($arr)); // bool(false)

$arr = array(array());
var_dump(current($arr)); // array(0) { }
?>
```

### Notas

> **Nota**:
>
> Os resultados de chamar **current()** em um array vazio
> e em um array, cujo ponteiro interno aponta para além do fim dos elementos,
> são indistinguíveis de um elemento [bool](language.types.boolean.md) **`false`**.
> Para percorrer adequadamente um array que pode conter elementos **`false`**, veja a
> estrutura de controle [`foreach`](control-structures.foreach.md).
>
> Para ainda usar **current()** e checar adequadamente se o valor
> é realmente um elemento do array, a [key()](function.key.md)
> do elemento **current()** deve ser verificada como estritamente
> diferente de **`null`**.

### Veja também

- [end()](function.end.md) - Define o ponteiro interno de um array para seu último elemento
- [key()](function.key.md) - Retorna uma chave de um array
- [each()](function.each.md) - Retorna o par atual de chave e valor de um array e avança o seu cursor
- [prev()](function.prev.md) - Retrocede o ponteiro interno de um array
- [reset()](function.reset.md) - Faz o ponteiro interno de um array apontar para o seu primeiro elemento
- [next()](function.next.md) - Avança o ponteiro interno de um array
- [`foreach`](control-structures.foreach.md)

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
