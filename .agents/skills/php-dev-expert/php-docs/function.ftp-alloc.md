# Aloca espaço para um arquivo ser carregado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-alloc.php

---

# ftp\_alloc

(PHP 5, PHP 7, PHP 8)

ftp\_alloc — Aloca espaço para um arquivo ser carregado

### Descrição

function **ftp\_alloc**([FTP\Connection](class.ftp-connection.md) `$ftp`, [int](language.types.integer.md) `$size`, [string](language.types.string.md) `&$response` = **`null`**): [bool](language.types.boolean.md)

Envia um comando `ALLO` ao servidor FTP remoto para
alocar espaço para o envio de um arquivo.

> **Nota**:
>
> Muitos servidores FTP não suportam este comando. Esses servidores podem retornar um código
> de falha (**`false`**) indicando que o comando não é suportado ou um código de sucesso (**`true`**)
> para indicar que a pré-alocação não é necessária e o cliente deve continuar
> como se a operação tivesse sido bem-sucedida. Por causa disso, talvez seja melhor reservar
> esta função para servidores que exijam pré-alocação explícita.

### Parâmetros

`ftp`
:   Uma instância de [FTP\Connection](class.ftp-connection.md).

`size`
:   O número de bytes a serem alocados.

`response`
:   Uma representação textual da resposta do servidor será retornada por
    referência em `response` se uma variável for fornecida.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **ftp\_alloc()****

```
<?php

$file = "/home/user/myfile";

// conectando ao servidor
$ftp = ftp_connect('ftp.example.com');
$login_result = ftp_login($ftp, 'anonymous', 'user@example.com');

if (ftp_alloc($ftp, filesize($file), $result)) {
  echo "Espaço no servidor alocado com sucesso. Enviando $file.\n";
  ftp_put($ftp, '/incoming/myfile', $file, FTP_BINARY);
} else {
  echo "Não foi possível alocar espaço no servidor. Informação do servidor: $result\n";
}

ftp_close($ftp);

?>
```

### Veja também

- [ftp\_put()](function.ftp-put.md) - Envia um arquivo para o servidor FTP
- [ftp\_fput()](function.ftp-fput.md) - Envia um arquivo aberto para o servidor FTP

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
