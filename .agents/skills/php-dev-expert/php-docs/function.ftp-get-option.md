# Obtém várias opções em tempo de execução da conexão FTP atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-get-option.php

---

# ftp\_get\_option

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

ftp\_get\_option — Obtém várias opções em tempo de execução da conexão FTP atual

### Descrição

function **ftp\_get\_option**([FTP\Connection](class.ftp-connection.md) `$ftp`, [int](language.types.integer.md) `$option`): [int](language.types.integer.md)|[bool](language.types.boolean.md)

Esta função retorna o valor da opção solicitada no parâmetro
`option` em relação à conexão FTP especificada.

### Parâmetros

`ftp`
:   Uma instância de [FTP\Connection](class.ftp-connection.md).

`option`
:   Atualmente, as seguintes opções são suportadas:

    **Opções em tempo de execução do FTP suportadas**

    |  |  |
    | --- | --- |
    | **`FTP_TIMEOUT_SEC`** | Retorna o limite de tempo usado atualmente para as operações de rede. |
    | **`FTP_AUTOSEEK`** | Retorna **`true`** se esta opção estiver ativa, **`false`** caso contrário. |

### Valor Retornado

Retorna o valor em caso de sucesso ou **`false`** se a opção indicada
em `option` não for suportada. Neste caso, uma mensagem
de alerta também é emitida.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **ftp\_get\_option()****

```
<?php
// Obtém o limite de tempo da conexão FTP informada
$timeout = ftp_get_option($ftp, FTP_TIMEOUT_SEC);
?>
```

### Veja também

- [ftp\_set\_option()](function.ftp-set-option.md) - Define opções diversas em tempo de execução

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
