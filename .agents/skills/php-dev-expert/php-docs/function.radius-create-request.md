# Cria solicitação de contabilidade ou de autenticação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.radius-create-request.php

---

# radius\_create\_request

(PECL radius >= 1.1.0)

radius\_create\_request — Cria solicitação de contabilidade ou de autenticação

### Descrição

function **radius\_create\_request**([resource](language.types.resource.md) `$radius_handle`, [int](language.types.integer.md) `$type`): [bool](language.types.boolean.md)

Uma requisição Radius consiste em um código que especifica o tipo de requisição e
zero ou mais atributos que fornecem informações adicionais. Para começar
a construir uma nova requisição, chame **radius\_create\_request()**.

> **Nota**:
>
> Atenção: esta função deve ser chamada antes se inserir qualquer atributo!

### Parâmetros

`radius_handle`

`type`
:   O tipo, **`RADIUS_ACCESS_REQUEST`** ou
    **`RADIUS_ACCOUNTING_REQUEST`**.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **radius\_create\_request()****

```
<?php
if (!radius_create_request($res, RADIUS_ACCESS_REQUEST)) {
    echo 'RadiusError:' . radius_strerror($res). "\n<br />";
    exit;
}
?>
```

### Veja também

- [radius\_send\_request()](function.radius-send-request.md) - Envia a solicitação e aguarda uma resposta

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
