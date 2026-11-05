# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.installation.php

---

## Instalação

Informações para instalar esta extensão PECL podem ser
encontradas no capítulo [Instalação de
Extensões PECL](install.pecl.md) do manual. Informações adicionais, como novas versões,
downloads, arquivos fontes, informações do mantenedor e um CHANGELOG, podem ser
encontradas aqui:
[» https://pecl.php.net/package/memcached](https://pecl.php.net/package/memcached).

Se o libmemcached estiver instalado em um local não padrão, use a opção **--with-libmemcached-dir=DIR**, em que DIR é o prefixo
de instalação do libmemcached. Este diretório deve conter o arquivo
include/libmemcached/memcached.h.

Zlib é necessário para suporte de compactação. Para especificar a instalação
não padrão do Zlib, use **--with-zlib-dir=DIR**, onde DIR é o prefixo de
instalação do Zlib.

O suporte ao manipulador de sessão é ativado por padrão. Para desativá-lo,
use a opção **--disable-memcached-session**.

O suporte à autenticação SASL é desabilitado por padrão. Para ativá-lo, use a opção
**--enable-memcached-sasl**. Isso requer que
libsasl2 tenha sido instalado e que libmemcached tenha sido construído
com suporte a SASL ativado.

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
