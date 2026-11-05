# Regras

> **Fonte / Source:** https://www.php.net/manual/pt_BR/userlandnaming.rules.php

---

## Regras

A lista a seguir dá uma visão geral de quais direitos o projeto do PHP
reserva para si, quando escolhe nomes para novos identificadores internos.
O guia definitivo é
[» PADRÕES DE CÓDIGO](https://github.com/php/php-src/raw/master/CODING_STANDARDS.md):

- PHP detém o escopo de alto nível, mas tenta encontrar nomes descritivos
  decentes e evita qualquer conflito óbvio.
- Nomes de funções usam sublinhado (\_) entre palavras, enquanto nomes de classe usam
  a notação `camelCase` e
  `PascalCase`.
- O PHP prefixará quaisquer símbolos globais de uma extensão com o nome da
  extensão (no passado, existiam várias exceções
  à essa regra). Exemplos:

  - [curl\_close()](function.curl-close.md)
  - [mysql\_query()](function.mysql-query.md)
  - PREG\_SPLIT\_DELIM\_CAPTURE
  - new DOMDocument()
  - [strpos()](function.strpos.md) (exemplo de um erro do passado)
  - new SplFileObject()
- Iteradores e Exceções são, no entanto, simplesmente sufixados com
  "`Iterator`" e "`Exception`".
  Exemplos:

  - [ArrayIterator](class.arrayiterator.md)
  - [LogicException](class.logicexception.md)
- O PHP reserva todos os símbolos começando com `__`
  como mágicos. É recomendado que você não crie símbolos começando com
  `__` a não ser que
  você queira usar a funcionalidade mágica documentada. Exemplos:

  - [\_\_get](language.oop5.overloading.md#object.get)
  - [\_\_autoload()](function.autoload.md)

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
