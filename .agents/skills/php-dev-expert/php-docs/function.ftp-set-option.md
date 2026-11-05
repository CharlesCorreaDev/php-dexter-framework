# Define opções diversas em tempo de execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-set-option.php

---

# ftp\_set\_option

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

ftp\_set\_option — Define opções diversas em tempo de execução

### Descrição

function **ftp\_set\_option**([FTP\Connection](class.ftp-connection.md) `$ftp`, [int](language.types.integer.md) `$option`, [int](language.types.integer.md)|[bool](language.types.boolean.md) `$value`): [true](language.types.singleton.md)

Esta função controla várias opções em tempo de execução para a conexão FTP especificada.

### Parâmetros

`ftp`
:   Uma instância de [FTP\Connection](class.ftp-connection.md).

`option`
:   Atualmente, as seguintes opções são suportadas:

    **Opção em tempo de execução do FTP suportada**

    |  |  |
    | --- | --- |
    | **`FTP_TIMEOUT_SEC`** | Muda o limite de tempo em segundos usado para todas as operações de rede relacionadas. `value` deve ser um inteiro maior que 0. O limite de tempo padrão é de 90 segundos. |
    | **`FTP_AUTOSEEK`** | Quando ativado, requisições GET ou PUT com um parâmetro `resumepos` ou `startpos` irão primeiro procurar a posição especificada no arquivo. Isto está ativado por padrão. |
    | **`FTP_USEPASVADDRESS`** | Quando desabilitado, PHP irá ignorar o endereço IP retornado pelo servidor FTP em resposta do comando PASV, e no lugar usará o endereço IP que foi fornecido em ftp\_connect(). `value` deve ser um booleano. |

`value`
:   Este parâmetro depende de qual opção foi escolhida em `option`
    para ser alterada.

### Valor Retornado

Sempre retorna **`true`**.

### Erros/Exceções

Um [ValueError](class.valueerror.md) é lançado se a opção definida pelo parâmetro `option`
não for suportada. Um [TypeError](class.typeerror.md) é lançado se o parâmetro
`value` não corresponder ao tipo esperado pela opção definida no parâmetro `option`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Agora o tipo de retorno é **`true`**; antes era [bool](language.types.boolean.md). |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **ftp\_set\_option()****

```
<?php
// Define o limite de tempo da rede a 10 segundos
ftp_set_option($ftp, FTP_TIMEOUT_SEC, 10);
?>
```

### Veja também

- [ftp\_get\_option()](function.ftp-get-option.md) - Obtém várias opções em tempo de execução da conexão FTP atual

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
