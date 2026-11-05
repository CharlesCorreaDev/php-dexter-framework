# Informa se o arquivo foi enviado por POST HTTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.is-uploaded-file.php

---

# is\_uploaded\_file

(PHP 4 >= 4.0.3, PHP 5, PHP 7, PHP 8)

is\_uploaded\_file — Informa se o arquivo foi enviado por POST HTTP

### Descrição

function **is\_uploaded\_file**([string](language.types.string.md) `$filename`): [bool](language.types.boolean.md)

Retorna **`true`** se o arquivo com o nome `filename`
foi enviado por POST HTTP. Isto é útil para garantir que um
usuário malicioso não está tentando levar o script a trabalhar
em arquivos que não deveria estar trabalhando -- por exemplo,
/etc/passwd.

Este tipo de confirmação é importante principalmente se existe
alguma chance que qualquer coisa feita com os arquivos enviados
possa revelar seu conteúdo para o usuário, ou mesmo para outros
usuários no mesmo sistema.

Para o funcionamento apropriado, a função **is\_uploaded\_file()**
precisa de um argumento como [$\_FILES['userfile']['tmp\_name']](reserved.variables.files.md), - o nome do
arquivo enviado na máquina do cliente [$\_FILES['userfile']['name']](reserved.variables.files.md) não funciona.

### Parâmetros

`filename`
:   O nome do arquivo sendo verificado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **is\_uploaded\_file()****

```
<?php

if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
   echo "O arquivo ". $_FILES['userfile']['name'] ." foi enviado com sucesso.\n";
   echo "Mostrando o conteúdo\n";
   readfile($_FILES['userfile']['tmp_name']);
} else {
   echo "Possível ataque de envio de arquivo: ";
   echo "nome do arquivo '". $_FILES['userfile']['tmp_name'] . "'.";
}

?>
```

### Veja também

- [move\_uploaded\_file()](function.move-uploaded-file.md) - Move um arquivo enviado para uma nova localização
- [$\_FILES](reserved.variables.files.md)
- Consulte [Gerenciando Envio de Arquivos](features.file-upload.md) para um exemplo de uso básico.

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
