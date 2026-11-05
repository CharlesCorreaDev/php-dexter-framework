# Azure App Services

> **Fonte / Source:** https://www.php.net/manual/pt_BR/install.cloud.azure.php

---

## Azure App Services

O PHP é frequentemente utilizado no Azure App Services (também conhecido como Microsoft Azure, Windows Azure, Azure Web Apps).

O Azure App Services gerencia pools de Servidores Web Windows para hospedar uma aplicação web, como uma alternativa ao gerenciamento do próprio servidor web do usuário em suas próprias VMs Azure Compute ou outros servidores.

O PHP já está automaticamente habilitado para o site web do Azure App Services. No Portal Azure, selecionando o site web pode-se escolher qual versão do PHP será usada. Uma versão mais recente que a padrão pode ser escolhida.

Como tal, o PHP e suas extensões serão executados no Azure App Services, assim como serão em outros servidores Windows.
No entanto, a interface de gerenciamento para o Azure App Services é diferente:

- Portal Azure: criar, editar configurações e excluir sites web. [» Portal Azure](https://portal.azure.com/)
- Dashboard Kudu: se o site tem a URL
  `nome_do_site.azurewebsites.net`,
  o Dashboard Kudu será
  `https://nome_do_site.scm.azurewebsites.net/`.
  O Dashboard dá acesso a algumas capacidades de depuração, gerenciamento de
  arquivos e extensões de site.
  As extensões de site são um mecanismo do Azure para adicionar programas extras,
  como compilações de pré-visualização do PHP, ao site web.
- Não podem ser usados o Gerenciador do IIS, o Gerenciador de Servidores ou o RDP.

Há também um SDK do PHP para programaticamente usar vários Azure Services a partir do código PHP. Consulte o [» SDK do Azure para PHP](https://github.com/Azure/azure-sdk-for-php).

Para obter mais informações, consulte o [» Centro de Desenvolvedores PHP do Azure](https://azure.microsoft.com/en-us/develop/php/)

### WinCache

O WinCache está habilitado por padrão no Azure App Services e é recomendado que fique habilitado.
Se for instalada uma compilação customizada do PHP, deve-se habilitar o WinCache nela também.

### Compilação Customizada do PHP

Pode ser feito o envio de uma compilação customizada para D:\Home (C:\ NÃO é gravável). Em seguida, no Portal Azure, deve-se definir SCRIPT\_PROCESSOR para .php como o caminho absoluto do arquivo php-cgi.exe nessa compilação.

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
