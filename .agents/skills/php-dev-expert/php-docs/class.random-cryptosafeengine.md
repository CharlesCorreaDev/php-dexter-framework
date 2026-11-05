# A interface Random\CryptoSafeEngine

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.random-cryptosafeengine.php

---

# A interface Random\CryptoSafeEngine

(PHP 8 >= 8.2.0)

## Introdução

Uma interface de marcador indicando que [Random\Engine](class.random-engine.md) retorna aleatoriedade criptograficamente segura.

## Resumo da Interface

namespace **Random**;

interface ****CryptoSafeEngine****
extends
[Random\Engine](class.random-engine.md) {

/\* Métodos herdados \*/

public function [Random\Engine::generate](random-engine.generate.md)(): [string](language.types.string.md)

}

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
