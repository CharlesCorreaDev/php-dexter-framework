# Reabre o fluxo IMAP para uma nova caixa de correio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-reopen.php

---

# imap\_reopen

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_reopen — Reabre o fluxo IMAP para uma nova caixa de correio

### Descrição

function **imap\_reopen**(  
    [IMAP\Connection](class.imap-connection.md) `$imap`,  
    [string](language.types.string.md) `$mailbox`,  
    [int](language.types.integer.md) `$flags` = 0,  
    [int](language.types.integer.md) `$retries` = 0  
): [bool](language.types.boolean.md)

Reabre o fluxo especificado para uma nova caixa de correio informada em `mailbox` em um
servidor IMAP ou NNTP.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`mailbox`
:   O nome da caixa de correio, veja [imap\_open()](function.imap-open.md) para mais
    informações

    **Aviso**

    Passar dados não confiáveis para este parâmetro é *inseguro*, a menos que
    [imap.enable\_insecure\_rsh](imap.configuration.md#ini.imap.enable-insecure-rsh) esteja desabilitado.

`flags`
:   Os `flags` são uma máscara de bits com uma ou mais das
    seguintes constantes:

    - **`OP_READONLY`** - Abre a caixa de correio somente leitura
    - **`OP_ANONYMOUS`** - Não usa ou atualiza um
      .newsrc para notícias (NNTP somente)
    - **`OP_HALFOPEN`** - Para nomes IMAP
      e NNTP, abre uma conexão, mas
      não abre uma caixa de correio.
    - **`OP_EXPUNGE`** - Expurga e recicla silenciosamente o fluxo
    - **`CL_EXPUNGE`** - Expurga a caixa de correio automaticamente ao fechar a caixa de correio
      (veja também [imap\_delete()](function.imap-delete.md) e
      [imap\_expunge()](function.imap-expunge.md))

`retries`
:   Número máximo de tentativas de conexão

### Valor Retornado

Retorna **`true`** se o fluxo for reaberto, **`false`** caso contrário.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de **imap\_reopen()****

```
<?php
$mbox = imap_open("{imap.example.org:143}INBOX", "username", "password") or die(implode(", ", imap_errors()));
// ...
imap_reopen($mbox, "{imap.example.org:143}INBOX.Sent") or die(implode(", ", imap_errors()));
// ..
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
