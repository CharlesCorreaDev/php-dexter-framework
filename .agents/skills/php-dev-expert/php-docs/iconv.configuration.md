# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/iconv.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração de Iconv**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [iconv.input\_encoding](iconv.configuration.md#ini.iconv.input-encoding) | "" | **`INI_ALL`** | Descontinuado no PHP 5.6.0. |
| [iconv.output\_encoding](iconv.configuration.md#ini.iconv.output-encoding) | "" | **`INI_ALL`** | Descontinuado no PHP 5.6.0. |
| [iconv.internal\_encoding](iconv.configuration.md#ini.iconv.internal-encoding) | "" | **`INI_ALL`** | Descontinuado no PHP 5.6.0. |

Aqui está uma breve explicação das
diretivas de configuração.

**Aviso**

Alguns sistemas (como o IBM AIX) usam "ISO8859-1" em vez de "ISO-8859-1", então esse
valor deve ser usado em opções de configuração e parâmetros de função.

`iconv.input_encoding` [string](language.types.string.md)
:   **Aviso**

    Este recurso foi
    *DESCONTINUADO* a partir do PHP 5.6.0. O uso deste recurso
    é fortemente desencorajado.

    Os usuários do PHP 5.6 e posteriores devem deixar em branco e definir
    [input\_encoding](ini.core.md#ini.input-encoding).

`iconv.output_encoding` [string](language.types.string.md)
:   **Aviso**

    Este recurso foi
    *DESCONTINUADO* a partir do PHP 5.6.0. O uso deste recurso
    é fortemente desencorajado.

    Os usuários do PHP 5.6 e posteriores devem deixar em branco e definir
    [output\_encoding](ini.core.md#ini.output-encoding)

`iconv.internal_encoding` [string](language.types.string.md)
:   **Aviso**

    Este recurso foi
    *DESCONTINUADO* a partir do PHP 5.6.0. O uso deste recurso
    é fortemente desencorajado.

    Os usuários do PHP 5.6 e posteriores devem deixar em branco e definir
    [`default_charset`](ini.core.md#ini.default-charset)
    em seu lugar.

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
