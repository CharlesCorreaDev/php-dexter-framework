# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.requirements.php

---

## Dependências

Para ter esta funções disponíveis, deve-se compilar o PHP com
suporte para a extensão mysqli.

**MySQL 8**

Ao executar o PHP em versão anterior a 7.1.16, ou PHP 7.2 anterior a 7.2.4, defina
o plugin padrão de senha do Servidor MySQL 8 para *mysql\_native\_password*
ou surgirão erros parecidos com
*The server requested authentication method unknown to the client [caching\_sha2\_password]*
mesmo quando *caching\_sha2\_password* não for usado.

Isto acontece porque o padrão do MySQL 8 é caching\_sha2\_password, um plugin que não é
reconhecido pelas versões anteriores do PHP (mysqlnd). Para resolver, altere
para a configuração `default_authentication_plugin=mysql_native_password`
no arquivo my.cnf. O plugin *caching\_sha2\_password*
é totalmente suportado a partir do PHP 7.4.4. Para versões anteriores do PHP, a extensão
[mysql\_xdevapi](book.mysql-xdevapi.md) suporta
o plugin.

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
