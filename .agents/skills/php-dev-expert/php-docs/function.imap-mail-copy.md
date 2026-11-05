# Copia mensagens especificadas para uma caixa de correio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-mail-copy.php

---

# imap\_mail\_copy

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_mail\_copy — Copia mensagens especificadas para uma caixa de correio

### Descrição

function **imap\_mail\_copy**(  
    [IMAP\Connection](class.imap-connection.md) `$imap`,  
    [string](language.types.string.md) `$message_nums`,  
    [string](language.types.string.md) `$mailbox`,  
    [int](language.types.integer.md) `$flags` = 0  
): [bool](language.types.boolean.md)

Copia mensagens de e-mail especificadas por `message_nums`
para a caixa de correio especificada.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`message_nums`
:   `message_nums` é um intervalo, não apenas números
    de mensagens (conforme descrito em [» RFC2060](https://datatracker.ietf.org/doc/html/rfc2060)).

`mailbox`
:   O nome da caixa de correio, veja [imap\_open()](function.imap-open.md) para mais
    informações

    **Aviso**

    Passar dados não confiáveis para este parâmetro é *inseguro*, a menos que
    [imap.enable\_insecure\_rsh](imap.configuration.md#ini.imap.enable-insecure-rsh) esteja desabilitado.

`flags`
:   `flags` é uma máscara de bits de uma ou mais das constantes a seguir:

    - **`CP_UID`** - os números de sequência contêm UIDS
    - **`CP_MOVE`** - Exclui as mensagens da
      caixa de correio atual após a cópia. Se este sinalizador estiver definido, a função
      se comporta de forma idêntica a [imap\_mail\_move()](function.imap-mail-move.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

### Veja também

- [imap\_mail\_move()](function.imap-mail-move.md) - Move mensagens especificadas para uma caixa de correio

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
