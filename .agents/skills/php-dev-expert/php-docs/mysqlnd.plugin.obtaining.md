# Obtendo a API do plugin mysqlnd

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqlnd.plugin.obtaining.php

---

## Obtendo a API do plugin mysqlnd

A API do plugin `mysqlnd` é simplesmente parte da extensão
PHP do Driver Nativo MySQL, `ext/mysqlnd`.
O desenvolvimento da API do plugin `mysqlnd` começou em
dezembro de 2009. Ele é desenvolvido como parte do repositório de código-fonte PHP
e, como tal, está disponível ao público via Git ou por meio de
downloads de snapshots de código-fonte.

Os desenvolvedores do plugin podem determinar a versão do `mysqlnd`
acessando `MYSQLND_VERSION`, que é
uma string no formato "mysqlnd 8.3.17" ou por meio de
`MYSQLND_VERSION_ID`, que é um número inteiro como
50007. Os desenvolvedores podem calcular o número da versão da seguinte maneira:

**Tabela de cálculo de MYSQLND\_VERSION\_ID**

| Versão (parte) | Exemplo |
| --- | --- |
| Maior\*10000 | 5\*10000 = 50000 |
| Menor\*100 | 0\*100 = 0 |
| Correção | 7 = 7 |
| MYSQLND\_VERSION\_ID | 50007 |

Durante o desenvolvimento, os desenvolvedores devem consultar o
número da versão do `mysqlnd` para compatibilidade e
testes de versão, já que diversas iterações do `mysqlnd`
podem ocorrer durante o tempo de vida de uma ramificação de desenvolvimento PHP com um
único número de versão PHP.

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
