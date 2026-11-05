# Lista todas as caixas de correio assinadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-lsub.php

---

# imap\_lsub

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_lsub — Lista todas as caixas de correio assinadas

### Descrição

function **imap\_lsub**([IMAP\Connection](class.imap-connection.md) `$imap`, [string](language.types.string.md) `$reference`, [string](language.types.string.md) `$pattern`): [array](language.types.array.md)|[false](language.types.singleton.md)

Obtém um array de todas as caixas de correio assinadas.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`reference`
:   `reference` normalmente deve ser apenas a especificação do servidor
    conforme descrito em [imap\_open()](function.imap-open.md)

    **Aviso**

    Passar dados não confiáveis para este parâmetro é *inseguro*, a menos que
    [imap.enable\_insecure\_rsh](imap.configuration.md#ini.imap.enable-insecure-rsh) esteja desabilitado.

`pattern`
:   Especifica onde iniciar a pesquisa na hierarquia
    da caixa de mensagem.

    Existem dois caracteres especiais que podem
    ser passados como parte do parâmetro `pattern`:
    '`*`' e '`%`'.
    '`*`' significa retornar todas as caixas de mensagem. Se
    `pattern` for passado como '`*`', será retornada
    uma lista de toda a hierarquia da caixa de mensagem.
    '`%`'
    significa retornar apenas o nível atual.
    Passar '`%`' como o parâmetro `pattern`
    retornará apenas as caixas de mensagem do nível
    mais alto; Passar '`~/mail/%`' em `UW_IMAPD` retornará todas as caixas de mensagem no diretório ~/mail, mas não retornará nenhuma nas subpastas deste diretório.

### Valor Retornado

Retorna um array de todas as caixas de correio assinadas, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

### Veja também

- [imap\_list()](function.imap-list.md) - Lê a lista de caixas de correio
- [imap\_getmailboxes()](function.imap-getmailboxes.md) - Lê a lista de caixas de correio, retornando informações detalhadas sobre cada uma delas

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
