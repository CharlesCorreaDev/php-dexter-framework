# Construtor privado para não permitir instanciação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlbreakiterator.construct.php

---

# IntlBreakIterator::\_\_construct

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

IntlBreakIterator::\_\_construct — Construtor privado para não permitir instanciação

### Descrição

private function **IntlBreakIterator::\_\_construct**()

Instâncias de [IntlBreakIterator](class.intlbreakiterator.md) devem ser criadas usando um dos
métodos estáticos de fabricação.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Veja também

- [IntlBreakIterator::createCharacterInstance()](intlbreakiterator.createcharacterinstance.md) - Cria um iterador de quebra para limites de sequências de combinação de caracteres
- [IntlBreakIterator::createCodePointInstance()](intlbreakiterator.createcodepointinstance.md) - Cria um iterador de quebra para limites de pontos de código
- [IntlBreakIterator::createLineInstance()](intlbreakiterator.createlineinstance.md) - Cria um iterador de quebra para quebras de linha logicamente possíveis
- [IntlBreakIterator::createSentenceInstance()](intlbreakiterator.createsentenceinstance.md) - Cria um iterador de quebra para separação de sentenças
- [IntlBreakIterator::createTitleInstance()](intlbreakiterator.createtitleinstance.md) - Cria um iterador para quebras de letras de título
- [IntlBreakIterator::createWordInstance()](intlbreakiterator.createwordinstance.md) - Cria um iterador de quebra para separação de palavras

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
