# Lista das seções do php.ini

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ini.sections.php

---

## Lista das seções do php.ini

Esta lista inclui as seções do php.ini que podem ser modificadas para configurar a
instalação do PHP baseado em host ou em pastas. Estas seções são opcionais.

Estas seções não afetam diretamente o PHP. Elas são usadas para agrupar outras
diretivas do php.ini e agir de acordo um host específico ou uma
pasta específica.

Estas seções são usadas somente no modo CGI/FastCGI e não podem modificar as diretivas
[extension](ini.core.md#ini.extension) e [zend\_extension](ini.core.md#ini.zend-extension).

**Seções**

| Nome | Modificável | Registro de Alterações |
| --- | --- | --- |
| [[HOST=]](ini.sections.md#ini.per-host) | **`INI_SYSTEM`** |  |
| [[PATH=]](ini.sections.md#ini.per-path) | **`INI_SYSTEM`** |  |

Aqui está uma breve explicação das
diretivas de configuração.

`[HOST=<host>]`
:   Esta seção permite definir um conjunto de diretivas do php.ini que
    terá efeito no host definido.

    **Exemplo #1 Ativa a exibição completa de erros na tela para o domínio dev.**

    ```
    [HOST=dev.site.com]
    error_reporting = E_ALL
    display_errors = On
    ```

`[PATH=<path>]`
:   Esta seção permite definir um conjunto de diretivas do php.ini que terá
    efeito quando um script for executado a partir da pasta definida.

    **Exemplo #2 Adiciona o script security.php para áreas protegidas**

    ```
    [PATH=/home/site/public/secure]
    auto_prepend_file=security.php
    ```

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
