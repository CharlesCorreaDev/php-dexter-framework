# Cria uma instância de finfo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.finfo-open.php

---

# finfo\_open

# finfo::\_\_construct

(PHP >= 5.3.0, PHP 7, PHP 8, PECL fileinfo >= 0.1.0)

finfo\_open -- finfo::\_\_construct — Cria uma instância de finfo

### Descrição

Estilo procedural

function **finfo\_open**([int](language.types.integer.md) `$flags` = **`FILEINFO_NONE`**, [?](language.types.null.md)[string](language.types.string.md) `$magic_database` = **`null`**): [finfo](class.finfo.md)|[false](language.types.singleton.md)

Estilo orientado a objetos (construtor):

public function [finfo::\_\_construct](finfo.construct.md)([int](language.types.integer.md) `$flags` = **`FILEINFO_NONE`**, [?](language.types.null.md)[string](language.types.string.md) `$magic_database` = **`null`**)

Esta função abre um banco de dados mágico e retorna a instância.

### Parâmetros

`flags`
:   Uma ou disjunção de mais [constantes
    Fileinfo](fileinfo.constants.md).

`magic_database`
:   Nome de um arquivo de banco de dados mágico, geralmente algo como
    /caminho/para/magic.mime. Se não for especificado, a
    variável de ambiente `MAGIC` será usada. O banco de dados mágico
    incluído no PHP será usado se a variável de ambiente não
    estiver definida.

    Passar **`null`** ou uma string vazia será equivalente ao valor
    padrão.

### Valor Retornado

(Apenas no estilo procedural)
Retorna uma instância de [finfo](class.finfo.md) em caso de sucesso, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Agora retorna uma instância de [finfo](class.finfo.md); anteriormente, um [resource](language.types.resource.md) era retornado. |
| 8.0.3 | O parâmetro `magic_database` agora pode ser nulo. |

### Examples

**Exemplo #1 Estilo orientado a objetos**

```
<?php
$finfo = new finfo(FILEINFO_MIME, "/usr/share/misc/magic"); // retorna o tipo MIME, também conhecido como extensão mimetype

/* Obtém o tipo MIME de arquivo específico */
$nome_do_arquivo = "/usr/local/alguma_coisa.txt";
echo $finfo->file($nome_do_arquivo);

?>
```

**Exemplo #2 Estilo procedural**

```
<?php
$finfo = finfo_open(FILEINFO_MIME, "/usr/share/misc/magic"); // retorna o tipo MIME, também conhecido como extensão mimetype

if (!$finfo) {
    echo "Falha ao abrir banco de dados fileinfo";
    exit();
}

/* Obtém o tipo MIME de arquivo específico */
$nome_do_arquivo = "/usr/local/alguma_coisa.txt";
echo finfo_file($finfo, $nome_do_arquivo);

/* fecha a conexão */
finfo_close($finfo);
?>
```

O exemplo acima produzirá:

```
text/plain; charset=us-ascii
```

### Notas

> **Nota**:
>
> Geralmente, usar o banco de dados mágico incluído no PHP (deixando o
> parâmetro `magic_database` e as variáveis de ambiente
> `MAGIC` indefinidos) é o melhor caminho a seguir, a menos
> que um banco de dados mágico personalizado seja necessário.

### Veja também

- [finfo\_close()](function.finfo-close.md) - Fecha uma instância de finfo

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
