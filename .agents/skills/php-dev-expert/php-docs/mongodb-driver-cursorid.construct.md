# Constrói um novo ID de cursor (não utilizado)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-cursorid.construct.php

---

# MongoDB\Driver\CursorId::\_\_construct

(mongodb >=1.0.0)

MongoDB\Driver\CursorId::\_\_construct — Constrói um novo ID de cursor (não utilizado)

### Descrição

final private function **MongoDB\Driver\CursorId::\_\_construct**()

Objetos [MongoDB\Driver\CursorId](class.mongodb-driver-cursorid.md) são retornados pela função
[MongoDB\Driver\Cursor::getId()](mongodb-driver-cursor.getid.md) e não podem ser construídos
diretamente.

### Parâmetros

Esta função não possui parâmetros.

### Veja também

- [MongoDB\Driver\Cursor::getId()](mongodb-driver-cursor.getid.md) - Retorna o ID para este cursor

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
