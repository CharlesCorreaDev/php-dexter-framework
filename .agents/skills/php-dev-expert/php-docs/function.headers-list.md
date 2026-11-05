# Retorna uma lista de cabeçalhos de resposta enviados (ou prontos para enviar)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.headers-list.php

---

# headers\_list

(PHP 5, PHP 7, PHP 8)

headers\_list — Retorna uma lista de cabeçalhos de resposta enviados (ou prontos para enviar)

### Descrição

function **headers\_list**(): [array](language.types.array.md)

**headers\_list()** retornará uma lista de cabeçalhos a serem enviados
ao navegador/cliente. Para determinar se esses cabeçalhos já foram ou não
enviados, a função [headers\_sent()](function.headers-sent.md) deve ser usada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array de cabeçalhos indexado numericamente.

### Examples

**Exemplo #1 Exemplo de uso de **headers\_list()****

```
<?php

/* setcookie() irá adicionar um cabeçalho de resposta por conta própria */
setcookie('foo', 'bar');

/* Define um cabeçalho de resposta personalizado
   Isso será ignorado pela maioria dos clientes */
header("Example-Test: foo");

/* Especifica conteúdo em texto simples na resposta */
header('Content-Type: text/plain; charset=UTF-8');

/* Quais cabeçalhos serão enviados? */
var_dump(headers_list());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(3) {
  [0]=>
  string(19) "Set-Cookie: foo=bar"
  [1]=>
  string(17) "Example-Test: foo"
  [2]=>
  string(39) "Content-Type: text/plain; charset=UTF-8"
}
```

### Notas

> **Nota**:
>
> Os cabeçalhos só serão acessíveis e enviados quando uma SAPI que os suporta
> estiver em uso.

### Veja também

- [headers\_sent()](function.headers-sent.md) - Verifica se ou onde os cabeçalhos foram enviados
- [header()](function.header.md) - Envia um cabeçalho HTTP bruto
- [setcookie()](function.setcookie.md) - Envia um cookie
- [apache\_response\_headers()](function.apache-response-headers.md) - Obtém todos os cabeçalhos da resposta HTTP
- [http\_response\_code()](function.http-response-code.md) - Obtém ou define o código de resposta HTTP

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
