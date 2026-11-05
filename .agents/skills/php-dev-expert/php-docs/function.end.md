# Define o ponteiro interno de um array para seu último elemento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.end.php

---

# end

(PHP 4, PHP 5, PHP 7, PHP 8)

end — Define o ponteiro interno de um array para seu último elemento

### Descrição

function **end**([array](language.types.array.md)|[object](language.types.object.md) `&$array`): [mixed](language.types.mixed.md)

**end()** avança o ponteiro interno de `array`
até o último elemento, e retorna seu valor.

### Parâmetros

`array`
:   O array. Este array é passado por referência porque ele é modificado pela
    função. Isto significa que deve-se passar a esta função uma variável real, e não
    uma função retornando um array, porque somente variáveis reais podem ser
    passadas por referência.

### Valor Retornado

Retorna o valor do último elemento ou **`false`** para array vazio.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Chamar esta função em [object](language.types.object.md)s foi descontinuado. Converta o [object](language.types.object.md) para um [array](language.types.array.md) usando [get\_mangled\_object\_vars()](function.get-mangled-object-vars.md) primeiro ou, em vez disso, use os métodos fornecidos por uma classe que implementa [Iterator](class.iterator.md), como [ArrayIterator](class.arrayiterator.md). |
| 7.4.0 | Instâncias de classes [SPL](book.spl.md) agora são tratadas como objetos vazios que não possuem propriedades em vez de chamar o método da interface [Iterator](class.iterator.md) com o mesmo nome desta função. |

### Examples

**Exemplo #1 Exemplo de **end()****

```
<?php

  $frutas = array('melancia', 'banana', 'morango');
  echo end($frutas); // morango

?>
```

### Veja também

- [current()](function.current.md) - Retorna o elemento atual em um array
- [each()](function.each.md) - Retorna o par atual de chave e valor de um array e avança o seu cursor
- [prev()](function.prev.md) - Retrocede o ponteiro interno de um array
- [reset()](function.reset.md) - Faz o ponteiro interno de um array apontar para o seu primeiro elemento
- [next()](function.next.md) - Avança o ponteiro interno de um array
- [array\_key\_last()](function.array-key-last.md) - Obtém a última chave de um array

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
