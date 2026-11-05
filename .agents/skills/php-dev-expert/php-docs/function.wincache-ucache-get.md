# Obtém uma variável armazenada no cache do usuário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.wincache-ucache-get.php

---

# wincache\_ucache\_get

(PECL wincache >= 1.1.0)

wincache\_ucache\_get — 
Obtém uma variável armazenada no cache do usuário

### Descrição

function **wincache\_ucache\_get**([mixed](language.types.mixed.md) `$key`, [bool](language.types.boolean.md) `&$success` = ?): [mixed](language.types.mixed.md)

Obtém uma variável armazenada no cache do usuário,

### Parâmetros

`key`
:   O parâmetro `key` é a chave usada para armazenar a variável no cache.
    `key` diferencia maiúsculas de minúsculas. `key` pode ser um
    array de chaves. Neste caso, o valor de retorno será um array de valores de cada elemento
    no array `key`. Se um objeto, ou um array contendo objetos,
    for retornado, os objetos serão desserializados. Consulte
    [\_\_wakeup()](language.oop5.magic.md#object.wakeup) para obter detalhes sobre a desserialização de objetos.

`success`
:   Será definido como **`true`** em caso de sucesso e **`false`** em caso de falha.

### Valor Retornado

Se `key` for uma string, a função retornará o valor da variável armazenada com essa chave.
`success` é definido como **`true`** em caso de sucesso e
como **`false`** em caso de falha.

Se `key` for um array, o parâmetro `success`
será sempre definido como **`true`**. O array retornado (pares nome => valor)
conterá apenas os pares nome => valor para os quais a operação de obtenção no cache do usuário foi
bem-sucedida. Se nenhuma das chaves no array de chaves encontrar uma correspondência no cache do usuário,
um array vazio será retornado.

### Examples

**Exemplo #1 **wincache\_ucache\_get()** com `key` sendo uma string**

```
<?php
wincache_ucache_add('color', 'blue');
var_dump(wincache_ucache_get('color', $success));
var_dump($success);
?>
```

O exemplo acima produzirá:

```
string(4) "blue"
bool(true)
```

**Exemplo #2 **wincache\_ucache\_get()** com `key` sendo um array**

```
<?php
$array1 = array('green' => '5', 'Blue' => '6', 'yellow' => '7', 'cyan' => '8');
wincache_ucache_set($array1);
$array2 = array('green', 'Blue', 'yellow', 'cyan');
var_dump(wincache_ucache_get($array2, $success));
var_dump($success);
?>
```

O exemplo acima produzirá:

```
array(4) { ["green"]=> string(1) "5"
           ["Blue"]=> string(1) "6"
           ["yellow"]=> string(1) "7"
           ["cyan"]=> string(1) "8" }
bool(true)
```

### Veja também

- [wincache\_ucache\_add()](function.wincache-ucache-add.md) - Adiciona uma variável no cache do usuário somente se a variável ainda não existir no cache
- [wincache\_ucache\_set()](function.wincache-ucache-set.md) - Adiciona uma variável no cache do usuário e substitui uma variável se ela já existir no cache
- [wincache\_ucache\_delete()](function.wincache-ucache-delete.md) - Exclui variáveis ​​do cache do usuário
- [wincache\_ucache\_clear()](function.wincache-ucache-clear.md) - Exclui todo o conteúdo do cache do usuário
- [wincache\_ucache\_exists()](function.wincache-ucache-exists.md) - Verifica se uma variável existe no cache do usuário
- [wincache\_ucache\_meminfo()](function.wincache-ucache-meminfo.md) - Recupera informações sobre o uso da memória cache do usuário
- [wincache\_ucache\_info()](function.wincache-ucache-info.md) - Recupera informações sobre dados armazenados no cache do usuário
- [\_\_wakeup()](language.oop5.magic.md#object.wakeup)

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
