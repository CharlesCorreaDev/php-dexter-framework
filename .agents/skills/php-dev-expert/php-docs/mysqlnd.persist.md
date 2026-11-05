# Conexões Persistentes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqlnd.persist.php

---

# Conexões Persistentes

**Usando Conexões Persistentes**

Se `mysqli` for usada com `mysqlnd`,
quando uma conexão persistente for criada ela gera uma chamada
`COM_CHANGE_USER`
(`mysql_change_user()`) no servidor. Isto
assegura que a re-autenticação da conexão aconteça.

Como existe uma certa sobrecarga com a chamada
`COM_CHANGE_USER`, é possível desligar isto
em tempo de compilação. O reúso de uma conexão persistente irá
gerar uma chamada `COM_PING` (`mysql_ping`)
para simplesmente testar se a conexão é reutilizável.

A geração de `COM_CHANGE_USER` pode ser desligada
com a opção de compilação
`MYSQLI_NO_CHANGE_USER_ON_PCONNECT`. Por exemplo:

```
shell# CFLAGS="-DMYSQLI_NO_CHANGE_USER_ON_PCONNECT" ./configure --with-mysql=/usr/local/mysql/ --with-mysqli=/usr/local/mysql/bin/mysql_config --with-pdo-mysql=/usr/local/mysql/bin/mysql_config --enable-debug && make clean && make -j6
```

Ou alternativamente:

```
shell# export CFLAGS="-DMYSQLI_NO_CHANGE_USER_ON_PCONNECT"
shell# configure --whatever-option
shell# make clean
shell# make
```

Observe que somente `mysqli` sobre `mysqlnd`
usa `COM_CHANGE_USER`. Outras compinações de extensão-driver
usam `COM_PING` no uso inicial de uma
conexão persistente.

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
