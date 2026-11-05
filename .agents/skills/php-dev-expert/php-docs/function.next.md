# Avança o ponteiro interno de um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.next.php

---

# next

(PHP 4, PHP 5, PHP 7, PHP 8)

next — Avança o ponteiro interno de um array

### Descrição

function **next**([array](language.types.array.md)|[object](language.types.object.md) `&$array`): [mixed](language.types.mixed.md)

**next()** funciona de forma semelhante a
[current()](function.current.md), com uma diferença. Ele avança o
ponteiro interno do array em uma posição antes de retornar o
valor do elemento. Isso significa que ela retorna o próximo valor do array
avançando o ponteiro interno em uma posição.

### Parâmetros

`array`
:   O [array](language.types.array.md) a ser afetado.

### Valor Retornado

Retorna o elemento do array que está na próxima posição que é apontada
pelo ponteiro interno do array, ou **`false`** caso não existam mais elementos.

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

**Exemplo #1 Exemplo de uso de **next()** e funções relacionadas**

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
> O final do array não é distinguível de um elemento [bool](language.types.boolean.md) **`false`**.
> Para atravessar um array que contenha elementos **`false`**, veja a função
> [`foreach`](control-structures.foreach.md).
>
> Para continuar utilizando **next()** e verificar se o fim do array
> foi atingido, verifique se [key()](function.key.md) é **`null`**.

### Veja também

- [current()](function.current.md) - Retorna o elemento atual em um array
- [end()](function.end.md) - Define o ponteiro interno de um array para seu último elemento
- [prev()](function.prev.md) - Retrocede o ponteiro interno de um array
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
