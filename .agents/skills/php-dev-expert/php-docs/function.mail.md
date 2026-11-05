# Envia e-mail

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mail.php

---

# mail

(PHP 4, PHP 5, PHP 7, PHP 8)

mail — Envia e-mail

### Descrição

function **mail**(  
    [string](language.types.string.md) `$to`,  
    [string](language.types.string.md) `$subject`,  
    [string](language.types.string.md) `$message`,  
    [array](language.types.array.md)|[string](language.types.string.md) `$additional_headers` = [],  
    [string](language.types.string.md) `$additional_params` = ""  
): [bool](language.types.boolean.md)

Envia um e-mail.

### Parâmetros

`to`
:   Destinatário, ou destinatários do e-mail.

    O formato desta string precisa estar de acordo com a
    [» RFC 2822](https://datatracker.ietf.org/doc/html/rfc2822). Alguns exemplos:

    - user@example.com
    - user@example.com, anotheruser@example.com
    - User
    - User , Another User

`subject`
:   Assunto do e-mail a ser enviado.

    **Cuidado**

    Assunto deve satisfazer a [» RFC 2047](https://datatracker.ietf.org/doc/html/rfc2047).

`message`
:   Mensagem a ser enviada.

    Cada linha deve ser separada com um CRLF (\r\n). Linhas não devem ser maiores
    que 70 caracteres.

    **Cuidado**

    (Somente Windows) Quando o PHP está se comunicando com o servidor SMTP diretamente, e
    um ponto final é encontrado no início de uma linha, ela é removida.
    Para se defender disto, substitua estas ocorrência por dois pontos seguidos.

    ```
    <?php
    $text = str_replace("\n.", "\n..", $text);
    ?>
    ```

`additional_headers` (opcional)
:   [String](language.types.string.md) ou [array](language.types.array.md) a ser inserido no final do cabeçalho do e-mail.

    Isto é tipicamente usado para adicionar cabeçalhos extras (From, Cc, e Bcc).
    Múltiplos cabeçalhos extras devem ser separados com um CRLF (\r\n).
    Se dados externos forem usados para compor este cabeçalho, os dados devem ser sanitizados
    para que nenhum cabeçalho indesejado possa ser injetado.

    Se um [array](language.types.array.md) for passado, suas chaves são os nomes dos cabeçalhos
    e seus valores são os respectivos valores dos cabeçalhos.

    > **Nota**:
    >
    > Ao enviar e-mail, ele *precisa* conter
    > um cabeçalho `From`. Este pode ser definido com o
    > parâmetro `additional_headers`, ou um padrão
    > pode ser definido no php.ini.
    >
    > Se isto não foi feito, ocorrerá uma mensagem de erro
    > similar a `Warning: mail(): "sendmail_from" not
    > set in php.ini or custom "From:" header missing`.
    > O cabeçalho `From` define também o
    > `Return-Path` ao enviar diretamente via SMTP (Windows somente).

    > **Nota**:
    >
    > Se mensagens não estão sendo recebidas, tente usar somente um LF (\n).
    > Alguns agentes Unix de transferência de e-mail (mais notavelmente
    > [» qmail](https://cr.yp.to/qmail.html)) substituem LF por CRLF
    > automaticamente (que leva à duplicação de CR se CRLF for usado).
    > Este deve ser um último recurso, porque não está conforme a
    > [» RFC 2822](https://datatracker.ietf.org/doc/html/rfc2822).

`additional_params` (opcional)
:   O parâmetro `additional_params`
    pode ser usado para passar um parâmetro adicional para o programa configurado
    para usa quando enviando e-mail usando a configuração
    `sendmail_path`. Por exemplo, isto pode ser usado para definir
    o endereço do envelope remetente quando usando sendmail com a opção do sendmail
    `-f`.

    Este parâmetro é escapado por [escapeshellcmd()](function.escapeshellcmd.md) internamente
    para prevenir a execução do comando. [escapeshellcmd()](function.escapeshellcmd.md) impede
    a execução de comandos, mas permite adicionar parâmetros adicionais. Por razões de segurança,
    é recomendado que o usuário higienize este parâmetro para evitar adicionar
    parâmetros indesejados ao comando shell.

    Uma vez que [escapeshellcmd()](function.escapeshellcmd.md) é aplicada automaticamente, alguns caracteres
    que são permitidos como endereços de e-mail por RFCs da Internet não podem ser usados.
    **mail()** não pode permitir tais caracteres, portanto, em programas onde o uso de
    tais caracteres é necessário, meios alternativos de envio de e-mails (como o uso de um framework
    ou biblioteca) são recomendados.

    O usuário com o qual o servidor web roda deve ser adicionado como um usuário
    confiável à configuração do sendmail para evitar que um cabeçalho 'X-Warning'
    seja adicionado à mensagem quando o remetente do envelope (-f) é definido usando este método.
    Para usuários do sendmail, este arquivo é /etc/mail/trusted-users.

### Valor Retornado

Retorna **`true`** se o e-mail foi aceito com sucesso para entrega, **`false`** caso contrário.

É importante notar que somente pelo fato do e-mail ter sido aceito para entrega,
NÃO significa que o e-mail realmente alcancará o destino esperado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.2.0 | O parâmetro `additional_headers` agora aceita um [array](language.types.array.md). |

### Examples

**Exemplo #1 Enviando e-mail.**

Usando **mail()** para enviar um simples e-mail:

```
<?php
// A mensagem
$message = "Line 1\r\nLine 2\r\nLine 3";

// Se as linhas forem maiores que 70 caracteres, deve-se usar wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Envia
mail('caffeinated@example.com', 'Meu Assunto', $message);
?>
```

**Exemplo #2 Enviando e-mail com cabeçalhos extras.**

A adição de cabeçalhos básicos, informando à MUA
os endereços From e Reply-To:

```
<?php
$to      = 'nobody@example.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
```

**Exemplo #3 Enviando e-mail com cabeçalhos extras no formato [array](language.types.array.md)**

Este exemplo envia o mesmo e-mail que o exemplo imediatamente acima, mas
passa os cabeçalhos adicionais como array (disponível a partir do PHP 7.2.0).

```
<?php
$to      = 'nobody@example.com';
$subject = 'the subject';
$message = 'hello';
$headers = array(
    'From' => 'webmaster@example.com',
    'Reply-To' => 'webmaster@example.com',
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($to, $subject, $message, $headers);
?>
```

**Exemplo #4 Enviando e-mail com um parâmetro de linha de comando adicional.**

O parâmetro `additional_params` pode ser
usado para passar um parâmetro adicional para o programa
configurado para usar ao enviar e-mail usando o `sendmail_path`.

```
<?php
mail('nobody@example.com', 'the subject', 'the message', null,
   '-fwebmaster@example.com');
?>
```

**Exemplo #5 Enviando e-mail HTML**

É também possível enviar e-mail HTML com **mail()**.

```
<?php
// Múltiplos recipientes
$to = 'joao@example.com, susana@example.com'; // observe a vírgula

// Assunto
$subject = 'Lembrete de Aniversários para Novembro';

// Message
$message = '
<html>
<head>
  <title>Lembrete de Aniversários para Novembro</title>
</head>
<body>
  <p>Aqui estão os próximos aniversariantes de novembro!</p>
  <table>
    <tr>
      <th>Pessoa</th><th>Dia</th><th>Mês</th><th>Ano</th>
    </tr>
    <tr>
      <td>João</td><td>10</td><td>Agosto</td><td>1990</td>
    </tr>
    <tr>
      <td>Susana</td><td>17</td><td>Agosto</td><td>2003</td>
    </tr>
  </table>
</body>
</html>
';

// Para enviar e-mail HTML, o cabeçalho Content-type deve ser definido
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Cabeçalhos adicionais
$headers[] = 'To: Maria <maria@example.com>, Rafael <rafael@example.com>';
$headers[] = 'From: Lembrete de Aniversário <niver@example.com>';
$headers[] = 'Cc: arquivo_niver@example.com';
$headers[] = 'Bcc: verifica_niver@example.com';

// Envia o e-mail
mail($to, $subject, $message, implode("\r\n", $headers));
?>
```

> **Nota**:
>
> Se a intenção é enviar e-mail HTML ou outro formato complexo, é recomendado
> usar o pacote PEAR [» PEAR::Mail\_Mime](https://pear.php.net/package/Mail_Mime).

### Notas

> **Nota**:
>
> A implentação SMTP (somente Windows) de **mail()** difere bastante
> da implentação do sendmail. Primeiro, ele não usa um binário local
> para compor mensagens mas apenas opera com sockets diretos, o que
> significa que uma `MTA` é necessária monitorando um
> socket de rede (que pode ser ou o localhost ou uma máquina remota).
>
> Segundo, cabeçalhos customizados como
> `From:`,
> `Cc:`,
> `Bcc:` e
> `Date:`
> **não** são interpretados pela
> `MTA`, mas são analisados pelo PHP.
>
> Desta forma, o parâmetro `to` não deve ser um endereço
> na forma de "Algo <alguem@example.com>". O comando de
> e-mail poderia não analisar isto adequadamente enquanto se comunica com o
> MTA.

> **Nota**:
>
> É válido notar que a função **mail()** não é
> apropriada para um grande volume de e-mail em um loop. Esta função abre
> e fecha um SMTP socket para cada e-mail, o que não é muito eficiente.
>
> Para enviar uma grande quantidade de e-mail, veja os pacotes
> [» PEAR::Mail](https://pear.php.net/package/Mail), e
> [» PEAR::Mail\_Queue](https://pear.php.net/package/Mail_Queue).

> **Nota**:
>
> O seguintes RFCs podem ser úteis:
> [» RFC 1896](https://datatracker.ietf.org/doc/html/rfc1896),
> [» RFC 2045](https://datatracker.ietf.org/doc/html/rfc2045),
> [» RFC 2046](https://datatracker.ietf.org/doc/html/rfc2046),
> [» RFC 2047](https://datatracker.ietf.org/doc/html/rfc2047),
> [» RFC 2048](https://datatracker.ietf.org/doc/html/rfc2048),
> [» RFC 2049](https://datatracker.ietf.org/doc/html/rfc2049) e
> [» RFC 2822](https://datatracker.ietf.org/doc/html/rfc2822).

### Veja também

- [mb\_send\_mail()](function.mb-send-mail.md) - Envia email codificado
- [imap\_mail()](function.imap-mail.md) - Envia uma mensagem de e-mail
- [» PEAR::Mail](https://pear.php.net/package/Mail)
- [» PEAR::Mail\_Mime](https://pear.php.net/package/Mail_Mime)

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
