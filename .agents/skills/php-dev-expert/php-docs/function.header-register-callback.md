# Chama uma função de cabeçalho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.header-register-callback.php

---

# header\_register\_callback

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

header\_register\_callback — Chama uma função de cabeçalho

### Descrição

function **header\_register\_callback**([callable](language.types.callable.md) `$callback`): [bool](language.types.boolean.md)

Registra uma função que será chamada quando o PHP começar a enviar a saída.

A função `callback` é executada logo após o PHP preparar todos
os cabeçalhos a serem enviados, e antes de qualquer outra saída ser enviada, criando uma janela
para manipular os cabeçalhos de saída antes de serem enviados.

**Aviso**

As funções de retorno não são empilhadas. Chamadas subsequentes a **header\_register\_callback()**
vão desregistrar silenciosamente qualquer `callback` existente, independente de onde
ela foi definida. Esteja ciente que dependências podem sobrescrever a função de retorno.
A depuração de erros neste cenário pode ser difícil.

### Parâmetros

`callback`
:   Função de retorno chamada logo antes dos cabeçalhos serem enviados. Não recebe parâmetros
    e o valor de retorno é ignorado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **header\_register\_callback()****

```
<?php

header('Content-Type: text/plain');
header('X-Test: foo');

function foo() {
 foreach (headers_list() as $header) {
   if (strpos($header, 'X-Powered-By:') !== false) {
     header_remove('X-Powered-By');
   }
   header_remove('X-Test');
 }
}

$result = header_register_callback('foo');
echo "a";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Content-Type: text/plain

a
```

### Notas

**header\_register\_callback()** é executado quando os
cabeçalhos estão prestes a ser enviados, portanto, qualquer saída desta função pode
quebrar a saída.

> **Nota**:
>
> Os cabeçalhos só serão acessíveis e enviados quando uma SAPI que os suporta
> estiver em uso.

### Veja também

- [headers\_list()](function.headers-list.md) - Retorna uma lista de cabeçalhos de resposta enviados (ou prontos para enviar)
- [header\_remove()](function.header-remove.md) - Remove cabeçalhos definidos anteriormente
- [header()](function.header.md) - Envia um cabeçalho HTTP bruto

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
