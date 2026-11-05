# Lê entrada do manipulador do diretório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.readdir.php

---

# readdir

(PHP 4, PHP 5, PHP 7, PHP 8)

readdir — Lê entrada do manipulador do diretório

### Descrição

function **readdir**([?](language.types.null.md)[resource](language.types.resource.md) `$dir_handle` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna o nome da próxima entrada do diretório.
As entradas são retornadas na ordem em que estão armazenadas no
sistema de arquivos.

### Parâmetros

`dir_handle`
:   O manipulador de diretório do tipo [resource](language.types.resource.md) previamente aberto
    por [opendir()](function.opendir.md).
    Se `dir_handle` for **`null`**, o último manipulador aberto
    por [opendir()](function.opendir.md) será usado.

### Valor Retornado

Retorna o nome do arquivo em caso de sucesso, ou **`false`** em caso de falha.

**Aviso**

Esta função pode
retornar o valor booleano **`false`**, mas também pode retornar um valor não booleano que pode ser
avaliado como **`false`**. Leia a seção sobre [Booleanos](language.types.boolean.md) para mais
informações. Use o [operador
===](language.operators.comparison.md) para testar o valor retornado por esta
função.

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
- [rewinddir()](function.rewinddir.md) - Retroceder o manipulador de diretório
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
