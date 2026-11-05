# Sintaxe de Expressões

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reference.pcre.pattern.syntax.php

---

# Sintaxe de Expressões

## Índice

- [Introdução](regexp.introduction.md)
- [Delimitadores](regexp.reference.delimiters.md)
- [Metacaracteres](regexp.reference.meta.md)
- [Sequências de escape](regexp.reference.escape.md)
- [Propriedades de caracteres Unicode](regexp.reference.unicode.md)
- [Âncoras](regexp.reference.anchors.md)
- [Ponto](regexp.reference.dot.md)
- [Classes de caracteres](regexp.reference.character-classes.md)
- [Alternância](regexp.reference.alternation.md)
- [Configuração de opções dentro da expressão](regexp.reference.internal-options.md)
- [Sub-expressões](regexp.reference.subpatterns.md)
- [Repetição](regexp.reference.repetition.md)
- [Referências retroativas](regexp.reference.back-references.md)
- [Afirmações](regexp.reference.assertions.md)
- [Sub-expressões de ocorrência única](regexp.reference.onlyonce.md)
- [Sub-expressões condicionais](regexp.reference.conditional.md)
- [Comentários](regexp.reference.comments.md)
- [Expressões recursivas](regexp.reference.recursive.md)
- [Desempenho](regexp.reference.performance.md)

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
