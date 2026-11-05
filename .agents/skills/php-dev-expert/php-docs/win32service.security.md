# Security consideration

> **Fonte / Source:** https://www.php.net/manual/pt_BR/win32service.security.php

---

## Security consideration

Esta extensão precisa de privilégios de administrador para algumas ações em serviços, como
[criar](function.win32-create-service.md),
[excluir](function.win32-delete-service.md),
[iniciar](function.win32-start-service.md),
[parar](function.win32-stop-service.md),
[pausar](function.win32-pause-service.md) e
[continuar](function.win32-continue-service.md).
Este requisito pode causar uma elevação de privilégios se o controle do serviço
estiver disponível na interface web ou no controle remoto.

A ACL no serviço pode ser definida após adicioná-lo ao GCS para delegar as
tarefas de administração atuais a uma conta que não seja de administrador ou de serviço.

A partir do Win32Service 1.1.0, os direitos de serviço podem ser gerenciados com PHP. As ACLs reais podem ser lidas com
[win32\_read\_all\_rights\_access\_service()](function.win32-read-all-rights-access-service.md), um direito de acesso ou negação pode ser adicionado com
[win32\_add\_right\_access\_service()](function.win32-add-right-access-service.md), ou um direito de acesso pode ser removido com
[win32\_remove\_right\_access\_service()](function.win32-remove-right-access-service.md).

Recomenda-se atualizar para Win32Service 1.1.0.
Para obter mais instruções sobre como gerenciar direitos sem a extensão (ou uma versão anterior à 1.1.0), consulte a
[» Base de Conhecimento da Microsoft](https://www.betaarchive.com/wiki/index.php?title=Microsoft_KB_Archive/914392).

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
