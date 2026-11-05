# Desserializa um armazenamento a partir de sua representação de string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splobjectstorage.unserialize.php

---

# SplObjectStorage::unserialize

(PHP 5 >= 5.2.2, PHP 7, PHP 8)

SplObjectStorage::unserialize — Desserializa um armazenamento a partir de sua representação de string

### Descrição

public function **SplObjectStorage::unserialize**([string](language.types.string.md) `$data`): [void](language.types.void.md)

Desserializa entradas de armazenamento e as associa ao armazenamento atual.

### Parâmetros

`data`
:   A representação serializada de um armazenamento.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **SplObjectStorage::unserialize()****

```
<?php
$s1 = new SplObjectStorage;
$s2 = new SplObjectStorage;
$o = new stdClass;
$s1[$o] = "data";

$s2->unserialize($s1->serialize());

var_dump(count($s2));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(1)
```

### Veja também

- [SplObjectStorage::serialize()](splobjectstorage.serialize.md) - Serializa o armazenamento

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
