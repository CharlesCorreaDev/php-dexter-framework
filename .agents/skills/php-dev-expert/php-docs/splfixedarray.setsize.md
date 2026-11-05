# Altera o tamanho de um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfixedarray.setsize.php

---

# SplFixedArray::setSize

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplFixedArray::setSize — Altera o tamanho de um array

### Descrição

public function **SplFixedArray::setSize**([int](language.types.integer.md) `$size`): [true](language.types.singleton.md)

Altera o tamanho de um array para o novo tamanho especificado por `size`. Se
`size` for menor que o tamanho atual do array, quaisquer valores após o novo tamanho
serão descartados. Se `size` for maior que o tamanho atual do array, o array será
preenchido com valores **`null`**.

### Parâmetros

`size`
:   O novo tamanho do array. Isso deve ser um valor entre `0` e **`PHP_INT_MAX`**.

### Valor Retornado

Sempre retorna **`true`**.

### Erros/Exceções

Lança [ValueError](class.valueerror.md) quando
`size` for menor que zero.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | **SplFixedArray::setSize()** agora tem um tipo de retorno provisório de [true](language.types.singleton.md). |

### Examples

**Exemplo #1 Exemplo de **SplFixedArray::setSize()****

```
<?php
   $array = new SplFixedArray(5);
   echo $array->getSize()."\n";
   $array->setSize(10);
   echo $array->getSize()."\n";
?>
```

O exemplo acima produzirá:

```
5
10
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
