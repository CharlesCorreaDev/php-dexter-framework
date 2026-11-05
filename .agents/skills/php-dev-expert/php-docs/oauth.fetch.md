# Busca um recurso protegido OAuth

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauth.fetch.php

---

# OAuth::fetch

(PECL OAuth >= 0.99.1)

OAuth::fetch — Busca um recurso protegido OAuth

### Descrição

public function **OAuth::fetch**(  
    [string](language.types.string.md) `$protected_resource_url`,  
    [array](language.types.array.md) `$extra_parameters` = ?,  
    [string](language.types.string.md) `$http_method` = ?,  
    [array](language.types.array.md) `$http_headers` = ?  
): [mixed](language.types.mixed.md)

Busca um recurso.

### Parâmetros

`protected_resource_url`
:   URL para o recurso protegido OAuth.

`extra_parameters`
:   Parâmetros extra a enviar com a requisição para o recurso.

`http_method`
:   Uma das constantes **`OAUTH_HTTP_METHOD_*`**,
    que incluem
    GET, POST, PUT, HEAD, ou DELETE.

    HEAD (**`OAUTH_HTTP_METHOD_HEAD`**) pode ser útil para
    descobrir informações antes da requisição (se as credenciais OAuth estiverem
    no cabeçalho `Authorization`).

`http_headers`
:   Cabeçalhos de cliente HTTP (tais como User-Agent, Accept, etc.)

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL oauth 1.0.0 | Anteriormente, retornava **`null`** em caso de falha, em vez de **`false`**. |
| PECL oauth 0.99.5 | O parâmetro `http_method` foi adicionado. |
| PECL oauth 0.99.8 | O parâmetro `http_headers` foi adicionado. |

### Examples

**Exemplo #1 Exemplo de **OAuth::fetch()****

```
<?php
try {
    $oauth = new OAuth("chave_consumidor","senha_consumidor",OAUTH_SIG_METHOD_HMACSHA1,OAUTH_AUTH_TYPE_AUTHORIZATION);
    $oauth->setToken("token_acesso","senha_token_acesso");

    $oauth->fetch("http://photos.example.net/photo?file=vacation.jpg");

    $response_info = $oauth->getLastResponseInfo();
    header("Content-Type: {$response_info["content_type"]}");
    echo $oauth->getLastResponse();
} catch(OAuthException $E) {
    echo "Exceção capturada!\n";
    echo "Resposta: ". $E->lastResponse . "\n";
}
?>
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
