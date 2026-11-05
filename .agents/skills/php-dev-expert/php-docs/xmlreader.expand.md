# Retorna uma cópia do nó atual como um objeto DOM

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlreader.expand.php

---

# XMLReader::expand

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

XMLReader::expand — Retorna uma cópia do nó atual como um objeto DOM

### Descrição

public function **XMLReader::expand**([?](language.types.null.md)[DOMNode](class.domnode.md) `$baseNode` = **`null`**): [DOMNode](class.domnode.md)|[false](language.types.singleton.md)

Este método copia o nó atual e retorna o objeto DOM apropriado.

### Parâmetros

`baseNode`
:   Um [DOMNode](class.domnode.md) que define o [DOMDocument](class.domdocument.md) de destino para o objeto DOM criado.

### Valor Retornado

O [DOMNode](class.domnode.md) resultante ou **`false`** em caso de erro.

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
