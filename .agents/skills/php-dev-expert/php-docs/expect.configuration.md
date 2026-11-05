# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/expect.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

Para configurar a extensão expect, existem opções de configuração
no [arquivo de configuração](configuration.file.md) php.ini.

**Opções de Configuração de Expect**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [expect.timeout](expect.configuration.md#ini.expect.timeout) | "10" | **`INI_ALL`** |  |
| [expect.loguser](expect.configuration.md#ini.expect.loguser) | "1" | **`INI_ALL`** |  |
| [expect.logfile](expect.configuration.md#ini.expect.logfile) | "" | **`INI_ALL`** |  |
| [expect.match\_max](expect.configuration.md#ini.expect.match-max) | "" | **`INI_ALL`** |  |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`expect.timeout` [int](language.types.integer.md)
:   Tempo limite para espera pelos dados, ao usar a
    função [expect\_expectl()](function.expect-expectl.md).

    Um valor "-1" desativa a ocorrência de um tempo limite.

    > **Nota**:
    >
    > Um valor "0" faz com que a função [expect\_expectl()](function.expect-expectl.md)
    > retorne imediatamente.

`expect.loguser` [bool](language.types.boolean.md)
:   Informa se Expect deve enviar qualquer saída gerada pelo processo para stdout.
    Como os programas interativos normalmente refletem suas informações, isso geralmente é suficiente
    para mostrar os dois lados da conversa.

`expect.logfile` [string](language.types.string.md)
:   Nome do arquivo onde será gravada a saída do processo gerado.
    Se este arquivo não existir, ele será criado.

    > **Nota**:
    >
    > Se esta configuração não estiver vazia, a saída será escrita independentemente do
    > valor de [expect.loguser](expect.configuration.md#ini.expect.loguser).

`expect.match_max` [int](language.types.integer.md)
:   Altera o tamanho padrão (2000 bytes) do buffer usado para corresponder aos asteriscos
    nos padrões.

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
