# Desserializa um ArrayObject

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayobject.unserialize.php

---

# ArrayObject::unserialize

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

ArrayObject::unserialize — Desserializa um ArrayObject

### Descrição

public function **ArrayObject::unserialize**([string](language.types.string.md) `$data`): [void](language.types.void.md)

Desserializa um [ArrayObject](class.arrayobject.md) serializado.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`data`
:   O [ArrayObject](class.arrayobject.md) serializado.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [ArrayIterator::serialize()](arrayiterator.serialize.md) - Serializa
- [unserialize()](function.unserialize.md) - Cria um valor PHP a partir de uma representação armazenada
- [Serializando Objetos](language.oop5.serialization.md)

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
