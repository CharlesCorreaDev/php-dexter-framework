# Retorna se a entrada atual do iterador é válida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splobjectstorage.valid.php

---

# SplObjectStorage::valid

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplObjectStorage::valid — Retorna se a entrada atual do iterador é válida

### Descrição

public function **SplObjectStorage::valid**(): [bool](language.types.boolean.md)

Retorna se a entrada atual do iterador é válida.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a entrada do iterador for válida, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **SplObjectStorage::valid()****

```
<?php
$s = new SplObjectStorage();

$o1 = new stdClass;
$o2 = new stdClass;

$s->attach($o1, "d1");
$s->attach($o2, "d2");

$s->rewind();
while($s->valid()) {
    echo $s->key()."\n";
    $s->next();
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
0
1
```

### Veja também

- [SplObjectStorage::current()](splobjectstorage.current.md) - Retorna a entrada atual do armazenamento
- [SplObjectStorage::getInfo()](splobjectstorage.getinfo.md) - Retorna os dados associados à entrada atual do iterador

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
