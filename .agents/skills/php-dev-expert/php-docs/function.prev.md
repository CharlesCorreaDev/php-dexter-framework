# Retrocede o ponteiro interno de um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.prev.php

---

# prev

(PHP 4, PHP 5, PHP 7, PHP 8)

prev — Retrocede o ponteiro interno de um array

### Descrição

function **prev**([array](language.types.array.md)|[object](language.types.object.md) `&$array`): [mixed](language.types.mixed.md)

Retrocede o ponteiro interno do array.

**prev()** funciona como [next()](function.next.md),
exceto que ela retrocede o ponteiro interno do array ao invés de avançá-lo.

### Parâmetros

`array`
:   O array de entrada.

### Valor Retornado

Retorna o valor do array que está na posição anterior à posição apontada
pelo ponteiro interno, ou **`false`** se não houver mais
elementos.

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

**Exemplo #1 Exemplo de uso de **prev()** e funções relacionadas**

```
<?php
$transport = array('foot', 'bike', 'car', 'plane');
echo $mode = current($transport), PHP_EOL; // $mode = 'foot';
echo $mode = next($transport), PHP_EOL;    // $mode = 'bike';
echo $mode = next($transport), PHP_EOL;    // $mode = 'car';
echo $mode = prev($transport), PHP_EOL;    // $mode = 'bike';
echo $mode = end($transport), PHP_EOL;     // $mode = 'plane';
?>
```

### Notas

> **Nota**:
>
> Não será possível distinguir entre o início de um array e um elemento
> [bool](language.types.boolean.md) **`false`**. Para que seja possível identificar o início do array,
> deve ser verificado se a [key()](function.key.md) do elemento **prev()** não é
> **`null`**.

### Veja também

- [current()](function.current.md) - Retorna o elemento atual em um array
- [end()](function.end.md) - Define o ponteiro interno de um array para seu último elemento
- [next()](function.next.md) - Avança o ponteiro interno de um array
- [reset()](function.reset.md) - Faz o ponteiro interno de um array apontar para o seu primeiro elemento
- [each()](function.each.md) - Retorna o par atual de chave e valor de um array e avança o seu cursor

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
