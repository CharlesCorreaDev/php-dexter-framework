# Define os parâmetros do cookie de sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.session-set-cookie-params.php

---

# session\_set\_cookie\_params

(PHP 4, PHP 5, PHP 7, PHP 8)

session\_set\_cookie\_params — Define os parâmetros do cookie de sessão

### Descrição

function **session\_set\_cookie\_params**(  
    [int](language.types.integer.md) `$lifetime_or_options`,  
    [?](language.types.null.md)[string](language.types.string.md) `$path` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$domain` = **`null`**,  
    [?](language.types.null.md)[bool](language.types.boolean.md) `$secure` = **`null`**,  
    [?](language.types.null.md)[bool](language.types.boolean.md) `$httponly` = **`null`**  
): [bool](language.types.boolean.md)

Assinatura alternativa disponível a partir do PHP 7.3.0:

function **session\_set\_cookie\_params**([array](language.types.array.md) `$lifetime_or_options`): [bool](language.types.boolean.md)

Define parâmetros dos cookies configurados no arquivo php.ini. O efeito desta
função é apenas pela duração do script. Então, você precisa
chamar **session\_set\_cookie\_params()** para cada requisição e
antes que [session\_start()](function.session-start.md) seja chamada.

Esta função atualiza os valores em tempo de execução correspondentes às configurações INI
que podem ser obtidos com [ini\_get()](function.ini-get.md).

### Parâmetros

`lifetime_or_options`
:   Ao usar a primeira assinatura, este parâmetro indica o [tempo de vida](session.configuration.md#ini.session.cookie-lifetime) do
    cookie de sessão, definido em segundos.

    Ao usar a segunda assinatura, este parâmetro deve conter
    um [array](language.types.array.md) associativo que pode ter qualquer uma das chaves
    `lifetime` (tempo de vida), `path` (caminho), `domain` (domínio),
    `secure` (seguro), `httponly` (somente http) e `samesite` (mesmo site).
    Os valores têm o mesmo significado descrito para os parâmetros com o
    mesmo nome. O valor do elemento `samesite` deve ser
    `Lax` ou `Strict`.
    Se alguma das opções permitidas não for fornecida, seus valores padrão serão os
    iguais aos valores padrão dos parâmetros explícitos. Se o
    O elemento `samesite` for omitido, nenhum atributo SameSite
    do cookie é definido.

`path`
:   [Caminho](session.configuration.md#ini.session.cookie-path) no domínio onde
    o cookie irá funcionar. Use uma única barra ('/') para que funcione em todos os caminhos do
    domínio.

`domain`
:   [Domínio](session.configuration.md#ini.session.cookie-domain) do cookie, por
    exemplo 'www.php.net'. Para tornar os cookies visíveis em todos os subdomínios,
    o domínio deve ser prefixado com um ponto, como '.php.net'.

`secure`
:   Se **`true`**, o cookie só será enviado em conexões
    [seguras](session.configuration.md#ini.session.cookie-secure).

`httponly`
:   Se **`true`**, então o PHP tentará enviar a opção
    [httponly](session.configuration.md#ini.session.cookie-httponly)
    ao definir o cookie de sessão.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `path`, `domain`, `secure` e `httponly` são anuláveis agora. |
| 7.3.0 | Uma assinatura alternativa que suporta `lifetime_or_options` [array](language.types.array.md) foi adicionada. Esta assinatura suporta também a configuração do atributo de cookie SameSite. |
| 7.2.0 | Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha. Anteriormente a função retornava [void](language.types.void.md). |

### Veja também

- [session.cookie\_lifetime](session.configuration.md#ini.session.cookie-lifetime)
- [session.cookie\_path](session.configuration.md#ini.session.cookie-path)
- [session.cookie\_domain](session.configuration.md#ini.session.cookie-domain)
- [session.cookie\_secure](session.configuration.md#ini.session.cookie-secure)
- [session.cookie\_httponly](session.configuration.md#ini.session.cookie-httponly)
- [session.cookie\_samesite](session.configuration.md#ini.session.cookie-samesite)
- [session\_get\_cookie\_params()](function.session-get-cookie-params.md) - Obtém os parâmetros do cookie da sessão

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
