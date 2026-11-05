# Serializa um ArrayObject

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayobject.serialize.php

---

# ArrayObject::serialize

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

ArrayObject::serialize — Serializa um ArrayObject

### Descrição

public function **ArrayObject::serialize**(): [string](language.types.string.md)

Serializa um [ArrayObject](class.arrayobject.md).

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A representação serializada do [ArrayObject](class.arrayobject.md).

### Examples

**Exemplo #1 Exemplo de **ArrayObject::serialize()****

```
<?php
$o = new ArrayObject();

$s1 = serialize($o);
$s2 = $o->serialize();

var_dump($s1);
var_dump($s2);
?>
```

O exemplo acima produzirá:

```
string(45) "C:11:"ArrayObject":21:{x:i:0;a:0:{};m:a:0:{}}"
string(21) "x:i:0;a:0:{};m:a:0:{}"
```

### Veja também

- [ArrayObject::unserialize()](arrayobject.unserialize.md) - Desserializa um ArrayObject
- [serialize()](function.serialize.md) - Gera uma representação armazenável de um valor
- [Serializando objetos](language.oop5.serialization.md)

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
