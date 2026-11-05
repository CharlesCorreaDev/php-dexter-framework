# Implementação padrão para __autoload()

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.spl-autoload.php

---

# spl\_autoload

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

spl\_autoload — Implementação padrão para \_\_autoload()

### Descrição

function **spl\_autoload**([string](language.types.string.md) `$class`, [?](language.types.null.md)[string](language.types.string.md) `$file_extensions` = **`null`**): [void](language.types.void.md)

Esta função destina-se a ser usada como uma implementação padrão para
[\_\_autoload()](function.autoload.md). Se nada mais for especificado e
[spl\_autoload\_register()](function.spl-autoload-register.md) for
chamado sem quaisquer parâmetros, então **spl\_autoload()** será usada para qualquer
chamada posterior a [\_\_autoload()](function.autoload.md).

### Parâmetros

`class`
:   O nome da classe sendo instanciada.
    Ao chamar a função, o nome da classe com o namespace é passado ao parâmetro.
    O parâmetro `class` não conterá a barra invertida inicial de um identificador completamente qualificado.

`file_extensions`
:   Por padrão, a função verifica todos os caminhos de inclusão definidos em [include\_path](ini.core.md#ini.include-path)
    procurando por nomes de arquivo construídos pelo nome da classe em minúsculas seguidos pelas
    extensões de arquivo `.inc` e `.php`.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Lança [LogicException](class.logicexception.md) quando a classe não é encontrada
e não há outros carregadores automáticos registrados.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `file_extensions` é anulável agora. |

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
