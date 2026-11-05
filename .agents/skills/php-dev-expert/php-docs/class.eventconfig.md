# A classe EventConfig

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.eventconfig.php

---

# A classe EventConfig

(PECL event >= 1.2.6-beta)

## Introdução

Representa a estrutura de configuração que pode ser usada na construção
da
[EventBase](class.eventbase.md).

## Resumo da classe

final
class **EventConfig**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[FEATURE\_ET](class.eventconfig.md#eventconfig.constants.feature-et) = 1;

const
[int](language.types.integer.md)
[FEATURE\_O1](class.eventconfig.md#eventconfig.constants.feature-o1) = 2;

const
[int](language.types.integer.md)
[FEATURE\_FDS](class.eventconfig.md#eventconfig.constants.feature-fds) = 4;

/\* Métodos \*/

public
function [avoidMethod](eventconfig.avoidmethod.md)(
[string](language.types.string.md) `$method`
): [bool](language.types.boolean.md)

public
function [\_\_construct](eventconfig.construct.md)()

public
function [requireFeatures](eventconfig.requirefeatures.md)(
[int](language.types.integer.md) `$feature`
): [bool](language.types.boolean.md)

public
function [setFlags](eventconfig.setflags.md)(
[int](language.types.integer.md) `$flags`
): [bool](language.types.boolean.md)

public
function [setMaxDispatchInterval](eventconfig.setmaxdispatchinterval.md)(
[int](language.types.integer.md) `$max_interval`
, 
[int](language.types.integer.md) `$max_callbacks`
, 
[int](language.types.integer.md) `$min_priority`
): [void](language.types.void.md)

}

## Constantes predefinidas

**`EventConfig::FEATURE_ET`**
:   Requer um método de back-end que suporte E/S acionada por alteração de sinal.

**`EventConfig::FEATURE_O1`**
:   Requer um método de back-end em que adicionar ou excluir um único evento, ou
    tornar um único evento ativo, seja uma operação O(1).

**`EventConfig::FEATURE_FDS`**
:   Requer um método de back-end que possa suportar tipos arbitrários de descritores
    de arquivos, e não apenas soquetes.

## Índice

- [EventConfig::avoidMethod](eventconfig.avoidmethod.md) — Diz ao libvent para evitar um método de evento específico
- [EventConfig::\_\_construct](eventconfig.construct.md) — Constrói objeto EventConfig
- [EventConfig::requireFeatures](eventconfig.requirefeatures.md) — Insere um recurso de método de evento obrigatório que o aplicativo exige
- [EventConfig::setFlags](eventconfig.setflags.md) — Define um ou mais sinalizadores que configuram como o EventBase eventual será inicializado
- [EventConfig::setMaxDispatchInterval](eventconfig.setmaxdispatchinterval.md) — Evita inversão de prioridade

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
