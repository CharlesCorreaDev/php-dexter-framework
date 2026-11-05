# Retorna a posição atual do ponteiro de leitura/gravação do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftell.php

---

# ftell

(PHP 4, PHP 5, PHP 7, PHP 8)

ftell — Retorna a posição atual do ponteiro de leitura/gravação do arquivo

### Descrição

function **ftell**([resource](language.types.resource.md) `$stream`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna a posição do ponteiro do arquivo referenciado por `stream`.

### Parâmetros

`stream`
:   O ponteiro de arquivo precisa ser válido, e deve apontar para um arquivo
    aberto com sucesso por [fopen()](function.fopen.md) ou [popen()](function.popen.md).
    **ftell()** dá resultados indefinidos para fluxos no modo de acréscimo
    (abertos com a opção "a").

### Valor Retornado

Retorna a posição do ponteiro do arquivo referenciado por
`stream` como um inteiro; isto é, seu deslocamento no fluxo do arquivo.

Se um erro ocorrer, retorna **`false`**.

> **Nota**:
>
> Como o tipo inteiro do PHP possui sinal e muitas plataformas usam números inteiros de 32 bits,
> algumas funções do sistema de arquivos podem retornar resultados inesperados para arquivos
> maiores que 2GB.

### Examples

**Exemplo #1 Exemplo de **ftell()****

```
<?php

// abre o arquivo e lê alguns dados
$fp = fopen("/etc/passwd", "r");
$data = fgets($fp, 12);

// onde estamos?
echo ftell($fp); // 11

fclose($fp);

?>
```

### Veja também

- [fopen()](function.fopen.md) - Abre um arquivo ou URL
- [popen()](function.popen.md) - Abre um processo como ponteiro de arquivo
- [fseek()](function.fseek.md) - Aponta para uma posição no arquivo
- [rewind()](function.rewind.md) - Retrocede a posição de um ponteiro de arquivos

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
