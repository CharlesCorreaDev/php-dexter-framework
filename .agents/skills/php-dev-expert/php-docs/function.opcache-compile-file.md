# Compila e armazena em cache um script PHP sem executá-lo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.opcache-compile-file.php

---

# opcache\_compile\_file

(PHP 5 >= 5.5.5, PHP 7, PHP 8, PECL ZendOpcache > 7.0.2)

opcache\_compile\_file — Compila e armazena em cache um script PHP sem executá-lo

### Descrição

function **opcache\_compile\_file**([string](language.types.string.md) `$filename`): [bool](language.types.boolean.md)

Esta função compila um script PHP e o adiciona ao cache opcode
sem executá-lo. Isso pode ser usado para preparar o cache após a reinicialização de um servidor da Web,
armazenando previamente em cache os arquivos que serão incluídos em solicitações posteriores.

### Parâmetros

`filename`
:   O caminho para o script PHP a ser compilado.

### Valor Retornado

Retorna **`true`** se `filename` foi compilado com sucesso
ou **`false`** em caso de falha.

### Erros/Exceções

Se `filename` não puder ser carregado ou compilado, um erro de
nível **`E_WARNING`** será gerado. Você pode usar
[@](language.operators.errorcontrol.md) para suprimir este
aviso.

### Veja também

- [opcache\_invalidate()](function.opcache-invalidate.md) - Invalida um script em cache

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
