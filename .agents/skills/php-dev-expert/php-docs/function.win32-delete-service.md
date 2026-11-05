# Exclui uma entrada de serviço do banco de dados do GCS

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.win32-delete-service.php

---

# win32\_delete\_service

(PECL win32service >=0.1.0)

win32\_delete\_service — Exclui uma entrada de serviço do banco de dados do GCS

### Descrição

function **win32\_delete\_service**([string](language.types.string.md) `$servicename`, [string](language.types.string.md) `$machine` = **`null`**): [void](language.types.void.md)

Tentativas de excluir um serviço do banco de dados do GCS. Privilégios
administrativos são necessários para que isso seja bem-sucedido.

Esta função apenas marca o serviço para exclusão. Se outros
processos (como o miniaplicativo de serviços) estiverem abertos, a exclusão será
adiada até que esses aplicativos sejam fechados. Se um serviço estiver marcado para
exclusão, outras tentativas de excluí-lo falharão e as tentativas de criar um
novo serviço com esse nome também falharão.

### Parâmetros

`servicename`
:   O nome abreviado do serviço.

`machine`
:   O nome da máquina opcional. Se omitido, a máquina local será usada.

### Valor Retornado

Nenhum valor é retornado.

Antes da versão 1.0.0, retornava **`WIN32_NO_ERROR`** em caso de sucesso, **`false`** se houver um problema com os parâmetros ou um [Código de Erro Win32](win32service.constants.md#win32service.constants.errors) em caso de falha.

### Erros/Exceções

Uma exceção [ValueError](class.valueerror.md) será lançada se o
valor do parâmetro `servicename` estiver vazio.

Uma exceção [Win32ServiceException](class.win32serviceexception.md) é lançada em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL win32service 1.0.0 | Lança uma exceção [ValueError](class.valueerror.md) em caso de dados inválidos nos parâmetros, anteriormente retornava **`false`**. |
| PECL win32service 1.0.0 | Lança uma exceção [Win32ServiceException](class.win32serviceexception.md) em caso de erro, anteriormente um [Código de Erro Win32](win32service.constants.md#win32service.constants.errors) era retornado. |
| PECL win32service 1.0.0 | O tipo de retorno agora é [void](language.types.void.md), anteriormente era [mixed](language.types.mixed.md). |

### Examples

**Exemplo #1 Um exemplo de **win32\_delete\_service()****

Exclui o serviço dummyphp.

```
<?php
win32_delete_service('dummyphp');
?>
```

### Veja também

- [win32\_create\_service()](function.win32-create-service.md) - Cria uma nova entrada de serviço no banco de dados do GCS
- [Códigos de Erro Win32](win32service.constants.md#win32service.constants.errors)

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
