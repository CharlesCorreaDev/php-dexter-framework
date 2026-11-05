# Problemas relacionados aos bytes nulos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/security.filesystem.nullbytes.php

---

## Problemas relacionados aos bytes nulos

Como o PHP usa funções do C para operações relacionadas ao
sistema de arquivos, ele pode lidar com bytes nulos de maneira inesperada.
Como bytes nulos denotam fim de string em C, as strings que os contêm
não serão consideradas de forma inteira, mas apenas até que um byte nulo ocorra.
O exemplo a seguir mostra um código vulnerável que demonstra esse problema:

**Exemplo #1 Script vulnerável a bytes nulos**

```
<?php

$file = $_GET['file']; // "../../etc/passwd\0"

if (file_exists('/home/wwwrun/' . $file. '.php')) {
    // file_exists retornará true porque o arquivo /home/wwwrun/../../etc/passwd existe
    include '/home/wwwrun/' . $file . '.php';
    // o arquivo /etc/passwd será incluído

}

?>
```

Portanto, qualquer string comprometida que é usada em uma operação de sistema de arquivos deve
sempre ser validada corretamente. Aqui está uma versão melhorada do exemplo anterior:

**Exemplo #2 Validando a entrada corretamente**

```
<?php

$file = $_GET['file'];

// Autorizando valores possíveis
switch ($file) {
    case 'main':
    case 'foo':
    case 'bar':
        include '/home/wwwrun/include/' . $file . '.php';
        break;
    default:
        include '/home/wwwrun/include/main.php';
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
