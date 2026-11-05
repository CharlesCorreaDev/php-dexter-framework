# Verifica se ou onde os cabeçalhos foram enviados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.headers-sent.php

---

# headers\_sent

(PHP 4, PHP 5, PHP 7, PHP 8)

headers\_sent — Verifica se ou onde os cabeçalhos foram enviados

### Descrição

function **headers\_sent**([string](language.types.string.md) `&$filename` = **`null`**, [int](language.types.integer.md) `&$line` = **`null`**): [bool](language.types.boolean.md)

Verifica se ou onde os cabeçalhos foram enviados.

Não é possível adicionar mais linhas de cabeçalho usando a função [header()](function.header.md)
uma vez que o bloco de cabeçalho já tiver sido enviado. Usando esta função,
é possível pelo menos evitar mensagens de erro relacionadas ao cabeçalho HTTP.
Outra opção é usar [Buffer de Saída](ref.outcontrol.md).

### Parâmetros

`filename`
:   Se os parâmetros opcionais `filename` e
    `line` forem informados,
    **headers\_sent()** colocará o nome do arquivo fonte PHP
    e o número da linha onde a saída iniciou nas variáveis `filename`
    e `line`, respectivamente.

    > **Nota**:
    >
    > Se a saída foi iniciada antes da execução do arquivo fonte PHP (por exemplo, devido a um erro de inicialização),
    > o parâmetro `filename` será definido como uma string vazia.

`line`
:   O número da linha onde a saída iniciou.

### Valor Retornado

**headers\_sent()** retornará **`false`** se nenhum cabeçalho HTTP
ainda tiver sido enviado, ou **`true`** caso contrário.

### Examples

**Exemplo #1 Exemplos de uso de **headers\_sent()****

```
<?php

// Se nenhum cabeçalho tiver sido enviado, envia um
if (!headers_sent()) {
    header('Location: http://www.example.com/');
    exit;
}

// Um exemplo usando os parâmetros opcionais de arquivo e linha
// Observe que $filename e $linenum são passados para uso posterior.
// Não devem ser atribuídos valores a eles antecipadamente.
if (!headers_sent($filename, $linenum)) {
    header('Location: http://www.example.com/');
    exit;

// Aqui é exibida uma mensagem de erro.
} else {

    echo "Cabeçalhos já enviados no arquivo $filename na linha $linenum\n" .
          "Não é possível redirecionar, favor clicar neste atalho: <a " .
          "href=\"http://www.example.com\">link</a>\n";
    exit;
}

?>
```

### Notas

> **Nota**:
>
> Os cabeçalhos só serão acessíveis e enviados quando uma SAPI que os suporta
> estiver em uso.

### Veja também

- [ob\_start()](function.ob-start.md) - Ativa o buffer de saída
- [trigger\_error()](function.trigger-error.md) - Gera uma mensagem a nível de usuário de erro/alerta/nota
- [headers\_list()](function.headers-list.md) - Retorna uma lista de cabeçalhos de resposta enviados (ou prontos para enviar)
- Função [header()](function.header.md) - Envia um cabeçalho HTTP bruto para uma descrição mais detalhada sobre
  os assuntos envolvidos.

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
