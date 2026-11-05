# Verifica se no armazenamento contém um objeto específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splobjectstorage.contains.php

---

# SplObjectStorage::contains

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplObjectStorage::contains — Verifica se no armazenamento contém um objeto específico

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.5.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
public function **SplObjectStorage::contains**([object](language.types.object.md) `$object`): [bool](language.types.boolean.md)

Verifica se no armazenamento contém o [object](language.types.object.md) fornecido.

### Parâmetros

`object`
:   O [object](language.types.object.md) a ser procurado.

### Valor Retornado

Retorna **`true`** se o [object](language.types.object.md) estiver no armazenamento, **`false`** caso contrário.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Este método foi descontinuado em favor de [SplObjectStorage::offsetExists()](splobjectstorage.offsetexists.md). |

### Examples

**Exemplo #1 Exemplo de **SplObjectStorage::contains()****

```
<?php
$o1 = new stdClass;
$o2 = new stdClass;

$s = new SplObjectStorage();

$s[$o1] = "hello";
var_dump($s->contains($o1));
var_dump($s->contains($o2));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(true)
bool(false)
```

### Veja também

- [SplObjectStorage::offsetExists()](splobjectstorage.offsetexists.md) - Verifica se um objeto existe no armazenamento

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
