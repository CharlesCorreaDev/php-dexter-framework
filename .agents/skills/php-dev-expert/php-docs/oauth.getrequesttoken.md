# Busca um token de requisição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauth.getrequesttoken.php

---

# OAuth::getRequestToken

(PECL OAuth >= 0.99.1)

OAuth::getRequestToken — Busca um token de requisição

### Descrição

public function **OAuth::getRequestToken**([string](language.types.string.md) `$request_token_url`, [string](language.types.string.md) `$callback_url` = ?, [string](language.types.string.md) `$http_method` = ?): [array](language.types.array.md)

Busca um token de requisição, segredo e quaisquer parâmetros de resposta adicionais do provedor de serviço.

### Parâmetros

`request_token_url`
:   URL para a API do token de requisição.

`callback_url`
:   URL de chamada de retorno OAuth. Se `callback_url` for informado e for um valor, é definido para "oob" para endereçar o alerta OAuth 2009.1.

`http_method`
:   Método HTTP a ser usado, ex.: `GET` ou `POST`.

### Valor Retornado

Retorna um array contendo a resposta OAuth interpretada em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL oauth 1.0.0 | Anteriormente, retornava **`null`** em caso de falha, em vez de **`false`**. |
| PECL oauth 0.99.9 | O parâmetro `callback_url` foi adicionado |

### Examples

**Exemplo #1 Exemplo de **OAuth::getRequestToken()****

```
<?php
try {
    $oauth = new OAuth(OAUTH_CONSUMER_KEY,OAUTH_CONSUMER_SECRET);
    $request_token_info = $oauth->getRequestToken("https://example.com/oauth/request_token");
    if(!empty($request_token_info)) {
        print_r($request_token_info);
    } else {
        print "Falha ao buscar token de requisição, resposta foi: " . $oauth->getLastResponse();
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
