# Função de chamada de retorno de ob_start para comprimir o buffer de saída com gzip

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ob-gzhandler.php

---

# ob\_gzhandler

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

ob\_gzhandler — Função de chamada de retorno de ob\_start para comprimir o buffer de saída com gzip

### Descrição

function **ob\_gzhandler**([string](language.types.string.md) `$data`, [int](language.types.integer.md) `$flags`): [string](language.types.string.md)|[false](language.types.singleton.md)

**ob\_gzhandler()** é destinada a ser usado como uma função de chamada de retorno
para [ob\_start()](function.ob-start.md) para facilitar o envio de dados codificados em gzip
para navegadores da web que suportam páginas da web comprimidas.
Antes de **ob\_gzhandler()** enviar realmente dados comprimidos,
ela determina qual tipo de codificação de conteúdo o navegador aceitará
("gzip", "deflate" ou nenhum) e retornará sua saída de acordo.
Todos os navegadores são suportados, pois cabe ao navegador enviar o
cabeçalho correto dizendo que aceita páginas da web comprimidas. Se um navegador
não suporta páginas comprimidas, esta função retorna **`false`**.

### Parâmetros

`data`

`flags`

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **ob\_gzhandler()****

```
<?php

ob_start("ob_gzhandler");

?>
<html>
<body>
<p>Esta deve ser uma página comprimida.</p>
</body>
</html>
```

### Notas

> **Nota**:
>
> **ob\_gzhandler()** requer a extensão [zlib](ref.zlib.md).

> **Nota**:
>
> **ob\_gzhandler()** e [zlib.output\_compression](zlib.configuration.md#ini.zlib.output-compression) não podem ser usadas ao mesmo tempo.
> Também observe que usar [zlib.output\_compression](zlib.configuration.md#ini.zlib.output-compression) é preferível a
> **ob\_gzhandler()**.

### Veja também

- [ob\_start()](function.ob-start.md) - Ativa o buffer de saída
- [ob\_end\_flush()](function.ob-end-flush.md) - Descarrega (envia) o valor de retorno do manipulador de saída ativo
  e desliga o buffer de saída ativo

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
