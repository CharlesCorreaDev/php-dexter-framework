# Realiza uma verificação tcpwrap

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.tcpwrap-check.php

---

# tcpwrap\_check

(PECL tcpwrap >= 0.1.0)

tcpwrap\_check — Realiza uma verificação tcpwrap

### Descrição

function **tcpwrap\_check**(  
    [string](language.types.string.md) `$daemon`,  
    [string](language.types.string.md) `$address`,  
    [string](language.types.string.md) `$user` = ?,  
    [bool](language.types.boolean.md) `$nodns` = **`false`**  
): [bool](language.types.boolean.md)

Esta função consulta os arquivos /etc/hosts.allow e
/etc/hosts.deny para verificar se o acesso ao serviço
`daemon` deve ser concedido ou negado a um cliente.

### Parâmetros

`daemon`
:   O nome do serviço.

`address`
:   O endereço remoto do cliente. Pode ser um endereço IP ou um nome de domínio.

`user`
:   Um nome de usuário opcional.

`nodns`
:   Se `address` se parecer com um nome de domínio, o DNS será
    usado para resolvê-lo para o endereço IP; se `nodns` for definido
    como **`true`**, isso será evitado.

### Valor Retornado

Esta função retorna **`true`** se o acesso deve ser concedido, **`false`** caso contrário.

### Examples

**Exemplo #1 Nega todas as conexões do localhost**

Se o arquivo /etc/hosts.deny contiver:

```
php: 127.0.0.1
```

e o código se parecer com:

```
<?php
if (!tcpwrap_check('php', $_SERVER['REMOTE_ADDR'])) {
  die('Você não é bem-vindo aqui');
}
?>
```

### Veja também

Para mais detalhes, consulte a página do man, hosts\_access(3).

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
