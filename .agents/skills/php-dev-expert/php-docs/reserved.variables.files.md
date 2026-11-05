# Variáveis de Upload de Arquivos HTTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reserved.variables.files.php

---

# $\_FILES

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

$\_FILES — Variáveis de Upload de Arquivos HTTP

### Descrição

Um [array](language.types.array.md) associativo de items enviado através do script atual
pelo método HTTP POST.
A estrutura deste array é detalhada na seção
[Uploads com o método POST](features.file-upload.post-method.md).

### Notas

> **Nota**:
>
> Esta é uma variável 'superglobal' ou
> variável global automática. Isso significa simplesmente que ela está disponível em
> todos os escopos de um script. Não há necessidade de usar
> **global $variable;** para acessá-la dentro de funções ou métodos.

### Veja também

- [move\_uploaded\_file()](function.move-uploaded-file.md) - Move um arquivo enviado para uma nova localização
- [Manuseamento de upload de arquivos](features.file-upload.md)

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
