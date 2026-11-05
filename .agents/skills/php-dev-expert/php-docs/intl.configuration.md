# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intl.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração de Intl**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [intl.default\_locale](intl.configuration.md#ini.intl.default-locale) |  | **`INI_ALL`** |  |
| [intl.error\_level](intl.configuration.md#ini.intl.error-level) | 0 | **`INI_ALL`** |  |
| [intl.use\_exceptions](intl.configuration.md#ini.intl.use-exceptions) | 0 | **`INI_ALL`** | Disponível desde o PECL 3.0.0a1 |

Aqui está uma breve explicação das
diretivas de configuração.

`intl.default_locale` [string](language.types.string.md)
:   A localidade que será utilizada quando nenhuma for especificada
    (omitindo o argumento correspondente ou passando-se
    **`null`**. Estas são localidades ICU, não localidades de sistema.
    As localidades ICU embutidas e seus dados podem ser explorados em
    [» https://unicode-org.github.io/icu/userguide/locale/](https://unicode-org.github.io/icu/userguide/locale/).

    O valor padrão é vazio, o que força o uso da localidade ICU
    padrão. Uma vez definida, a configuração ini não pode ser redefinida para este valor padrão.
    Não é recomendado confiar neste padrão, pois seu valor efetivo
    depende do ambiente do servidor.

`intl.error_level` [int](language.types.integer.md)
:   O tipo de mensagens de erro geradas quando um erro ocorre em funções
    ICU. Isto é um
    [nível de erro PHP](errorfunc.constants.md), como
    **`E_WARNING`** por exemplo. Pode ser definida para `0`
    para inibir as mensagens. Não afeta os valores de retorno
    que indicam erro ou os valores retornados por
    [intl\_get\_error\_code()](function.intl-get-error-code.md) ou pelos métodos específicos
    da classe para recuperar códigos e mensagens de erro.

    O valor padrão é `0`.

`intl.use_exceptions` [int](language.types.integer.md)
:   Se definido para true, uma exceção será lançada quando um erro ocorrer em
    uma função intl. A exceção será do tipo
    [IntlException](class.intlexception.md). É possível fazer isto em adição à
    mensagem de erro gerada devido à configuração [intl.error\_level](intl.configuration.md#ini.intl.error-level).

    O valor padrão é **`false`**.

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
