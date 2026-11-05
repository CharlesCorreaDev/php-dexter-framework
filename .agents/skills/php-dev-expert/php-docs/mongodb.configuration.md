# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração de mongodb**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [mongodb.debug](mongodb.configuration.md#ini.mongodb.debug) | "" | **`INI_ALL`** |  |

Aqui está uma breve explicação das
diretivas de configuração.

`mongodb.debug` [string](language.types.string.md)
:   Esta opção pode ser usada para ativar ou desativar o log de depuração em nível de
    rastreamento na extensão (e libmongoc).

    Especifique uma string vazia, `"0"`,
    `"off"`, `"no"` ou
    `"false"` para desabilitar o log.

    Especifique `"stderr"` ou `"stdout"` para registrar
    em `stderr` ou `stdout`, respectivamente.

    Especifique `"1"`, `"on"`,
    `"yes"` ou `"true"` para logar em um novo
    arquivo temporário dentro do diretório temporário padrão do sistema (ou seja,
    [sys\_get\_temp\_dir()](function.sys-get-temp-dir.md)).

    Especifique qualquer outra sequência para logar em um novo arquivo temporário nesse
    diretório. Se o diretório não puder ser usado, o diretório temporário do sistema
    padrão será usado.

    > **Nota**:
    >
    > Observe que o log de depuração pode conter informações confidenciais,
    > como credenciais do servidor MongoDB e documentos completos gravados ou
    > lidos no servidor. Revise todos os registros de depuração antes de compartilhá-los
    > com outras pessoas.

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
