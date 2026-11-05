# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/filter.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de configuração da Filter**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [filter.default](filter.configuration.md#ini.filter.default) | "unsafe\_raw" | **`INI_PERDIR`** | Descontinuado desde o PHP 8.1.0. |
| [filter.default\_flags](filter.configuration.md#ini.filter.default-flags) | NULL | **`INI_PERDIR`** |  |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`filter.default` [string](language.types.string.md)
:   Filtra todas informações de [$\_GET](reserved.variables.get.md), [$\_POST](reserved.variables.post.md),
    [$\_COOKIE](reserved.variables.cookies.md), [$\_REQUEST](reserved.variables.request.md) e
    [$\_SERVER](reserved.variables.server.md) com este filtro.
    A informação original pode ser acessada através da [filter\_input()](function.filter-input.md).

    Deve ser o nome de um filtro que pode ser determinado através de
    [filter\_list()](function.filter-list.md) e [filter\_id()](function.filter-id.md).

    > **Nota**:
    >
    > Cuidado com as opções padrão para os filtros padrão.
    > Eles devem ser definidos explicitamente.
    > Por exemplo, para configurar o filtro padrão para se comportar exatamente como
    > [htmlspecialchars()](function.htmlspecialchars.md), as opções padrão devem ser definidas para
    > `0` como mostrado no exemplo abaixo.
    >
    > **Exemplo #1 Configurando o filtro padrão para agir como htmlspecialchars**
    >
    > ```
    > filter.default = full_special_chars
    > filter.default_flags = 0
    > ```

    **Aviso**

    Esta configuração INI está descontinuada a partir do PHP 8.1.0.

`filter.default_flags` [int](language.types.integer.md)
:   Opções padrão a serem aplicados quando o filtro padrão está definido.
    É definido como **`FILTER_FLAG_NO_ENCODE_QUOTES`**
    por padrão para compatibilidade com versões anteriores.
    Consulte as constantes **`FILTER_FLAG_*`**
    para conhecer as opções disponíveis.

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
