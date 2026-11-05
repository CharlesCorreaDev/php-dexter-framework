# Retorna o elemento atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-cursor.current.php

---

# MongoDB\Driver\Cursor::current

(mongodb >=1.9.0)

MongoDB\Driver\Cursor::current — Retorna o elemento atual

### Descrição

public function **MongoDB\Driver\Cursor::current**(): [array](language.types.array.md)|[object](language.types.object.md)|[null](language.types.null.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o documento de resultado atual como um array ou objeto, dependendo do
mapa de tipo do cursor. Se a iteração não tiver iniciado ou se a posição atual
não for válida, retorna **`null`**.

### Veja também

- [Iterator::current()](iterator.current.md) - Retorna o elemento atual

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
