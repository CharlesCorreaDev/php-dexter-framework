# Remove um object do armazenamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splobjectstorage.detach.php

---

# SplObjectStorage::detach

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplObjectStorage::detach — Remove um [object](language.types.object.md) do armazenamento

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.5.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
public function **SplObjectStorage::detach**([object](language.types.object.md) `$object`): [void](language.types.void.md)

Remove o [object](language.types.object.md) do armazenamento.

### Parâmetros

`object`
:   O [object](language.types.object.md) a ser removido.

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Este método foi descontinuado em favor de [SplObjectStorage::offsetUnset()](splobjectstorage.offsetunset.md). |

### Examples

**Exemplo #1 Exemplo de **SplObjectStorage::detach()****

```
<?php
$o = new stdClass;
$s = new SplObjectStorage();
$s->attach($o);
var_dump(count($s));
$s->detach($o);
var_dump(count($s));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(1)
int(0)
```

### Veja também

- [SplObjectStorage::attach()](splobjectstorage.attach.md) - Adiciona um objeto no armazenamento
- [SplObjectStorage::removeAll()](splobjectstorage.removeall.md) - Remove objetos contidos em outro armazenamento do armazenamento atual

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
