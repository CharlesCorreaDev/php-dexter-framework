# Funções de win32service

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.win32service.php

---

# Funções de win32service

## Índice

- [win32\_add\_right\_access\_service](function.win32-add-right-access-service.md) — Adiciona direitos de acesso para um nome de usuário ao serviço
- [win32\_add\_service\_env\_var](function.win32-add-service-env-var.md) — Adiciona variável ​​de ambiente personalizada no serviço
- [win32\_continue\_service](function.win32-continue-service.md) — Continua um serviço pausado
- [win32\_create\_service](function.win32-create-service.md) — Cria uma nova entrada de serviço no banco de dados do GCS
- [win32\_delete\_service](function.win32-delete-service.md) — Exclui uma entrada de serviço do banco de dados do GCS
- [win32\_get\_last\_control\_message](function.win32-get-last-control-message.md) — Retorna a última mensagem de controle enviada para este serviço
- [win32\_get\_service\_env\_vars](function.win32-get-service-env-vars.md) — Lê todas as variáveis ​​de ambiente personalizadas no serviço
- [win32\_pause\_service](function.win32-pause-service.md) — Pausa um serviço
- [win32\_query\_service\_status](function.win32-query-service-status.md) — Consulta o status de um serviço
- [win32\_read\_all\_rights\_access\_service](function.win32-read-all-rights-access-service.md) — Lê todos os direitos de acesso ao serviço
- [win32\_read\_right\_access\_service](function.win32-read-right-access-service.md) — Lê os direitos de acesso de serviço para um nome de usuário
- [win32\_remove\_right\_access\_service](function.win32-remove-right-access-service.md) — Remove os direitos de acesso ao serviço para um nome de usuário
- [win32\_remove\_service\_env\_var](function.win32-remove-service-env-var.md) — Remove uma variável de ambiente personalizada no serviço
- [win32\_send\_custom\_control](function.win32-send-custom-control.md) — Envia um controle personalizado para o serviço
- [win32\_set\_service\_exit\_code](function.win32-set-service-exit-code.md) — Define ou retorna o código de saída do serviço em execução atual
- [win32\_set\_service\_exit\_mode](function.win32-set-service-exit-mode.md) — Define ou retorna o modo de saída do serviço em execução atual
- [win32\_set\_service\_pause\_resume\_state](function.win32-set-service-pause-resume-state.md) — Define ou retorna o recurso de pausa/retomada para o serviço em execução atual
- [win32\_set\_service\_status](function.win32-set-service-status.md) — Atualiza o status do serviço
- [win32\_start\_service](function.win32-start-service.md) — Inicia um serviço
- [win32\_start\_service\_ctrl\_dispatcher](function.win32-start-service-ctrl-dispatcher.md) — Registra o script no GCS, para que ele possa atuar como o serviço com o nome fornecido
- [win32\_stop\_service](function.win32-stop-service.md) — Interrompe um serviço

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
