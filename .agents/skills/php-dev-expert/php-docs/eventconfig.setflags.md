# Define um ou mais sinalizadores que configuram como o EventBase eventual será inicializado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventconfig.setflags.php

---

# EventConfig::setFlags

(PECL event >= 2.0.2-alpha)

EventConfig::setFlags — Define um ou mais sinalizadores que configuram como o EventBase eventual será inicializado

### Descrição

public
function **EventConfig::setFlags**(
[int](language.types.integer.md) `$flags`
): [bool](language.types.boolean.md)

Define um ou mais sinalizadores para configurar quais partes do
eventual EventBase serão inicializadas e como elas funcionarão.

### Parâmetros

`flags`
:   Uma das constantes `EventBase::LOOP_*`.
    Veja [Constantes EventBase](class.eventbase.md#eventbase.constants).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [EventBase::getFeatures()](eventbase.getfeatures.md) - Retorna a máscara de bits dos recursos suportados

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
