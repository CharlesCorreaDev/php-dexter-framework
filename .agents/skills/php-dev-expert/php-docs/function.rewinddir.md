# Retroceder o manipulador de diretório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rewinddir.php

---

# rewinddir

(PHP 4, PHP 5, PHP 7, PHP 8)

rewinddir — Retroceder o manipulador de diretório

### Descrição

function **rewinddir**([?](language.types.null.md)[resource](language.types.resource.md) `$dir_handle` = **`null`**): [void](language.types.void.md)

Reinicia o fluxo do diretório indicado por `dir_handle`
para o início do diretório.

### Parâmetros

`dir_handle`
:   O manipulador de diretório do tipo [resource](language.types.resource.md) previamente aberto
    por [opendir()](function.opendir.md).
    Se `dir_handle` for **`null`**, o último manipulador aberto
    por [opendir()](function.opendir.md) será usado.

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Usar **`null`** para `dir_handle` foi descontinuado. Em vez disso, o manipulador do último diretório aberto deve ser fornecido explicitamente. |
| 8.0.0 | `dir_handle` agora pode ser nulo. |

### Examples

Para um exemplo completo, consulte a documentação de
[opendir()](function.opendir.md).

### Veja também

- [opendir()](function.opendir.md) - Abre um manipulador de diretório
- [readdir()](function.readdir.md) - Lê entrada do manipulador do diretório
- [closedir()](function.closedir.md) - Fecha o manipulador do diretório
- [dir()](function.dir.md) - Retorna uma instância da classe Directory
- [is\_dir()](function.is-dir.md) - Diz se o caminho é um diretório
- [glob()](function.glob.md) - Encontra caminhos que combinam com uma expressão
- [scandir()](function.scandir.md) - Lista arquivos e diretórios dentro do caminho especificado

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
