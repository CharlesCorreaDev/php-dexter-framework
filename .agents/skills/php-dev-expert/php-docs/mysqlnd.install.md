# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqlnd.install.php

---

# Instalação

**Instalação em Unix**

Para usar o Driver Nativo MySQL, o PHP precisa
ser construído especificando que as extensões do banco de dados MySQL são
compiladas com suporte ao MySQL Native Driver. Isso é feito através
de opções de configuração antes de compilar o código-fonte do PHP.

Por exemplo, para construir a extensão MySQL, `mysqli`
e PDO MYSQL utilizando o Driver Nativo MySQL, seria dado
o seguinte comando:

```
./configure --with-mysql=mysqlnd \
--with-mysqli=mysqlnd \
--with-pdo-mysql=mysqlnd \
[other options]
```

**Instalação no Windows**

Nas distribuições oficiais do PHP para Windows, o Driver Nativo
MySQL está habilitado por padrão, portanto, nenhuma configuração adicional é
necessária para usá-lo. Todas as extensões de banco de dados MySQL usarão o Driver
Nativo MySQL neste caso.

**Suporte ao plug-in de autenticação SHA-256**

O Driver Nativo MySQL requer que a funcionalidade OpenSSL do PHP esteja carregada
e habilitada para conexão ao MySQL através de contas que utilizam o Plugin de Autenticação
MySQL SHA-256. Por exemplo, o PHP pode ser configurado usando:

```
./configure --with-mysql=mysqlnd \
--with-mysqli=mysqlnd \
--with-pdo-mysql=mysqlnd \
--with-openssl
[other options]
```

No Autotools, o suporte SSL estendido no `mysqlnd` é
habilitado implicitamente ao construir junto com a extensão `openssl`
usando a opção de configuração **--with-openssl**.
Ao compilar sem a extensão `openssl`, a opção de configuração
**--with-mysqlnd-ssl** pode ser
usada para ativar explicitamente o suporte SSL estendido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | A opção de configuração **--with-mysqlnd-ssl** do Autotools foi adicionada para ativar explicitamente o suporte SSL estendido ao compilar sem a extensão `openssl`. |

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
