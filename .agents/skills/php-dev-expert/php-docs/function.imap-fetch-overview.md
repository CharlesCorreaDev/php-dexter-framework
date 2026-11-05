# Lê uma visão geral das informações nos cabeçalhos da mensagem fornecida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-fetch-overview.php

---

# imap\_fetch\_overview

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_fetch\_overview — Lê uma visão geral das informações nos cabeçalhos da mensagem fornecida

### Descrição

function **imap\_fetch\_overview**([IMAP\Connection](class.imap-connection.md) `$imap`, [string](language.types.string.md) `$sequence`, [int](language.types.integer.md) `$flags` = 0): [array](language.types.array.md)|[false](language.types.singleton.md)

Esta função busca cabeçalhos de e-mail para a
sequência fornecida em `sequence` e retorna uma visão geral de seus
conteúdos.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`sequence`
:   Uma descrição de sequência de mensagens. Pode-se enumerar mensagens desejadas
    com a sintaxe `X,Y` ou recuperar todas as mensagens
    dentro de um intervalo com a sintaxe `X:Y`.

`flags`
:   `sequence` conterá uma sequência de índices de mensagens
    ou UIDs, se este parâmetro for definido como
    **`FT_UID`**.

### Valor Retornado

Retorna um array de objetos descrevendo um cabeçalho de mensagem cada.
O objeto só definirá uma propriedade se ela existir. As possíveis
propriedades são:

- `subject` - o assunto da mensagem
- `from` - quem enviou
- `to` - destinatário
- `date` - quando foi enviada
- `message_id` - identificador da mensagem
- `references` - é uma referência a esta identificação de mensagem
- `in_reply_to` - é uma resposta a esta identificação de mensagem
- `size` - tamanho em bytes
- `uid` - UID que a mensagem tem na caixa de correio
- `msgno` - número da mensagem na sequência da caixa de correio
- `recent` - esta mensagem está marcada como recente
- `flagged` - esta mensagem está marcada
- `answered` - esta mensagem está marcada como respondida
- `deleted` - esta mensagem está marcada para exclusão
- `seen` - esta mensagem está marcada como já lida
- `draft` - esta mensagem está marcada como um rascunho
- `udate` - o timestamp UNIX da data/horário de chegada

A função retorna **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de **imap\_fetch\_overview()****

```
<?php
$mbox = imap_open("{imap.example.org:143}INBOX", "username", "password")
     or die("Não foi possível conectar: " . imap_last_error());

$MC = imap_check($mbox);

// Obtém uma visão geral de todas as mensagens na caixa INBOX
$result = imap_fetch_overview($mbox,"1:{$MC->Nmsgs}",0);
foreach ($result as $overview) {
    echo "#{$overview->msgno} ({$overview->date}) - De: {$overview->from}
    {$overview->subject}\n";
}
imap_close($mbox);
?>
```

### Veja também

- [imap\_fetchheader()](function.imap-fetchheader.md) - Retorna o cabeçalho de uma mensagem

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
