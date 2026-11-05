# Envia email codificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-send-mail.php

---

# mb\_send\_mail

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

mb\_send\_mail — Envia email codificado

### Descrição

function **mb\_send\_mail**(  
    [string](language.types.string.md) `$to`,  
    [string](language.types.string.md) `$subject`,  
    [string](language.types.string.md) `$message`,  
    [array](language.types.array.md)|[string](language.types.string.md) `$additional_headers` = [],  
    [?](language.types.null.md)[string](language.types.string.md) `$additional_params` = **`null`**  
): [bool](language.types.boolean.md)

Envia e-mails. Cabeçalhos e mensagens são convertidos e codificados de acordo
com a configuração de [mb\_language()](function.mb-language.md). É uma função encapsuladora
para [mail()](function.mail.md), então veja também [mail()](function.mail.md) para detalhes.

### Parâmetros

`to`
:   Os endereços de e-mail para os quais o e-mail será enviado. Múltiplos
    destinatários podem ser especificados separando cada
    endereço em `to` por vírgula.
    Este parâmetro não é automaticamente codificado.

`subject`
:   O assunto do e-mail.

`message`
:   A mensagem do e-mail.

`additional_headers` (opcional)
:   [String](language.types.string.md) ou [array](language.types.array.md) a ser inserido no final do cabeçalho do e-mail.

    Isso é tipicamente usado para adicionar cabeçalhos extras (De, Cc e Bcc).
    Múltiplos cabeçalhos extras devem ser separados por um CRLF (\r\n).
    Valide o parâmetro para não injetar cabeçalhos indesejados por atacantes.

    Se um [array](language.types.array.md) for passado, suas chaves são os nomes dos cabeçalhos e seus
    valores são os respectivos valores dos cabeçalhos.

    > **Nota**:
    >
    > Ao enviar e-mails, o e-mail *deve* conter
    > um cabeçalho `From`. Isso pode ser configurado com o
    > parâmetro `additional_headers`, ou um padrão
    > pode ser configurado no php.ini.
    >
    > Falhar em fazer isso resultará em uma mensagem de erro
    > semelhante a `Warning: mail(): "sendmail_from" not
    > set in php.ini or custom "From:" header missing`.
    > O cabeçalho `From` também define
    > `Return-Path` no Windows.

    > **Nota**:
    >
    > Se as mensagens não forem recebidas, tente usar apenas LF (\n).
    > Alguns agentes de transferência de email Unix (notavelmente
    > [» qmail](https://cr.yp.to/qmail.html)) substituem LF por CRLF
    > automaticamente (o que leva a duplicação de CR se CRLF for usado).
    > Isso deve ser usado apenas como último recurso, pois não está em conformidade com
    > [» RFC 2822](https://datatracker.ietf.org/doc/html/rfc2822).

`additional_params`
:   `additional_params` é um parâmetro de linha de comando MTA
    útil ao definir o cabeçalho Return-Path correto
    ao usar sendmail.

    Este parâmetro é escapado internamente por [escapeshellcmd()](function.escapeshellcmd.md)
    para evitar a execução de comandos. [escapeshellcmd()](function.escapeshellcmd.md) evita
    a execução de comandos, mas permite adicionar parâmetros adicionais. Por razões de segurança,
    este parâmetro deve ser validado.

    Como [escapeshellcmd()](function.escapeshellcmd.md) é aplicado automaticamente, alguns caracteres
    que são permitidos como endereços de e-mail por RFCs da Internet não podem ser usados. Programas
    que são obrigados a usar esses caracteres [mail()](function.mail.md) não podem ser usados.

    O usuário que o servidor da web executa deve ser adicionado como um usuário confiável para o
    arquivo de configuração do sendmail para evitar a adição de um cabeçalho 'X-Warning'
    à mensagem quando o remetente do envelope (-f) é definido usando este método.
    Para usuários do sendmail, este arquivo é /etc/mail/trusted-users.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `additional_params` é anulável agora. |
| 7.2.0 | O parâmetro `additional_headers` agora também aceita um [array](language.types.array.md). |

### Veja também

- [mail()](function.mail.md) - Envia e-mail
- [mb\_encode\_mimeheader()](function.mb-encode-mimeheader.md) - Codificar string para cabeçalho MIME
- [mb\_language()](function.mb-language.md) - Define/Obtém o idioma atual

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
