# Constrói um novo objeto OAuthProvider

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauthprovider.construct.php

---

# OAuthProvider::\_\_construct

(PECL OAuth >= 1.0.0)

OAuthProvider::\_\_construct — Constrói um novo objeto OAuthProvider

### Descrição

public function **OAuthProvider::\_\_construct**([array](language.types.array.md) `$params_array` = ?)

Inicia um novo [object](language.types.object.md) da classe [OAuthProvider](class.oauthprovider.md).

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`params_array`
:   Definir estes parâmetros opcionais está limitado ao
    [SAPI CLI](features.commandline.md).

### Valor Retornado

Um [object](language.types.object.md) da classe [OAuthProvider](class.oauthprovider.md).

### Examples

**Exemplo #1 Exemplo de **OAuthProvider::\_\_construct()****

```
<?php
try {

    $op = new OAuthProvider();

    // Usa funções de retorno definidas pelo usuário
    $op->consumerHandler(array($this, 'procuraConsumidor'));
    $op->timestampNonceHandler(array($this, 'verificadorTimestampNonce'));
    $op->tokenHandler(array($this, 'meuGerenciadorDeToken'));

    // Ignora o parâmetro foo_uri
    $op->setParam('foo_uri', NULL);

    // Não é necessário token para este ponto de extremidade
    $op->setRequestTokenPath('/v1/oauth/request_token');

    $op->checkOAuthRequest();

} catch (OAuthException $e) {

    echo OAuthProvider::reportProblem($e);
}
?>
```

### Veja também

- [OAuthProvider::setParam()](oauthprovider.setparam.md) - Define um parâmetro

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
