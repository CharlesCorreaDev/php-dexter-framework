# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlsrv.requirements.php

---

## Dependências

A extensão SQLSRV pode ser usada nos seguintes sistemas operacionais:

- Windows Vista Service Pack 2 ou posterior
- Windows Server 2008 Service Pack 2 ou posterior
- Windows Server 2008 R2
- Windows 7

A extensão SQLSRV requer que o Microsoft SQL Server 2012 Native
Client esteja instalado no mesmo computador que está executando o PHP. Se o Microsoft
SQL Server 2012 Native Client ainda não estiver instalado, clique no link apropriado abaixo
para baixá-lo:

- [» Baixe o pacote x86](https://go.microsoft.com/fwlink/?LinkID=239647)
- [» Baixe o pacote x64](https://go.microsoft.com/fwlink/?LinkID=239648)

O download do SQLSRV inclui 8 arquivos de driver, quatro dos quais são para suporte PDO.

A versão mais recente do driver está disponível para download aqui:
[» Download do SQLSRV](https://msdn.microsoft.com/en-us/sqlserver/ff657782.aspx).

Para obter mais informações sobre os requisitos do SQLSRV, consulte
[» Requisitos do Sistema do SQLSRV](https://msdn.microsoft.com/en-us/library/cc296170.aspx).

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
