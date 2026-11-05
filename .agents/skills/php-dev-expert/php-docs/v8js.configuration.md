# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/v8js.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração de V8js**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [v8js.max\_disposed\_contexts](v8js.configuration.md#ini.v8js.max-disposed-contexts) | 25 | **`INI_ALL`** |  |
| [v8js.flags](v8js.configuration.md#ini.v8js.flags) |  | **`INI_ALL`** |  |

Aqui está uma breve explicação das
diretivas de configuração.

`v8js.max_disposed_contexts` [int](language.types.integer.md)
:   Define um limite para contextos descartados antes de forçar o V8 a fazer a
    coleta de lixo.

`v8js.flags` [string](language.types.string.md)
:   Define as opções de linha de comando do V8. A lista de opções disponíveis pode ser
    obtida no modo CLI definindo este parâmetro como
    `--help`. Exemplo:

    ```
    $ php -r 'ini_set("v8js.flags", "--help"); new V8Js;' | less
    ```

    > **Nota**:
    >
    > Para que essas opções sejam efetivas em tempo de execução, a chamada ini\_set() deve
    > ser feita antes que quaisquer objetos V8Js sejam instanciados!

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
