# Libera um bloqueio exclusivo em uma determinada chave

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.wincache-unlock.php

---

# wincache\_unlock

(PECL wincache >= 1.1.0)

wincache\_unlock — 
Libera um bloqueio exclusivo em uma determinada chave

### Descrição

function **wincache\_unlock**([string](language.types.string.md) `$key`): [bool](language.types.boolean.md)

Libera um bloqueio exclusivo obtido em uma determinada chave usando [wincache\_lock()](function.wincache-lock.md).
Se qualquer outro processo estiver bloqueado aguardando o bloqueio nesta chave, esse processo poderá obter
o bloqueio.

**Aviso**

O uso de [wincache\_lock()](function.wincache-lock.md) e **wincache\_unlock()** pode causar impasses ao
executar scripts PHP em um ambiente multiprocesso como o FastCGI. Não use essas funções a menos que
tenha absoluta certeza de que precisa usá-las. Para a maioria das operações no cache do usuário, não é necessário
usar essas funções.

### Parâmetros

`key`
:   Nome da chave no cache para liberar o bloqueio.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Usando **wincache\_unlock()****

```
<?php
$fp = fopen("/tmp/lock.txt", "r+");
if (wincache_lock(“lock_txt_lock”)) { // faz um bloqueio exclusivo
    ftruncate($fp, 0); // trunca o arquivo
    fwrite($fp, "Escreva algo aqui\n");
    wincache_unlock(“lock_txt_lock”); // libera o bloqueio
} else {
    echo "Não foi possível obter o bloqueio!";
}
fclose($fp);
?>
```

### Veja também

- [wincache\_lock()](function.wincache-lock.md) - Adquire um bloqueio exclusivo em uma determinada chave
- [wincache\_ucache\_set()](function.wincache-ucache-set.md) - Adiciona uma variável no cache do usuário e substitui uma variável se ela já existir no cache
- [wincache\_ucache\_get()](function.wincache-ucache-get.md) - Obtém uma variável armazenada no cache do usuário
- [wincache\_ucache\_delete()](function.wincache-ucache-delete.md) - Exclui variáveis ​​do cache do usuário
- [wincache\_ucache\_clear()](function.wincache-ucache-clear.md) - Exclui todo o conteúdo do cache do usuário
- [wincache\_ucache\_exists()](function.wincache-ucache-exists.md) - Verifica se uma variável existe no cache do usuário
- [wincache\_ucache\_meminfo()](function.wincache-ucache-meminfo.md) - Recupera informações sobre o uso da memória cache do usuário
- [wincache\_ucache\_info()](function.wincache-ucache-info.md) - Recupera informações sobre dados armazenados no cache do usuário
- [wincache\_scache\_info()](function.wincache-scache-info.md) - Recupera informações sobre arquivos armazenados em cache no cache de sessão

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
