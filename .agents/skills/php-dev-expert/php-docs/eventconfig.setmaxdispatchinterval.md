# Evita inversão de prioridade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventconfig.setmaxdispatchinterval.php

---

# EventConfig::setMaxDispatchInterval

(PECL event >= 2.1.0-alpha)

EventConfig::setMaxDispatchInterval — Evita inversão de prioridade

### Descrição

public
function **EventConfig::setMaxDispatchInterval**(
[int](language.types.integer.md) `$max_interval`
, 
[int](language.types.integer.md) `$max_callbacks`
, 
[int](language.types.integer.md) `$min_priority`
): [void](language.types.void.md)

Evita a inversão de prioridade limitando quantas funções de retorno de eventos de baixa prioridade
podem ser invocadas antes de verificar mais eventos de alta prioridade.

> **Nota**:
>
> Disponível desde o
> `libevent 2.1.0-alpha`.

### Parâmetros

`max_interval`
:   Um intervalo após o qual o Libevent deve parar de executar funções de retorno e verificar
    mais eventos, ou
    `0`
    , se não houver tal intervalo.

`max_callbacks`
:   Um número de funções de retorno após os quais o Libevent deve parar de executar funções de retorno
    e verificar se há mais eventos, ou
    **`-1`**
    , se não houver tal limite.

`min_priority`
:   Uma prioridade abaixo da qual
    `max_interval`
    e
    `max_callbacks`
    não devem ser impostos. Se isso for definido como
    `0`
    , eles serão impostos para eventos de cada prioridade; se for definido como
    `1`
    , eles serão impostos para eventos de prioridade
    `1`
    e acima, e assim por diante.

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
