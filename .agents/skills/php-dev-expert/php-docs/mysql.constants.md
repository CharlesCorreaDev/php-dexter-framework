# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

É possível especificar opções de cliente adicionais para as funções
[mysql\_connect()](function.mysql-connect.md) e [mysql\_pconnect()](function.mysql-pconnect.md).
As seguintes constantes estão definidas:

**Constantes do cliente MySQL**

| Constante | Descrição |
| --- | --- |
| **`MYSQL_CLIENT_COMPRESS`** | Usar protocolo de compressão |
| **`MYSQL_CLIENT_IGNORE_SPACE`** | Permitir espaços após nomes de funções |
| **`MYSQL_CLIENT_INTERACTIVE`** | Permitir interactive\_timeout segundos (ao invés de **wait\_timeout**) de inatividade antes de fechar a conexão. |
| **`MYSQL_CLIENT_SSL`** | Usar criptografia SSL. Esta opçõa está disponível somente com a versão 4.x ou posterior da biblioteca cliente MySQL. A versão 3.23.x é incluída com o PHP 4 e com binários Windows do PHP 5. |

A função [mysql\_fetch\_array()](function.mysql-fetch-array.md) usa uma constante para
os diferentes tipos de arrays de resultados. As constantes a seguir estão
definidas:

**Constantes de busca MySQL**

| Constante | Descrição |
| --- | --- |
| **`MYSQL_ASSOC`** | Colunas são retornadas no array contendo o nome do campo como as chaves do array. |
| **`MYSQL_BOTH`** | Colunas são retornadas no array contendo chaves numéricas e chaves com o nome do campo. |
| **`MYSQL_NUM`** | Colunas são retornadas no array contendo chaves numéricas para os campos. A chave inicia em 0 para o primeiro campo do resultado. |

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
