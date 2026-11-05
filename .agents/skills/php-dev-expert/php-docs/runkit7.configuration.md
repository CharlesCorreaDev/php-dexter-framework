# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/runkit7.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de configuração de Runkit**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [runkit.superglobal](runkit7.configuration.md#ini.runkit7.superglobal) | "" | **`INI_PERDIR`** |  |
| [runkit.internal\_override](runkit7.configuration.md#ini.runkit7.internal-override) | "0" | **`INI_SYSTEM`** |  |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`runkit.superglobal` [string](language.types.string.md)
:   Lista separada por vírgulas de nomes de variáveis ​​a serem tratadas como superglobais.
    Este valor deve ser definido no arquivo php.ini do sistema, mas pode funcionar
    em contextos de configuração por diretório, dependendo do SAPI.

    **Exemplo #1 Superglobais personalizados com runkit.superglobal=\_FOO,\_BAR no php.ini**

    ```
    <?php
    function show_values() {
      echo "Foo é $_FOO\n";
      echo "Bar é $_BAR\n";
      echo "Baz é $_BAZ\n";
    }

    $_FOO = 'foo';
    $_BAR = 'bar';
    $_BAZ = 'baz';

    /* Exibe foo e bar, mas não baz */
    show_values();
    ?>
    ```

`runkit.internal_override` [bool](language.types.boolean.md)
:   Permite modificar/renomear/remover funções internas.

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
