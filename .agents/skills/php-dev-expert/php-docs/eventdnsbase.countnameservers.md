# Obtém o número de servidores de nomes configurados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventdnsbase.countnameservers.php

---

# EventDnsBase::countNameservers

(PECL event >= 1.2.6-beta)

EventDnsBase::countNameservers — Obtém o número de servidores de nomes configurados

### Descrição

public
function **EventDnsBase::countNameservers**(): [int](language.types.integer.md)

Obtém o número de servidores de nomes configurados.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o número de servidores de nomes configurados (não necessariamente o número de
servidores de nomes em execução). Isso é útil para verificar novamente se as chamadas
para as várias funções de configuração de servidores de nomes foram bem-sucedidas.

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
