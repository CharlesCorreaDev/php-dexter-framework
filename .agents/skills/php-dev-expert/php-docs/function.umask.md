# Modificar a umask atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.umask.php

---

# umask

(PHP 4, PHP 5, PHP 7, PHP 8)

umask — Modificar a umask atual

### Descrição

function **umask**([?](language.types.null.md)[int](language.types.integer.md) `$mask` = **`null`**): [int](language.types.integer.md)

**umask()** modifica o umask do PHP para a
`mask` & 0777 e retorna o umask
antigo. Quando o PHP está sendo usado como um módulo de servidor, o umask
é restaurado ao final de cada requisição.

### Parâmetros

`mask`
:   A nova máscara.

### Valor Retornado

Se `mask` for **`null`**, **umask()**
simplesmente retorna a umask atual senão a umask antiga é retornada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `mask` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo da **umask()****

```
<?php
$umaskAntigo = umask(0);
chmod("/caminho/diretorio/arquivo.txt", 0755);
umask($umaskAntigo);

// Checking
if ($umaskAntigo != umask()) {
    die('Ocorreu um erro ao voltar para o umask antigo');
}
?>
```

### Notas

> **Nota**:
>
> Evite usar esta função em servidores web multithreaded. É melhor modificar
> as permissões do arquivo com [chmod()](function.chmod.md) depois
> de criar o arquivo. Usando **umask()** pode levar a
> comportamento inesperado de scripts executados concorrentemente e do próprio
> webserver porque todos eles usam a mesma umask.

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
