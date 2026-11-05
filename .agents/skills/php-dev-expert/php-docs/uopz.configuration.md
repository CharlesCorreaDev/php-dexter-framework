# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uopz.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração de uopz**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [uopz.disable](uopz.configuration.md#ini.uopz.disable) | "0" | **`INI_SYSTEM`** | Disponível a partir do uopz 5.0.2. |
| [uopz.exit](uopz.configuration.md#ini.uopz.exit) | "0" | **`INI_SYSTEM`** | Disponível a partir do uopz 6.0.1. |
| [uopz.overloads](uopz.configuration.md#ini.uopz.overloads) | "1" | **`INI_SYSTEM`** | Disponível a partir do uopz 2.0.2. Removida a partir do uopz 5.0.0. |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`uopz.disable` [bool](language.types.boolean.md)
:   Se habilitada, o uopz não deverá mais ter qualquer efeito no mecanismo.

`uopz.exit` [bool](language.types.boolean.md)
:   Permitir ou não a execução de opcodes de saída.
    Esta configuração pode ser substituída durante a execução chamando [uopz\_allow\_exit()](function.uopz-allow-exit.md).

`uopz.overloads` [bool](language.types.boolean.md)
:   Habilita a capacidade de usar [uopz\_overload()](function.uopz-overload.md).

> **Nota**:
>
> Ao executar com o OPcache habilitado, pode ser necessário desabilitar todas as
> [otimizações do OPcache](opcache.configuration.md#ini.opcache.optimization-level)
> (`opcache.optimization_level=0`).

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
