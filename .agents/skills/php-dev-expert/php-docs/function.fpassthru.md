# Imprime todos os dados restantes de um ponteiro de arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fpassthru.php

---

# fpassthru

(PHP 4, PHP 5, PHP 7, PHP 8)

fpassthru — Imprime todos os dados restantes de um ponteiro de arquivo

### Descrição

function **fpassthru**([resource](language.types.resource.md) `$stream`): [int](language.types.integer.md)

Lê até o fim do arquivo (EOF) do ponteiro de arquivo dado e
imprime os resultados para a buffer de saída.

Pode ser necessário chamar [rewind()](function.rewind.md) para redefinir o ponteiro
do arquivo para início do arquivo se dados já tiverem sido escritos
no arquivo.

Se for desejado apenas descarregar o conteúdo de um arquivo para o buffer de saída,
sem primeiro modificá-lo ou deslocar o ponteiro até uma posição, pode-se
usar a função [readfile()](function.readfile.md), que vai
economizar uma chamada à função [fopen()](function.fopen.md).

### Parâmetros

`stream`
:   O ponteiro de arquivo deve ser válido e deve apontar para
    um arquivo aberto com sucesso por [fopen()](function.fopen.md) ou
    [fsockopen()](function.fsockopen.md) (e ainda não fechado por
    [fclose()](function.fclose.md)).

### Valor Retornado

Retorna o número de caracteres lidos do fluxo `stream`
e passados para a saída.

### Examples

**Exemplo #1 Usando **fpassthru()** com arquivo binário**

```
<?php

// Abre o arquivo em modo binário
$name = './img/ok.png';
$fp = fopen($name, 'rb');

// Envia os cabeçalhos
header("Content-Type: image/png");
header("Content-Length: ".filesize($name));

// Manda a imagem e para o script
fpassthru($fp);
exit;

?>
```

### Notas

> **Nota**:
>
> Ao utilizar **fpassthru()** em um arquivo binário em sistemas
> Windows, assegure-se de abrir o arquivo em modo binário,
> acrescentando um `b` ao modo informado na chamada a
> [fopen()](function.fopen.md).
>
> Recomenda-se utilizar o modo `b` ao lidar
> com arquivos binários, mesmo que seu sistema não exiga isso, de forma
> que seus scripts se tornem mais portáveis.

### Veja também

- [readfile()](function.readfile.md) - Exibe o conteúdo de um arquivo
- [fopen()](function.fopen.md) - Abre um arquivo ou URL
- [popen()](function.popen.md) - Abre um processo como ponteiro de arquivo
- [fsockopen()](function.fsockopen.md) - Abre uma conexão socket de domínio Unix ou de Internet

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
