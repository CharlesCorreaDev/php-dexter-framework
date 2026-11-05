# Serializa o armazenamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splobjectstorage.serialize.php

---

# SplObjectStorage::serialize

(PHP 5 >= 5.2.2, PHP 7, PHP 8)

SplObjectStorage::serialize — Serializa o armazenamento

### Descrição

public function **SplObjectStorage::serialize**(): [string](language.types.string.md)

Retorna uma representação em string do armazenamento.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma string representando o armazenamento.

### Examples

**Exemplo #1 Exemplo de **SplObjectStorage::serialize()****

```
<?php
$s = new SplObjectStorage;
$o = new stdClass;
$s[$o] = "data";

echo $s->serialize()."\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
x:i:1;O:8:"stdClass":0:{},s:4:"data";;m:a:0:{}
```

### Veja também

- [SplObjectStorage::unserialize()](splobjectstorage.unserialize.md) - Desserializa um armazenamento a partir de sua representação de string

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
