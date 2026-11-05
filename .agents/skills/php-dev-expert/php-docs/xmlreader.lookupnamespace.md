# Busca namespace para um prefixo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlreader.lookupnamespace.php

---

# XMLReader::lookupNamespace

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

XMLReader::lookupNamespace — Busca namespace para um prefixo

### Descrição

public function **XMLReader::lookupNamespace**([string](language.types.string.md) `$prefix`): [?](language.types.null.md)[string](language.types.string.md)

Busca o namespace no escopo para um dado prefixo.

### Parâmetros

`prefix`
:   String contendo o prefixo.

### Valor Retornado

O valor do namespace, ou **`null`** se nenhum namespace existir.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função não pode mais retornar **`false`**. |

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
