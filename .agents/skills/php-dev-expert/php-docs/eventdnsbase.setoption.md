# Define o valor de uma opção de configuração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventdnsbase.setoption.php

---

# EventDnsBase::setOption

(PECL event >= 1.2.6-beta)

EventDnsBase::setOption — Define o valor de uma opção de configuração

### Descrição

public
function **EventDnsBase::setOption**(
[string](language.types.string.md) `$option`
, 
[string](language.types.string.md) `$value`
): [bool](language.types.boolean.md)

Define o valor de uma opção de configuração.

### Parâmetros

`option`
:   As opções de configuração disponíveis atualmente são:
    `"ndots"`,
    `"timeout"`,
    `"max-timeouts"`,
    `"max-inflight"`
    e
    `"attempts"`.

`value`
:   Valor da opção.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
