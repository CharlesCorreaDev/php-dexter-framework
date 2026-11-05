# Faz o ponteiro interno de um array apontar para o seu primeiro elemento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.reset.php

---

# reset

(PHP 4, PHP 5, PHP 7, PHP 8)

reset — Faz o ponteiro interno de um array apontar para o seu primeiro elemento

### Descrição

function **reset**([array](language.types.array.md)|[object](language.types.object.md) `&$array`): [mixed](language.types.mixed.md)

**reset()** retrocede o ponteiro interno de `array`
para o primeiro elemento e retorna o valor do primeiro elemento
do array.

### Parâmetros

`array`
:   O array de entrada.

### Valor Retornado

Retorna o valor do primeiro elemento do array, ou **`false`** se o array estiver
vazio.

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

**Exemplo #1 Exemplo da **reset()****

```
<?php

$array = array('primeiro passo', 'segundo passo', 'terceiro passo', 'quarto passo');

// por definição, o ponteiro está sobre o primeiro elemento
echo current($array)."<br />\n"; // "Primeiro passo"

// pula dois passos
next($array);
next($array);
echo current($array)."<br />\n"; // "passo três"

// reinicia o ponteiro, começa novamente o primeiro passo
reset($array);
echo current($array)."<br />\n"; // "primeiro passo"

?>
```

### Notas

> **Nota**:
>
> O valor retornado em um array vazio não é diferente de o valor
> retornado no caso de um array contendo um primeiro elemento [bool](language.types.boolean.md) **`false`**.
> Para verificar corretamente o primeiro elemento de um array que
> possa conter elementos **`false`**, primeiro verifique se [count()](function.count.md)
> do array, ou verifique se [key()](function.key.md) não é
> **`null`**, depois de chamar **reset()**.

### Veja também

- [current()](function.current.md) - Retorna o elemento atual em um array
- [each()](function.each.md) - Retorna o par atual de chave e valor de um array e avança o seu cursor
- [end()](function.end.md) - Define o ponteiro interno de um array para seu último elemento
- [next()](function.next.md) - Avança o ponteiro interno de um array
- [prev()](function.prev.md) - Retrocede o ponteiro interno de um array
- [array\_key\_first()](function.array-key-first.md) - Obtém a primeira chave de um array

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
