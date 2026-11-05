# Ordena um array usando um algoritmo de "ordem natural" insensível a maiúsculas e minúsculas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayobject.natcasesort.php

---

# ArrayObject::natcasesort

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

ArrayObject::natcasesort — Ordena um array usando um algoritmo de "ordem natural" insensível a maiúsculas e minúsculas

### Descrição

public function **ArrayObject::natcasesort**(): [true](language.types.singleton.md)

Este método é uma versão insensível a maiúsculas e minúsculas de
[ArrayObject::natsort](arrayobject.natsort.md).

Este método implementa um algoritmo de classificação que ordena
strings alfanuméricas da maneira como um ser humano faria, mantendo
associações chave/valor. Isso é descrito como uma "ordem natural".

> **Nota**:
>
> Se dois elementos são comparados como iguais, eles mantêm sua ordem original.
> Antes do PHP 8.0.0, sua ordem relativa no array ordenado era indefinida.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | O tipo do retorno agora é **`true`**; anteriormente, era [bool](language.types.boolean.md). |

### Examples

**Exemplo #1 Exemplo de **ArrayObject::natcasesort()****

```
<?php
$array = array('IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png');

$arr1 = new ArrayObject($array);
$arr2 = clone $arr1;

$arr1->asort();
echo "Ordenação padrão\n";
var_dump($arr1);

$arr2->natcasesort();
echo "\nOrdenação natural (insensível a maiúsculas/minúsculas)\n";
var_dump($arr2);
?>
```

O exemplo acima produzirá:

```
Ordenação padrão
object(ArrayObject)#1 (1) {
  ["storage":"ArrayObject":private]=>
  array(6) {
    [0]=>
    string(8) "IMG0.png"
    [5]=>
    string(8) "IMG3.png"
    [4]=>
    string(8) "img1.png"
    [2]=>
    string(9) "img10.png"
    [1]=>
    string(9) "img12.png"
    [3]=>
    string(8) "img2.png"
  }
}

Ordenação natural (insensível a maiúsculas/minúsculas)
object(ArrayObject)#2 (1) {
  ["storage":"ArrayObject":private]=>
  array(6) {
    [0]=>
    string(8) "IMG0.png"
    [4]=>
    string(8) "img1.png"
    [3]=>
    string(8) "img2.png"
    [5]=>
    string(8) "IMG3.png"
    [2]=>
    string(9) "img10.png"
    [1]=>
    string(9) "img12.png"
  }
}
```

Para obter mais informações, consulte a página de Comparação de Cadeias de Caracteres em Ordem Natural de Martin Pool:
[» Natural Order String Comparison](https://github.com/sourcefrog/natsort).

### Veja também

- [ArrayObject::asort()](arrayobject.asort.md) - Ordenar as entradas por valor
- [ArrayObject::ksort()](arrayobject.ksort.md) - Ordena as entradas pela chave
- [ArrayObject::natsort()](arrayobject.natsort.md) - Ordena as entradas usando um algoritmo de "ordem natural"
- [ArrayObject::uasort()](arrayobject.uasort.md) - Ordena as entradas com uma função de comparação definida pelo usuário e mantém a associação de chaves
- [ArrayObject::uksort()](arrayobject.uksort.md) - Ordena as entradas pelas chaves usando uma função de comparação definida pelo usuário
- [natcasesort()](function.natcasesort.md) - Ordena um array utilizando o algoritmo de "ordem natural" sem diferenciar maiúsculas e minúsculas

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
