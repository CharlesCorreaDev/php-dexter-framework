# A classe Random\Engine\Secure

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.random-engine-secure.php

---

# A classe Random\Engine\Secure

(PHP 8 >= 8.2.0)

## Introdução

Gera aleatoriedade criptograficamente segura usando o CSPRNG do sistema operacional.

A aleatoriedade gerada por este [Random\Engine](class.random-engine.md) é adequada
para todas as aplicações, incluindo a geração de segredos de longo prazo, como
chaves de criptografia.

O mecanismo **Random\Engine\Secure** é a escolha padrão segura recomendada,
a menos que a aplicação exija sequências reproduzíveis ou desempenho muito alto.

## Resumo da classe

namespace **Random\Engine**;

final
class ****Secure****
implements
[Random\CryptoSafeEngine](class.random-cryptosafeengine.md) {

/\* Métodos \*/

public function [generate](random-engine-secure.generate.md)(): [string](language.types.string.md)

}

## Índice

- [Random\Engine\Secure::generate](random-engine-secure.generate.md) — Gera aleatoriedade criptograficamente segura

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
