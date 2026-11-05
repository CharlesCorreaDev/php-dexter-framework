# Abre um processo como ponteiro de arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.popen.php

---

# popen

(PHP 4, PHP 5, PHP 7, PHP 8)

popen — Abre um processo como ponteiro de arquivo

### Descrição

function **popen**([string](language.types.string.md) `$command`, [string](language.types.string.md) `$mode`): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Abre uma pipe para um processo executado ao se dar um fork para o comando dado
por `command`.

### Parâmetros

`command`
:   O comando

`mode`
:   O modo. Pode ser `'r'` para leitura ou `'w'`
    para escrita.

    No Windows, o padrão de **popen()** é modo texto, isto é, qualquer caractere `\n`
    escrito ou lido do tubo será traduzido para `\r\n`.
    Se isto não for desejado, o modo binário pode ser forçado definindo-se o `mode`
    para `'rb'` e `'wb'`, respectivamente.

### Valor Retornado

Retorna um ponteiro de arquivo idêntico ao retornado por
[fopen()](function.fopen.md), exceto que ele é unidirecional (pode
ser usado somente para leitura ou gravação) e tem que ser fechado com
[pclose()](function.pclose.md). Este ponteiro pode ser usado com
[fgets()](function.fgets.md), [fgetss()](function.fgetss.md) e
[fwrite()](function.fwrite.md). Quando o modo é 'r', o ponteiro de arquivo
retornado é igual ao STDOUT do comando; quando o modo
é 'w', o ponteiro de arquivo é igual ao STDIN do
comando.

Se um erro ocorrer, retorna **`false`**.

### Examples

**Exemplo #1 Exemplo de **popen()****

```
<?php
$handle = popen("/bin/ls", "r");
?>
```

Se o comando a ser executado não for encontrado, um resource
válido é retornado. Isso pode parecer estranho, mas tem sentido:
permite que você acesse qualquer mensagem de erro retornado pelo sistema operacional.

**Exemplo #2 Exemplo da **popen()****

```
<?php
error_reporting(E_ALL);

/* Adiciona redirecionamento para que seja obtido stderr. */
$handle = popen('/caminho/para/executavel 2>&1', 'r');
echo "'$handle'; " . gettype($handle) . "\n";
$read = fread($handle, 2096);
echo $read;
pclose($handle);
?>
```

### Notas

> **Nota**:
>
> Se for necessário suporte bidirecional (duas mãos), use
> [proc\_open()](function.proc-open.md).

### Veja também

- [pclose()](function.pclose.md) - Fecha o ponteiro de arquivo de processo
- [fopen()](function.fopen.md) - Abre um arquivo ou URL
- [proc\_open()](function.proc-open.md) - Executa um comando e abre ponteiros de arquivo para entrada/saída

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
