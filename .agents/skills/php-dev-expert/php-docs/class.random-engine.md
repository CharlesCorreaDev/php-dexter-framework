# A interface Random\Engine

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.random-engine.php

---

# A interface Random\Engine

(PHP 8 >= 8.2.0)

## Introdução

Um **Random\Engine** fornece uma fonte de aleatoriedade de baixo nível
retornando bytes aleatórios que são consumidos por APIs de alto nível para executar suas operações.
A interface **Random\Engine** permite trocar o algoritmo
usado para gerar aleatoriedade, porque cada algoritmo faz compensações diferentes para se adequar
a casos de uso específicos. Alguns algoritmos são muito rápidos, mas geram aleatoriedade de qualidade
inferior, enquanto outros algoritmos são mais lentos, mas geram uma aleatoriedade melhor, até uma
aleatoriedade criptograficamente segura, conforme fornecido pelo mecanismo
[Random\Engine\Secure](class.random-engine-secure.md).

O PHP fornece vários **Random\Engine**s prontos para uso para acomodar
diferentes casos de uso. O mecanismo [Random\Engine\Secure](class.random-engine-secure.md) que é
apoiado por um CSPRNG é a escolha padrão segura recomendada, a menos que
o aplicativo exija sequências reproduzíveis ou desempenho muito alto.

## Resumo da Interface

namespace **Random**;

interface ****Engine**** {

/\* Métodos \*/

public function [generate](random-engine.generate.md)(): [string](language.types.string.md)

}

## Índice

- [Random\Engine::generate](random-engine.generate.md) — Gera aleatoriedade

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
