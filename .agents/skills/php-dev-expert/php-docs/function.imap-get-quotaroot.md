# Recupera as configurações de cota por usuário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-get-quotaroot.php

---

# imap\_get\_quotaroot

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

imap\_get\_quotaroot — Recupera as configurações de cota por usuário

### Descrição

function **imap\_get\_quotaroot**([IMAP\Connection](class.imap-connection.md) `$imap`, [string](language.types.string.md) `$mailbox`): [array](language.types.array.md)|[false](language.types.singleton.md)

Recupera as configurações de cota por usuário. O valor limite representa a
quantidade total de espaço permitida para o uso total da caixa de correio deste usuário. O valor de uso
representa a capacidade total atual da caixa de correio do usuário.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`mailbox`
:   `mailbox` normalmente deve estar no formato de
    identificação da caixa de correio (ou seja, INBOX).

### Valor Retornado

Retorna um array de valores inteiros pertencentes à caixa de correio do usuário
especificado. Todos os valores contêm uma chave com base no nome do recurso e um
array correspondente com os valores de uso e limite internamente.

Esta função retornará **`false`** no caso de falha de chamada, e um
array de informações sobre a conexão mediante uma resposta não analisável
do servidor.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de **imap\_get\_quotaroot()****

```
<?php
$mbox = imap_open("{imap.example.org}", "kalowsky", "password", OP_HALFOPEN)
      or die("Não foi possível conectar: " . imap_last_error());

$quota = imap_get_quotaroot($mbox, "INBOX");
if (is_array($quota)) {
   $storage = $quota['STORAGE'];
   echo "Nível de uso de STORAGE: " .  $storage['usage'];
   echo "Nível limite de STORAGE: " .  $storage['limit'];

   $message = $quota['MESSAGE'];
   echo "Nível de uso de MESSAGE: " .  $message['usage'];
   echo "Nível limite de MESSAGE: " .  $message['limit'];

   /* ...  */

}

imap_close($mbox);
?>
```

### Notas

Esta função está disponível atualmente apenas para usuários da biblioteca c-client2000
ou superior.

O `imap` deve ser aberto como o usuário cuja
caixa de correio deve ser verificada.

### Veja também

- [imap\_open()](function.imap-open.md) - Abre um fluxo IMAP para uma caixa de correio
- [imap\_set\_quota()](function.imap-set-quota.md) - Define uma cota para uma determinada caixa de correio
- [imap\_get\_quota()](function.imap-get-quota.md) - Recupera as configurações de nível de cota e estatísticas de uso por caixa de correio

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
