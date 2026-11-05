# Adiciona um objeto no armazenamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splobjectstorage.attach.php

---

# SplObjectStorage::attach

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplObjectStorage::attach — Adiciona um objeto no armazenamento

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.5.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
public function **SplObjectStorage::attach**([object](language.types.object.md) `$object`, [mixed](language.types.mixed.md) `$info` = [null](reserved.constants.md#constant.null)): [void](language.types.void.md)

Adiciona um [object](language.types.object.md) dentro do armazenamento e, opcionalmente, associa-a a alguns dados.

Este método é um sinônimo de [SplObjectStorage::offsetSet()](splobjectstorage.offsetset.md).

### Parâmetros

`object`
:   O [object](language.types.object.md) a ser adicionado.

`info`
:   Os dados a serem associados ao [object](language.types.object.md).

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Este método foi descontinuado em favor de [SplObjectStorage::offsetSet()](splobjectstorage.offsetset.md). |

### Examples

**Exemplo #1 Exemplo de **SplObjectStorage::attach()****

```
<?php
$o1 = new stdClass;
$o2 = new stdClass;
$s = new SplObjectStorage();
$s->attach($o1); // similar a $s[$o1] = NULL;
$s->attach($o2, "hello"); // similar a $s[$o2] = "hello";

var_dump($s[$o1]);
var_dump($s[$o2]);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
NULL
string(5) "hello"
```

### Veja também

- [SplObjectStorage::detach()](splobjectstorage.detach.md) - Remove um object do armazenamento
- [SplObjectStorage::offsetSet()](splobjectstorage.offsetset.md) - Associa dados a um objeto no armazenamento

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
