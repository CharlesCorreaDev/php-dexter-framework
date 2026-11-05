# Exclui variáveis ​​do cache do usuário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.wincache-ucache-delete.php

---

# wincache\_ucache\_delete

(PECL wincache >= 1.1.0)

wincache\_ucache\_delete — 
Exclui variáveis ​​do cache do usuário

### Descrição

function **wincache\_ucache\_delete**([mixed](language.types.mixed.md) `$key`): [bool](language.types.boolean.md)

Exclui os elementos no cache do usuário apontados por `key`.

### Parâmetros

`key`
:   O parâmetro `key` é a chave usada para armazenar a variável no cache.
    `key` diferencia maiúsculas de minúsculas. `key` pode ser um
    array de chaves.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

Se `key` for um array, a função retornará **`false`**
se todos os elementos do array não forem excluídos do cache do usuário; caso contrário, retornará um
array que consiste em todas as chaves que foram excluídas.

### Examples

**Exemplo #1 Usando **wincache\_ucache\_delete()** com `key` sendo uma string**

```
<?php
wincache_ucache_set('foo', 'bar');
var_dump(wincache_ucache_delete('foo'));
var_dump(wincache_ucache_exists('foo'));
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
```

**Exemplo #2 Usando **wincache\_ucache\_delete()** com `key` sendo um array**

```
<?php
$array1 = array('verde' => '5', 'azul' => '6', 'amarelo' => '7', 'ciano' => '8');
wincache_ucache_set($array1);
$array2 = array('verde', 'azul', 'amarelo', 'ciano');
var_dump(wincache_ucache_delete($array2));
?>
```

O exemplo acima produzirá:

```
array(4) { [0]=> string(5) "verde"
           [1]=> string(4) "azul"
           [2]=> string(7) "amarelo"
           [3]=> string(5) "ciano" }
```

**Exemplo #3 Usando **wincache\_ucache\_delete()** com `key` sendo um array onde alguns elementos não podem ser excluídos**

```
<?php
$array1 = array('verde' => '5', 'azul' => '6', 'amarelo' => '7', 'ciano' => '8');
wincache_ucache_set($array1);
$array2 = array('laranja', 'vermelho', 'amarelo', 'ciano');
var_dump(wincache_ucache_delete($array2));
?>
```

O exemplo acima produzirá:

```
array(2) { [0]=> string(7) "amarelo"
           [1]=> string(5) "ciano" }
```

### Veja também

- [wincache\_ucache\_set()](function.wincache-ucache-set.md) - Adiciona uma variável no cache do usuário e substitui uma variável se ela já existir no cache
- [wincache\_ucache\_add()](function.wincache-ucache-add.md) - Adiciona uma variável no cache do usuário somente se a variável ainda não existir no cache
- [wincache\_ucache\_get()](function.wincache-ucache-get.md) - Obtém uma variável armazenada no cache do usuário
- [wincache\_ucache\_clear()](function.wincache-ucache-clear.md) - Exclui todo o conteúdo do cache do usuário
- [wincache\_ucache\_exists()](function.wincache-ucache-exists.md) - Verifica se uma variável existe no cache do usuário
- [wincache\_ucache\_meminfo()](function.wincache-ucache-meminfo.md) - Recupera informações sobre o uso da memória cache do usuário
- [wincache\_ucache\_info()](function.wincache-ucache-info.md) - Recupera informações sobre dados armazenados no cache do usuário

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
