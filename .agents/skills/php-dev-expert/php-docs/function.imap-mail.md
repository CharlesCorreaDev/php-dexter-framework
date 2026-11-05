# Envia uma mensagem de e-mail

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-mail.php

---

# imap\_mail

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_mail — Envia uma mensagem de e-mail

### Descrição

function **imap\_mail**(  
    [string](language.types.string.md) `$to`,  
    [string](language.types.string.md) `$subject`,  
    [string](language.types.string.md) `$message`,  
    [?](language.types.null.md)[string](language.types.string.md) `$additional_headers` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$cc` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$bcc` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$return_path` = **`null`**  
): [bool](language.types.boolean.md)

Esta função permite o envio de e-mails com o tratamento correto de
destinatários Cc e Bcc.

Os parâmetros `to`, `cc`
e `bcc` são todos strings e são todos analisados
como listas de endereços [» RFC822](https://datatracker.ietf.org/doc/html/rfc822).

### Parâmetros

`to`
:   O destinatário

`subject`
:   O assunto do e-mail

`message`
:   O corpo do e-mail, veja [imap\_mail\_compose()](function.imap-mail-compose.md)

`additional_headers`
:   Como string com cabeçalhos adicionais a serem definidos no e-mail

`cc`

`bcc`
:   Os destinatários especificados em `bcc` receberão o
    e-mail, mas serão excluídos dos cabeçalhos.

`return_path`
:   Use este parâmetro para especificar o caminho de retorno em caso de falha na entrega de e-mail.
    Isso é útil ao usar PHP como um cliente de e-mail para vários usuários.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `additional_headers`, `cc`, `bcc` e `return_path` agora podem ser nulos. |

### Veja também

- [mail()](function.mail.md) - Envia e-mail
- [imap\_mail\_compose()](function.imap-mail-compose.md) - Cria uma mensagem MIME com base nas seções de envelope e corpo fornecidas

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
