# Registro de Alterações

> **Fonte / Source:** https://www.php.net/manual/pt_BR/changelog.misc.php

---

# Registro de Alterações

As alterações a seguir foram feitas em
classes/funções/métodos desta extensão.

| Version | Function | Description |
| --- | --- | --- |
| 8.4.0 | [exit](function.exit.md) | exit agora é uma função verdadeira, portanto segue a conversão automática de tipos usual, é afetada pela declaração strict\_types, pode ser chamada com argumentos nomeados, e pode ser uma função variável. |
|  | [exit](function.exit.md) | Uma chamada a exit sem parâmetros de dentro de funções de desligamento ou de destrutores de objetos agora redefine o código de saída para 0; anteriormente, o código de saída definido por uma chamada anterior de exit era mantido. |
|  | [highlight\_string](function.highlight-string.md) | O tipo de retorno foi alterado de stringbool para stringtrue. |
| 8.3.0 | [highlight\_file](function.highlight-file.md) | O HTML resultante foi alterado. |
|  | [highlight\_string](function.highlight-string.md) | O HTML resultante foi alterado. |
| 8.1.0 | [define](function.define.md) | value agora pode ser um objeto. |
| 8.0.0 | [constant](function.constant.md) | Se a constante não estiver definida, constant agora lança uma exceção Error; anteriormente um E\_WARNING era gerado e null era retornado. |
|  | [define](function.define.md) | Passar true para case\_insensitive agora emite um E\_WARNING. Passar false ainda é permitido. |
|  | [ignore\_user\_abort](function.ignore-user-abort.md) | enable agora pode ser nulo. |
|  | [pack](function.pack.md) | Esta função não mais retorna false em caso de falha. |
|  | [sapi\_windows\_vt100\_support](function.sapi-windows-vt100-support.md) | enable agora pode ser nulo. |
|  | [sleep](function.sleep.md) | A função lança um ValueError para valores negativos de seconds; anteriormente, um E\_WARNING era emitido, e a função retornava false. |
| 7.3.0 | [define](function.define.md) | case\_insensitive foi descontinuado e será removido na versão 8.0.0. |
| 7.2.0 | [pack](function.pack.md) | Tipos float e double suportam tanto Big Endian quanto Little Endian. |
|  | [unpack](function.unpack.md) | Tipos float e double suportam Big Endian e Little Endian. |
| 7.1.1 | [pack](function.pack.md) | Os códigos "e", "E", "g" e "G" foram adicionados para habilitar suporte a ordem de byte para float e double. |
| 7.1.0 | [unpack](function.unpack.md) | O parâmetro opcional offset foi adicionado. |
| 7.0.15 | [pack](function.pack.md) | Os códigos "e", "E", "g" e "G" foram adicionados para habilitar suporte a ordem de byte para float e double. |

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
