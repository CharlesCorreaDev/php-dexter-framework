# Ordena as entradas usando um algoritmo de "ordem natural"

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayobject.natsort.php

---

# ArrayObject::natsort

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

ArrayObject::natsort — Ordena as entradas usando um algoritmo de "ordem natural"

### Descrição

public function **ArrayObject::natsort**(): [true](language.types.singleton.md)

Este método implementa um algoritmo de ordenação que ordena strings alfanuméricas
da maneira como um ser humano faria, mantendo associações chave/valor.
Isso é descrito como uma "ordem natural". Um exemplo da diferença
entre esse algoritmo e os algoritmos regulares de ordenação de strings de computador
(usados no método [ArrayObject::asort](arrayobject.asort.md))
pode ser visto no exemplo abaixo.

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

**Exemplo #1 Exemplo de **ArrayObject::natsort()****

```
<?php
$array = array("img12.png", "img10.png", "img2.png", "img1.png");

$arr1 = new ArrayObject($array);
$arr2 = clone $arr1;

$arr1->asort();
echo "Ordenação padrão\n";
var_dump($arr1);

$arr2->natsort();
echo "\nOrdenação natural\n";
var_dump($arr2);
?>
```

O exemplo acima produzirá:

```
Ordenação padrão
object(ArrayObject)#1 (1) {
  ["storage":"ArrayObject":private]=>
  array(4) {
    [3]=>
    string(8) "img1.png"
    [1]=>
    string(9) "img10.png"
    [0]=>
    string(9) "img12.png"
    [2]=>
    string(8) "img2.png"
  }
}

Ordenação natural
object(ArrayObject)#2 (1) {
  ["storage":"ArrayObject":private]=>
  array(4) {
    [3]=>
    string(8) "img1.png"
    [2]=>
    string(8) "img2.png"
    [1]=>
    string(9) "img10.png"
    [0]=>
    string(9) "img12.png"
  }
}
```

Para mais informações, consulte a página de [» Comparação de Strings em Ordem Natural](https://github.com/sourcefrog/natsort)
de Martin Pool.

### Veja também

- [ArrayObject::asort()](arrayobject.asort.md) - Ordenar as entradas por valor
- [ArrayObject::ksort()](arrayobject.ksort.md) - Ordena as entradas pela chave
- [ArrayObject::natcasesort()](arrayobject.natcasesort.md) - Ordena um array usando um algoritmo de "ordem natural" insensível a maiúsculas e minúsculas
- [ArrayObject::uasort()](arrayobject.uasort.md) - Ordena as entradas com uma função de comparação definida pelo usuário e mantém a associação de chaves
- [ArrayObject::uksort()](arrayobject.uksort.md) - Ordena as entradas pelas chaves usando uma função de comparação definida pelo usuário
- [natsort()](function.natsort.md) - Ordena um array utilizando o algoritmo de "ordem natural"

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
