# Cria um novo objeto DOMXPath

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domxpath.construct.php

---

# DOMXPath::\_\_construct

(PHP 5, PHP 7, PHP 8)

DOMXPath::\_\_construct — 
Cria um novo objeto [DOMXPath](class.domxpath.md)

### Descrição

public function **DOMXPath::\_\_construct**([DOMDocument](class.domdocument.md) `$document`, [bool](language.types.boolean.md) `$registerNodeNS` = **`true`**)

Cria um novo objeto [DOMXPath](class.domxpath.md).

### Parâmetros

`document`
:   O [DOMDocument](class.domdocument.md) associado ao
    [DOMXPath](class.domxpath.md).

`registerNodeNS`
:   Define se deve-se registrar automaticamente os prefixos de espaços de nomes dentro do escopo no nó de contexto para o objeto [DOMXPath](class.domxpath.md).
    Isto pode ser usado para evitar a necessidade de se chamar [DOMXPath::registerNamespace()](domxpath.registernamespace.md) manuallmente para cada espaço de nome dentro do escopo.
    Quando existir um conflito entre prefixos de espaços de nomes, apenas o prefixo do espaço de nome descendente mais próximo será registrado.

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
