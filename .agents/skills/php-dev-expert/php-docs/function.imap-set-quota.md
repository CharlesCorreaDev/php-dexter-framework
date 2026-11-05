# Define uma cota para uma determinada caixa de correio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-set-quota.php

---

# imap\_set\_quota

(PHP 4 >= 4.0.5, PHP 5, PHP 7, PHP 8)

imap\_set\_quota — Define uma cota para uma determinada caixa de correio

### Descrição

function **imap\_set\_quota**([IMAP\Connection](class.imap-connection.md) `$imap`, [string](language.types.string.md) `$quota_root`, [int](language.types.integer.md) `$mailbox_size`): [bool](language.types.boolean.md)

Define uma cota limite superior por caixa de correio.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`quota_root`
:   A caixa de correio a ter uma cota definida. Deve seguir o formato padrão IMAP
    para uma caixa de correio: `user.name`.

`mailbox_size`
:   O tamanho máximo (em KB) para o `quota_root`

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de **imap\_set\_quota()****

```
<?php
$mbox = imap_open("{imap.example.org:143}", "mailadmin", "password");

if (!imap_set_quota($mbox, "user.kalowsky", 3000)) {
    echo "Erro ao definir cota\n";
    return;
}

imap_close($mbox);
?>
```

### Notas

Esta função está disponível atualmente apenas para usuários da biblioteca c-client2000
ou superior.

O `imap` fornecido deve ser aberto como administrador
de e-mail, caso contrário, esta função falhará.

### Veja também

- [imap\_open()](function.imap-open.md) - Abre um fluxo IMAP para uma caixa de correio
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
