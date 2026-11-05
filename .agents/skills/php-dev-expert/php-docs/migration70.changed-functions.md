# Funções alteradas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration70.changed-functions.php

---

## Funções alteradas

### Núcleo do PHP

- [debug\_zval\_dump()](function.debug-zval-dump.md) agora imprime "int" ao invés de "long"
  e "float" ao invés de "double".
- [dirname()](function.dirname.md) agora opcionalmente recebe um segundo parâmetro,
  `depth`, para obter o nome do diretório
  `depth` níveis acima do diretório atual.
- [getrusage()](function.getrusage.md) agora é suportada no Windows.
- As funções [mktime()](function.mktime.md) e [gmmktime()](function.gmmktime.md)
  não aceitam mais o parâmetro `is_dst` (é horário de verão).
- A função [preg\_replace()](function.preg-replace.md) não suporta mais o modificador
  "\e" (**`PREG_REPLACE_EVAL`**). Em vez disso, a função [preg\_replace\_callback()](function.preg-replace-callback.md)
  deve ser usada.
- A função [setlocale()](function.setlocale.md) não aceita mais o parâmetro `category`
  passado como string. Em vez disso, as constantes **`LC_*`** devem ser usadas.
- As funções [exec()](function.exec.md), [system()](function.system.md) e [passthru()](function.passthru.md)
  agora possuem proteção contra bytes nulos.
- A função [shmop\_open()](function.shmop-open.md) agora retorna um recurso ao invés de um inteiro,
  que deve ser passado para as funções [shmop\_size()](function.shmop-size.md),
  [shmop\_write()](function.shmop-write.md), [shmop\_read()](function.shmop-read.md),
  [shmop\_close()](function.shmop-close.md) e [shmop\_delete()](function.shmop-delete.md).
- As funções [substr()](function.substr.md) e [iconv\_substr()](function.iconv-substr.md) agora retornam uma string vazia
  caso o comprimento do parâmetro string seja igual ao valor do parâmetro start.
- [xml\_parser\_free()](function.xml-parser-free.md) não é mais suficiente para liberar o
  recurso parser, se ele faz referência a um objeto e este objeto faz referência a esse
  recurso parser. Neste caso, é necessário, adicionalmente, indeterminar o $parser.

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
