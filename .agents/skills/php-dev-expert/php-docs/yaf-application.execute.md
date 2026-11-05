# Executa uma chamada de função de retorno

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-application.execute.php

---

# Yaf\_Application::execute

(Yaf >=1.0.0)

Yaf\_Application::execute — Executa uma chamada de função de retorno

### Descrição

public function **Yaf\_Application::execute**([callable](language.types.callable.md) `$entry`, [string](language.types.string.md) `...$args`): [void](language.types.void.md)

Este método é normalmente usado para executar Yaf\_Application em um agendador de tarefas.
Neste caso, os mecanismos de carregamento automático e de Bootstrap também podem ser utilizados.

### Parâmetros

`entry`
:   Uma função de retorno válida.

`args`
:   Parâmetros que serão passados à função de retorno.

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **Yaf\_Application::execute()****

```
<?php
function main($argc, $argv) {
}

$config = array(
    "application" => array(
        "directory" => realpath(dirname(__FILE__)) . "/application",
    ),
);

/** Yaf_Application */
$application = new Yaf_Application($config);
$application->execute("main", $argc,  $argv);
?>
```

O exemplo acima produzirá
algo semelhante a:

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
