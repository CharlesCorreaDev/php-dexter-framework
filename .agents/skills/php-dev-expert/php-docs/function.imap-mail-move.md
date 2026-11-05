# Move mensagens especificadas para uma caixa de correio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-mail-move.php

---

# imap\_mail\_move

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_mail\_move — Move mensagens especificadas para uma caixa de correio

### Descrição

function **imap\_mail\_move**(  
    [IMAP\Connection](class.imap-connection.md) `$imap`,  
    [string](language.types.string.md) `$message_nums`,  
    [string](language.types.string.md) `$mailbox`,  
    [int](language.types.integer.md) `$flags` = 0  
): [bool](language.types.boolean.md)

Move mensagens de correio especificadas por `message_nums` para a
caixa especificada em `mailbox`.
Observe que as mensagens de correio são, na verdade, *copiadas* para a
caixa `mailbox`, e as mensagens originais são sinalizadas para exclusão.
Isso implica que as mensagens em `mailbox` recebem novos UIDs.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`message_nums`
:   `message_nums` é um intervalo e não só números de mensagens
    (como descrito em [» RFC2060](https://datatracker.ietf.org/doc/html/rfc2060)).

`mailbox`
:   O nome da caixa de correio, consulte [imap\_open()](function.imap-open.md) para mais
    informação.

    **Aviso**

    Passar dados não confiáveis para este parâmetro é *inseguro*, a menos que
    [imap.enable\_insecure\_rsh](imap.configuration.md#ini.imap.enable-insecure-rsh) esteja desabilitado.

`flags`
:   `flags` é uma máscara de bits e pode conter esta única opção:

    - **`CP_UID`** - os números de sequência contêm UIDS

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

### Notas

> **Nota**:
>
> **imap\_mail\_move()** irá sinalizar a mensagem
> original com a marca de exclusão. Para excluí-la, é necessário
> chamar a função [imap\_expunge()](function.imap-expunge.md).

### Veja também

- [imap\_mail\_copy()](function.imap-mail-copy.md) - Copia mensagens especificadas para uma caixa de correio

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
