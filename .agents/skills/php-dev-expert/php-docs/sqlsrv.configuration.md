# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlsrv.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

A tabela a seguir lista as opções de configuração disponíveis na extensão
SQLSRV. Para obter mais informações sobre essas opções, consulte
[» Tratamento de Avisos e Erros do SQLSRV](https://msdn.microsoft.com/en-us/library/cc626302.aspx).

**Opções de Configuração de SQLSRV**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| sqlsrv.WarningsReturnAsErrors | 1 (**`true`**) | **`INI_ALL`** | Disponível desde o SQLSRV 1.0 |
| sqlsrv.LogSubsystems | 0 | **`INI_ALL`** | Disponível desde o SQLSRV 1.0 |
| sqlsrv.LogSeverity | 1 | **`INI_ALL`** | Disponível desde o SQLSRV 1.0 |

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
