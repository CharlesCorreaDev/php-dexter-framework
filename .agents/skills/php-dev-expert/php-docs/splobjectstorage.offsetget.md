# Retorna os dados associados a um object

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splobjectstorage.offsetget.php

---

# SplObjectStorage::offsetGet

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplObjectStorage::offsetGet — Retorna os dados associados a um [object](language.types.object.md)

### Descrição

public function **SplObjectStorage::offsetGet**([object](language.types.object.md) `$object`): [mixed](language.types.mixed.md)

Retorna os dados associados a um [object](language.types.object.md) no armazenamento.

### Parâmetros

`object`
:   O [object](language.types.object.md) a ser procurado.

### Valor Retornado

Os dados previamente associados ao [object](language.types.object.md) no armazenamento.

### Erros/Exceções

Lança [UnexpectedValueException](class.unexpectedvalueexception.md) quando o `object` não pôde ser encontrado.

### Examples

**Exemplo #1 Exemplo de **SplObjectStorage::offsetGet()****

```
<?php
$s = new SplObjectStorage;

$o1 = new stdClass;
$o2 = new stdClass;

$s[$o1] = "hello";
$s->attach($o2);

var_dump($s->offsetGet($o1)); // Similar a $s[$o1]
var_dump($s->offsetGet($o2)); // Similar a $s[$o2]
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(5) "hello"
NULL
```

### Veja também

- [SplObjectStorage::offsetSet()](splobjectstorage.offsetset.md) - Associa dados a um objeto no armazenamento
- [SplObjectStorage::offsetExists()](splobjectstorage.offsetexists.md) - Verifica se um objeto existe no armazenamento
- [SplObjectStorage::offsetUnset()](splobjectstorage.offsetunset.md) - Remove um objeto do armazenamento

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
