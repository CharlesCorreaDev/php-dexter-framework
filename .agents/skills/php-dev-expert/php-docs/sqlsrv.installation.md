# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlsrv.installation.php

---

## Instalação

A extensão SQLSRV é habilitada adicionando o arquivo DLL apropriado ao diretório de
extensões do seu PHP e a entrada correspondente ao arquivo php.ini. O download do SQLSRV
vem com 8 arquivos de driver, sendo quatro deles para suporte PDO.

A versão mais recente do driver está disponível para download aqui:
[» Download do SQLSRV](https://msdn.microsoft.com/en-us/sqlserver/ff657782.aspx).

Para obter mais informações sobre os requisitos do SQLSRV, consulte
[» Requisitos do Sistema SQLSRV](https://msdn.microsoft.com/en-us/library/cc296170.aspx).

Desde a versão 4.0, a extensão SQLSRV é compatível apenas com o PHP 7.0 em execução no Linux ou Windows.

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
