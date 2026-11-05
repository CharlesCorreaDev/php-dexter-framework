# Obtém e/ou define o limitador do cache atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.session-cache-limiter.php

---

# session\_cache\_limiter

(PHP 4 >= 4.0.3, PHP 5, PHP 7, PHP 8)

session\_cache\_limiter — Obtém e/ou define o limitador do cache atual

### Descrição

function **session\_cache\_limiter**([?](language.types.null.md)[string](language.types.string.md) `$value` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

**session\_cache\_limiter()** retorna o nome do atual
limitador do cache.

O limitador do cache controla quais HTTP headers de controle de cache são enviados para
o cliente. Estes headers determinam as regras pelas quais o conteúdo da página
pode ser guardado em cache pelo cliente e proxy intermediário. Definindo o limitador do
cache para `nocache` rejeitaria qualquer cache do cliente/proxy.
Um valor como `public` permitiria o cache do proxy e do
cliente, e `private` rejeitaria o cache do proxy
mas permite que o cliente armazene o conteúdo em cache.

No modo `private`, o cabeçalho Expire enviado para o cliente
pode provocar confusão em alguns browsers, incluindo o Mozilla.
Você pode evitar este problema usando o modo `private_no_expire`. O
cabeçalho `Expire` nunca é enviado para o cliente nesse modo.

Definindo o limitador do cache como `''` desativará completamente o envio automático
de cabeçalhos de cache.

O limitador do cache é redefinido para o valor padrão guardado em
[session.cache\_limiter](session.configuration.md#ini.session.cache-limiter)
na inicialização da requisição. Então você precisa chamar
**session\_cache\_limiter()** para cada
requisição (e antes que [session\_start()](function.session-start.md) seja chamada).

### Parâmetros

`value`
:   Se `value` é especificado e não **`null`**, o nome do
    limitador de cache atual é modificado para o novo valor.

    **Valores possíveis**

    | Valor | Cabeçalhos enviados |
    | --- | --- |
    | `public` | ``` Expires: (em algum momento do futuro, de acordo com session.cache_expire) Cache-Control: public, max-age=(em algum momento do futuro, de acordo com session.cache_expire) Last-Modified: (o timestamp do script atual) ``` |
    | `private_no_expire` | ``` Cache-Control: private, max-age=(session.cache_expire no futuro) Last-Modified: (o timestamp do script atual) ``` |
    | `private` | ``` Expires: Thu, 19 Nov 1981 08:52:00 GMT Cache-Control: private, max-age=(session.cache_expire no futuro) Last-Modified: (o timestamp do script atual) ``` |
    | `nocache` | ``` Expires: Thu, 19 Nov 1981 08:52:00 GMT Cache-Control: no-store, no-cache, must-revalidate Pragma: no-cache ``` |

### Valor Retornado

Retorna o nome do limitador de cache atual.
Caso não seja possível alterar o valor, **`false`** é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `value` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de **session\_cache\_limiter()****

```
<?php

/* define o limitador do cache para 'private' */

session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

echo "O limitador do cache está definido agora para $cache_limiter<br />";
?>
```

### Veja também

- [session.cache\_limiter](session.configuration.md#ini.session.cache-limiter)

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
