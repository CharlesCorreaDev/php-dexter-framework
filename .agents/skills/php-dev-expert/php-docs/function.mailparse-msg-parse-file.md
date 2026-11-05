# Faz o parsing de um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mailparse-msg-parse-file.php

---

# mailparse\_msg\_parse\_file

(PECL mailparse >= 0.9.0)

mailparse\_msg\_parse\_file — Faz o parsing de um arquivo

### Descrição

function **mailparse\_msg\_parse\_file**([string](language.types.string.md) `$filename`): [resource](language.types.resource.md)

Faz o parsing de um arquivo.
Esta é a forma ideal de analisar um arquivo de email que você tem no disco.

### Parâmetros

`filename`
:   Caminho para o arquivo que contém a mensagem.
    O arquivo é aberto e transmitido através do analisador.

    > **Nota**:
    >
    > Supõe-se que a mensagem contida em `filename` termine com uma quebra de linha
    > (`CRLF`); caso contrário, a última linha da mensagem não será analisada.

### Valor Retornado

Retorna um recurso `MIME` que representa a estrutura ou
**`false`** em caso de erro.

### Notas

> **Nota**:
>
> É recomendável chamar [mailparse\_msg\_free()](function.mailparse-msg-free.md) no resultado
> desta função, quando não for mais necessário, para evitar vazamentos de memória.

### Veja também

- [mailparse\_msg\_free()](function.mailparse-msg-free.md) - Libera um recurso MIME
- [mailparse\_msg\_create()](function.mailparse-msg-create.md) - Cria um recurso de email MIME

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
