# Verifica se uma entrada existe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.apcu-exists.php

---

# apcu\_exists

(PECL apcu >= 4.0.0)

apcu\_exists — Verifica se uma entrada existe

### Descrição

function **apcu\_exists**([string](language.types.string.md)|[array](language.types.array.md) `$keys`): [bool](language.types.boolean.md)|[array](language.types.array.md)

Verifica se uma ou mais entradas do APCu existem.

### Parâmetros

`keys`
:   Uma [string](language.types.string.md) ou um [array](language.types.array.md) de strings que
    contenha chaves.

### Valor Retornado

Retorna **`true`** se a chave existir, caso contrário **`false`**; ou se um
[array](language.types.array.md) foi informado em `keys`, um
array que contém todas as chaves existentes é retornado, ou um array
vazio se nenhuma existir.

### Examples

**Exemplo #1 Exemplo de **apcu\_exists()****

```
<?php
$fruit  = 'banana';
$veggie = 'cenoura';

apcu_store('foo', $fruit);
apcu_store('bar', $veggie);

if (apcu_exists('foo')) {
    echo "Foo existe: ";
    echo apcu_fetch('foo');
} else {
    echo "Foo não existe";
}

echo PHP_EOL;
if (apcu_exists('baz')) {
    echo "Baz existe.";
} else {
    echo "Baz não existe";
}

echo PHP_EOL;

$ret = apcu_exists(array('foo', 'naoexiste', 'bar'));
var_dump($ret);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Foo existe: banana
Baz não existe
array(2) {
  ["foo"]=>
  bool(true)
  ["bar"]=>
  bool(true)
}
```

### Veja também

- [apcu\_cache\_info()](function.apcu-cache-info.md) - Recupera informação em cache a partir do armazenamento de dados do APCu
- [apcu\_fetch()](function.apcu-fetch.md) - Busca uma variável armazenada no cache

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
