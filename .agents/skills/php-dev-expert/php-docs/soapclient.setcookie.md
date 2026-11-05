# Define um cookie para solicitações SOAP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/soapclient.setcookie.php

---

# SoapClient::\_\_setCookie

(PHP 5 >= 5.0.4, PHP 7, PHP 8)

SoapClient::\_\_setCookie — Define um cookie para solicitações SOAP

### Descrição

public function **SoapClient::\_\_setCookie**([string](language.types.string.md) `$name`, [?](language.types.null.md)[string](language.types.string.md) `$value` = **`null`**): [void](language.types.void.md)

Define um cookie a ser enviado junto com as solicitações SOAP.

> **Nota**:
>
> Chamar este método afetará todas as chamadas seguintes para
> métodos [SoapClient](class.soapclient.md).

### Parâmetros

`name`
:   O nome do cookie.

`value`
:   O valor do cookie. Se não for especificado, o cookie será excluído.

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `value` agora é anulável. |

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
