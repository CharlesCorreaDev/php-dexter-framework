# Define as credenciais a serem usadas para autenticação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.setsaslauthdata.php

---

# Memcached::setSaslAuthData

(PECL memcached >= 2.0.0)

Memcached::setSaslAuthData — Define as credenciais a serem usadas para autenticação

### Descrição

public function **Memcached::setSaslAuthData**([string](language.types.string.md) `$username`, [string](language.types.string.md) `$password`): [bool](language.types.boolean.md)

**Memcached::setSaslAuthData()** define o nome de usuário e
a senha que devem ser usados para autenticação SASL com os servidores
memcache.

*Este método só está disponível quando a extensão memcached é
criada com suporte a SASL.* Consulte a
[configuração do Memcached](memcached.setup.md) para saber como fazer isso.

### Parâmetros

`username`
:   O nome de usuário a ser usado para autenticação.

`password`
:   A senha a ser usada para autenticação.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
