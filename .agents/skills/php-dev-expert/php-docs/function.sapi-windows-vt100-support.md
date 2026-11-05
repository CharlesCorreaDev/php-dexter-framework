# Obtém ou define suporte VT100 para o fluxo especificado associado a um buffer de saída de um console Windows.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sapi-windows-vt100-support.php

---

# sapi\_windows\_vt100\_support

(PHP 7 >= 7.2.0, PHP 8)

sapi\_windows\_vt100\_support — Obtém ou define suporte VT100 para o fluxo especificado associado a um buffer de saída de um console Windows.

### Descrição

function **sapi\_windows\_vt100\_support**([resource](language.types.resource.md) `$stream`, [?](language.types.null.md)[bool](language.types.boolean.md) `$enable` = **`null`**): [bool](language.types.boolean.md)

Se `enable` for **`null`**, a função retorna **`true`** se o fluxo `stream` tem códigos de controle VT100 habilitados, **`false`** caso não tenha.

Se `enable` for do tipo [bool](language.types.boolean.md), a função tentará habilitar ou desabilitar os recursos VT100 do fluxo `stream`.
Se o recurso tiver sido habilitado (ou desabilitado) com sucesso, a função retornará **`true`**, caso contrário retornará **`false`**.

Na inicialização, o PHP tenta habilitar o recurso VT100 dos fluxos **`STDOUT`**/**`STDERR`**. A propósito, se esses fluxos forem redirecionados para um arquivo, os recursos VT100 podem não ser habilitados.

Se o suporte a VT100 for habilitado, é possível usar sequências de controle como são conhecidas pelo terminal VT100.
Elas permitem a alteração da saída do terminal. No Windows essas sequências são chamadas Sequências de Terminais Virtuais do Console.

**Aviso**

Esta função usa a opção **`ENABLE_VIRTUAL_TERMINAL_PROCESSING`** implementada na API do Windows 10, por isso o recurso VT100 pode não estar disponível em versões antigas do Windows.

### Parâmetros

`stream`
:   O fluxo no qual a função irá operar.

`enable`
:   Se for do tipo [bool](language.types.boolean.md), o recurso VT100 será habilitado (se **`true`**) ou desabilitado (se **`false`**).

### Valor Retornado

Se `enable` for **`null`**: retorna **`true`** se o recurso VT100 for habilitado, **`false`** caso contrário.

Se `enable` for do tipo [bool](language.types.boolean.md): Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `enable` agora pode ser nulo. |

### Examples

**Exemplo #1 Estado padrão de **sapi\_windows\_vt100\_support()****

Por padrão, **`STDOUT`** e **`STDERR`** têm o recurso VT100 habilitado.

```
php -r "var_export(sapi_windows_vt100_support(STDOUT));echo ' ';var_export(sapi_windows_vt100_support(STDERR));"
```

O exemplo acima produzirá
algo semelhante a:

```
true true
```

A propósito, se um fluxo for redirecionado, o recurso VT100 não será habilitado:

```
php -r "var_export(sapi_windows_vt100_support(STDOUT));echo ' ';var_export(sapi_windows_vt100_support(STDERR));" 2>NUL
```

O exemplo acima produzirá
algo semelhante a:

true false

**Exemplo #2 **sapi\_windows\_vt100\_support()** mudando de estado**

Não será possível habilitar o recurso VT100 feature de **`STDOUT`** ou **`STDERR`** se o fluxo for redirecionado.

```
php -r "var_export(sapi_windows_vt100_support(STDOUT, true));echo ' ';var_export(sapi_windows_vt100_support(STDERR, true));" 2>NUL
```

O exemplo acima produzirá
algo semelhante a:

```
true false
```

**Exemplo #3 Exemplo de uso do suporte a VT100 habilitado**

```
<?php
$out = fopen('php://stdout','w');
fwrite($out, 'Eu me esqueci de uma leta.');
// Move o cursor dois caracteres para trás
fwrite($out, "\033[2D");
// Insere um espaço vazio, deslocando o texto existente para a direita -> 'Eu me esqueci de uma let a.'
fwrite($out, "\033[1@");
fwrite($out, 'r');
?>
```

O exemplo acima produzirá:

```
Eu me esqueci de uma letra.
```

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
