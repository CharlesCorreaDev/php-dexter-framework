# Acrescenta uma mensagem de string a uma caixa de correio especificada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-append.php

---

# imap\_append

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_append — Acrescenta uma mensagem de string a uma caixa de correio especificada

### Descrição

function **imap\_append**(  
    [IMAP\Connection](class.imap-connection.md) `$imap`,  
    [string](language.types.string.md) `$folder`,  
    [string](language.types.string.md) `$message`,  
    [?](language.types.null.md)[string](language.types.string.md) `$options` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$internal_date` = **`null`**  
): [bool](language.types.boolean.md)

Acrescenta uma mensagem string informada no parâmetro `message` à caixa informada em `folder`.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`folder`
:   O nome da caixa de correio, veja [imap\_open()](function.imap-open.md) para mais
    informações

    **Aviso**

    Passar dados não confiáveis para este parâmetro é *inseguro*, a menos que
    [imap.enable\_insecure\_rsh](imap.configuration.md#ini.imap.enable-insecure-rsh) esteja desabilitado.

`message`
:   A mensagem a ser anexada, como uma string

    Ao comunicar com o servidor Cyrus IMAP, deve-se usar "\r\n" como
    o terminador de fim de linha em vez de "\n" ou a operação irá
    falhar

`options`
:   Se fornecido, o `options` também será gravado
    em `folder`.

`internal_date`
:   Se esse parâmetro for definido, ele definirá a data interna (INTERNALDATE) na mensagem anexada. O parâmetro deve ser uma string de data que esteja em conformidade com as especificações RFC2060 para um valor de data/horário.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |
| 8.0.0 | `options` e `internal_date` agora podem ser nulos. |

### Examples

**Exemplo #1 Exemplo de **imap\_append()****

```
<?php
$imap = imap_open("{imap.example.org}INBOX.Drafts", "username", "password");

$check = imap_check($imap);
echo "Contagem de mensagens antes de anexar: ". $check->Nmsgs . "\n";

imap_append($imap, "{imap.example.org}INBOX.Drafts"
                   , "From: eu@example.com\r\n"
                   . "To: voce@example.com\r\n"
                   . "Subject: teste\r\n"
                   . "\r\n"
                   . "esta é uma mensagem de teste, favor ignorar\r\n"
                   );

$check = imap_check($imap);
echo "Contagem de mensagens após anexar: ". $check->Nmsgs . "\n";

imap_close($imap);
?>
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
