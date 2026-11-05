# Define o mecanismo da requisição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauth.setrequestengine.php

---

# OAuth::setRequestEngine

(PECL OAuth >= 1.0.0)

OAuth::setRequestEngine — Define o mecanismo da requisição

### Descrição

public function **OAuth::setRequestEngine**([int](language.types.integer.md) `$reqengine`): [void](language.types.void.md)

Define o mecanismo que enviará as requisições HTTP.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`reqengine`
:   O mecanismo de requisição desejado. Definido como **`OAUTH_REQENGINE_STREAMS`**
    para uso de Fluxos PHP ou **`OAUTH_REQENGINE_CURL`** para usar
    [Curl](book.curl.md).

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Emite uma exceção [OAuthException](class.oauthexception.md) se um mecanismo de
requisição inválido for escolhido.

### Examples

**Exemplo #1 Exemplo de **OAuth::setRequestEngine()****

```
<?php
$consumer = new OAuth();

$consumer->setRequestEngine(OAUTH_REQENGINE_STREAMS);
?>
```

### Veja também

- [Curl](book.curl.md)
- [Fluxos PHP](book.stream.md)
- [OAuthException](class.oauthexception.md)

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
