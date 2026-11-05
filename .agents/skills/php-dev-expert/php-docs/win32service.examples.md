# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/win32service.examples.php

---

# Examples

**Exemplo #1 Registrando um script PHP para ser executado como um serviço**

```
<?php
win32_create_service(array(
    'service'     => 'exemploPhp',                                           # o nome do serviço
    'display'     => 'exemplo de serviço PHP',                             # breve descrição
    'description' => 'Este é um exemplo de serviço criado com o PHP.',     # descrição longa
    'params'      => '"' . __FILE__ . '"  executar',                            # caminho para o script e parâmetros
));
?>
```

**Exemplo #2 Cancelando o registro de um serviço**

```
<?php
win32_delete_service('exemploPhp');
?>
```

**Exemplo #3 Executando como um serviço**

```
<?php
if ($argv[1] == 'executar') {
  win32_start_service_ctrl_dispatcher('exemploPhp');

  while (WIN32_SERVICE_CONTROL_STOP != win32_get_last_control_message()) {
    # faça aqui o trabalho.
    # tente não demorar mais de 30 segundos antes de dar a volta no loop
    # novamente
  }
}
?>
```

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
