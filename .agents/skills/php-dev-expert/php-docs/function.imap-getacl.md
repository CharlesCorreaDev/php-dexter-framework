# Obtém a ACL para uma determinada caixa de correio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-getacl.php

---

# imap\_getacl

(PHP 5, PHP 7, PHP 8)

imap\_getacl — Obtém a ACL para uma determinada caixa de correio

### Descrição

function **imap\_getacl**([IMAP\Connection](class.imap-connection.md) `$imap`, [string](language.types.string.md) `$mailbox`): [array](language.types.array.md)|[false](language.types.singleton.md)

Obtém a ACL para uma determinada caixa de correio.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`mailbox`
:   O nome da caixa de correio, veja [imap\_open()](function.imap-open.md) para mais
    informações

    **Aviso**

    Passar dados não confiáveis para este parâmetro é *inseguro*, a menos que
    [imap.enable\_insecure\_rsh](imap.configuration.md#ini.imap.enable-insecure-rsh) esteja desabilitado.

### Valor Retornado

Retorna um array associativo de pares "folder" => "acl", ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de **imap\_getacl()****

```
<?php

print_r(imap_getacl($imap, 'user.joecool'));

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [asubfolder] => lrswipcda
    [anothersubfolder] => lrswipcda
)
```

### Notas

Esta função está disponível atualmente apenas para usuários da biblioteca c-client2000
ou superior.

### Veja também

- [imap\_setacl()](function.imap-setacl.md) - Define a ACL para uma determinada caixa de correio

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
