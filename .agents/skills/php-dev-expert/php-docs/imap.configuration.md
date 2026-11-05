# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imap.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração de IMAP**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [imap.enable\_insecure\_rsh](imap.configuration.md#ini.imap.enable-insecure-rsh) | "0" | **`INI_SYSTEM`** | Disponível a partir do PHP 7.1.25, 7.2.13 e 7.3.0. Anteriormente, era implicitamente habilitado. |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`imap.enable_insecure_rsh` [bool](language.types.boolean.md)
:   Estabelecer uma conexão com um servidor pode invocar os comandos **rsh** ou
    **ssh**, a menos que esta opção no php.ini esteja desabilitada.

    **Aviso**

    Nem o PHP nem a biblioteca IMAP filtram
    nomes de caixas de correio antes de passá-los para os comandos **rsh** ou **ssh**,
    portanto, passar dados não confiáveis para esta função sem desabilitar esta
    opção php.ini é *inseguro*.

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
