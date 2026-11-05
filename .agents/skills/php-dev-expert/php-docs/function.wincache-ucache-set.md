# Adiciona uma variável no cache do usuário e substitui uma variável se ela já existir no cache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.wincache-ucache-set.php

---

# wincache\_ucache\_set

(PECL wincache >= 1.1.0)

wincache\_ucache\_set — 
Adiciona uma variável no cache do usuário e substitui uma variável se ela já existir no cache

### Descrição

function **wincache\_ucache\_set**([mixed](language.types.mixed.md) `$key`, [mixed](language.types.mixed.md) `$value`, [int](language.types.integer.md) `$ttl` = 0): [bool](language.types.boolean.md)

function **wincache\_ucache\_set**([array](language.types.array.md) `$values`, [mixed](language.types.mixed.md) `$unused` = NULL, [int](language.types.integer.md) `$ttl` = 0): [bool](language.types.boolean.md)

Adiciona uma variável ao cache do usuário. Substitui uma variável se ela já existir no cache.
A variável adicionada ou atualizada permanece no cache do usuário, a menos que seu tempo de vida expire ou seja
excluída usando as funções [wincache\_ucache\_delete()](function.wincache-ucache-delete.md) ou [wincache\_ucache\_clear()](function.wincache-ucache-clear.md).

### Parâmetros

`key`
:   Armazene a variável usando este nome `key`. Se uma variável com o mesmo
    `key` já estiver presente, a função substituirá o valor
    anterior pelo novo. `key` diferencia maiúsculas de minúsculas.
    `key` também pode receber um array de pares nome => valor, onde os nomes serão usados ​​como
    chaves. Isso pode ser usado para adicionar vários valores ao cache em uma única operação, evitando assim
    condições de corrida.

`value`
:   Valor de uma variável a ser armazenada. `Value` suporta todos os tipos de dados, exceto recursos, como identificadores de arquivo.
    Este parâmetro é ignorado se o primeiro argumento for um array. Uma orientação geral é passar **`null`**
    como `value` enquanto usa array como `key`. Se `value` for um
    objeto ou um array contendo objetos, os objetos serão serializados. Consulte
    [\_\_sleep()](language.oop5.magic.md#object.sleep) para obter detalhes sobre a serialização de objetos.

`values`
:   Array associativo de chaves e valores.

`ttl`
:   Tempo que a variável permanece no cache em segundos. Após o valor especificado em `ttl` ser excedido,
    a variável armazenada será excluída do cache. Este parâmetro assume o valor padrão de `0`, o que significa que
    a variável permanecerá no cache, a menos que seja explicitamente excluída usando as funções [wincache\_ucache\_delete()](function.wincache-ucache-delete.md)
    ou [wincache\_ucache\_clear()](function.wincache-ucache-clear.md).

### Valor Retornado

Se `key` for uma string, a função retornará **`true`** em caso de sucesso e **`false`** em caso de falha.

Se `key` for um array, a função retornará:

- Se todos os pares nome => valor no array puderem ser definidos, a função retornará um array vazio;
- Se todos os pares nome => valor no array não puderem ser definidos, a função retornará **`false`**;
- Se alguns puderem ser definidos enquanto outros não, a função retornará um array com par nome=>valor para o qual a adição falhou no cache do usuário.

### Examples

**Exemplo #1 **wincache\_ucache\_set()** com `key` sendo uma string**

```
<?php
$bar = 'BAR';
var_dump(wincache_ucache_set('foo', $bar));
var_dump(wincache_ucache_get('foo'));
$bar1 = 'BAR1';
var_dump(wincache_ucache_set('foo', $bar1));
var_dump(wincache_ucache_get('foo'));
?>
```

O exemplo acima produzirá:

```
bool(true)
string(3) "BAR"
bool(true)
string(3) "BAR1"
```

**Exemplo #2 **wincache\_ucache\_set()** com `key` sendo um array**

```
<?php
$colors_array = array('green' => '5', 'Blue' => '6', 'yellow' => '7', 'cyan' => '8');
var_dump(wincache_ucache_set($colors_array));
var_dump(wincache_ucache_set($colors_array));
var_dump(wincache_ucache_get('Blue'));
?>
```

O exemplo acima produzirá:

```
array(0) {}
array(0) {}
string(1) "6"
```

### Veja também

- [wincache\_ucache\_add()](function.wincache-ucache-add.md) - Adiciona uma variável no cache do usuário somente se a variável ainda não existir no cache
- [wincache\_ucache\_get()](function.wincache-ucache-get.md) - Obtém uma variável armazenada no cache do usuário
- [wincache\_ucache\_delete()](function.wincache-ucache-delete.md) - Exclui variáveis ​​do cache do usuário
- [wincache\_ucache\_clear()](function.wincache-ucache-clear.md) - Exclui todo o conteúdo do cache do usuário
- [wincache\_ucache\_exists()](function.wincache-ucache-exists.md) - Verifica se uma variável existe no cache do usuário
- [wincache\_ucache\_meminfo()](function.wincache-ucache-meminfo.md) - Recupera informações sobre o uso da memória cache do usuário
- [wincache\_ucache\_info()](function.wincache-ucache-info.md) - Recupera informações sobre dados armazenados no cache do usuário
- [\_\_sleep()](language.oop5.magic.md#object.sleep)

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
