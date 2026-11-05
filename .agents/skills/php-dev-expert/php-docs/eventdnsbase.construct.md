# Constrói objeto EventDnsBase

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventdnsbase.construct.php

---

# EventDnsBase::\_\_construct

(PECL event >= 1.2.6-beta)

EventDnsBase::\_\_construct — Constrói objeto EventDnsBase

### Descrição

public
function **EventDnsBase::\_\_construct**(
[EventBase](class.eventbase.md) `$base`
, 
[int](language.types.integer.md)|[bool](language.types.boolean.md) `$initialize`
)

Constrói objeto EventDnsBase.

### Parâmetros

`base`
:   Base de evento.

`initialize`
:   Se `initialize` for **`true`**,
    a função tenta usar os padrões do sistema operacional subjacente para configurar
    a base DNS de forma sensata.
    Se for **`false`**, a base DNS é deixada desconfigurada, sem servidores de nomes ou opções definidas.
    No último caso, a base DNS deve ser configurada manualmente, por exemplo, com
    [EventDnsBase::parseResolvConf()](eventdnsbase.parseresolvconf.md).

    Se `initialize` for um inteiro, ele deverá ser um dos seguintes sinalizadores:

    | Sinalizador | Descrição |
    | --- | --- |
    | **`EventDnsBase::DISABLE_WHEN_INACTIVE`** | Não impede que o laço de eventos libevent saia quando não existem solicitações DNS ativas. |
    | **`EventDnsBase::INITIALIZE_NAMESERVERS`** | Processa o `resolv.conf`. |
    | **`EventDnsBase::NAMESERVERS_NO_DEFAULT`** | Não adiciona o servidor de nomes padrão se não houver servidores de nomes no `resolv.conf`. |

### Erros/Exceções

Se `initialize` tiver um tipo diferente de
[int](language.types.integer.md)|[bool](language.types.boolean.md),
um [TypeError](class.typeerror.md) será lançado.

Se o valor de `initialize` for inválido,
uma [EventException](class.eventexception.md) será lançada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL event 3.1.3 | Se `initialize` tiver um tipo diferente de [int](language.types.integer.md)|[bool](language.types.boolean.md), um [TypeError](class.typeerror.md) será lançado. |
| PECL event 3.1.0RC1 | O tipo do parâmetro `initialize` foi alterado de [bool](language.types.boolean.md) para [mixed](language.types.mixed.md). O valor pode ser [bool](language.types.boolean.md) (preservando o significado anterior) ou uma das seguintes constantes: **`EventDnsBase::DISABLE_WHEN_INACTIVE`**, **`EventDnsBase::INITIALIZE_NAMESERVERS`**, ou **`EventDnsBase::NAMESERVERS_NO_DEFAULT`**. |

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
