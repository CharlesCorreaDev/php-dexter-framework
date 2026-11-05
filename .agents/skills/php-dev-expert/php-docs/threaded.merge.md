# Manipulação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/threaded.merge.php

---

# Threaded::merge

(PECL pthreads >= 2.0.0)

Threaded::merge — Manipulação

### Descrição

public function **Threaded::merge**([mixed](language.types.mixed.md) `$from`, [bool](language.types.boolean.md) `$overwrite` = ?): [bool](language.types.boolean.md)

Mescla dados no objeto atual

### Parâmetros

`from`
:   Os dados a serem mesclados

`overwrite`
:   Substitui chaves existentes, por padrão verdadeiro

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Mesclando na tabela de propriedades de um objeto encadeado**

```
<?php
$array = [];

while (count($array) < 10)
    $array[] = count($array);

$stdClass = new stdClass();
$stdClass->foo = "foo";
$stdClass->bar = "bar";
$stdClass->baz = "baz";

$safe = new Threaded();
$safe->merge($array);

$safe->foo = "bar";
$safe->merge($stdClass, false);

var_dump($safe);
?>
```

O exemplo acima produzirá:

```
object(Threaded)#2 (13) {
  ["0"]=>
  int(0)
  ["1"]=>
  int(1)
  ["2"]=>
  int(2)
  ["3"]=>
  int(3)
  ["4"]=>
  int(4)
  ["5"]=>
  int(5)
  ["6"]=>
  int(6)
  ["7"]=>
  int(7)
  ["8"]=>
  int(8)
  ["9"]=>
  int(9)
  ["foo"]=>
  string(3) "bar"
  ["bar"]=>
  string(3) "bar"
  ["baz"]=>
  string(3) "baz"
}
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
