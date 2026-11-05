# is2LeggedEndpoint

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauthprovider.is2leggedendpoint.php

---

# OAuthProvider::is2LeggedEndpoint

(PECL OAuth >= 1.0.0)

OAuthProvider::is2LeggedEndpoint — is2LeggedEndpoint

### Descrição

public function **OAuthProvider::is2LeggedEndpoint**([mixed](language.types.mixed.md) `$params_array`): [void](language.types.void.md)

O fluxo de duas etapas ou assinatura de solicitação. Não requer um token.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`params_array`

### Valor Retornado

Um [object](language.types.object.md) da classe [OAuthProvider](class.oauthprovider.md).

### Examples

**Exemplo #1 Exemplo de **OAuthProvider::is2LeggedEndpoint()****

```
<?php

$provider = new OAuthProvider();

$provider->is2LeggedEndpoint(true);

?>
```

### Veja também

- [OAuthProvider::\_\_construct()](oauthprovider.construct.md) - Constrói um novo objeto OAuthProvider

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
