# Define a ACL para uma determinada caixa de correio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-setacl.php

---

# imap\_setacl

(PHP 4 >= 4.0.7, PHP 5, PHP 7, PHP 8)

imap\_setacl — Define a ACL para uma determinada caixa de correio

### Descrição

function **imap\_setacl**(  
    [IMAP\Connection](class.imap-connection.md) `$imap`,  
    [string](language.types.string.md) `$mailbox`,  
    [string](language.types.string.md) `$user_id`,  
    [string](language.types.string.md) `$rights`  
): [bool](language.types.boolean.md)

Define a ACL para uma determinada caixa de correio.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`mailbox`
:   O nome da caixa de correio, veja [imap\_open()](function.imap-open.md) para mais
    informações

    **Aviso**

    Passar dados não confiáveis para este parâmetro é *inseguro*, a menos que
    [imap.enable\_insecure\_rsh](imap.configuration.md#ini.imap.enable-insecure-rsh) esteja desabilitado.

`user_id`
:   O usuário que receberá os direitos.

`rights`
:   Os direitos a serem dados ao usuário. Passar uma string vazia excluirá
    o acl.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

### Notas

Esta função está atualmente disponível apenas para usuários da biblioteca c-client2000 ou
superior.

### Veja também

- [imap\_getacl()](function.imap-getacl.md) - Obtém a ACL para uma determinada caixa de correio

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
