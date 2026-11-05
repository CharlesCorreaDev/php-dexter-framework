# Suporte a sessões

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.sessions.php

---

# Suporte a sessões

Memcached fornece um manipulador de sessão personalizado que pode ser usado
para armazenar sessões de usuário no memcache. Uma instância memcached completamente
separada é usada para isso internamente, então você pode usar um pool de servidores diferente,
se necessário. As chaves de sessão são armazenadas sob o prefixo
`memc.sess.key.`, portanto, esteja ciente disso se usar o
mesmo conjunto de servidores para sessões e armazenamento em cache genérico.

`session.save_handler` [string](language.types.string.md)
:   Defina como `memcached` para ativar o suporte a sessões.

`session.save_path` [string](language.types.string.md)
:   Defina uma vírgula separada das entradas `hostname:port` a serem
    usadas para o pool de servidores de sessão, por exemplo,
    `"sess1:11211, sess2:11211"`.

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
