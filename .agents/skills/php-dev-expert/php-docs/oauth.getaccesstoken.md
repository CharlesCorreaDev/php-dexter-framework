# Busca um token de acesso

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauth.getaccesstoken.php

---

# OAuth::getAccessToken

(PECL OAuth >= 0.99.1)

OAuth::getAccessToken — Busca um token de acesso

### Descrição

public function **OAuth::getAccessToken**(  
    [string](language.types.string.md) `$access_token_url`,  
    [string](language.types.string.md) `$auth_session_handle` = ?,  
    [string](language.types.string.md) `$verifier_token` = ?,  
    [string](language.types.string.md) `$http_method` = ?  
): [array](language.types.array.md)

Busca um token de acesso, segredo e quaisquer parâmetros de resposta adicionais do provedor de serviço.

### Parâmetros

`access_token_url`
:   URL para acessar a API do token.

`auth_session_handle`
:   Identificador de sessão de autorização, este parâmetro não tem qualquer
    citação na especificação interna do OAuth 1.0 mas pode ser
    implementada por grandes provedores.
    Consulte [» ScalableOAuth](https://oauth.pbwiki.com/ScalableOAuth/)
    para mais informação.

`verifier_token`
:   Para provedores de serviço que suportam 1.0a, um `verifier_token`
    deve ser passado durante a troca do token de requisição pelo token de
    acesso. Se o `verifier_token` estiver presente em `$_GET`
    ou `$_POST`, ele é passado automaticamente e o chamador
    não precisa especificar um `verifier_token` (normalmente se o token de acesso
    for trocado na URL oauth\_callback).
    Consulte [» ScalableOAuth](https://oauth.pbwiki.com/ScalableOAuth/)
    para mais informação.

`http_method`
:   Método HTTP a ser usado, e.g. `GET` ou `POST`.

### Valor Retornado

Retorna um array contendo a resposta OAuth interpretada em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL oauth 1.0.0 | Anteriormente, retornava **`null`** em caso de falha, em vez de **`false`**. |
| PECL oauth 0.99.9 | O parâmetro `verifier_token` foi adicionado. |

### Examples

**Exemplo #1 Exemplo de **OAuth::getAccessToken()****

```
<?php
try {
    $oauth = new OAuth(OAUTH_CONSUMER_KEY,OAUTH_CONSUMER_SECRET);
    $oauth->setToken($request_token,$request_token_secret);
    $access_token_info = $oauth->getAccessToken("https://example.com/oauth/access_token");
    if(!empty($access_token_info)) {
        print_r($access_token_info);
    } else {
        print "Falha ao buscar o token de acesso, resposta foi: " . $oauth->getLastResponse();
    }
} catch(OAuthException $E) {
    echo "Resposta: ". $E->lastResponse . "\n";
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [oauth_token] => algum_token
    [oauth_token_secret] => algum_segredo_de_token
)
```

### Veja também

- [OAuth::getLastResponse()](oauth.getlastresponse.md) - Obtém a última resposta
- [OAuth::getLastResponseInfo()](oauth.getlastresponseinfo.md) - Obtém informação HTTP sobre a última resposta
- [OAuth::setToken()](oauth.settoken.md) - Define o token e o segredo

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
